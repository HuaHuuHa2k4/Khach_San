<?php
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT); // để mysqli ném exception
$host = getenv('DB_HOST') ?: 'db';
$user = getenv('DB_USER') ?: 'root';
$pass = getenv('DB_PASS') ?: '';
$name = getenv('DB_NAME') ?: 'khach_san';
$port = (int)(getenv('DB_PORT') ?: 3306);

$conn = new mysqli($host, $user, $pass, $name, $port);
$conn->set_charset('utf8mb4'); // tránh lỗi charset

// Nếu cần SSL (ví dụ PlanetScale), bật theo ENV
if (getenv('DB_SSL') === 'true') {
    $conn->ssl_set(null, null, null, null, null);
    $conn->options(MYSQLI_OPT_SSL_VERIFY_SERVER_CERT, true);
}
