<?php
// Koneksi database
$host = "localhost";
$username = "root";
$password = "";
$database = "eduverse"; 

// Membuat koneksi
$conn = new mysqli($host, $username, $password, $database);

// Cek koneksi
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

// Daftar kelas yang tersedia (hanya A-D)
$kelas_tersedia = ["A", "B", "C", "D"];

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Ambil data dari form
    $username = $conn->real_escape_string($_POST['username']);
    $email = $conn->real_escape_string($_POST['email']);
    $nim = $conn->real_escape_string($_POST['nim']);
    
    // Validasi password
    if ($_POST['password'] !== $_POST['konfirmasi_password']) {
        echo "<script>
                alert('Password dan Konfirmasi Password tidak cocok!');
                window.history.back();
              </script>";
        exit();
    }
    
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
    
    // Pilih kelas secara acak
    $kelas = $kelas_tersedia[array_rand($kelas_tersedia)];
    
    // Query untuk memeriksa apakah email atau NIM sudah terdaftar
    $cek_duplikat = "SELECT * FROM users WHERE email = '$email' OR nim = '$nim'";
    $result = $conn->query($cek_duplikat);
    
    if ($result->num_rows > 0) {
        echo "<script>
                alert('Email atau NIM sudah terdaftar!');
                window.history.back();
              </script>";
        exit();
    } else {
        // Query untuk mendaftarkan user baru
        $query = "INSERT INTO users (username, email, password, nim, kelas) VALUES ('$username', '$email', '$password', '$nim', '$kelas')";
        
        if ($conn->query($query) === TRUE) {
            // Redirect ke login.php setelah pendaftaran berhasil
            echo "<script>
                    window.location.href = 'login.php';
                  </script>";
            exit();
        } else {
            echo "Error: " . $query . "<br>" . $conn->error;
        }
    }
}

$conn->close();
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Registrasi</title>
    <link rel="stylesheet" href="css/login.css">
</head>
<body>
    <div class="login-container">
        <img class="login-image" src="images/logoeduverse-removebg-preview.png" alt="Eduverse Logo">
        <h2>Registrasi</h2>
        <form id="form_registrasi" action="" method="post">
            <label for="username">Username:</label>
            <input type="text" id="username" name="username" required>
            
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>

            <label for="nim">NIM:</label>
            <input type="text" id="nim" name="nim" pattern="[0-9]*" required>

            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required>

            <label for="konfirmasi_password">Konfirmasi Password:</label>
            <input type="password" id="konfirmasi_password" name="konfirmasi_password" required>
            
            <button type="submit" class="login-button">Registrasi</button>
        </form>
        <p class="register-link">Sudah punya akun? <a href="login.php">Login</a></p>
    </div>
</body>
</html>