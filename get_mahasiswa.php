<?php
// File: get_mahasiswa.php
session_start();
header('Content-Type: application/json');

$host = "localhost";
$username = "root";
$password = "";
$database = "eduverse";

$conn = new mysqli($host, $username, $password, $database);

if ($conn->connect_error) {
    die(json_encode(['error' => "Koneksi gagal: " . $conn->connect_error]));
}

if (isset($_GET['kelas'])) {
    $kelas = $conn->real_escape_string($_GET['kelas']);
    
    $query = "SELECT nim, username FROM users WHERE kelas = '$kelas' ORDER BY nim";
    $result = $conn->query($query);
    
    $mahasiswa = [];
    if ($result) {
        while ($row = $result->fetch_assoc()) {
            $mahasiswa[] = $row;
        }
        echo json_encode($mahasiswa);
    } else {
        echo json_encode(['error' => $conn->error]);
    }
}

$conn->close();
?>