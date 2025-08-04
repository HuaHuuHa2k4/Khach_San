  <!DOCTYPE html>
  <html lang="vi">
  <head>
    <meta charset="UTF-8" />
    <title>Đăng ký tài khoản</title>
    <link rel="stylesheet" href="css/style.css" />
  </head>
  <body>
    <div class="register">
      <h2>Đăng ký tài khoản</h2>
        <?php
      session_start();
      if (isset($_SESSION['error'])) {
          echo '<p style="color: red;">' . $_SESSION['error'] . '</p>';
          unset($_SESSION['error']); // Xóa lỗi sau khi hiển thị
      }

      if (isset($_SESSION['success'])) {
          echo '<p style="color: green;">' . $_SESSION['success'] . '</p>';
          unset($_SESSION['success']); // Xóa thông báo sau khi hiển thị
      }
      ?>
      <form action="register_process.php" method="POST" id="registerForm">
        <label for="username">Tên đăng nhập:</label><br />
        <input type="text" name="username" id="username" required /><br />

        <label for="email">Email:</label><br />
        <input type="email" name="email" id="email" required /><br />

        <label for="password">Mật khẩu:</label><br />
        <input type="password" name="password" id="password" required /><br />

        <label for="password_confirm">Xác nhận mật khẩu:</label><br />
        <input type="password" name="password_confirm" id="password_confirm" required /><br />

        <button type="submit">Đăng ký</button>
      </form>

      <p>Đã có tài khoản? <a href="index.php">Đăng nhập</a></p>

      <?php if (!isset($_SESSION['user_id'])): ?>
      <p><a href="dashboard.php">⬅ Quay lại trang chính</a></p>
      <?php endif; ?>
    </div>

    <script src="js/script.js"></script>
  </body>
  </html>
