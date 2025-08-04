document.addEventListener('DOMContentLoaded', function () {
  const registerForm = document.querySelector('#registerPopup form');

  // Kiểm tra xác nhận mật khẩu (vẫn giữ nếu bạn dùng trong trang register.php)
  if (registerForm) {
    registerForm.addEventListener('submit', function (e) {
      const password = document.getElementById('password').value;
      const confirm = document.getElementById('password_confirm').value;

      if (password !== confirm) {
        alert('Mật khẩu xác nhận không khớp.');
        e.preventDefault();
      }
    });
  }
});
