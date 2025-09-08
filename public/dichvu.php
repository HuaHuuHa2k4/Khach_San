<?php
session_start();
$loggedIn = isset($_SESSION['user_id']);
$username = $loggedIn ? htmlspecialchars($_SESSION['username']) : '';
?>
<!DOCTYPE html>
<html lang="vi">
<head>
  <meta charset="UTF-8">
  <title>Dịch Vụ - HotelATR</title>
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
    <h2>Dịch Vụ Của HotelATR</h2>
    <div class="services">
      <div class="service-card">
        <h3>Nhà hàng & Ẩm thực</h3>
        <p>Thưởng thức thực đơn phong phú với các món ăn Á – Âu, hải sản tươi ngon.</p>
      </div>
      <div class="service-card">
        <h3>Spa & Massage</h3>
        <p>Dịch vụ spa, massage thư giãn giúp bạn hồi phục năng lượng sau chuyến đi dài.</p>
      </div>
      <div class="service-card">
        <h3>Đưa đón sân bay</h3>
        <p>Dịch vụ đưa đón sân bay 24/7 nhanh chóng, an toàn và tiện lợi.</p>
      </div>
      <div class="service-card">
        <h3>Phòng hội nghị</h3>
        <p>Trang thiết bị hiện đại, phù hợp tổ chức hội thảo, sự kiện và họp mặt.</p>
      </div>
    </div>
  </section>
</body>
</html>
