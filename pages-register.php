<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Đăng ký tài khoản</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

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

  <!-- =======================================================
  * Template Name: NiceAdmin - v2.4.1
  * Template URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <main>
    <div class="container">

      <section class="section register min-vh-100 d-flex flex-column align-items-center justify-content-center py-4">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-lg-4 col-md-6 d-flex flex-column align-items-center justify-content-center">

              <div class="d-flex justify-content-center py-4">
                <a href="index.html" class="logo d-flex align-items-center w-auto">
                  <img src="assets/img/logo.png" alt="">
                  <span class="d-none d-lg-block">NiceAdmin</span>
                </a>
              </div><!-- End Logo -->

              <div class="card mb-3">

                <div class="card-body">

                  <div class="pt-4 pb-2">
                    <h5 class="card-title text-center pb-0 fs-4">Đăng ký tài khoản</h5>
                    <?php if(isset($_GET['error'])) { ?>
                      <p class="text-center small" style="color: red;"><?php echo $_GET['error']; ?></p>
                    <?php } ?>
                   
                  </div>

                  <form class="row g-3 needs-validation" action="register-check.php" method="post" novalidate>
                    <div class="col-12">
                        <!-- trường họ tên -->
                        <?php if(isset($_GET['name'])) { ?>
                            <label for="yourName" class="form-label">Họ và tên</label>
                            <input type="text" name="name" class="form-control" value="<?php echo $_GET['name']; ?>" id="yourName" required>
                            <div class="invalid-feedback">Vui lòng nhập họ và tên!</div>

                            <?php } else { ?>
                            <label for="yourName" class="form-label">Họ và tên</label>
                            <input type="text" name="name" class="form-control" id="yourName" required>
                            <div class="invalid-feedback">Vui lòng nhập họ và tên!</div>
                        <?php }?>
                     
                    </div>

                    

                    <div class="col-12">
                      <?php if(isset($_GET['email'])){ ?>
                        <label for="yourEmail" class="form-label">Email</label>
                        <input type="email" name="email" value="<?php echo $_GET['email']; ?>" class="form-control" id="yourEmail" required>
                        <div class="invalid-feedback">Vui lòng nhập địa chỉ email!</div>
                      <?php } else { ?>

                        <label for="yourEmail" class="form-label">Email</label>
                        <input type="email" name="email" class="form-control" id="yourEmail" required>
                        <div class="invalid-feedback">Vui lòng nhập địa chỉ email!</div>

                      <?php } ?>
                    </div>

                    <div class="col-12">
                      <?php  if(isset($_GET['uname'])) {?>
                        <label class="form-label">Tài khoản</label>
                        <input type="text" name="uname" value="<?php echo $_GET['uname']; ?>" class="form-control" required>
                        <div class="invalid-feedback">Vui lòng nhập tên tài khoản!</div>
                        <?php } else { ?>

                          <label class="form-label">Tài khoản</label>
                          <input type="text" name="uname" class="form-control" required>
                          <div class="invalid-feedback">Vui lòng nhập tên tài khoản!</div>

                        <?php } ?>
                    </div>
                    
                    <div class="col-12">
                      <label class="form-label">Mật khẩu</label>
                      <input type="password" name="password" class="form-control"  required>
                      <div class="invalid-feedback">Vui lòng nhập mật khẩu!</div>
                    </div>
                    <div class="col-12">
                      <label class="form-label">Nhập lại mật khẩu</label>
                      <input type="password" name="re_password" class="form-control" required>
                      <div class="invalid-feedback">Vui lòng nhập lại mật khẩu!</div>
                    </div>

                    <div class="col-12">
                      <div class="form-check">
                        <input class="form-check-input" name="terms" type="checkbox" value="" id="acceptTerms" required>
                        <label class="form-check-label" for="acceptTerms">Đồng ý và chấp nhận các <a href="#">điều khoản</a></label>
                        <div class="invalid-feedback">Vui lòng đọc điều khoản và chấp nhận!</div>
                      </div>
                    </div>
                    <div class="col-12">
                      <button class="btn btn-primary w-100" type="submit">Đăng ký</button>
                    </div>
                    <div class="col-12">
                      <p class="small mb-0">Bạn đã có tài khoản? <a href="index.php">Đăng nhập</a></p>
                    </div>
                  </form>

                </div>
              </div>

              <div class="credits">
                <!-- All the links in the footer should remain intact. -->
                <!-- You can delete the links only if you purchased the pro version. -->
                <!-- Licensing information: https://bootstrapmade.com/license/ -->
                <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/ -->
                Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
              </div>

            </div>
          </div>
        </div>

      </section>

    </div>
  </main><!-- End #main -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/apexcharts/apexcharts.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/chart.js/chart.min.js"></script>
  <script src="assets/vendor/echarts/echarts.min.js"></script>
  <script src="assets/vendor/quill/quill.min.js"></script>
  <script src="assets/vendor/simple-datatables/simple-datatables.js"></script>
  <script src="assets/vendor/tinymce/tinymce.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>