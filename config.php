<?php
$host = "localhost";
$user = "root";      // user mặc định của XAMPP
$pass = "";          // pass mặc định (rỗng)
$dbname = "khachsan";

$conn = new mysqli($host, $user, $pass, $dbname);

if ($conn->connect_error) {
    die("Kết nối thất bại: " . $conn->connect_error);
}

$conn->set_charset("utf8mb4");
?>
