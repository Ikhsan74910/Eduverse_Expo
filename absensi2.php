<?php
session_start();
// Cek jika user belum login
if (!isset($_SESSION['nim'])) {
    header("Location: login.php");
    exit;
}

// Database connection
$host = "localhost";
$username = "root";
$password = "";
$database = "eduverse2";

$conn = new mysqli($host, $username, $password, $database);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Ambil data mahasiswa yang login
$nim = $_SESSION['nim'];
$query = "SELECT * FROM users WHERE nim = '$nim'";
$result = $conn->query($query);
$user = $result->fetch_assoc();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Absensi</title>
    <link rel="icon" type="image/x-icon" href="logoeduverse-icon-removebg-preview.png">
    <link rel="stylesheet" href="css/absensi2.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="card">
                    <div class="card-header">
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="user-profile">
                                <h5 class="mb-0">Welcome, <?php echo htmlspecialchars($user['username']); ?></h5>
                                <small class="text-muted">NIM: <?php echo htmlspecialchars($user['nim']); ?></small>
                            </div>
                            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#kodeModal">
                                Input kode
                            </button>
                        </div>
                        <ul class="nav nav-tabs card-header-tabs mt-3">
                            <li class="nav-item">
                                <a class="nav-link active" href="#">Absensi</a>
                            </li>
                        </ul>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-hover">
                                <thead>
                                    <tr>
                                        <th scope="col">No.</th>
                                        <th scope="col">Mata kuliah</th>
                                        <th scope="col">Kelas</th>
                                        <th scope="col">Prosentase kehadiran</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>Pengembangan Aplikasi Berbasis Web</td>
                                        <td>D</td>
                                        <td><?php
                                            // Hitung persentase kehadiran
                                            $queryHadir = "SELECT COUNT(*) as total FROM presensi_detail 
                                                         WHERE nim = '$nim' AND status = 'Hadir'";
                                            $resultHadir = $conn->query($queryHadir);
                                            $totalHadir = $resultHadir->fetch_assoc()['total'];
                                            
                                            // Hitung total pertemuan
                                            $queryTotal = "SELECT COUNT(DISTINCT kode) as total FROM presensi_sesi";
                                            $resultTotal = $conn->query($queryTotal);
                                            $totalPertemuan = $resultTotal->fetch_assoc()['total'];
                                            
                                            $persentase = $totalPertemuan > 0 ? 
                                                         round(($totalHadir / $totalPertemuan) * 100) : 0;
                                            echo $persentase . '%';
                                        ?></td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>Pendidikan Kewarganegaraan</td>
                                        <td>D</td>
                                        <td>100%</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="kodeModal" tabindex="-1" aria-labelledby="kodeModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="kodeModalLabel">Input Kode Presensi</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form id="presensiForm">
                        <div class="mb-3">
                            <label for="kodePresensi" class="form-label">Kode Presensi</label>
                            <input type="text" class="form-control" id="kodePresensi" maxlength="6" required>
                        </div>
                        <div id="alertMessage" class="alert" style="display: none;"></div>
                        <button type="submit" class="btn btn-primary w-100">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        const userNim = "<?php echo $_SESSION['nim']; ?>";
    </script>
    <script src="js/absensi.js"></script>
</body>
</html>

<?php
$conn->close();
?>