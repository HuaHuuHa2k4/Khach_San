<?php
session_start();
require 'config.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = trim($_POST['username']);
    $email = trim($_POST['email']);
    $password = $_POST['password'];
    $password_confirm = $_POST['password_confirm'];

    if ($password !== $password_confirm) {
        $_SESSION['error'] = "Mật khẩu xác nhận không khớp.";
        header("Location: register.php");
        exit;
    }

    // Kiểm tra username/email đã tồn tại chưa
    $stmt = $conn->prepare("SELECT username, email FROM users WHERE username = ? OR email = ?");
    $stmt->bind_param("ss", $username, $email);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $existing = $result->fetch_assoc();
        if ($existing['username'] === $username) {
            $_SESSION['error'] = "Tên đăng nhập đã được sử dụng. Vui lòng chọn tên khác.";
        } elseif ($existing['email'] === $email) {
            $_SESSION['error'] = "Email đã được sử dụng. Vui lòng chọn email khác.";
        } else {
            $_SESSION['error'] = "Tên đăng nhập hoặc email đã được sử dụng.";
        }
        $stmt->close();
        header("Location: register.php");
        exit;
    }
    $stmt->close();


    // Bỏ phần mã hóa mật khẩu, lưu thẳng mật khẩu
    $password_plain = $password;

    // Thêm người dùng mới
    $stmt = $conn->prepare("INSERT INTO users (username, email, password) VALUES (?, ?, ?)");
    $stmt->bind_param("sss", $username, $email, $password_plain);
    if ($stmt->execute()) {
        $_SESSION['success'] = "Đăng ký thành công. Vui lòng đăng nhập.";
        header("Location: index.php");
    } else {
        $_SESSION['error'] = "Đã có lỗi xảy ra. Vui lòng thử lại.";
        header("Location: register.php");
    }
    $stmt->close();
} else {
    header("Location: register.php");
}
?>
