    
    <?php
    session_start();
    if (isset($_SESSION['error'])) {
      echo '<p style="color:red">' . $_SESSION['error'] . '</p>';
      unset($_SESSION['error']);
    }
    if (isset($_SESSION['success'])) {
      echo '<p style="color:green">' . $_SESSION['success'] . '</p>';
      unset($_SESSION['success']);
    }
    ?>
<!DOCTYPE html>
<html lang="vi">
<head>
  <meta charset="UTF-8" />
  <title>Đăng nhập</title>
  <link rel="stylesheet" href="css/style.css" />
</head>
  <style>
    input[type="text"], input[type="email"], input[type="password"], input[type="phone"] {
      width: 100%;
      padding: 10px 12px;
      margin: 8px 0 16px 0;
      border: 1px solid #ccc;
      border-radius: 4px;
      box-sizing: border-box;
      transition: border-color 0.3s ease;
    }
  </style>
<body>
  <div class="login">
    <h2>Đăng nhập</h2>

    <form action="login_process.php" method="POST" id="loginForm">
      <label for="username">Tên đăng nhập hoặc Email:</label><br />
      <input type="text" name="username_email" id="username_email" required /><br />

      <label for="password">Mật khẩu:</label><br />
      <input type="password" name="password" id="password" required /><br />

      <button type="submit">Đăng nhập</button>
    </form>

    <p>Chưa có tài khoản? <a href="register.php">Đăng ký</a></p>

      <?php if (!isset($_SESSION['user_id'])): ?>
      <p><a href="dashboard.php">Quay lại trang chính</a></p>
      <?php endif; ?>
  </div>
  
  <script src="js/script.js"></script>
</body>
</html>
