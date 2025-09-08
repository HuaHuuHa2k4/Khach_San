<?php
session_start();
$loggedIn = isset($_SESSION['user_id']);
$username = $loggedIn ? htmlspecialchars($_SESSION['username']) : '';
?>
<!DOCTYPE html>
<html lang="vi">
<head>
  <meta charset="UTF-8">
  <title>Giới Thiệu - HotelATR</title>
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
    <h2>Về Chúng Tôi</h2>
    <p><strong>HotelATR</strong> là hệ thống đặt phòng khách sạn trực tuyến hiện đại, cung cấp nhiều lựa chọn phòng nghỉ từ cao cấp đến bình dân. Với nền tảng công nghệ tiên tiến, chúng tôi mang đến trải nghiệm đặt phòng nhanh chóng, thuận tiện và an toàn cho mọi khách hàng.</p>

    <h3>Sứ mệnh</h3>
    <p>Chúng tôi mong muốn trở thành cầu nối tin cậy giữa khách hàng và các khách sạn uy tín trên toàn quốc. HotelATR cam kết mang đến dịch vụ minh bạch, giá cả hợp lý và trải nghiệm tuyệt vời cho du khách.</p>

    <h3>Tầm nhìn</h3>
    <p>Đến năm 2030, HotelATR phấn đấu trở thành một trong những nền tảng đặt phòng hàng đầu tại khu vực Đông Nam Á, không chỉ dừng lại ở dịch vụ lưu trú mà còn mở rộng sang du lịch, ẩm thực và các trải nghiệm nghỉ dưỡng trọn gói.</p>

    <h3>Đội ngũ của chúng tôi</h3>
    <p>HotelATR được vận hành bởi một đội ngũ trẻ trung, sáng tạo, và nhiệt huyết. Từ bộ phận phát triển công nghệ, chăm sóc khách hàng, cho đến quản lý đối tác khách sạn – tất cả đều chung một mục tiêu là phục vụ khách hàng tốt nhất.</p>

    <h3>Cam kết dịch vụ</h3>
    <ul>
      <li>🔹 Giá phòng cạnh tranh, nhiều ưu đãi hấp dẫn.</li>
      <li>🔹 Thông tin khách sạn minh bạch, hình ảnh rõ ràng.</li>
      <li>🔹 Hỗ trợ khách hàng 24/7, xử lý nhanh chóng mọi yêu cầu.</li>
      <li>🔹 Bảo mật thông tin cá nhân và giao dịch an toàn tuyệt đối.</li>
    </ul>

    <h3>Hãy đồng hành cùng HotelATR</h3>
    <p>Chúng tôi luôn nỗ lực không ngừng để mang đến những trải nghiệm tuyệt vời cho khách hàng. Hãy đồng hành cùng <strong>HotelATR</strong> trong những chuyến đi sắp tới của bạn để tận hưởng dịch vụ đẳng cấp và tiện lợi.</p>
  </section>

  <script src="js/script.js"></script>
</body>
</html>
