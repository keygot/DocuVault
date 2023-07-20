<?php
    // Khởi động session
    session_start();

    // gọi file db_conn.php
    include_once "db_conn.php";


    if(isset($_POST['uname']) && isset($_POST['name']) && isset($_POST['email']) && isset($_POST['password']) && isset($_POST['re_password']) )
    {

        // Hàm validate
        function validate($data) {
            $data = trim($data); // Loại bỏ khoảng trắng
            $data = stripcslashes($data);

            $data = htmlspecialchars($data);

            return $data;
        }


        $uname = validate($_POST['uname']);
        $name = validate($_POST['name']);
        $email = validate($_POST['email']);
        $pass = validate($_POST['password']);
        $re_pass = validate($_POST['re_password']);


        $user_data = 'uname=' .$uname. '&name=' .$name. '&email=' .$email;

        // if(empty($uname)) {
        //     header("Location: pages-register.php?error=Trường tài khoản là bắt buộc&$user_data");
        //     exit();
        // }else if(empty($pass)) {
        //     header("Location: pages-register.php?error=Trường mật khẩu là bắt buộc&$user_data");
        //     exit();
        // }else if(empty($re_pass)) {
        //     header("Location: pages-register.php?error=Trường nhập lại mật khẩu là bắt buộc&$user_data");
        //     exit();
        // }
        // else if(empty($name)) {
        //     header("Location: pages-register.php?error=Trường tên là bắt buộc&$user_data");
        //     exit();
        // }
        // else if(empty($email)) {
        //     header("Location: pages-register.php?error=Trường email là bắt buộc&$user_data");
        //     exit();
        // }
        // else 
        if($pass !== $re_pass) {
            header("Location: pages-register.php?error=Mật khẩu nhập lại không trùng khớp!&$user_data");
            exit();
        }
        else {

            $pass = md5($pass);


            $sql = "SELECT * FROM user WHERE Username='$uname'";

            $result = mysqli_query($conn, $sql);

            if(mysqli_num_rows($result) > 0) {
                header("Location: pages-register.php?error=Tài khoản đã tồn tại !&$user_data");
                exit();
            }else {
                $sql2 = "INSERT INTO user (Username, Email, Password, Name) VALUES('$uname', '$email', '$pass', '$name')";

                $result2 = mysqli_query($conn, $sql2);

                if($result2) {
                    header("Location: index.php?seccesss=Đăng ký thành công!");
                    exit();
                }else {
                    header("Location: pages-register.php?error=Đã xảy ra lỗi!&$user_data");
                    exit();
                }
            }
        }

    }else {
        header("Location: pages-register.php");
        exit();
    }

?>