<?php
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

$user = getenv('DB_USER') ?: 'root';
$pass = getenv('DB_PASS') ?: '';              // XAMPP mặc định rỗng
$name = getenv('DB_NAME') ?: 'khachsan';
$port = (int)(getenv('DB_PORT') ?: 3306);

// Nếu có DB_HOST thì dùng, nếu không: nếu hostname 'db' resolve được thì dùng 'db' (Docker), ngược lại dùng 127.0.0.1 (XAMPP)
$host = getenv('DB_HOST');
if (!$host) {
    $host = (gethostbyname('db') !== 'db') ? 'db' : '127.0.0.1';
}

$conn = new mysqli($host, $user, $pass, $name, $port);
$conn->set_charset('utf8mb4');
