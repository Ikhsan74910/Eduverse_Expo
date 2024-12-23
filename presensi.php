<?php
// File: presensi.php
session_start();
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    header('Content-Type: application/json');
    
    $host = "localhost";
    $username = "root";
    $password = "";
    $database = "eduverse2";

    $conn = new mysqli($host, $username, $password, $database);

    if ($conn->connect_error) {
        die(json_encode(['status' => 'error', 'message' => "Koneksi gagal: " . $conn->connect_error]));
    }

    // Menyimpan kode presensi ke database
    if (isset($_POST['generate_kode'])) {
        $mataKuliah = $conn->real_escape_string($_POST['mataKuliah']);
        $pertemuan = $conn->real_escape_string($_POST['pertemuan']);
        $tanggal = $conn->real_escape_string($_POST['tanggal']);
        $kelas = $conn->real_escape_string($_POST['kelas']);
        $kode = mt_rand(100000, 999999);
        
        $query = "INSERT INTO presensi_sesi (kode, mata_kuliah, pertemuan, tanggal, kelas) 
                VALUES ('$kode', '$mataKuliah', '$pertemuan', '$tanggal', '$kelas')";
        
        if ($conn->query($query)) {
            echo json_encode(['status' => 'success', 'kode' => $kode]);
        } else {
            echo json_encode(['status' => 'error', 'message' => $conn->error]);
        }
        exit;
    }

    // Update status kehadiran
    if (isset($_POST['update_status'])) {
        $nim = $conn->real_escape_string($_POST['nim']);
        $nama = $conn->real_escape_string($_POST['nama']);
        $status = $conn->real_escape_string($_POST['status']);
        $kode_presensi = $conn->real_escape_string($_POST['kode_presensi']);
        
        $query = "INSERT INTO presensi_detail (nim, nama, kode_presensi, status) 
                VALUES ('$nim', '$nama', '$kode_presensi', '$status')
                ON DUPLICATE KEY UPDATE status = '$status', nama = '$nama'";
        
        if ($conn->query($query)) {
            echo json_encode(['status' => 'success']);
        } else {
            echo json_encode(['status' => 'error', 'message' => $conn->error]);
        }
        exit;
    }

    $conn->close();
    exit;
}
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistem Presensi Mahasiswa</title>
    <link rel="stylesheet" href="css/presensi.css">
</head>
<body>
    <div class="container">
        <h1>Sistem Presensi Mahasiswa</h1>
        
        <form id="presensiForm">
            <div class="form-group">
                <label for="mataKuliah">Mata Kuliah:</label>
                <input type="text" id="mataKuliah" name="mataKuliah" required>
            </div>
            <div class="form-group">
                <label for="kelas">Kelas:</label>
                <select id="kelas" name="kelas" required>
                    <option value="">Pilih Kelas</option>
                    <option value="A">A</option>
                    <option value="B">B</option>
                    <option value="C">C</option>
                    <option value="D">D</option>
                </select>
            </div>
            <div class="form-group">
                <label for="pertemuan">Pertemuan Ke-:</label>
                <select id="pertemuan" name="pertemuan" required>
                    <?php for($i = 1; $i <= 14; $i++): ?>
                        <option value="<?= $i ?>"><?= $i ?></option>
                    <?php endfor; ?>
                </select>
            </div>
            <div class="form-group">
                <label for="tanggal">Tanggal:</label>
                <input type="date" id="tanggal" name="tanggal" required>
            </div>
            <button type="submit" class="submit-btn">Generate Kode Presensi</button>
        </form>

        <div id="kodePresensi" class="kode-display">
            Kode akan muncul di sini
        </div>

        <h2>Daftar Hadir Mahasiswa</h2>
        <table id="tabelMahasiswa">
            <thead>
                <tr>
                    <th>No</th>
                    <th>NIM</th>
                    <th>Nama Mahasiswa</th>
                    <th>Status Kehadiran</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody id="daftarMahasiswa">
            </tbody>
        </table>
    </div>

    <script>
        let currentKode = '';
        
        document.getElementById('presensiForm').addEventListener('submit', function(e) {
            e.preventDefault();
            const formData = new FormData(this);
            formData.append('generate_kode', true);
            
            fetch('presensi.php', {
                method: 'POST',
                body: formData
            })
            .then(response => response.json())
            .then(data => {
                if(data.status === 'success') {
                    currentKode = data.kode;
                    document.getElementById('kodePresensi').textContent = currentKode;
                    loadMahasiswa();
                } else {
                    alert('Error: ' + data.message);
                }
            })
            .catch(error => {
                console.error('Error:', error);
                alert('Terjadi kesalahan saat memproses permintaan');
            });
        });

        function loadMahasiswa() {
            const kelas = document.getElementById('kelas').value;
            
            fetch(`get_mahasiswa.php?kelas=${encodeURIComponent(kelas)}`)
            .then(response => response.json())
            .then(data => {
                if(data.error) {
                    throw new Error(data.error);
                }
                
                const tbody = document.getElementById('daftarMahasiswa');
                tbody.innerHTML = '';
                
                data.forEach((mahasiswa, index) => {
                    const row = document.createElement('tr');
                    row.innerHTML = `
                        <td>${index + 1}</td>
                        <td>${mahasiswa.nim}</td>
                        <td data-nama="${mahasiswa.username}">${mahasiswa.username}</td>
                        <td>
                            <select class="status-select" id="status-${mahasiswa.nim}">
                                <option value="Menunggu">Menunggu</option>
                                <option value="Hadir">Hadir</option>
                                <option value="Tidak Hadir">Tidak Hadir</option>
                            </select>
                        </td>
                        <td>
                            <button onclick="updateStatus('${mahasiswa.nim}')" class="action-btn">Update</button>
                        </td>
                    `;
                    tbody.appendChild(row);
                });
            })
            .catch(error => {
                console.error('Error:', error);
                alert('Error loading students: ' + error.message);
            });
        }

        function updateStatus(nim) {
            if (!currentKode) {
                alert('Silakan generate kode presensi terlebih dahulu!');
                return;
            }

            const row = document.querySelector(`tr td[data-nama]`);
            const nama = row ? row.getAttribute('data-nama') : '';
            const status = document.getElementById(`status-${nim}`).value;
            
            const formData = new FormData();
            formData.append('update_status', true);
            formData.append('nim', nim);
            formData.append('nama', nama);
            formData.append('status', status);
            formData.append('kode_presensi', currentKode);
            
            fetch('presensi.php', {
                method: 'POST',
                body: formData
            })
            .then(response => response.json())
            .then(data => {
                if(data.status === 'success') {
                    alert('Status kehadiran berhasil diupdate!');
                } else {
                    alert('Error: ' + data.message);
                }
            })
            .catch(error => {
                console.error('Error:', error);
                alert('Terjadi kesalahan saat mengupdate status');
            });
        }
    </script>
</body>
</html>