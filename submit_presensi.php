<?php
session_start();
header('Content-Type: application/json');

// Database connection
$host = "localhost";
$username = "root";
$password = "";
$database = "eduverse";

$conn = new mysqli($host, $username, $password, $database);

if ($conn->connect_error) {
    die(json_encode(['status' => 'error', 'message' => "Connection failed: " . $conn->connect_error]));
}

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['validate_code'])) {
    $kode = $conn->real_escape_string($_POST['kode_presensi']);
    $nim = $conn->real_escape_string($_POST['nim']);
    
    // Get nama from users table
    $nameQuery = "SELECT username FROM users WHERE nim = '$nim' LIMIT 1";
    $nameResult = $conn->query($nameQuery);
    $nama = '';
    
    if ($nameResult && $nameResult->num_rows > 0) {
        $userData = $nameResult->fetch_assoc();
        $nama = $userData['username'];
    }
    
    // Check if code exists and is valid
    $query = "SELECT * FROM presensi_sesi WHERE kode = '$kode'";
    $result = $conn->query($query);
    
    if ($result->num_rows > 0) {
        // Check if student hasn't already submitted attendance
        $checkQuery = "SELECT * FROM presensi_detail 
                      WHERE nim = '$nim' AND kode_presensi = '$kode'";
        $checkResult = $conn->query($checkQuery);
        
        if ($checkResult->num_rows > 0) {
            echo json_encode(['status' => 'error', 
                            'message' => 'Anda sudah melakukan presensi untuk sesi ini']);
        } else {
            // Mark student as present with nama
            $updateQuery = "INSERT INTO presensi_detail (nim, nama, kode_presensi, status) 
                          VALUES ('$nim', '$nama', '$kode', 'Hadir')";
            
            if ($conn->query($updateQuery)) {
                echo json_encode(['status' => 'success']);
            } else {
                echo json_encode(['status' => 'error', 
                                'message' => 'Gagal mencatat presensi']);
            }
        }
    } else {
        echo json_encode(['status' => 'error', 
                        'message' => 'Kode presensi tidak valid']);
    }
} else {
    echo json_encode(['status' => 'error', 
                     'message' => 'Invalid request method']);
}

$conn->close();