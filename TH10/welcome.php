<?php
// Kiểm tra xem cookie đã được tạo hay chưa
if (isset($_COOKIE['username'])) {
    $username = $_COOKIE['username'];
} else {
    // Nếu cookie chưa được tạo thì chuyển hướng đến trang đăng nhập
    header('Location: logincookie.html');
    exit;
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Xin chào: <?php echo $username ?></title>
</head>
<body>
	<h1>Xin chào: <?php echo $username ?>!</h1>
	<p><a href="clearcookie.php">Đăng xuất</a></p>
</body>
</html>
