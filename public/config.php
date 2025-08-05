<?php
$host = getenv("DB_HOST");   // Đây là tên host từ biến môi trường
$user = "root";             // Tài khoản bạn đã setup trong MySQL container
$pass = "";          // Mật khẩu bạn đã setup
$db   = "khachsan";          // Tên database

$conn = new mysqli($host, $user, $pass, $db);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
