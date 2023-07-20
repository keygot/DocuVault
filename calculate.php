<?php
    // Hàm kiểm tra rỗng hay không?
    function KiemTraRong($a) {
        if(!empty($a) || (!empty($a) == 0))
            return true;
        else 
            return false;
    } 
     // Hàm kiểm tra rỗng hay không?
     function KiemTraRong2($a, $b) {
        if((!empty($a) && !empty($b)) || ((!empty($a) == 0) || (!empty($b) == 0)))
            return true;
        else 
            return false;
    } 

     // Hàm kiểm tra rỗng hay không?
     function KiemTraRong3($a, $b, $c) {
        if((!empty($a) && !empty($b) && !empty($c)) || ((!empty($a) == 0) || (!empty($b) == 0) || (!empty($c) == 0)))
            return true;
        else 
            return false;
    } 

    // Hàm kiểm tra phải là số hay không?
    function KiemTraSo($c) {
        if(is_numeric($c))
            return true;
        else 
            return false;
    }
    // Hàm kiểm tra phải là số hay không?
    function KiemTraSo2($c, $d) {
        if(is_numeric($c) && is_numeric($d))
            return true;
        else 
            return false;
    }

     // Hàm kiểm tra phải là số hay không?
     function KiemTraSo3($c, $d, $e) {
        if(is_numeric($c) && is_numeric($d) && is_numeric($e))
            return true;
        else 
            return false;
    }
?>



<!-- Câu 3. Viết chương trình tính tổng các số lẻ từ 1 đến n. -->

<?php
    // Hàm isset để kiểm tra xem phương thức POST đó có tồn tại hay không
    if(isset($_POST['num'])) {
        $x = $_POST['num'];

        if(KiemTraRong($x) && KiemTraSo($x)) {
            function tong_so_le($n) {
                $tong = 0;
                for ($i = 1; $i <= $n; $i++) {
                    if ($i % 2 == 1) {
                    $tong += $i;
                    }
                }
                return $tong;
            }
            $t = tong_so_le($x);
            
            echo "Tổng các số lẻ từ <strong>1</strong> đến  <strong>$x</strong> là: <strong style='color: black;'>$t</strong> ";     
                                                                                                                


        }else {
            echo "<p style='color: red;'>Giá trị bạn nhập vào phải là số và không được để trống</p>" ;     
        }

    }
?>

<!-- Câu 4. Viết chương trình tính tổng S = 1/2 + 1/4 + 1/6 ...+ 1/(2*n). -->



<?php
    // Hàm isset để kiểm tra xem phương thức POST đó có tồn tại hay không
    if(isset($_POST['num4'])) {
        $x = $_POST['num4'];

        if(KiemTraRong($x) && KiemTraSo($x)) {
            function tinh_tong($n) {
                $tong = 0;
                for ($i = 1; $i <= $n; $i++) {
                    $tong += 1 / (2*$i);
                }
                return $tong;
            }
            $t = tinh_tong($x);
            
            echo "Tổng các số  1/2 + 1/4 + 1/6 ...+ 1/(2*n) với <strong>n =  $x</strong> là:  <strong style='color: black;'>$t</strong> ";    
        }else {
            echo "<p style='color: red;'>Giá trị bạn nhập vào phải là số và không được để trống</p>" ;     
        }                                                                                                  
    }
?>



<!-- Câu 5. Viết chương trình tính tổng S = 1 – 2 + 3 – 4 + ... + (-1)(n-1)*n. -->
                             


<?php
    // Hàm isset để kiểm tra xem phương thức POST đó có tồn tại hay không
    if(isset($_POST['num5'])) {
        $x = $_POST['num5'];
        if(KiemTraRong($x) && KiemTraSo($x)) {
            function tinh_tong3($n) {
                $tong = 0;
                for ($i = 1; $i <= $n; $i++) {
                    if ($i % 2 == 0) {
                    $tong -= $i;
                    } else {
                    $tong += $i;
                    }
                }
                return $tong;
            }
            // function tinhTong($n) {
            //     $tong = 0;
            //     for ($i = 1; $i <= $n; $i++) {
            //       $pheptinh = (-1) ** ($i - 1);
            //       $tong += $pheptinh * $i;
            //     }
            //     return $tong;
            //   }
              
            // $n = 5;
            //   echo "Tổng S cho n = $x là: " . tinhTong($x);
              
            $t = tinh_tong3($x);
            
            echo "Tổng các số 1 – 2 + 3 – 4 + ... + (-1)(n-1)*n với <strong>n =  $x</strong>  là:  <strong style='color: black;'>$t</strong>"; 
        }else {
            echo "<p style='color: red;'>Giá trị bạn nhập vào phải là số và không được để trống</p>" ;
        }                                                                                                        
    }
?>

<!-- Câu 6. Viết chương trình tính giai thừa của n. -->
         

<?php
    
    // Hàm isset để kiểm tra xem phương thức POST đó có tồn tại hay không
    if(isset($_POST['num6'])) {
        $x = $_POST['num6'];
        if(KiemTraRong($x) && KiemTraSo($x)) {    
            function factorial($n) {
                if ($n == 0) {
                    return 1;
                } else {
                    return $n * factorial($n - 1);
                }
            }
            $gt = factorial($x);
            
            echo "Giai thừa của  <strong>$x</strong>  là: <strong style='color: black;'>$gt</strong> ";     
        }else {
            echo "<p style='color: red;'>Giá trị bạn nhập vào phải là số và không được để trống</p>" ;
        }                                                                                                    

    }
?>

<!-- Câu 7. Viết chương trình tính số fibonaxi thứ n. -->

<?php  
    // Hàm isset để kiểm tra xem phương thức POST đó có tồn tại hay không
    if(isset($_POST['num7'])) {
        $x = $_POST['num7'];
        if(KiemTraRong($x) && KiemTraSo($x)) {    
            function fibonacci($n) {
                if ($n == 0) {
                    return 0;
                } else if ($n == 1) {
                    return 1;
                } else {
                    return fibonacci($n-1) + fibonacci($n-2);
                }
            }
       
            $fi = fibonacci($x);
            
            echo "Số fibonacci của <strong>$x</strong> là: <strong style='color: black;'>$fi</strong>";     
        }else {
            echo "<p style='color: red;'>Giá trị bạn nhập vào phải là số và không được để trống</p>" ;
        }                                                                                                   
    }
?>

<!-- Câu 8. Viết chương trình tính tổng các số fibonaxi từ 1 đến n. -->

<?php

        
    // Hàm isset để kiểm tra xem phương thức POST đó có tồn tại hay không
    if(isset($_POST['num8'])) {
        $x = $_POST['num8'];
        if(KiemTraRong($x) && KiemTraSo($x)) {
            function fibonacci_sum($n) {
                // Khởi tạo hai số Fibonacci đầu tiên
                $fibonacci_prev = 0;
                $fibonacci_curr = 1;
                $sum = $fibonacci_prev + $fibonacci_curr;
            
                // Tính toán các số Fibonacci từ 2 đến n và tính tổng của chúng
                for ($i = 2; $i <= $n; $i++) {
                    $fibonacci_next = $fibonacci_prev + $fibonacci_curr;
                    $sum += $fibonacci_next;
                    $fibonacci_prev = $fibonacci_curr;
                    $fibonacci_curr = $fibonacci_next;
                }
            
                return $sum;
            }
            
            $fi = fibonacci_sum($x);
                
            echo "Tổng các số fibonaxi từ <strong>1</strong> đến <strong>$x</strong> là: <strong style='color: black;'>$fi</strong>";        
        }else {
            echo "<p style='color: red;'>Giá trị bạn nhập vào phải là số và không được để trống</p>" ;
        }                                                                                                 

    }

    
?>

<!-- -------------------------- BÀI THỰC HÀNH 05 - BUỔI O9 ------------------------------------->

<!-- Câu 1. Viết chương trình kiểm tra n có phải là số nguyên tố hay không? -->

<?php
    // Hàm isset để kiểm tra xem phương thức POST đó có tồn tại hay không
    if(isset($_POST['num19'])) {
        $x = $_POST['num19'];
        if(KiemTraRong($x) && KiemTraSo($x)) {

            // Hàm kiểm tra số nguyên tố
            function isPrime($n) {
                if ($n <= 1) {
                    return false;
                }
                for ($i = 2; $i <= sqrt($n); $i++) {
                    if ($n % $i == 0) {
                    return false;
                    }
                }
                return true;
            }
        
            if(isPrime($x)) {
                echo "Số <strong>$x</strong> là số nguyên tố! ";                                                                                                         
            }else {
                echo "Số <strong>$x</strong> không phải là số nguyên tố! ";                                                                                                                                                                                                                 
            }
        }else {
            echo "<p style='color: red;'>Giá trị bạn nhập vào phải là số và không được để trống</p>" ;
        }
    }
?>

<!-- Câu 2. Viết chương trình hiển thị các số nguyên tố từ 1 đến n. -->
<?php
    // Hàm isset để kiểm tra xem phương thức POST đó có tồn tại hay không
    if(isset($_POST['num29'])) {
        $x = $_POST['num29'];
        if(KiemTraRong($x) && KiemTraSo($x)) {

            // Hàm kiểm tra số nguyên tố
            function isPrime($n) {
                if ($n <= 1) {
                    return false;
                }
                for ($i = 2; $i <= sqrt($n); $i++) {
                    if ($n % $i == 0) {
                    return false;
                    }
                }
                return true;
            }

            // Hàm in ra các số nguyên tố
            function printPrimes($n) {
                for ($i = 2; $i <= $n; $i++) {
                    if (isPrime($i)) {
                    echo $i . " ";

                    }
                }
            }
            printPrimes($x);
        }else {
            echo "<p style='color: red;'>Giá trị bạn nhập vào phải là số và không được để trống</p>" ;
        }


    }

    
?>
 <!-- Câu 3. Viết chương trình kiểm tra n có phải là số hoàn hảo hay không -->

<?php
    // Hàm isset để kiểm tra xem phương thức POST đó có tồn tại hay không
    if(isset($_POST['num39'])) {
        $x = $_POST['num39'];
        if(KiemTraRong($x) && KiemTraSo($x)) {

            // Hàm kiểm tra số hoàn hảo
            function isPerfect($n) {
                $sum = 0;
                for ($i = 1; $i <= $n/2; $i++) {
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
            if(isPerfect($x)) {
                echo "Số <strong>$x</strong> là số hoàn hảo";  
            }else {
                echo "Số <strong>$x</strong> không phải là số hoàn hảo";
            }
        }else {
            echo "<p style='color: red;'>Giá trị bạn nhập vào phải là số và không được để trống</p>" ;
        }
    }
?>
<!-- Câu 4. Viết chương trình in ra các số hoàn hảo từ 1 đến n. -->

<?php
    // Hàm isset để kiểm tra xem phương thức POST đó có tồn tại hay không
    if(isset($_POST['num49'])) {
        $x = $_POST['num49'];
        if(KiemTraRong($x) && KiemTraSo($x)) {

            // Hàm kiểm tra số hoàn hảo
            function isPerfect($n) {
                $sum = 0;
                for ($i = 1; $i <= $n/2; $i++) {
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
                for ($i = 1; $i <= $n; $i++) {
                    if (isPerfect($i)) {
                        echo $i . " ";
                    }
                }
            }
            printPerfectNumbers($x);
        }else {
            echo "<p style='color: red;'>Giá trị bạn nhập vào phải là số và không được để trống</p>" ;
        }

    }
?>

<!-- Câu 5. Viết chương trình tính UCLN và BCNN của 2 số a, b. -->
<?php
    
    if (isset($_POST['num1']) && isset($_POST['num2'])) {
        $a = $_POST['num1'];
        $b = $_POST['num2'];
        
        if(KiemTraRong2($a, $b) && KiemTraSo2($a, $b)) {

            // Hàm tính ước chung lớn nhất
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
                echo "UCLN của $a và $b là: $gcd<br>";
                echo "BCNN của $a và $b là: $lcm";

            }
           
        }
        else {
            echo "<p style='color: red;'>Giá trị bạn nhập vào phải là số và không được để trống</p>" ;
        }
      }
      
?>


<!-- Câu 6. Viết chương trình tính tổng các chữ số của một số nguyên n -->
<?php

if (isset($_POST['num69'])) {
    $x = $_POST['num69'];
    
    if(KiemTraRong($x) && KiemTraSo($x)) {
         
        function sum_of_digits($n) {
            $str_n = strval($n);
            $sum = 0;
            $expr = "";
            for ($i = 0; $i < strlen($str_n); $i++) {
                if ($i > 0) {
                    $expr .= " + ";
                }
                $digit = intval($str_n[$i]);
                $sum += $digit;
                $expr .= strval($digit);
            }
            $expr .= " = " . strval($sum);
            echo $expr;
            return $sum;
        }
        sum_of_digits($x);


        
          
    }else {
        echo "<p style='color: red;'>Giá trị bạn nhập vào phải là số và không được để trống</p>" ;
    }

}


?>

<!-- Câu 7. Viết chương giải phương trình bậc nhất -->
<?php
    
    if (isset($_POST['a79']) && isset($_POST['b79'])) {
        $a = $_POST['a79'];
        $b = $_POST['b79'];
        
        if(KiemTraRong2($a, $b) && KiemTraSo2($a, $b)) {
            function giai_phuong_trinh_bac_nhat($a, $b) {
                if ($a == 0) {
                    if ($b == 0) {
                        echo "Phương trình có vô số nghiệm";
                    } else {
                        echo "Phương trình vô nghiệm";
                    }
                } else {
                    $x = -$b / $a;
                    echo "Nghiệm của phương trình là x = " . $x;
                }
            }
            
            giai_phuong_trinh_bac_nhat($a, $b);
        }
        else {
            echo "<p style='color: red;'>Giá trị bạn nhập vào phải là số và không được để trống</p>" ;
        }
      }
      
?>

<!-- Câu 8. Viết chương trình giải phương trình bậc 2. -->

<?php
    
    if (isset($_POST['a89']) && isset($_POST['b89']) && isset($_POST['c89'])) {
        $aa = $_POST['a89'];
        $bb = $_POST['b89'];
        $cc = $_POST['c89'];
        
        if(KiemTraRong3($aa, $bb, $cc) && KiemTraSo3($aa, $bb, $cc)) {
            function giai_phuong_trinh_bac_hai($a, $b, $c) {

                

                // tính delta
                $delta = $b*$b - 4*$a*$c;
                
                // kiểm tra giá trị delta để xác định số nghiệm và tính nghiệm
                if ($delta < 0) {
                    echo "Phương trình vô nghiệm";
                } else if ($delta == 0) {
                    $x = (-$b)/(2*$a);
                    echo "Phương trình có nghiệm kép x = $x";
                } else {
                    $x1 = (-$b + sqrt($delta))/(2*$a);
                    $x2 = (-$b - sqrt($delta))/(2*$a);
                    
                    echo "Phương trình có hai nghiệm phân biệt: x1 = $x1 và x2 = $x2";
                    
                }
            }
            
            if($bb != 0 && $cc != 0 && $aa != 0) {
                // sử dụng hàm để giải phương trình bậc 2: 
                giai_phuong_trinh_bac_hai($aa, $bb, $cc); 
            } else  if($aa == 0) {
                echo "Đây không phải là phương trình bậc 2!";
            }else {
                giai_phuong_trinh_bac_hai($aa, $bb, $cc); 

            }
        }
        else {
            echo "<p style='color: red;'>Giá trị bạn nhập vào phải là số và không được để trống</p>" ;
        }
      }
      
?>

