<?php
// Xóa cookie bằng cách đặt thời gian sống của nó là thời điểm trước đó
setcookie('username', '', time() - 3600, '/');

// Chuyển hướng về trang đăng nhập
header('Location: login.html');
exit;
?>
