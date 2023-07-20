<?php
    $sname = "localhost";
    $uname = "root";
    $password = "";

    $db_name = "quanlyhoc_db";

    $conn = mysqli_connect($sname, $uname, $password, $db_name);

    if(!$conn) {
        echo "Không thể kết nối";
    }
?>


