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
                <li class="breadcrumb-item active">Danh sách bài tập thực hành 05</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <section class="section">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Danh sách thực hành 05 - Buổi 08</h5>

                        <!-- Default Accordion -->
                        <div class="accordion" id="accordionExample">
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingOne">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                        Câu 1. Viết chương trình sử dụng dấu * để vẽ tam giác và hình chữ nhật.
                                    </button>
                                </h2>
                                <div id="collapseOne" class="accordion-collapse collapse show"
                                    aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                    <div class="accordion-body accordion__body-box">
                                        <div id="box" style="margin: 0 auto; width: 80%; border: 2px solid blue; border-radius: 7px;">
                                            <div class="tieude" style=" padding: 10px 15px; background: blue; color: #fff; font-weight: bold;">
                                                Viết chương trình sử dụng dấu * để vẽ tam giác và hình chữ nhật.
                                            </div>
                                            <div class="noidung" style=" padding: 15px; text-align: justify;">
                                                            <?php
                                                                $rows = 10;

                                                                for ($i = 1; $i <= $rows; $i++) {
                                                                  for ($j = 1; $j <= $i; $j++) {
                                                                    echo '*';
                                                                  echo '  ';
                                                                  echo '  ';

                                                                  }
                                                                  echo '<br>';
                                                                }
                                                                
                                                                
                                                            ?>
                                                   
                                                <button type="button" class="btn btn-secondary" data-bs-toggle="modal" data-bs-target="#Cau1-b8"><i class="bi bi-code"></i> Code</button>
                                            </div>


                                            <div class="modal fade" id="Cau1-b8" tabindex="-1">
                                                    <div class="modal-dialog modal-xl">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title">Mã nguồn của bài toán</h5>
                                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <div class="body-code"> 
                                                                <div class="container-code">
                                                                        <p class="language-code" id="language-copy"><strong># Hàm PHP</strong></p>
                                                                        <div class="code-wrapper">
<pre class="line-numbers">
<code class="language-php" id="code">&lt;?php
    $rows = 10;

    for ($i = 1; $i &lt;= $rows; $i++) {
        for ($j = 1; $j &lt;= $i; $j++) {
        echo &apos;*&apos;;
        echo &apos;  &apos;;
        echo &apos;  &apos;;

        }
        echo &apos;&lt;br&gt;&apos;;
    }
    
?&gt;</code>
</pre>
                                                                        <!-- <button id="copy-button">Copy</button> -->
                                                                    </div>
                                                                    <!-- <span id="copy-success">Bạn đã copy code :)</span> -->
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Đóng</button>
                                                        <!-- <button type="button" class="btn btn-primary">Save changes</button> -->
                                                        </div>
                                                    </div>
                                                    </div>
                                                </div><!-- End Extra Large Modal-->

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingTwo">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                        Câu 2. Viết chương trình in ra bảng cứu chương.
                                    </button>
                                </h2>
                                <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                                    data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <div id="box" style="margin: 0 auto; width: 80%; border: 2px solid blue; border-radius: 7px;">
                                            <div class="tieude" style=" padding: 10px 15px; background: blue; color: #fff; font-weight: bold;">
                                                Viết chương trình in ra bảng cứu chương.
                                            </div>
                                            <div class="noidung" style=" padding: 15px; text-align: justify;">
                                                
                                                            
                                                        <table style="width: 100%;">
                                                                <tr>
                                                                    <?php
                                                                    for($i = 1; $i < 10; $i ++) {
                                                                        echo "<td style='marigin-right: 3px; border: 2px solid;'>";
                                                                        for($j = 1; $j <= 10; $j ++) {
                                                                            echo "$i x $j = " . ($i * $j);
                                                                            echo "<br>";
                                                                        }
                                                                        echo "</td>";
                                                                    }
                                                                    ?>
                                                                </tr>
                                                        </table>
                                                   
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingThree">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseThree" aria-expanded="false"
                                        aria-controls="collapseThree">
                                        Câu 3. Viết chương trình tính tổng các số lẻ từ 1 đến n.
                                    </button>
                                </h2>
                                <div id="collapseThree" class="accordion-collapse collapse display-block"
                                    aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                    <div id="box" style="margin: 0 auto; width: 80%; border: 2px solid blue; border-radius: 7px;">
                                            <div class="tieude" style=" padding: 10px 15px; background: blue; color: #fff; font-weight: bold;">
                                                Viết chương trình tính tổng các số lẻ từ 1 đến n.
                                            </div>
                                            <div class="noidung" style=" padding: 15px; text-align: justify;">
                                                        <!-- Vertical Form -->
                                                        <form class="row g-3" id="form-cau3">
                                                                <div class="col-12">
                                                                    <label for="num" class="form-label">Nhập n</label>
                                                                    <input type="number" name="num" class="form-control" id="num" >
                                                                </div>

                                                                <div class="text-left">
                                                                    <button type="submit" class="btn btn-primary">Tính</button>
                                                                    <button type="button" class="btn btn-secondary" data-bs-toggle="modal" data-bs-target="#Cau3-b8"><i class="bi bi-code"></i> Code</button>
      
                                                                </div>

                                                        </form><!-- Vertical Form -->

                                                <div class="modal fade" id="Cau3-b8" tabindex="-1">
                                                    <div class="modal-dialog modal-xl">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title">Mã nguồn của bài toán</h5>
                                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <div class="body-code"> 
                                                                <div class="container-code">
                                                                        <p class="language-code" id="language-copy"><strong># Hàm PHP</strong></p>
                                                                        <div class="code-wrapper">
<pre class="line-numbers">
<code class="language-php" id="code">&lt;?php
    // Hàm tính tổng các số lẻ từ 1 -&gt; n
     function tong_so_le($n) {
        $tong = 0;
        for ($i = 1; $i &lt;= $n; $i++) {
            if ($i % 2 == 1) {
            $tong += $i;
            }
        }
        return $tong;
    }
?&gt;</code>
</pre>
                                                                        <!-- <button id="copy-button">Copy</button> -->
                                                                    </div>
                                                                    <!-- <span id="copy-success">Bạn đã copy code :)</span> -->
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Đóng</button>
                                                        <!-- <button type="button" class="btn btn-primary">Save changes</button> -->
                                                        </div>
                                                    </div>
                                                    </div>
                                                </div><!-- End Extra Large Modal-->

                                                        <h5 class="card-title" id="result-cau3"></h5>

                                                       
                                                        
                                                        
                                                    
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingThree">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapse4" aria-expanded="false"
                                        aria-controls="collapseThree">
                                        Câu 4. Viết chương trình tính tổng S = 1/2 + 1/4 + 1/6 ...+ 1/(2*n).
                                    </button>
                                </h2>
                                <div id="collapse4" class="accordion-collapse collapse"
                                    aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                    <div id="box" style="margin: 0 auto; width: 80%; border: 2px solid blue; border-radius: 7px;">
                                            <div class="tieude" style=" padding: 10px 15px; background: blue; color: #fff; font-weight: bold;">
                                                Viết chương trình tính tổng S = 1/2 + 1/4 + 1/6 ...+ 1/(2*n).

                                            </div>
                                            <div class="noidung" style=" padding: 15px; text-align: justify;">
                                                        <!-- Vertical Form -->
                                                        <form class="row g-3" id="form-cau4">
                                                                <div class="col-12">
                                                                    <label for="num-4" class="form-label">Nhập n</label>
                                                                    <input type="number" name="num-4" class="form-control" id="num-4">
                                                                </div>
                                                                
                                                                <div class="text-left">
                                                                    <button type="submit" class="btn btn-primary">Tính</button>
                                                                    <button type="button" class="btn btn-secondary" data-bs-toggle="modal" data-bs-target="#Cau4-b8"><i class="bi bi-code"></i> Code</button>
                                                                </div>

                                                        </form><!-- Vertical Form -->


                                                        <div class="modal fade" id="Cau4-b8" tabindex="-1">
                                                    <div class="modal-dialog modal-xl">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title">Mã nguồn của bài toán</h5>
                                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <div class="body-code"> 
                                                                <div class="container-code">
                                                                        <p class="language-code" id="language-copy"><strong># Hàm PHP</strong></p>
                                                                        <div class="code-wrapper">
<pre class="line-numbers">
<code class="language-php" id="code">&lt;?php
    // Hàm tính tổng S = 1/2 + 1/4 + 1/6 ...+ 1/(2*n).
    function tinh_tong($n) {
        $tong = 0;
        for ($i = 1; $i &lt;= $n; $i++) {
            $tong += 1 / (2*$i);
        }
        return $tong;
    }
?&gt;</code>
</pre>
                                                                        <!-- <button id="copy-button">Copy</button> -->
                                                                    </div>
                                                                    <!-- <span id="copy-success">Bạn đã copy code :)</span> -->
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Đóng</button>
                                                        <!-- <button type="button" class="btn btn-primary">Save changes</button> -->
                                                        </div>
                                                    </div>
                                                    </div>
                                                </div><!-- End Extra Large Modal-->


                                                        <h5 class="card-title" id="result-cau4"></h5>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingThree">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapse5" aria-expanded="false"
                                        aria-controls="collapseThree">
                                        Câu 5. Viết chương trình tính tổng S = 1 – 2 + 3 – 4 + ... + (-1)(n-1)*n.
                                    </button>
                                </h2>
                                <div id="collapse5" class="accordion-collapse collapse"
                                    aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                    <div id="box" style="margin: 0 auto; width: 80%; border: 2px solid blue; border-radius: 7px;">
                                            <div class="tieude" style=" padding: 10px 15px; background: blue; color: #fff; font-weight: bold;">
                                                Viết chương trình tính tổng S = 1 – 2 + 3 – 4 + ... + (-1)(n-1)*n.

                                            </div>
                                            <div class="noidung" style=" padding: 15px; text-align: justify;">
                                                        <!-- Vertical Form -->
                                                        <form class="row g-3" id="form-cau5">
                                                                <div class="col-12">
                                                                    <label for="num-5" class="form-label">Nhập n</label>
                                                                    <input type="number" name="num-5" class="form-control" id="num-5">
                                                                </div>
                                                                
                                                                <div class="text-left">
                                                                    <button type="submit" class="btn btn-primary">Tính</button>
                                                                    <button type="button" class="btn btn-secondary" data-bs-toggle="modal" data-bs-target="#Cau5-b8"><i class="bi bi-code"></i> Code</button>
                                                                </div>

                                                        </form><!-- Vertical Form -->


                                                        
                                                <div class="modal fade" id="Cau5-b8" tabindex="-1">
                                                    <div class="modal-dialog modal-xl">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title">Mã nguồn của bài toán</h5>
                                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <div class="body-code"> 
                                                                <div class="container-code">
                                                                        <p class="language-code" id="language-copy"><strong># Hàm PHP</strong></p>
                                                                        <div class="code-wrapper">
<pre class="line-numbers">
<code class="language-php" id="code">&lt;?php
// Hàm tính tổng S = 1 – 2 + 3 – 4 + ... + (-1)(n-1)*n.
function tinh_tong($n) {
    $tong = 0;
    for ($i = 1; $i &lt;= $n; $i++) {
        if ($i % 2 == 0) {
        $tong -= $i;
        } else {
        $tong += $i;
        }
    }
    return $tong;
}
?&gt;</code>
</pre>
                                                                        <!-- <button id="copy-button">Copy</button> -->
                                                                    </div>
                                                                    <!-- <span id="copy-success">Bạn đã copy code :)</span> -->
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Đóng</button>
                                                        <!-- <button type="button" class="btn btn-primary">Save changes</button> -->
                                                        </div>
                                                    </div>
                                                    </div>
                                                </div><!-- End Extra Large Modal-->


                                                        <h5 class="card-title" id="result-cau5"></h5>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingThree">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapse6" aria-expanded="false"
                                        aria-controls="collapseThree">
                                        Câu 6. Viết chương trình tính giai thừa của n.
                                    </button>
                                </h2>
                                <div id="collapse6" class="accordion-collapse collapse"
                                    aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                    <div id="box" style="margin: 0 auto; width: 80%; border: 2px solid blue; border-radius: 7px;">
                                            <div class="tieude" style=" padding: 10px 15px; background: blue; color: #fff; font-weight: bold;">
                                                Viết chương trình tính giai thừa của n.

                                            </div>
                                            <div class="noidung" style=" padding: 15px; text-align: justify;">
                                                <!-- Vertical Form -->
                                                <form class="row g-3" id="form-cau6">
                                                        <div class="col-12">
                                                            <label for="num-6" class="form-label">Nhập n</label>
                                                            <input type="number" name="num-6" class="form-control" id="num-6">
                                                        </div>
                                                        
                                                        <div class="text-left">
                                                            <button type="submit" class="btn btn-primary">Tính</button>
                                                            <button type="button" class="btn btn-secondary" data-bs-toggle="modal" data-bs-target="#Cau6-b8"><i class="bi bi-code"></i> Code</button>
                                                        </div>

                                                </form><!-- Vertical Form -->

                                                         
                                                <div class="modal fade" id="Cau6-b8" tabindex="-1">
                                                    <div class="modal-dialog modal-xl">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title">Mã nguồn của bài toán</h5>
                                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <div class="body-code"> 
                                                                <div class="container-code">
                                                                        <p class="language-code" id="language-copy"><strong># Hàm PHP</strong></p>
                                                                        <div class="code-wrapper">
<pre class="line-numbers">
<code class="language-php" id="code">&lt;?php
    // Hàm tính giai thừa của n.
    function factorial($n) {
        if ($n == 0) {
            return 1;
        } else {
            return $n * factorial($n - 1);
        }
    }
?&gt;</code>
</pre>
                                                                        <!-- <button id="copy-button">Copy</button> -->
                                                                    </div>
                                                                    <!-- <span id="copy-success">Bạn đã copy code :)</span> -->
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Đóng</button>
                                                        <!-- <button type="button" class="btn btn-primary">Save changes</button> -->
                                                        </div>
                                                    </div>
                                                    </div>
                                                </div><!-- End Extra Large Modal-->




                                                <h5 class="card-title" id="result-cau6"></h5>
                                                    
                                                   
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingThree">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapse7" aria-expanded="false"
                                        aria-controls="collapseThree">
                                        Câu 7. Viết chương trình tính số fibonaxi thứ n.
                                    </button>
                                </h2>
                                <div id="collapse7" class="accordion-collapse collapse"
                                    aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                    <div id="box" style="margin: 0 auto; width: 80%; border: 2px solid blue; border-radius: 7px;">
                                            <div class="tieude" style=" padding: 10px 15px; background: blue; color: #fff; font-weight: bold;">
                                                Viết chương trình tính số fibonaxi thứ n.
                                            </div>
                                            <div class="noidung" style=" padding: 15px; text-align: justify;">
                                                <form class="row g-3" id="form-cau7">
                                                        <div class="col-12">
                                                            <label for="num-7" class="form-label">Nhập n</label>
                                                            <input type="number" name="num-7" class="form-control" id="num-7">
                                                        </div>
                                                        
                                                        <div class="text-left">
                                                            <button type="submit" class="btn btn-primary">Tính</button>
                                                            <button type="button" class="btn btn-secondary" data-bs-toggle="modal" data-bs-target="#Cau7-b8"><i class="bi bi-code"></i> Code</button>
                                                        </div>

                                                </form><!-- Vertical Form -->


                                                          
                                                <div class="modal fade" id="Cau7-b8" tabindex="-1">
                                                    <div class="modal-dialog modal-xl">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title">Mã nguồn của bài toán</h5>
                                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <div class="body-code"> 
                                                                <div class="container-code">
                                                                        <p class="language-code" id="language-copy"><strong># Hàm PHP</strong></p>
                                                                        <div class="code-wrapper">
<pre class="line-numbers">
<code class="language-php" id="code">function fibonacci($n) {
    if ($n == 0) {
        return 0;
    } else if ($n == 1) {
        return 1;
    } else {
        return fibonacci($n-1) + fibonacci($n-2);
    }
}</code>
</pre>
                                                                        <!-- <button id="copy-button">Copy</button> -->
                                                                    </div>
                                                                    <!-- <span id="copy-success">Bạn đã copy code :)</span> -->
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Đóng</button>
                                                        <!-- <button type="button" class="btn btn-primary">Save changes</button> -->
                                                        </div>
                                                    </div>
                                                    </div>
                                                </div><!-- End Extra Large Modal-->




                                                <h5 class="card-title" id="result-cau7"></h5>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingThree">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapse8" aria-expanded="false"
                                        aria-controls="collapseThree">
                                        Câu 8. Viết chương trình tính tổng các số fibonaxi từ 1 đến n.
                                    </button>
                                </h2>
                                <div id="collapse8" class="accordion-collapse collapse"
                                    aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                    <div id="box" style="margin: 0 auto; width: 80%; border: 2px solid blue; border-radius: 7px;">
                                            <div class="tieude" style=" padding: 10px 15px; background: blue; color: #fff; font-weight: bold;">
                                                Câu 8. Viết chương trình tính tổng các số fibonaxi từ 1 đến n.
                                            </div>
                                            <div class="noidung" style=" padding: 15px; text-align: justify;">
                                                <form class="row g-3" id="form-cau8">
                                                        <div class="col-12">
                                                            <label for="num-8" class="form-label">Nhập n</label>
                                                            <input type="number" name="num-8" class="form-control" id="num-8">
                                                        </div>
                                                        
                                                        <div class="text-left">
                                                            <button type="submit" class="btn btn-primary">Tính</button>
                                                            <button type="button" class="btn btn-secondary" data-bs-toggle="modal" data-bs-target="#Cau8-b8"><i class="bi bi-code"></i> Code</button>
                                                        </div>

                                                </form><!-- Vertical Form -->

                                                <div class="modal fade" id="Cau8-b8" tabindex="-1">
                                                    <div class="modal-dialog modal-xl">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title">Mã nguồn của bài toán</h5>
                                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <div class="body-code"> 
                                                                <div class="container-code">
                                                                        <p class="language-code" id="language-copy"><strong># Hàm PHP</strong></p>
                                                                        <div class="code-wrapper">
<pre class="line-numbers">
<code class="language-php" id="code">&lt;?php
    function fibonacci_sum($n) {
        // Khởi tạo hai số Fibonacci đầu tiên
        $fibonacci_prev = 0;
        $fibonacci_curr = 1;
        $sum = $fibonacci_prev + $fibonacci_curr;
    
        // Tính toán các số Fibonacci từ 2 đến n và tính tổng của chúng
        for ($i = 2; $i &lt;= $n; $i++) {
            $fibonacci_next = $fibonacci_prev + $fibonacci_curr;
            $sum += $fibonacci_next;
            $fibonacci_prev = $fibonacci_curr;
            $fibonacci_curr = $fibonacci_next;
        }
    
        return $sum;
    }
?&gt;</code>
</pre>
                                                                        <!-- <button id="copy-button">Copy</button> -->
                                                                    </div>
                                                                    <!-- <span id="copy-success">Bạn đã copy code :)</span> -->
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Đóng</button>
                                                        <!-- <button type="button" class="btn btn-primary">Save changes</button> -->
                                                        </div>
                                                    </div>
                                                    </div>
                                                </div><!-- End Extra Large Modal-->


                                                <h5 class="card-title" id="result-cau8"></h5>
                                                    
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div><!-- End Default Accordion Example -->

                    </div>
                </div>
            </div>


            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Danh sách thực hành 05 - Buổi 09</h5>

                        <!-- Default Accordion -->
                        <div class="accordion" id="accordionExample">
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingOne">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapse9" aria-expanded="true" aria-controls="collapseOne">
                                        Câu 1. Viết chương trình kiểm tra n có phải là số nguyên tố hay không?
                                    </button>
                                </h2>
                                <div id="collapse9" class="accordion-collapse collapse"
                                    aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <div id="box" style="margin: 0 auto; width: 80%; border: 2px solid blue; border-radius: 7px;">
                                            <div class="tieude" style=" padding: 10px 15px; background: blue; color: #fff; font-weight: bold;">
                                                Viết chương trình kiểm tra n có phải là số nguyên tố hay không
                                            </div>
                                            <div class="noidung" style=" padding: 15px; text-align: justify;">
                                                             <!-- Vertical Form -->
                                                            <form class="row g-3" id="form-cau1-b9">
                                                                    <div class="col-12">
                                                                        <label for="num-1-b9" class="form-label">Nhập n</label>
                                                                        <input type="text" name="num-1-b9" class="form-control" id="num-1-b9">
                                                                    </div>
                                                                        
                                                                    <div class="text-left">
                                                                        <button type="submit" class="btn btn-primary">Tính</button>
                                                                        <button type="button" class="btn btn-secondary" data-bs-toggle="modal" data-bs-target="#Cau1-b9"><i class="bi bi-code"></i> Code</button>

                                                                    </div>
                                                            </form><!-- Vertical Form -->

                                                <div class="modal fade" id="Cau1-b9" tabindex="-1">
                                                    <div class="modal-dialog modal-xl">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title">Mã nguồn của bài toán</h5>
                                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <div class="body-code"> 
                                                                <div class="container-code">
                                                                        <p class="language-code" id="language-copy"><strong># Hàm PHP</strong></p>
                                                                        <div class="code-wrapper">
<pre class="line-numbers">
<code class="language-php" id="code">// Hàm kiểm tra số nguyên tố
function isPrime($n) {
    if ($n &lt;= 1) {
        return false;
    }
    for ($i = 2; $i &lt;= sqrt($n); $i++) {
        if ($n % $i == 0) {
        return false;
        }
    }
    return true;
}</code>
</pre>
                                                                        <!-- <button id="copy-button">Copy</button> -->
                                                                    </div>
                                                                    <!-- <span id="copy-success">Bạn đã copy code :)</span> -->
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Đóng</button>
                                                        <!-- <button type="button" class="btn btn-primary">Save changes</button> -->
                                                        </div>
                                                    </div>
                                                    </div>
                                                </div><!-- End Extra Large Modal-->

                                                            <h5 class="card-title" id="result-cau1-b9"></h5>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingTwo">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapse10" aria-expanded="false" aria-controls="collapseTwo">
                                        Câu 2. Viết chương trình hiển thị các số nguyên tố từ 1 đến n.
                                    </button>
                                </h2>
                                <div id="collapse10" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                                    data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <div id="box" style="margin: 0 auto; width: 80%; border: 2px solid blue; border-radius: 7px;">
                                            <div class="tieude" style=" padding: 10px 15px; background: blue; color: #fff; font-weight: bold;">
                                                Viết chương trình hiển thị các số nguyên tố từ 1 đến n.
                                            </div>
                                            <div class="noidung" style=" padding: 15px; text-align: justify;">
                                                <!-- Vertical Form -->
                                                <form class="row g-3" id="form-cau2-b9">
                                                        <div class="col-12">
                                                            <label for="num-2-b9" class="form-label">Nhập n</label>
                                                            <input type="number" name="num-2-b9" class="form-control" id="num-2-b9">
                                                        </div>
                                                            
                                                        <div class="text-left">
                                                            <button type="submit" class="btn btn-primary">Tính</button>
                                                            <button type="button" class="btn btn-secondary" data-bs-toggle="modal" data-bs-target="#Cau2-b9"><i class="bi bi-code"></i> Code</button>

                                                        </div>
                                                </form><!-- Vertical Form -->
                                                
                                                <div class="modal fade" id="Cau2-b9" tabindex="-1">
                                                    <div class="modal-dialog modal-xl">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title">Mã nguồn của bài toán</h5>
                                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <div class="body-code"> 
                                                                <div class="container-code">
                                                                        <p class="language-code" id="language-copy"><strong># Hàm PHP</strong></p>
                                                                        <div class="code-wrapper">
<pre class="line-numbers">
<code class="language-php" id="code">// Hàm kiểm tra số nguyên tố
function isPrime($n) {
    if ($n &lt;= 1) {
        return false;
    }
    for ($i = 2; $i &lt;= sqrt($n); $i++) {
        if ($n % $i == 0) {
        return false;
        }
    }
    return true;
}

// Hàm in ra các số nguyên tố
function printPrimes($n) {
    for ($i = 2; $i &lt;= $n; $i++) {
        if (isPrime($i)) {
        echo $i . &quot; &quot;;

        }
    }
}</code>
</pre>
                                                                        <!-- <button id="copy-button">Copy</button> -->
                                                                    </div>
                                                                    <!-- <span id="copy-success">Bạn đã copy code :)</span> -->
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Đóng</button>
                                                        <!-- <button type="button" class="btn btn-primary">Save changes</button> -->
                                                        </div>
                                                    </div>
                                                    </div>
                                                </div><!-- End Extra Large Modal-->
                                                

                                                <h5 class="card-title" id="result-cau2-b9"></h5>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingTwo">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapse11" aria-expanded="false" aria-controls="collapseTwo">
                                        Câu 3. Viết chương trình kiểm tra n có phải là số hoàn hảo hay không
                                    </button>
                                </h2>
                                <div id="collapse11" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                                    data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <div id="box" style="margin: 0 auto; width: 80%; border: 2px solid blue; border-radius: 7px;">
                                            <div class="tieude" style=" padding: 10px 15px; background: blue; color: #fff; font-weight: bold;">
                                                Viết chương trình kiểm tra n có phải là số hoàn hảo hay không
                                            </div>
                                            <div class="noidung" style=" padding: 15px; text-align: justify;">
                                                <!-- Vertical Form -->
                                                <form class="row g-3" id="form-cau3-b9">
                                                        <div class="col-12">
                                                            <label for="num-3-b9" class="form-label">Nhập n</label>
                                                            <input type="number" name="num-3-b9" class="form-control" id="num-3-b9">
                                                        </div>
                                                            
                                                        <div class="text-left">
                                                            <button type="submit" class="btn btn-primary">Tính</button>
                                                            <button type="button" class="btn btn-secondary" data-bs-toggle="modal" data-bs-target="#Cau3-b9"><i class="bi bi-code"></i> Code</button>
                                                        </div>
                                                </form><!-- Vertical Form -->
                                                
                                                <div class="modal fade" id="Cau3-b9" tabindex="-1">
                                                    <div class="modal-dialog modal-xl">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                        <h5 class="modal-title">Mã nguồn của bài toán</h5>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                        </div>
                                                        <div class="modal-body">
                                                        <div class="body-code"> 
                                                            <div class="container-code">
                                                                    <p class="language-code" id="language-copy"><strong># Hàm PHP</strong></p>
                                                                    
                                                                    <div class="code-wrapper">
<pre class="line-numbers">
<code class="language-php" id="code">function isPerfectNumber($n) {
    // Khởi tạo tổng các ước của $n bằng 0
    $sum = 0;
    // Lặp qua các ước của $n từ 1 đến $n/2
    for ($i = 1; $i &lt;= $n / 2; $i++) {
        // Nếu $i là ước của $n, thêm $i vào tổng các ước
        if ($n % $i == 0) {
            $sum += $i;
        }
    }
    // Kiểm tra tổng các ước có bằng $n hay không
    if ($sum == $n) {
        return true;
    } else {
        return false;
    }
}
</code>
</pre>
                                                                        <!-- <button id="copy-button">Copy</button> -->
                                                                    </div>
                                                                    
                                                                    <!-- <span id="copy-success">Bạn đã copy code :)</span> -->
                                                                </div>


                                                                <!-- ///////////////////////// -->
                                                                <div class="container-code">
                                                                    <p class="language-code">Hàm này sẽ trả về <strong>true</strong> nếu số được truyền vào là một số hoàn hảo và <strong>false</strong> nếu không phải. Để sử dụng hàm này, chỉ cần gọi hàm <strong>isPerfectNumber($n)</strong> với giá trị cần kiểm tra.</p>
                                                                    <p>Ví dụ: </p>
                                                                    <div class="code-wrapper">
<pre class="line-numbers">
<code class="language-php" id="code">// Kiểm tra số 6 có phải là số hoàn hảo hay không
if (isPerfectNumber(6)) {
    echo &quot;6 là số hoàn hảo.&quot;;
} else {
    echo &quot;6 không phải là số hoàn hảo.&quot;;
}</code>
</pre>
                                                                        <!-- <button id="copy-button">Copy</button> -->
                                                                    </div>
                                                                    <p>Kết quả sẽ là: <strong>6 là số hoàn hảo.</strong> </p>
                                                                    <!-- <span id="copy-success">Bạn đã copy code :)</span> -->
                                                                </div>

                                                                <!-- ////////////////////////// -->
                                                                <div class="container-code">
                                                                    <div class="code-wrapper">
<pre class="line-numbers">
<code class="language-php" id="code">// Kiểm tra số 10 có phải là số hoàn hảo hay không
if (isPerfectNumber(10)) {
    echo &quot;10 là số hoàn hảo.&quot;;
} else {
    echo &quot;10 không phải là số hoàn hảo.&quot;;
}
</code>
</pre>
                                                                        <!-- <button id="copy-button">Copy</button> -->
                                                                    </div>
                                                                    <p>Kết quả sẽ là: <strong>10 không phải là số hoàn hảo.</strong></p>
                                                                    <!-- <span id="copy-success">Bạn đã copy code :)</span> -->
                                                                </div>

                                                            </div>
                                                        </div>
                                                        <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Đóng</button>
                                                        <!-- <button type="button" class="btn btn-primary">Save changes</button> -->
                                                        </div>
                                                    </div>
                                                    </div>
                                                </div><!-- End Extra Large Modal-->


                                                <h5 class="card-title" id="result-cau3-b9"></h5>
                                                   
                                               
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingTwo">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapse12" aria-expanded="false" aria-controls="collapseTwo">
                                        Câu 4. Viết chương trình in ra các số hoàn hảo từ 1 đến n.
                                    </button>
                                </h2>
                                <div id="collapse12" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                                    data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <div id="box" style="margin: 0 auto; width: 80%; border: 2px solid blue; border-radius: 7px;">
                                            <div class="tieude" style=" padding: 10px 15px; background: blue; color: #fff; font-weight: bold;">
                                                Viết chương trình in ra các số hoàn hảo từ 1 đến n.
                                            </div>
                                            <div class="noidung" style=" padding: 15px; text-align: justify;">
                                                <!-- Vertical Form -->
                                                <form class="row g-3" id="form-cau4-b9">
                                                        <div class="col-12">
                                                            <label for="num-4-b9" class="form-label">Nhập n</label>
                                                            <input type="number" name="num-4-b9" class="form-control" id="num-4-b9">
                                                        </div>
                                                            
                                                        <div class="text-left">
                                                            <button type="submit"  class="btn btn-primary">Tính</button>
                                                            <button type="button" class="btn btn-secondary" data-bs-toggle="modal" data-bs-target="#Cau4-b9"><i class="bi bi-code"></i> Code</button>
                                                        </div>
                                                </form><!-- Vertical Form -->
                                                
                                                
                                                <div class="modal fade" id="Cau4-b9" tabindex="-1">
                                                    <div class="modal-dialog modal-xl">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title">Mã nguồn của bài toán</h5>
                                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <div class="body-code"> 
                                                                <div class="container-code">
                                                                        <p class="language-code" id="language-copy"><strong># Hàm PHP</strong></p>
                                                                        <div class="code-wrapper">
<pre class="line-numbers">
<code class="language-php" id="code"> // Hàm kiểm tra số hoàn hảo
function isPerfect($n) {
    $sum = 0;
    for ($i = 1; $i &lt;= $n/2; $i++) {
        if ($n % $i == 0) {
        $sum += $i;
        }
    }
    if ($sum == $n) {
        return true;
    } else {
        return false;
    }
}

// Hàm in ra số hoàn hảo
function printPerfectNumbers($n) {
    for ($i = 1; $i &lt;= $n; $i++) {
        if (isPerfect($i)) {
            echo $i . &quot; &quot;;
        }
    }
}</code>
</pre>
                                                                        <!-- <button id="copy-button">Copy</button> -->
                                                                    </div>
                                                                    <!-- <span id="copy-success">Bạn đã copy code :)</span> -->
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Đóng</button>
                                                        <!-- <button type="button" class="btn btn-primary">Save changes</button> -->
                                                        </div>
                                                    </div>
                                                    </div>
                                                </div><!-- End Extra Large Modal-->


                                                <h5 class="card-title" id="result-cau4-b9"></h5>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingTwo">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapse13" aria-expanded="false" aria-controls="collapseTwo">
                                        Câu 5. Viết chương trình tính UCLN và BCNN của 2 số a, b.
                                    </button>
                                </h2>
                                <div id="collapse13" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                                    data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <div id="box" style="margin: 0 auto; width: 80%; border: 2px solid blue; border-radius: 7px;">
                                            <div class="tieude" style=" padding: 10px 15px; background: blue; color: #fff; font-weight: bold;">
                                                Viết chương trình tính UCLN và BCNN của 2 số a, b.
                                            </div>
                                            <div class="noidung" style=" padding: 15px; text-align: justify;">
                                                <!-- Vertical Form -->
                                                <form class="row g-3" id="form">
                                                        <div class="col-12">
                                                            <label for="num1" class="form-label">Nhập a</label>
                                                            <input type="number" name="num1" class="form-control" id="num1">
                                                        </div>
                                                        <div class="col-12">
                                                            <label for="num2" class="form-label">Nhập b</label>
                                                            <input type="number" name="num2" class="form-control" id="num2">
                                                        </div>
                                                            
                                                        <div class="text-left">
                                                            <button type="submit" class="btn btn-primary">Tính</button>
                                                            <button type="button" class="btn btn-secondary" data-bs-toggle="modal" data-bs-target="#Cau5-b9"><i class="bi bi-code"></i> Code</button>
                                                        </div>
                                                </form><!-- Vertical Form -->

                                                <div class="modal fade" id="Cau5-b9" tabindex="-1">
                                                    <div class="modal-dialog modal-xl">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                        <h5 class="modal-title">Mã nguồn của bài toán</h5>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                        </div>
                                                        <div class="modal-body">
                                                        <div class="body-code"> 
                                                            <div class="container-code">
                                                                    <p class="language-code" id="language-copy"><strong># Hàm PHP</strong></p>
                                                                    <div class="code-wrapper">
<pre class="line-numbers">
<code class="language-php" id="code">// Hàm tính ước chung lớn nhất
function findGCD($a, $b) {
    while ($b != 0) {
        $temp = $b;
        $b = $a % $b;
        $a = $temp;
    }
    return $a;
}

// Hàm tính bội chung nhỏ nhất
function findLCM($a, $b) {
    return ($a * $b) / findGCD($a, $b);
}

if($a !=0 || $b != 0) {
    $gcd = findGCD($a, $b);
    $lcm = findLCM($a, $b);
    
        // trả về kết quả dưới dạng HTML
    echo &quot;UCLN của $a và $b là: $gcd&lt;br&gt;&quot;;
    echo &quot;BCNN của $a và $b là: $lcm&quot;;

}</code>
</pre>
                                                                        <!-- <button id="copy-button">Copy</button> -->
                                                                    </div>
                                                                    <!-- <span id="copy-success">Bạn đã copy code :)</span> -->
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Đóng</button>
                                                        <!-- <button type="button" class="btn btn-primary">Save changes</button> -->
                                                        </div>
                                                    </div>
                                                    </div>
                                                </div><!-- End Extra Large Modal-->

                                                <h5 class="card-title" id="result"></h5>
                                               
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                          
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingTwo">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapse14" aria-expanded="false" aria-controls="collapseTwo">
                                        Câu 6. Viết chương trình tính tổng các chữ số của một số nguyên n
                                    </button>
                                </h2>
                                <div id="collapse14" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                                    data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <div id="box" style="margin: 0 auto; width: 80%; border: 2px solid blue; border-radius: 7px;">
                                            <div class="tieude" style=" padding: 10px 15px; background: blue; color: #fff; font-weight: bold;">
                                                Viết chương trình tính tổng các chữ số của một số nguyên n
                                            </div>
                                            <div class="noidung" style=" padding: 15px; text-align: justify;">
                                                <!-- Vertical Form -->
                                                <form class="row g-3" id="form-cau6-b9">
                                                        <div class="col-12">
                                                            <label for="num-6-b9" class="form-label">Nhập n</label>
                                                            <input type="number" name="num-6-b9" class="form-control" id="num-6-b9">
                                                        </div>
                                                              
                                                        <div class="text-left">
                                                            <button type="submit" class="btn btn-primary">Tính</button>
                                                            <button type="button" class="btn btn-secondary" data-bs-toggle="modal" data-bs-target="#Cau6-b9"><i class="bi bi-code"></i> Code</button>
                                                        </div>
                                                </form><!-- Vertical Form -->
                                                <div class="modal fade" id="Cau6-b9" tabindex="-1">
                                                    <div class="modal-dialog modal-xl">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                        <h5 class="modal-title">Mã nguồn của bài toán</h5>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                        </div>
                                                        <div class="modal-body">
                                                        <div class="body-code"> 
                                                            <div class="container-code">
                                                                    <p class="language-code" id="language-copy"><strong># Hàm PHP</strong></p>
                                                                    <div class="code-wrapper">
<pre class="line-numbers">
<code class="language-php" id="code"> function sum_of_digits($n) {
    $str_n = strval($n);
    $sum = 0;
    $expr = &quot;&quot;;
    for ($i = 0; $i &lt; strlen($str_n); $i++) {
        if ($i &gt; 0) {
            $expr .= &quot; + &quot;;
        }
        $digit = intval($str_n[$i]);
        $sum += $digit;
        $expr .= strval($digit);
    }
    $expr .= &quot; = &quot; . strval($sum);
    echo $expr;
 return $sum;
}</code>
</pre>
                                                                        <!-- <button id="copy-button">Copy</button> -->
                                                                    </div>
                                                                    <!-- <span id="copy-success">Bạn đã copy code :)</span> -->
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Đóng</button>
                                                        <!-- <button type="button" class="btn btn-primary">Save changes</button> -->
                                                        </div>
                                                    </div>
                                                    </div>
                                                </div><!-- End Extra Large Modal-->


                                                <h5 class="card-title" id="result-cau6-b9"></h5>
                                               
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                          

                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingTwo">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapse15" aria-expanded="false" aria-controls="collapseTwo">
                                        Câu 7. Viết chương giải phương trình bậc nhất.
                                    </button>
                                </h2>
                                <div id="collapse15" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                                    data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <div id="box" style="margin: 0 auto; width: 80%; border: 2px solid blue; border-radius: 7px;">
                                            <div class="tieude" style=" padding: 10px 15px; background: blue; color: #fff; font-weight: bold;">
                                                Viết chương giải phương trình bậc nhất.
                                            </div>
                                            <div class="noidung" style=" padding: 15px; text-align: justify;">
                                                <!-- Vertical Form -->
                                                <form class="row g-3" id="form-cau7-b9">
                                                        <div class="col-12">
                                                            <label for="a79" class="form-label">Nhập a</label>
                                                            <input type="number" name="a79" class="form-control" id="a79">
                                                        </div>

                                                        <div class="col-12">
                                                            <label for="b79" class="form-label">Nhập b</label>
                                                            <input type="number" name="b79" class="form-control" id="b79">
                                                        </div>
                                                              
                                                        <div class="text-left">
                                                            <button type="submit" class="btn btn-primary">Tính</button>
                                                            <button type="button" class="btn btn-secondary" data-bs-toggle="modal" data-bs-target="#Cau7-b9"><i class="bi bi-code"></i> Code</button>
                                                        </div>
                                                </form><!-- Vertical Form -->
                                                <div class="modal fade" id="Cau7-b9" tabindex="-1">
                                                    <div class="modal-dialog modal-xl">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                        <h5 class="modal-title">Mã nguồn của bài toán</h5>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                        </div>
                                                        <div class="modal-body">
                                                        <div class="body-code"> 
                                                            <div class="container-code">
                                                                    <p class="language-code" id="language-copy"><strong># Hàm PHP</strong></p>
                                                                    <div class="code-wrapper">
<pre class="line-numbers">
<code class="language-php" id="code">function giai_phuong_trinh_bac_nhat($a, $b) {
    if ($a == 0) {
        if ($b == 0) {
            echo &quot;Phương trình có vô số nghiệm&quot;;
        } else {
            echo &quot;Phương trình vô nghiệm&quot;;
        }
    } else {
        $x = -$b / $a;
        echo &quot;Nghiệm của phương trình là x = &quot; . $x;
    }
}</code>
</pre>
                                                                        <!-- <button id="copy-button">Copy</button> -->
                                                                    </div>
                                                                    <!-- <span id="copy-success">Bạn đã copy code :)</span> -->
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Đóng</button>
                                                        <!-- <button type="button" class="btn btn-primary">Save changes</button> -->
                                                        </div>
                                                    </div>
                                                    </div>
                                                </div><!-- End Extra Large Modal-->



                                                <h5 class="card-title" id="result-cau7-b9"> </h5>
                                               
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                          
                          
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingTwo">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapse16" aria-expanded="false" aria-controls="collapseTwo">
                                        Câu 8. Viết chương trình giải phương trình bậc 2.
                                    </button>
                                </h2>
                                <div id="collapse16" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                                    data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <div id="box" style="margin: 0 auto; width: 80%; border: 2px solid blue; border-radius: 7px;">
                                            <div class="tieude" style=" padding: 10px 15px; background: blue; color: #fff; font-weight: bold;">
                                                Giải phương trình ax2 + bx + c = 0 (a≠0).
                                            </div>
                                            <div class="noidung" style=" padding: 15px; text-align: justify;">
                                                <!-- Vertical Form -->
                                                <form class="row g-3" id="form-cau8-b9">
                                                        <div class="col-4">
                                                            <label for="a89" class="form-label">Nhập a</label>
                                                            <input type="number" name="a89" class="form-control" id="a89">
                                                        </div>

                                                        <div class="col-4">
                                                            <label for="b89" class="form-label">Nhập b</label>
                                                            <input type="number" name="b89" class="form-control" id="b89">
                                                        </div>

                                                        <div class="col-4">
                                                            <label for="c89" class="form-label">Nhập c</label>
                                                            <input type="number" name="c89" class="form-control" id="c89">
                                                        </div>
                                                              
                                                        <div class="text-left">
                                                            <button type="submit" class="btn btn-primary">Tính</button>
                                                            <button type="button" class="btn btn-secondary" data-bs-toggle="modal" data-bs-target="#Cau8-b9"><i class="bi bi-code"></i> Code</button>
                                                        </div>
                                                </form><!-- Vertical Form -->

                                                <!-- Extra Large Modal -->
                                                <div class="modal fade" id="Cau8-b9" tabindex="-1">
                                                    <div class="modal-dialog modal-xl">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                        <h5 class="modal-title">Mã nguồn của bài toán</h5>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                        </div>
                                                        <div class="modal-body">
                                                        <div class="body-code"> 
                                                            <div class="container-code">
                                                                    <p class="language-code" id="language-copy"># Hàm PHP</p>
                                                                    <div class="code-wrapper">
<pre class="line-numbers">
<code class="language-php" id="code"> function giai_phuong_trinh_bac_hai($a, $b, $c) {
// tính delta
$delta = $b*$b - 4*$a*$c;

// kiểm tra giá trị delta để xác định số nghiệm và tính nghiệm
if ($delta &lt; 0) {
    echo &quot;Phương trình vô nghiệm&quot;;
} else if ($delta == 0) {
    $x = (-$b)/(2*$a);
    echo &quot;Phương trình có nghiệm kép x = $x&quot;;
} else {
    $x1 = (-$b + sqrt($delta))/(2*$a);
    $x2 = (-$b - sqrt($delta))/(2*$a);
    
    echo &quot;Phương trình có hai nghiệm phân biệt: x1 = $x1 và x2 = $x2&quot;;
    
    }
}</code>
</pre>
                                                                        <!-- <button id="copy-button">Copy</button> -->
                                                                    </div>
                                                                    <!-- <span id="copy-success">Bạn đã copy code :)</span> -->
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Đóng</button>
                                                        <!-- <button type="button" class="btn btn-primary">Save changes</button> -->
                                                        </div>
                                                    </div>
                                                    </div>
                                                </div><!-- End Extra Large Modal-->
                                                <h5 class="card-title" id="result-cau8-b9"> </h5>
                                               
                                            </div>
                                        </div>
                                    </div>
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