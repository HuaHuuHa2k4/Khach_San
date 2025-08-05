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
  <link rel="stylesheet" href="css/style.css">
<body>
  <header>
    <div class="topbar">
      <div class="logo">Hotel<span>ATR</span></div>
      <div class="contact">
        Hotline: <a href="tel:0817834630">0817834630</a>
      </div>
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
      <a href="#">GIỚI THIỆU</a>
      <a href="#">TIN TỨC</a>
      <a href="#">CĂN HỘ CHO THUÊ</a>
      <a href="#">DỊCH VỤ</a>
      <a href="#">LIÊN HỆ</a>
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
    <h2>Phòng Cho Thuê</h2>
    <div class="rooms">
      <div class="room-card">
        <img src="/public/img/z6875422571027_cff5a3a05f2e12f2766c93856621e9b9.jpg" width='100%'  alt="Phòng Deluxe">
        <h3>Phòng Deluxe</h3>
        <p>Giá: 1.200.000 VNĐ / đêm</p>
        <p>Giường đôi, view biển, có bồn tắm</p>
        <button>Đặt ngay</button>
      </div>

      <div class="room-card">
        <img src="/public/img/z6875422571084_8a751eafe60e3a487b3a06e24fbe58c3.jpg" width='100%' alt="Phòng Superior">
        <h3>Phòng Superior</h3>
        <p>Giá: 950.000 VNĐ / đêm</p>
        <p>Giường đôi, máy lạnh, wifi miễn phí</p>
        <button>Đặt ngay</button>
      </div>

      <div class="room-card">
        <img src="/public/img/z6875422571085_ebde0f61309cc7399bc3d1ecde54c8b6.jpg" width='100%' alt="Phòng Standard">
        <h3>Phòng Standard</h3>
        <p>Giá: 750.000 VNĐ / đêm</p>
        <p>Phòng nhỏ gọn, phù hợp 2 người</p>
        <button>Đặt ngay</button>
      </div>

            <div class="room-card">
        <img src="/public/img/z6875422619767_be5c9ecbc302f2adf157392e3a08d931.jpg" width='100%' alt="Phòng Deluxe">
        <h3>Phòng Deluxe</h3>
        <p>Giá: 1.200.000 VNĐ / đêm</p>
        <p>Giường đôi, view biển, có bồn tắm</p>
        <button>Đặt ngay</button>
      </div>

      <div class="room-card">
        <img src="public/img/z6875430926424_8682a597bfd81115d1dc7316c47f9b2f.jpg" alt="Phòng Superior">
        <h3>Phòng Superior</h3>
        <p>Giá: 950.000 VNĐ / đêm</p>
        <p>Giường đôi, máy lạnh, wifi miễn phí</p>
        <button>Đặt ngay</button>
      </div>

      <div class="room-card">
        <img src="public/img/z6875430973919_83009757490dbc4ffe7b3e2ad893b8e4.jpg" alt="Phòng Standard">
        <h3>Phòng Standard</h3>
        <p>Giá: 750.000 VNĐ / đêm</p>
        <p>Phòng nhỏ gọn, phù hợp 2 người</p>
        <button>Đặt ngay</button>
      </div>

            <div class="room-card">
        <img src="public/img/z6875431007524_d1ae0b2c4ae01a6dac5d4979fa450c5e.jpg" alt="Phòng Superior">
        <h3>Phòng Superior</h3>
        <p>Giá: 950.000 VNĐ / đêm</p>
        <p>Giường đôi, máy lạnh, wifi miễn phí</p>
        <button>Đặt ngay</button>
      </div>

      <div class="room-card">
        <img src="public/img/z6875431044632_963a0b1b87700bbf5e0df3397a285e9a.jpg" alt="Phòng Standard">
        <h3>Phòng Standard</h3>
        <p>Giá: 750.000 VNĐ / đêm</p>
        <p>Phòng nhỏ gọn, phù hợp 2 người</p>
        <button>Đặt ngay</button>
      </div>
    </div>
  </section>


  <script src="js/script.js"></script>
</body>
</html>

