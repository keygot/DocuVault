<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Lấy thông tin đăng nhập từ form POST
    $username = $_POST['username'];
    $password = $_POST['password'];
    
    // Kiểm tra thông tin đăng nhập
    if ($username === 'nhatnh' && $password === '123') {
        // Tạo cookie lưu trữ tên đăng nhập
        setcookie('username', $username, time() + (86400 * 30), '/');
        
        // Chuyển hướng đến trang welcome
        header('Location: welcome.php');
        exit;
    } else {
        echo 'Invalid username or password';
    }
}
?>
