<?php
// Lấy biến môi trường từ Render Dashboard (hoặc dùng mặc định ở dưới để test)
$host = getenv('DB_HOST') ?: 'dpg-d2m01khr0fns73be82sg-a';
$port = getenv('DB_PORT') ?: 5432;
$db   = getenv('DB_NAME') ?: 'khachsan';
$user = getenv('DB_USER') ?: 'khachsan_user';
$pass = getenv('DB_PASS') ?: 'OAs8nJLYoLptkgCj2dEffmzP3QZ8MnkC';

try {
    // DSN cho PostgreSQL
    $dsn = "pgsql:host=$host;port=$port;dbname=$db;";

    // Kết nối PDO
    $conn = new PDO($dsn, $user, $pass, [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION, // bật exception
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC, // fetch dạng mảng
    ]);

    // Test: echo "✅ Kết nối PostgreSQL thành công!";
} catch (PDOException $e) {
    die("❌ Lỗi kết nối DB: " . $e->getMessage());
}
