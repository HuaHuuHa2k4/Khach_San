<?php
session_start();
$loggedIn = isset($_SESSION['user_id']);
$username = $loggedIn ? htmlspecialchars($_SESSION['username']) : '';
?>
<!DOCTYPE html>
<html lang="vi">
<head>
  <meta charset="UTF-8">
  <title>Liên Hệ - HotelATR</title>
  <link rel="stylesheet" href="css/style.css?v=<?php echo time(); ?>">
</head>
<body>
  <header>
    <div class="topbar">
        <div class="contact">Hotline: <a href="tel:0817834630">0817834630</a></div>
        <div class="logo">Hotel<span>ATR</span></div>
      <div class="language-login">
        <div class="account-icon">
          <?php if ($loggedIn): ?>
            <span>👤 <?php echo $username; ?> | <a href="logout.php">Đăng xuất</a></span>
          <?php else: ?>
            <a href="register.php">Tài Khoản</a>
          <?php endif; ?>
        </div>
      </div>
    </div>
        <nav class="main-nav">
        <a href="gioithieu.php" class="<?php echo basename($_SERVER['PHP_SELF']) == 'gioithieu.php' ? 'active' : ''; ?>">GIỚI THIỆU</a>
        <a href="tintuc.php" class="<?php echo basename($_SERVER['PHP_SELF']) == 'tintuc.php' ? 'active' : ''; ?>">TIN TỨC</a>
        <a href="index.php" class="<?php echo basename($_SERVER['PHP_SELF']) == 'index.php' ? 'active' : ''; ?>">CĂN HỘ CHO THUÊ</a>
        <a href="dichvu.php" class="<?php echo basename($_SERVER['PHP_SELF']) == 'dichvu.php' ? 'active' : ''; ?>">DỊCH VỤ</a>
        <a href="lienhe.php" class="<?php echo basename($_SERVER['PHP_SELF']) == 'lienhe.php' ? 'active' : ''; ?>">LIÊN HỆ</a>
        </nav>
  </header>

  <section class="content">
    <h2>Liên Hệ Với Chúng Tôi</h2>
    <p>📞 Hotline: <a href="tel:0817834630">0817834630</a></p>
    <p>📧 Email: hotrokhachhang@gmail.com</p>

    <h3>Kết nối với chúng tôi:</h3>
    <div class="social-links">
      <a href="https://facebook.com" target="_blank">🌐 Facebook</a>
      <a href="https://zalo.me" target="_blank">💬 Zalo</a>
      <a href="https://tiktok.com" target="_blank">🎵 TikTok</a>
    </div>
  </section>
</body>
</html>
