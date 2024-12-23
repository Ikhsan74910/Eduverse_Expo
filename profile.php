<?php
session_start();

// Redirect if not logged in
if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit();
}

// Database connection
$host = "localhost";
$username = "root";
$password = "";
$database = "eduverse";

$conn = new mysqli($host, $username, $password, $database);

if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

$user_id = $_SESSION['user_id'];
$success_message = "";
$error_message = "";

// Fetch current user data
$query = "SELECT * FROM users WHERE id = ?";
$stmt = $conn->prepare($query);
$stmt->bind_param("i", $user_id);
$stmt->execute();
$result = $stmt->get_result();
$user_data = $result->fetch_assoc();

// Handle form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $new_username = $conn->real_escape_string($_POST['username']);
    $new_email = $conn->real_escape_string($_POST['email']);
    $current_password = $_POST['current_password'];
    $new_password = $_POST['new_password'];
    $confirm_password = $_POST['confirm_password'];

    // Verify current password
    if (!empty($current_password)) {
        if (password_verify($current_password, $user_data['password'])) {
            // Check if user wants to change password
            if (!empty($new_password)) {
                if ($new_password === $confirm_password) {
                    $hashed_password = password_hash($new_password, PASSWORD_DEFAULT);
                    $update_query = "UPDATE users SET username = ?, email = ?, password = ? WHERE id = ?";
                    $stmt = $conn->prepare($update_query);
                    $stmt->bind_param("sssi", $new_username, $new_email, $hashed_password, $user_id);
                } else {
                    $error_message = "Password baru dan konfirmasi password tidak cocok!";
                }
            } else {
                $update_query = "UPDATE users SET username = ?, email = ? WHERE id = ?";
                $stmt = $conn->prepare($update_query);
                $stmt->bind_param("ssi", $new_username, $new_email, $user_id);
            }

            if (isset($stmt) && $stmt->execute()) {
                // Destroy session and redirect to login
                session_destroy();
                echo "<script>
                        alert('Profil berhasil diperbarui! Silakan login kembali.');
                        window.location.href = 'login.php';
                      </script>";
                exit();
            } else {
                $error_message = "Gagal memperbarui profil!";
            }
        } else {
            $error_message = "Password saat ini tidak valid!";
        }
    } else {
        $error_message = "Masukkan password saat ini untuk melakukan perubahan!";
    }
}

$conn->close();
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profil Saya</title>
    <link rel="stylesheet" href="css/login.css">
    <style>
        .profile-container {
            max-width: 600px;
            margin: 20px auto;
            padding: 20px;
            background: white;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }
        .message {
            padding: 10px;
            margin-bottom: 20px;
            border-radius: 4px;
        }
        .success {
            background-color: #d4edda;
            color: #155724;
            border: 1px solid #c3e6cb;
        }
        .error {
            background-color: #f8d7da;
            color: #721c24;
            border: 1px solid #f5c6cb;
        }
        .readonly-field {
            background-color: #e9ecef;
            cursor: not-allowed;
        }
    </style>
</head>
<body>
    <div class="profile-container">
        <h2>Profil Saya</h2>
        
        <?php if ($success_message): ?>
            <div class="message success"><?php echo $success_message; ?></div>
        <?php endif; ?>
        
        <?php if ($error_message): ?>
            <div class="message error"><?php echo $error_message; ?></div>
        <?php endif; ?>

        <form action="" method="post">
            <label for="username">Username:</label>
            <input type="text" id="username" name="username" value="<?php echo htmlspecialchars($user_data['username']); ?>" required>
            
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" value="<?php echo htmlspecialchars($user_data['email']); ?>" required>
            
            <label for="nim">NIM:</label>
            <input type="text" id="nim" value="<?php echo htmlspecialchars($user_data['nim']); ?>" class="readonly-field" readonly>
            
            <label for="kelas">Kelas:</label>
            <input type="text" id="kelas" value="<?php echo htmlspecialchars($user_data['kelas']); ?>" class="readonly-field" readonly>
            
            <label for="current_password">Password Saat Ini:</label>
            <input type="password" id="current_password" name="current_password" required>
            
            <label for="new_password">Password Baru (kosongkan jika tidak ingin mengubah):</label>
            <input type="password" id="new_password" name="new_password">
            
            <label for="confirm_password">Konfirmasi Password Baru:</label>
            <input type="password" id="confirm_password" name="confirm_password">
            
            <button type="submit" class="login-button">Simpan Perubahan</button>
        </form>
        
        <p class="register-link"><a href="index.php">Kembali ke Beranda</a></p>
    </div>
</body>
</html>