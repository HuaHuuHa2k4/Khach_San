<?php
session_start();
require_once __DIR__ . '/../config.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = trim($_POST['username']);
    $email = trim($_POST['email']);
    $phone = trim($_POST['phone']); // 🆕 Thêm dòng này
    $password = $_POST['password'];
    $password_confirm = $_POST['password_confirm'];

    if ($password !== $password_confirm) {
        $_SESSION['error'] = "Mật khẩu xác nhận không khớp.";
        header("Location: register.php");
        exit;
    }

    // Kiểm tra username, email, hoặc số điện thoại đã tồn tại chưa
    $stmt = $conn->prepare("SELECT username, email, phone FROM users WHERE username = ? OR email = ? OR phone = ?");
    $stmt->bind_param("sss", $username, $email, $phone);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $existing = $result->fetch_assoc();
        if ($existing['username'] === $username) {
            $_SESSION['error'] = "Tên đăng nhập đã được sử dụng. Vui lòng chọn tên khác.";
        } elseif ($existing['email'] === $email) {
            $_SESSION['error'] = "Email đã được sử dụng. Vui lòng chọn email khác.";
        } elseif ($existing['phone'] === $phone) {
            $_SESSION['error'] = "Số điện thoại đã được sử dụng. Vui lòng nhập số khác.";
        } else {
            $_SESSION['error'] = "Thông tin đăng ký đã được sử dụng.";
        }
        $stmt->close();
        header("Location: register.php");
        exit;
    }
    $stmt->close();

    // Lưu mật khẩu dưới dạng văn bản (chưa mã hóa)
    $password_plain = $password;

    $stmt = $conn->prepare("INSERT INTO users (username, email, phone, password) VALUES (?, ?, ?, ?)");
    $stmt->bind_param("ssss", $username, $email, $phone, $password_plain);
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
