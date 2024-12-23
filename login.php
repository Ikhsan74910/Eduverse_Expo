<?php
session_start();

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

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $conn->real_escape_string($_POST['username']);
    $password = $_POST['password'];
    
    // Query untuk memeriksa user
    $query = "SELECT * FROM users WHERE username = '$username'";
    $result = $conn->query($query);
    
    if ($result->num_rows == 1) {
        $user = $result->fetch_assoc();
        
        // Verifikasi password
        if (password_verify($password, $user['password'])) {
            // Login berhasil
            $_SESSION['user_id'] = $user['id'];
            $_SESSION['username'] = $user['username'];
            $_SESSION['kelas'] = $user['kelas'];
            $_SESSION['nim'] = $user['nim'];
            $_SESSION['email'] = $user['email'];
            
            // Redirect ke index.php
            header("Location: index.php");
            exit();
        } else {
            // Password salah
            echo "<script>
                    alert('Password salah!');
                    window.location.href = 'login.php';
                  </script>";
            exit();
        }
    } else {
        // Username tidak ditemukan
        echo "<script>
                alert('Username tidak ditemukan!');
                window.location.href = 'login.php';
              </script>";
        exit();
    }
}

$conn->close();
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Login</title>
    <link rel="stylesheet" href="css/login.css">
</head>
<body>
    <div class="login-container">
        <img class="login-image" src="images/logoeduverse-removebg-preview.png" alt="Eduverse Logo">
        <h2>Login</h2>
        <form id="form_login" action="" method="post">
            <label for="username">Username:</label>
            <input type="text" id="username" name="username" required>
            
            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required>
            
            <button type="submit" class="login-button" id="TombolLogin">Login</button>
        </form>
        <p class="register-link">Belum punya akun? <a href="register.php">Registrasi</a></p>
    </div>
    <script src="login.js"></script>
</body>
</html>