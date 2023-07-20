<?php
    include "header.php";
?>


<?php
    include "sidebar.php";

?>



<main id="main" class="main">

    <div class="pagetitle">
        <h1>List Group</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.html">Trang chủ</a></li>
                <li class="breadcrumb-item">Danh sách</li>
                <li class="breadcrumb-item active">Danh sách bài tập thực hành trong slide</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <section class="section">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Danh sách thực hành trong slide</h5>

                        <!-- Default Accordion -->
                        <div class="accordion" id="accordionExample">
                            <div class="accordion-item">
                                <h2>Khai báo biến</h2>
                                <div>
                                    <?php
                                        echo "Cách 1: ";

                                        $fullname = "Nguyễn Hữu Nhật <br>";
                                        echo $fullname;


                                        echo "Cách 2: Hiển thị chung với chuỗi, Thêm dấu . hoặc dấu , <br>";
                                        echo "Họ và tên: " .$fullname;


                                        echo "Cách 3: ";
                                        echo "Họ và tên: {$fullname} <br>";

                                        echo " Lấy giá trị biến làm tên biến <br>";

                                        $fullname1 = "MyString";
                                        $$fullname1 = "Nguyễn Văn A <br>";
                                        echo $MyString;
                                    
                                    ?>
                                </div>
                            </div>
                           
                        </div><!-- End Default Accordion Example -->

                    </div>
                </div>
            </div>


        </div>


       


        </div>

        </div>
    </section>

</main><!-- End #main -->


<?php
  include "footer.php";
?>