<?php
    include "header.php";
?>


<?php
    include "sidebar.php";

?>


<main id="main" class="main">

<div class="pagetitle">
  <h1>Bài thực hành 06 - Mảng trong PHP</h1>
  <nav>
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="index.html">Trang chủ</a></li>
      <li class="breadcrumb-item">Thực hành 06</li>
      <li class="breadcrumb-item active">Chi tiết</li>
    </ol>
  </nav>
</div><!-- End Page Title -->

<section class="section">
  <div class="row">
    <div class="col-lg-12">

      <div class="card">
        <div class="card-body">
         <?php 
            $schools = array(
                "students" => array(
                    array(
                        "hoten" => "Nguyễn Hữu Nhật",
                        "ngaysinh" => "22-09-2002",
                        "gioitinh" => "Nam",
                        "DTB" => 8.0,
                    ),

                    array(
                        "hoten" => "Phan Thị C",
                        "ngaysinh" => "22-09-2002",
                        "gioitinh" => "Nữ",
                        "DTB" => 9.0,
                    ),
                    array(
                        "hoten" => "Nguyễn Hữu A",
                        "ngaysinh" => "22-09-2002",
                        "gioitinh" => "Nam",
                        "DTB" => 10.0,
                    ),
                    array(
                        "hoten" => "Nguyễn Hữu B",
                        "ngaysinh" => "22-09-2002",
                        "gioitinh" => "Nam",
                        "DTB" => 7.0,
                    ),
                    array(
                        "hoten" => "Nguyễn Hữu C",
                        "ngaysinh" => "22-09-2002",
                        "gioitinh" => "Nam",
                        "DTB" => 8.5,
                    )
                    
                ),
                "teacher" => array(
                    array(
                        "hoten" => "Võ Đức Quang",
                        "ngaysinh" => "22-09-2002",
                        "gioitinh" => "Nam",
                        "hocphan" => "Mã Nguồn mở",
                    ),
                    array(
                        "hoten" => "Hoàng Hữu Việt",
                        "ngaysinh" => "22-09-2002",
                        "gioitinh" => "Nam",
                        "hocphan" => "Trí tuệ nhân tạo",
                    ),
                    array(
                        "hoten" => "Cao Thanh Sơn",
                        "ngaysinh" => "22-09-2002",
                        "gioitinh" => "Nam",
                        "hocphan" => "Lập trình web",
                    ),
                )
            )
         
         ?>
          <h5 class="card-title">Hiển thị danh sách students</h5>

          <!-- Default Table -->
          <table class="table">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Họ và tên</th>
                <th scope="col">Ngày sinh</th>
                <th scope="col">Giới tính</th>
                <th scope="col">ĐTB</th>
              </tr>
            </thead>
            <tbody>
                    <?php 
                        $count = 1;
                        foreach($schools['students'] as $student) { ?>
                            <tr>
                                <th scope="row"><?php echo $count; ?></th>
                                <td><?php echo $student['hoten']; ?></td>
                                <td><?php echo $student['ngaysinh']; ?></td>
                                <td><?php echo $student['gioitinh']; ?></td>
                                <td><?php echo $student['DTB']; ?></td>
                            </tr>

                            <?php $count++; ?>
                  <?php } ?>
              
            </tbody>
          </table>
          <!-- End Default Table Example -->
        </div>
      </div>

      <div class="card">
        <div class="card-body">
          <h5 class="card-title">Hiển thị danh sách teachers</h5>

          <!-- Dark Table -->
          <table class="table">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Họ và tên</th>
                <th scope="col">Ngày sinh</th>
                <th scope="col">Giới tính</th>
                <th scope="col">Học phần</th>
              </tr>
            </thead>
            <tbody>
                    <?php 
                        $count = 1;
                        foreach($schools['teacher'] as $teacher) { ?>
                            <tr>
                                <th scope="row"><?php echo $count; ?></th>
                                <td><?php echo $teacher['hoten']; ?></td>
                                <td><?php echo $teacher['ngaysinh']; ?></td>
                                <td><?php echo $teacher['gioitinh']; ?></td>
                                <td><?php echo $teacher['hocphan']; ?></td>
                            </tr>

                            <?php $count++; ?>
                    <?php } ?>
            </tbody>
          </table>
          <!-- End Dark Table -->

        </div>
      </div>

    </div>

   
  </div>
</section>

</main><!-- End #main -->


<?php
  include "footer.php";
?>