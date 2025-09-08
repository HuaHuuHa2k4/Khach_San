<?php
session_start();
$loggedIn = isset($_SESSION['user_id']);
$username = $loggedIn ? htmlspecialchars($_SESSION['username']) : '';
?>
<!DOCTYPE html>
<html lang="vi">
<head>
  <meta charset="UTF-8">
  <title>Tin Tức - HotelATR</title>
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
    <h2>Tin Tức & Khuyến Mãi</h2>
    <article>
      <h3>🎉 Khai trương khách sạn mới tại Đà Nẵng</h3>
      <p>HotelATR vừa mở thêm chi nhánh mới tại Đà Nẵng với nhiều ưu đãi hấp dẫn cho khách đặt phòng online.</p>
    </article>
    <article>
      <h3>🔥 Ưu đãi mùa hè 2025</h3>
      <p>Giảm giá đến 30% cho các loại phòng Deluxe khi đặt phòng từ tháng 6 đến tháng 8/2025.</p>
    </article>
    <article>
      <h3>📰 Cập nhật xu hướng du lịch</h3>
      <p>Cùng HotelATR khám phá các điểm du lịch hot nhất 2025: Phú Quốc, Đà Nẵng, Nha Trang và nhiều điểm đến thú vị khác.</p>
    </article>
  </section>

  <script src="js/script.js"></script>
</body>
</html>
