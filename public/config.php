<?php
// Đọc từ biến môi trường, hoặc fallback mặc định
$host = getenv("DB_HOST") ?: "localhost";
$user = getenv("DB_USER") ?: "root";
$pass = getenv("DB_PASSWORD") ?: "";
$db   = getenv("DB_NAME") ?: "khachsan";

// Kết nối CSDL
$conn = new mysqli($host, $user, $pass, $db);

// Kiểm tra lỗi
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
