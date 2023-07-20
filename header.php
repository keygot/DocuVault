<?php
    session_start();

    if(isset($_SESSION['ID']) && isset($_SESSION['Username'])) {
        
    
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Hệ thống quản trị bài thực hành</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link
    href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
    rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/quill/quill.snow.css" rel="stylesheet">
  <link href="assets/vendor/quill/quill.bubble.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/simple-datatables/style.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <link rel="stylesheet" href="assets/css/code.css">

  <!-- =======================================================
* Template Name: NiceAdmin - v2.4.1
* Template URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
* Author: BootstrapMade.com
* License: https://bootstrapmade.com/license/
======================================================== -->
<!-- ajax  -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>

<!-- dùng cho thẻ code -->
<link rel="stylesheet" href="assets/css/prism.css">



<!-- Câu 3. Viết chương trình tính tổng các số lẻ từ 1 đến n. -->
<script>
    $(document).ready(function() {
    $('#form-cau3').submit(function(event) {
        event.preventDefault(); // ngăn chặn form submit

        // lấy giá trị của hai số a và b từ form
        var num = $('#num').val();

        // gửi AJAX request đến file PHP để tính UCLN và BCNN
        $.ajax({
        url: 'calculate.php',
        type: 'POST',
        data: {num: num},
        success: function(response) {
            // hiển thị kết quả trả về tại trình duyệt
            $('#result-cau3').html(response);
        }
        });
    });
    });
</script>

<!-- Câu 4. Viết chương trình tính tổng S = 1/2 + 1/4 + 1/6 ...+ 1/(2*n). -->
<script>
    $(document).ready(function() {
    $('#form-cau4').submit(function(event) {
        event.preventDefault(); // ngăn chặn form submit

        // lấy giá trị của hai số a và b từ form
        var num4 = $('#num-4').val();

        // gửi AJAX request đến file PHP để tính UCLN và BCNN
        $.ajax({
        url: 'calculate.php',
        type: 'POST',
        data: {num4: num4},
        success: function(response) {
            // hiển thị kết quả trả về tại trình duyệt
            $('#result-cau4').html(response);
        }
        });
    });
    });
</script>

<!-- Câu 5. Viết chương trình tính tổng S = 1 – 2 + 3 – 4 + ... + (-1)(n-1)*n. -->
<script>
    $(document).ready(function() {
    $('#form-cau5').submit(function(event) {
        event.preventDefault(); // ngăn chặn form submit

        // lấy giá trị của hai số a và b từ form
        var num5 = $('#num-5').val();

        // gửi AJAX request đến file PHP để tính UCLN và BCNN
        $.ajax({
        url: 'calculate.php',
        type: 'POST',
        data: {num5: num5},
        success: function(response) {
            // hiển thị kết quả trả về tại trình duyệt
            $('#result-cau5').html(response);
        }
        });
    });
    });
</script>

<!-- Câu 6. Viết chương trình tính giai thừa của n. -->
<script>
    $(document).ready(function() {
    $('#form-cau6').submit(function(event) {
        event.preventDefault(); // ngăn chặn form submit

        // lấy giá trị của hai số a và b từ form
        var num6 = $('#num-6').val();

        // gửi AJAX request đến file PHP để tính UCLN và BCNN
        $.ajax({
        url: 'calculate.php',
        type: 'POST',
        data: {num6: num6},
        success: function(response) {
            // hiển thị kết quả trả về tại trình duyệt
            $('#result-cau6').html(response);
        }
        });
    });
    });
</script>

<!-- Câu 7. Viết chương trình tính số fibonaxi thứ n. -->
<script>
    $(document).ready(function() {
    $('#form-cau7').submit(function(event) {
        event.preventDefault(); // ngăn chặn form submit

        // lấy giá trị của hai số a và b từ form
        var num7 = $('#num-7').val();

        // gửi AJAX request đến file PHP để tính UCLN và BCNN
        $.ajax({
        url: 'calculate.php',
        type: 'POST',
        data: {num7: num7},
        success: function(response) {
            // hiển thị kết quả trả về tại trình duyệt
            $('#result-cau7').html(response);
        }
        });
    });
    });
</script>

<!-- Câu 8. Viết chương trình tính tổng các số fibonaxi từ 1 đến n. -->
<script>
    $(document).ready(function() {
    $('#form-cau8').submit(function(event) {
        event.preventDefault(); // ngăn chặn form submit

        // lấy giá trị của hai số a và b từ form
        var num8 = $('#num-8').val();

        // gửi AJAX request đến file PHP để tính UCLN và BCNN
        $.ajax({
        url: 'calculate.php',
        type: 'POST',
        data: {num8: num8},
        success: function(response) {
            // hiển thị kết quả trả về tại trình duyệt
            $('#result-cau8').html(response);
        }
        });
    });
    });
</script>

<!-- ---------------------------- BÀI THỰC HÀNH 05 - BUỔI 09 ---------------------------------- -->
<!-- Câu 1. Viết chương trình kiểm tra n có phải là số nguyên tố hay không? -->

<script>
    $(document).ready(function() {
    $('#form-cau1-b9').submit(function(event) {
        event.preventDefault(); // ngăn chặn form submit

        // lấy giá trị của hai số a và b từ form
        var num19 = $('#num-1-b9').val();

        // gửi AJAX request đến file PHP để tính UCLN và BCNN
        $.ajax({
        url: 'calculate.php',
        type: 'POST',
        data: {num19: num19},
        success: function(response) {
            // hiển thị kết quả trả về tại trình duyệt
            $('#result-cau1-b9').html(response);
        }
        });
    });
    });
</script>

<!-- Câu 2. Viết chương trình hiển thị các số nguyên tố từ 1 đến n. -->
<script>
    $(document).ready(function() {
    $('#form-cau2-b9').submit(function(event) {
        event.preventDefault(); // ngăn chặn form submit

        // lấy giá trị của hai số a và b từ form
        var num29 = $('#num-2-b9').val();

        // gửi AJAX request đến file PHP để tính UCLN và BCNN
        $.ajax({
        url: 'calculate.php',
        type: 'POST',
        data: {num29: num29},
        success: function(response) {
            // hiển thị kết quả trả về tại trình duyệt
            $('#result-cau2-b9').html(response);
        }
        });
    });
    });
</script>

<!-- Câu 3. Viết chương trình kiểm tra n có phải là số hoàn hảo hay không -->
<script>
    $(document).ready(function() {
    $('#form-cau3-b9').submit(function(event) {
        event.preventDefault(); // ngăn chặn form submit

        // lấy giá trị của hai số a và b từ form
        var num39 = $('#num-3-b9').val();

        // gửi AJAX request đến file PHP để tính UCLN và BCNN
        $.ajax({
        url: 'calculate.php',
        type: 'POST',
        data: {num39: num39},
        success: function(response) {
            // hiển thị kết quả trả về tại trình duyệt
            $('#result-cau3-b9').html(response);
        }
        });
    });
    });
</script>
<!-- Câu 4. Viết chương trình in ra các số hoàn hảo từ 1 đến n. -->
<script>
    $(document).ready(function() {
    $('#form-cau4-b9').submit(function(event) {
        event.preventDefault(); // ngăn chặn form submit

        // lấy giá trị của hai số a và b từ form
        var num49 = $('#num-4-b9').val();

        // gửi AJAX request đến file PHP để tính UCLN và BCNN
        $.ajax({
        url: 'calculate.php',
        type: 'POST',
        data: {num49: num49},
        success: function(response) {
            // hiển thị kết quả trả về tại trình duyệt
            $('#result-cau4-b9').html(response);
        }
        });
    });
    });
</script>

<!-- Câu 5. Viết chương trình tính UCLN và BCNN của 2 số a, b. - Thực hành 05 - buổi 09 -->
<script>
    $(document).ready(function() {
    $('#form').submit(function(event) {
        event.preventDefault(); // ngăn chặn form submit

        // lấy giá trị của hai số a và b từ form
        var num1 = $('#num1').val();
        var num2 = $('#num2').val();

        // gửi AJAX request đến file PHP để tính UCLN và BCNN
        $.ajax({
        url: 'calculate.php',
        type: 'POST',
        data: {num1: num1, num2: num2},
        success: function(response) {
            // hiển thị kết quả trả về tại trình duyệt
            $('#result').html(response);
        }
        });
    });
    });

</script>

<!-- Câu 6. Viết chương trình tính tổng các chữ số của một số nguyên n -->
<script>
    $(document).ready(function() {
    $('#form-cau6-b9').submit(function(event) {
        event.preventDefault(); // ngăn chặn form submit

        // lấy giá trị của hai số a và b từ form
        var num69 = $('#num-6-b9').val();

        // gửi AJAX request đến file PHP để tính UCLN và BCNN
        $.ajax({
        url: 'calculate.php',
        type: 'POST',
        data: {num69: num69},
        success: function(response) {
            // hiển thị kết quả trả về tại trình duyệt
            $('#result-cau6-b9').html(response);
        }
        });
    });
    });
</script>

<!-- Câu 7. Viết chương giải phương trình bậc nhất. -->
<script>
    $(document).ready(function() {
    $('#form-cau7-b9').submit(function(event) {
        event.preventDefault(); // ngăn chặn form submit

        // lấy giá trị của hai số a và b từ form
        var a79 = $('#a79').val();
        var b79 = $('#b79').val();

        // gửi AJAX request đến file PHP để tính UCLN và BCNN
        $.ajax({
        url: 'calculate.php',
        type: 'POST',
        data: {a79: a79, b79: b79},
        success: function(response) {
            // hiển thị kết quả trả về tại trình duyệt
            $('#result-cau7-b9').html(response);
        }
        });
    });
    });

</script>

<!-- Câu 8. Viết chương trình giải phương trình bậc 2. -->
<script>
    $(document).ready(function() {
    $('#form-cau8-b9').submit(function(event) {
        event.preventDefault(); // ngăn chặn form submit

        // lấy giá trị của hai số a và b từ form
        var a89 = $('#a89').val();
        var b89 = $('#b89').val();
        var c89 = $('#c89').val();

        // gửi AJAX request đến file PHP để tính UCLN và BCNN
        $.ajax({
        url: 'calculate.php',
        type: 'POST',
        data: {a89: a89, b89: b89, c89: c89},
        success: function(response) {
            // hiển thị kết quả trả về tại trình duyệt
            $('#result-cau8-b9').html(response);
        }
        });
    });
});

</script>

</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="header fixed-top d-flex align-items-center">

    <div class="d-flex align-items-center justify-content-between">
      <a href="index.html" class="logo d-flex align-items-center">
        <img src="assets/img/logo.png" alt="">
        <span class="d-none d-lg-block">Admin</span>
      </a>
      <i class="bi bi-list toggle-sidebar-btn"></i>
    </div><!-- End Logo -->


    <nav class="header-nav ms-auto">
      <ul class="d-flex align-items-center">
        <li class="nav-item d-block d-lg-none">
          <a class="nav-link nav-icon search-bar-toggle " href="#">
            <i class="bi bi-search"></i>
          </a>
        </li><!-- End Search Icon-->

        <li class="nav-item dropdown">

          <a class="nav-link nav-icon" href="#" data-bs-toggle="dropdown">
            <i class="bi bi-bell"></i>
            <span class="badge bg-primary badge-number">4</span>
          </a><!-- End Notification Icon -->

          <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow notifications">
            <li class="dropdown-header">
              You have 4 new notifications
              <a href="#"><span class="badge rounded-pill bg-primary p-2 ms-2">View all</span></a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li class="notification-item">
              <i class="bi bi-exclamation-circle text-warning"></i>
              <div>
                <h4>Lorem Ipsum</h4>
                <p>Quae dolorem earum veritatis oditseno</p>
                <p>30 min. ago</p>
              </div>
            </li>

            <li>
              <hr class="dropdown-divider">
            </li>

            <li class="notification-item">
              <i class="bi bi-x-circle text-danger"></i>
              <div>
                <h4>Atque rerum nesciunt</h4>
                <p>Quae dolorem earum veritatis oditseno</p>
                <p>1 hr. ago</p>
              </div>
            </li>

            <li>
              <hr class="dropdown-divider">
            </li>

            <li class="notification-item">
              <i class="bi bi-check-circle text-success"></i>
              <div>
                <h4>Sit rerum fuga</h4>
                <p>Quae dolorem earum veritatis oditseno</p>
                <p>2 hrs. ago</p>
              </div>
            </li>

            <li>
              <hr class="dropdown-divider">
            </li>

            <li class="notification-item">
              <i class="bi bi-info-circle text-primary"></i>
              <div>
                <h4>Dicta reprehenderit</h4>
                <p>Quae dolorem earum veritatis oditseno</p>
                <p>4 hrs. ago</p>
              </div>
            </li>

            <li>
              <hr class="dropdown-divider">
            </li>
            <li class="dropdown-footer">
              <a href="#">Show all notifications</a>
            </li>

          </ul><!-- End Notification Dropdown Items -->

        </li><!-- End Notification Nav -->

        <li class="nav-item dropdown">

          <a class="nav-link nav-icon" href="#" data-bs-toggle="dropdown">
            <i class="bi bi-chat-left-text"></i>
            <span class="badge bg-success badge-number">3</span>
          </a><!-- End Messages Icon -->

          <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow messages">
            <li class="dropdown-header">
              You have 3 new messages
              <a href="#"><span class="badge rounded-pill bg-primary p-2 ms-2">View all</span></a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li class="message-item">
              <a href="#">
                <img src="assets/img/messages-1.jpg" alt="" class="rounded-circle">
                <div>
                  <h4>Maria Hudson</h4>
                  <p>Velit asperiores et ducimus soluta repudiandae labore officia est ut...</p>
                  <p>4 hrs. ago</p>
                </div>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li class="message-item">
              <a href="#">
                <img src="assets/img/messages-2.jpg" alt="" class="rounded-circle">
                <div>
                  <h4>Anna Nelson</h4>
                  <p>Velit asperiores et ducimus soluta repudiandae labore officia est ut...</p>
                  <p>6 hrs. ago</p>
                </div>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li class="message-item">
              <a href="#">
                <img src="assets/img/messages-3.jpg" alt="" class="rounded-circle">
                <div>
                  <h4>David Muldon</h4>
                  <p>Velit asperiores et ducimus soluta repudiandae labore officia est ut...</p>
                  <p>8 hrs. ago</p>
                </div>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li class="dropdown-footer">
              <a href="#">Show all messages</a>
            </li>

          </ul><!-- End Messages Dropdown Items -->

        </li><!-- End Messages Nav -->

        <li class="nav-item dropdown pe-3">

          <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
            <img src="assets/img/profile-img.jpg" alt="Profile" class="rounded-circle">
            <span class="d-none d-md-block dropdown-toggle ps-2"><?php echo $_SESSION['Name']; ?></span>
          </a><!-- End Profile Iamge Icon -->

          <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
            <li class="dropdown-header">
              <h6><?php echo $_SESSION['Name']; ?></h6>
              <span><?php echo $_SESSION['Email']; ?></span>
              <!-- <span>Quản trị viên</span> -->
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <a class="dropdown-item d-flex align-items-center" href="users-profile.html">
                <i class="bi bi-person"></i>
                <span>Trang cá nhân</span>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <a class="dropdown-item d-flex align-items-center" href="users-profile.html">
                <i class="bi bi-gear"></i>
                <span>Cài đặt</span>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <a class="dropdown-item d-flex align-items-center" href="pages-faq.html">
                <i class="bi bi-question-circle"></i>
                <span>Hỏi đáp?</span>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <a class="dropdown-item d-flex align-items-center" href="logout.php">
                <i class="bi bi-box-arrow-right"></i>
                <span>Đăng xuất</span>
              </a>
            </li>

          </ul><!-- End Profile Dropdown Items -->
        </li><!-- End Profile Nav -->

      </ul>
    </nav><!-- End Icons Navigation -->

  </header><!-- End Header -->

  <?php
    }else {
        header("Location: index.php");
    }

?>

