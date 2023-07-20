<?php
    // Khởi động session

    session_start();

    // gọi file db_conn.php
    include "db_conn.php";

    // Hàm validate() được sử dụng để xử lý và lọc dữ liệu được truyền vào từ các biến $_POST['uname'] và $_POST['password'].
    if(isset($_POST['uname']) && isset($_POST['password'])) {
        function validate($data) {
            $data = trim($data); // Loại bỏ khoảng trắng ở đầu và cuối chuỗi
            $data = stripcslashes($data); // Hàm stripslashes() được sử dụng để loại bỏ ký tự backslashes ("") khỏi chuỗi.
            $data = htmlspecialchars($data); // Hàm htmlspecialchars() được sử dụng để mã hóa các ký tự đặc biệt trong chuỗi, như "&", "<", ">" và """ để tránh các cuộc tấn công cross-site scripting (XSS).

            return $data;

        }
    }


    $uname = validate($_POST['uname']);
    $pass = validate($_POST['password']);


    if(!empty($uname) && !empty($pass)) {
        $pass = md5($pass); // mã hóa mật khẩu md5

        // Tạo chuỗi truy vấn
        $sql = "SELECT * FROM user WHERE Username='$uname' AND Password='$pass'";

        // Tạo 1 biến trả về kết quả

        $result = mysqli_query($conn, $sql);

        if(mysqli_num_rows($result) === 1) {

            $row = mysqli_fetch_assoc($result);

            if($row['Username'] === $uname && $row['Password'] === $pass) {
                $_SESSION['Name'] = $row['Name'];
                $_SESSION['Username'] = $row['Username'];
                $_SESSION['Email'] = $row['Email'];
                $_SESSION['Password'] = $row['Password'];
                $_SESSION['Role'] = $row['Role'];
                $_SESSION['Phone'] = $row['Phone'];
                $_SESSION['Avatar'] = $row['Avatar'];
                $_SESSION['ID'] = $row['ID'];

                header("Location: dashboard.php");
                exit();
            }
            else {
                header("Location: index.php?error=Thông tin tài khoản hoặc mật khẩu không chính xác!");
                exit();
            }
        }else {
            header("Location: index.php?error=Thông tin tài khoản hoặc mật khẩu không chính xác!");
            exit();
        }
    }else {
        header("Location: index.php");
        exit();
    }



?>