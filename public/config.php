<?php
// Thiết lập mặc định (cho Docker/Render)
$host = 'db'; // Docker sử dụng tên service
$user = 'root';
$pass = 'root';
$db   = 'khachsan';

// Nếu đang chạy LOCAL (VD: XAMPP), thì dùng cấu hình local
if (!getenv("RENDER")) {
    $host = 'localhost';
    $user = 'root';
    $pass = ''; // ❗️XAMPP mặc định root không có password
    $db   = 'khachsan';
}

// Nếu có biến môi trường (Render), override lại
if (getenv("DB_HOST")) {
    $host = getenv("DB_HOST");
    $user = getenv("DB_USER");
    $pass = getenv("DB_PASSWORD");
    $db   = getenv("DB_NAME");
}

// Kết nối MySQL
$conn = new mysqli($host, $user, $pass, $db);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
