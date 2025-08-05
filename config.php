<?php
// Thiết lập mặc định (dành cho local)
$host = 'db'; // Docker dùng tên service
$user = 'root';
$pass = 'root';
$db   = 'khachsan';

// Nếu đang chạy trên local (VD: XAMPP), thì sửa lại host
if (!getenv("RENDER")) {
    $host = 'localhost';
}

// Nếu dùng biến môi trường (Render sẽ tự truyền)
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
