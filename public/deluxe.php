<?php
session_start();
$loggedIn = isset($_SESSION['user_id']);
$username = $loggedIn ? htmlspecialchars($_SESSION['username']) : '';
?>
<!DOCTYPE html>
<html lang="vi">
<head>
  <meta charset="UTF-8">
  <title>Phòng Deluxe - HotelATR</title>
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
      <a href="gioithieu.php">GIỚI THIỆU</a>
      <a href="tintuc.php">TIN TỨC</a>
      <a href="index.php">CĂN HỘ CHO THUÊ</a>
      <a href="dichvu.php">DỊCH VỤ</a>
      <a href="lienhe.php">LIÊN HỆ</a>
    </nav>
  </header>

    <section class="room-detail">
    <div class="room-detail-flex">
        <div class="room-detail-image">
        <img src="../public/img/Anh_1.jpg" alt="Phòng Deluxe">
        </div>
        <div class="room-detail-content">
        <h2>Phòng Deluxe</h2>
        <p><strong>Giá:</strong> 1.200.000 VNĐ / đêm</p>
        <p><strong>Mô tả:</strong> Phòng Deluxe sang trọng với thiết kế hiện đại, cửa sổ lớn hướng ra biển...</p>
        
        <h3>Tiện nghi trong phòng</h3>
        <ul>
            <li>Giường đôi lớn, nệm cao cấp</li>
            <li>View biển tuyệt đẹp</li>
            <li>Phòng tắm rộng với bồn tắm hiện đại</li>
            <li>Điều hòa, TV LCD, minibar</li>
            <li>Wifi tốc độ cao miễn phí</li>
        </ul>

        <h3>Dịch vụ kèm theo</h3>
        <ul>
            <li>Ăn sáng buffet miễn phí</li>
            <li>Dọn phòng hàng ngày</li>
            <li>Dịch vụ giặt ủi (theo yêu cầu)</li>
            <li>Đưa đón sân bay (phụ phí)</li>
        </ul>

        <div class="policy">
            <h4>Chính sách đặt phòng</h4>
            <p>✔ Nhận phòng: 14h00 | Trả phòng: 12h00 hôm sau</p>
            <p>✔ Hủy phòng trước 48h được hoàn 100%</p>
            <p>✔ Trẻ em dưới 6 tuổi miễn phí khi ngủ cùng bố mẹ</p>
        </div>

        <a href="datphong.php?room=deluxe1" class="btn-book">Đặt phòng ngay</a>
        </div>
    </div>
    </section>
</body>
</html>
