<?php
session_start();
require_once(__DIR__ . '/../config.php');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username_email = trim($_POST['username_email']);
    $password = $_POST['password'];

    // Tìm user theo username hoặc email
    $stmt = $conn->prepare("SELECT id, username, email, password FROM users WHERE username=? OR email=? LIMIT 1");
    $stmt->bind_param("ss", $username_email, $username_email);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows == 1) {
        $user = $result->fetch_assoc();
        // So sánh mật khẩu plain text
        if ($password === $user['password']) {
            // Đăng nhập thành công
            $_SESSION['user_id'] = $user['id'];
            $_SESSION['username'] = $user['username'];
            header("Location: dashboard.php");
            exit;
        } else {
            $_SESSION['error'] = "Mật khẩu không chính xác.";
            header("Location: index.php");
            exit;
        }
    } else {
        $_SESSION['error'] = "Tài khoản không tồn tại.";
        header("Location: index.php");
        exit;
    }
} else {
    header("Location: index.php");
}
?>
