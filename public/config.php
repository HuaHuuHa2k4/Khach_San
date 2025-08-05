<?php
// Nếu chạy XAMPP local, gán giá trị trực tiếp
$host = 'localhost';
$user = 'root';
$pass = '';  // Mặc định XAMPP không có mật khẩu
$db   = 'khachsan';

// Khi deploy Docker hoặc Render, đọc từ biến môi trường
if (getenv("DB_HOST")) {
    $host = getenv("DB_HOST");
    $user = getenv("DB_USER");
    $pass = getenv("DB_PASSWORD");
    $db   = getenv("DB_NAME");
}

$conn = new mysqli($host, $user, $pass, $db);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

?>
