<?php
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

// Nếu có biến môi trường thì lấy, nếu không thì dùng giá trị mặc định phù hợp cho XAMPP
$host = getenv('DB_HOST') ?: 'localhost';
$user = getenv('DB_USER') ?: 'root';
$pass = getenv('DB_PASS') ?: '';
$name = getenv('DB_NAME') ?: 'khachsan';
$port = (int)(getenv('DB_PORT') ?: 3306);

$conn = new mysqli($host, $user, $pass, $name, $port);
$conn->set_charset('utf8mb4');

// Nếu có yêu cầu SSL (khi deploy cloud), còn local thì bỏ qua
if (getenv('DB_SSL') === 'true') {
    $conn->ssl_set(null, null, null, null, null);
    $conn->options(MYSQLI_OPT_SSL_VERIFY_SERVER_CERT, true);
}
?>
