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
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" integrity="sha512-ZW2p0kKpiYzG8ZLOQ0sEZBhtCHnbRcsKKhKxQe9ktH3vGJEGccs8eNRRphFv3YjQWosjEM7GlgHrLkD/RL8aDQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
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

  <!-- FORM ĐĂNG KÝ nếu chưa đăng nhập -->
  <?php if (!$loggedIn): ?>
  <div id="registerPopup" class="modal">
    <div class="modal-content">
      <span class="close" id="closeRegister">&times;</span>

      <?php if ($error): ?>
        <p style="color: red;"><?php echo htmlspecialchars($error); ?></p>
      <?php endif; ?>

      <form action="register_process.php" method="post">
        <label for="username">Tên đăng nhập:</label><br>
        <input type="text" name="username" id="username" required><br>

        <label for="email">Email:</label><br>
        <input type="email" name="email" id="email" required><br>

        <label for="password">Mật khẩu:</label><br>
        <input type="password" name="password" id="password" required><br>

        <label for="password_confirm">Xác nhận mật khẩu:</label><br>
        <input type="password" name="password_confirm" id="password_confirm" required><br><br>

        <button type="submit">Đăng ký</button>
      </form>
    </div>
  </div>
  <?php endif; ?>

  <section class="room-list">
    <h2>Phòng Cho Thuê</h2>
    <div class="rooms">
      <div class="room-card">
        <img src="https://i.imgur.com/Yb9qS0D.jpg" alt="Phòng Deluxe">
        <h3>Phòng Deluxe</h3>
        <p>Giá: 1.200.000 VNĐ / đêm</p>
        <p>Giường đôi, view biển, có bồn tắm</p>
        <button>Đặt ngay</button>
      </div>

      <div class="room-card">
        <img src="https://i.imgur.com/9U0Kgrf.jpg" alt="Phòng Superior">
        <h3>Phòng Superior</h3>
        <p>Giá: 950.000 VNĐ / đêm</p>
        <p>Giường đôi, máy lạnh, wifi miễn phí</p>
        <button>Đặt ngay</button>
      </div>

      <div class="room-card">
        <img src="https://i.imgur.com/e4QQ99a.jpg" alt="Phòng Standard">
        <h3>Phòng Standard</h3>
        <p>Giá: 750.000 VNĐ / đêm</p>
        <p>Phòng nhỏ gọn, phù hợp 2 người</p>
        <button>Đặt ngay</button>
      </div>

            <div class="room-card">
        <img src="https://i.imgur.com/Yb9qS0D.jpg" alt="Phòng Deluxe">
        <h3>Phòng Deluxe</h3>
        <p>Giá: 1.200.000 VNĐ / đêm</p>
        <p>Giường đôi, view biển, có bồn tắm</p>
        <button>Đặt ngay</button>
      </div>

      <div class="room-card">
        <img src="https://i.imgur.com/9U0Kgrf.jpg" alt="Phòng Superior">
        <h3>Phòng Superior</h3>
        <p>Giá: 950.000 VNĐ / đêm</p>
        <p>Giường đôi, máy lạnh, wifi miễn phí</p>
        <button>Đặt ngay</button>
      </div>

      <div class="room-card">
        <img src="https://i.imgur.com/e4QQ99a.jpg" alt="Phòng Standard">
        <h3>Phòng Standard</h3>
        <p>Giá: 750.000 VNĐ / đêm</p>
        <p>Phòng nhỏ gọn, phù hợp 2 người</p>
        <button>Đặt ngay</button>
      </div>

            <div class="room-card">
        <img src="https://i.imgur.com/9U0Kgrf.jpg" alt="Phòng Superior">
        <h3>Phòng Superior</h3>
        <p>Giá: 950.000 VNĐ / đêm</p>
        <p>Giường đôi, máy lạnh, wifi miễn phí</p>
        <button>Đặt ngay</button>
      </div>

      <div class="room-card">
        <img src="https://i.imgur.com/e4QQ99a.jpg" alt="Phòng Standard">
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

