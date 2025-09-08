<?php
session_start();
$loggedIn = isset($_SESSION['user_id']);
$username = $loggedIn ? htmlspecialchars($_SESSION['username']) : '';
$error = $_SESSION['error'] ?? '';
unset($_SESSION['error']);
?>
<!DOCTYPE html>
<html lang="vi">
<head>
  <meta charset="UTF-8">
  <title>Trang Đặt Phòng Khách Sạn</title>
  <link rel="stylesheet" href="css/style.css?v=<?php echo time(); ?>">
<body>
  <header>
    <div class="topbar">
      <div class="contact">
        Hotline: <a href="tel:0817834630">0817834630</a>
      </div>
      <div class="logo">Hotel<span>ATR</span></div>
      <div class="language-login">
        <div class="account-icon">
          <?php if ($loggedIn): ?>
            <span>👤 <?php echo $username; ?> | <a href="logout.php">Đăng xuất</a></span>
          <?php else: ?>
            <a href="register.php">
              Tài Khoản
            </a>
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

  <section class="search-bar">
    <select>
      <option>LOẠI PHÒNG</option>
    </select>
    <input type="date" value="2019-08-05">
    <input type="date" value="2019-08-05">
    <input type="text" placeholder="Từ khóa tìm kiếm">
    <button>TÌM KIẾM</button>
  </section>

  <section class="room-list">
    <h2>Danh sách phòng cho thuê</h2>
    <div class="rooms">
      <div class="room-card">
        <img src="/img/Anh_1.jpg" width='100%'  alt="Phòng Deluxe">
        <!-- <img src="../public/img/Anh_1.jpg" width='100%'  alt="Phòng Deluxe"> -->
        <h3>Phòng Deluxe</h3>
        <p>Giá: 1.200.000 VNĐ / đêm</p>
        <p>Giường đôi, view biển, có bồn tắm</p>
        <a href="deluxe.php" class="btn-book">Đặt ngay</a>
      </div>

      <div class="room-card">
        <img src="/img/Anh_2.jpg" alt="Phòng Superior">
        <!-- <img src="../public/img/Anh_2.jpg" alt="Phòng Superior"> -->
        <h3>Phòng Superior</h3>
        <p>Giá: 950.000 VNĐ / đêm</p>
        <p>Giường đôi, máy lạnh, wifi miễn phí</p>
        <a href="deluxe.php" class="btn-book">Đặt ngay</a>
      </div>

      <div class="room-card">
        <img src="/img/Anh_3.jpg" alt="Phòng Standard">
        <!-- <img src="../public/img/Anh_3.jpg" alt="Phòng Standard"> -->
        <h3>Phòng Standard</h3>
        <p>Giá: 750.000 VNĐ / đêm</p>
        <p>Phòng nhỏ gọn, phù hợp 2 người</p>
        <a href="deluxe.php" class="btn-book">Đặt ngay</a>
      </div>

        <div class="room-card">
        <img src="/img/Anh_4.jpg" alt="Phòng Deluxe">
        <!-- <img src="../public/img/Anh_4.jpg" alt="Phòng Deluxe"> -->
        <h3>Phòng Deluxe</h3>
        <p>Giá: 1.200.000 VNĐ / đêm</p>
        <p>Giường đôi, view biển, có bồn tắm</p>
        <a href="deluxe.php" class="btn-book">Đặt ngay</a>
      </div>

      <div class="room-card">
        <img src="/img/Anh_5.jpg" alt="Phòng Superior">
        <!-- <img src="../public/img/Anh_5.jpg" alt="Phòng Superior"> -->
        <h3>Phòng Superior</h3>
        <p>Giá: 950.000 VNĐ / đêm</p>
        <p>Giường đôi, máy lạnh, wifi miễn phí</p>
        <a href="deluxe.php" class="btn-book">Đặt ngay</a>
      </div>

      <div class="room-card">
        <img src="/img/Anh_6.jpg" alt="Phòng Standard">
        <!-- <img src="../public/img/Anh_6.jpg" alt="Phòng Standard"> -->
        <h3>Phòng Standard</h3>
        <p>Giá: 750.000 VNĐ / đêm</p>
        <p>Phòng nhỏ gọn, phù hợp 2 người</p>
        <a href="deluxe.php" class="btn-book">Đặt ngay</a>
      </div>

      <div class="room-card">
        <img src="/img/Anh_7.jpg" alt="Phòng Superior">
        <!-- <img src="../public/img/Anh_7.jpg" alt="Phòng Superior"> -->
        <h3>Phòng Superior</h3>
        <p>Giá: 950.000 VNĐ / đêm</p>
        <p>Giường đôi, máy lạnh, wifi miễn phí</p>
        <a href="deluxe.php" class="btn-book">Đặt ngay</a>
      </div>

      <div class="room-card">
        <img src="/img/Anh_8.jpg" alt="Phòng Standard">
        <!-- <img src="../public/img/Anh_8.jpg" alt="Phòng Standard"> -->
        <h3>Phòng Standard</h3>
        <p>Giá: 750.000 VNĐ / đêm</p>
        <p>Phòng nhỏ gọn, phù hợp 2 người</p>
        <a href="deluxe.php" class="btn-book">Đặt ngay</a>
      </div>
    </div>
  </section>


  <script src="js/script.js"></script>
</body>
</html>

