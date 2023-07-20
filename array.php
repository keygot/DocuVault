<div class="box" style="width: 80%; display: flex; align-items: center; justify-content: center;">
    <div class="">
    <?php

echo "<h2 style='color: red'>1. Hiển thị mảng</h2>";
$mang1 = array(360, 310, 310, 330, 313, 375, 456, 111, 256);
$mang2 = array(350, 340, 356, 330, 321);
$mang3 = array(630, 340, 570, 635, 434, 255, 298);

// Hiển thị các mảng
echo "<h3>Hiển thị mảng 1 theo Print_r</h3> <br>";
print_r($mang1);

echo "<h4>Hiển thị mảng 1 theo foreach()</h4> <br>";
foreach($mang1 as $i => $value) {
    echo "[$i]" . " => " .$mang1[$i] . ",<br>";
}


echo "<br> <h3>Hiển thị mảng 2 theo Print_r() </h3><br>";
print_r($mang2);

echo "<h4>Hiển thị mảng 2 theo foreach()</h4> <br>";
foreach($mang2 as $i => $value) {
    echo "[$i]" . " => " .$mang2[$i] . ",<br>";
}

echo "<br><h3> Hiển thị mảng 3 theo print_r </h3><br>";
print_r($mang3);

echo "<h4>Hiển thị mảng 3 theo foreach()</h4> <br>";
foreach($mang3 as $i => $value) {
    echo "[$i]" . " => " .$mang3[$i] . ",<br>";
}


echo "<h2 style='color: red'>2. Sắp xếp mảng theo thứ tự tăng dần</h2>";

// Sắp xếp các mảng theo thứ tự tăng dần
sort($mang1);
sort($mang2);
sort($mang3);

echo "<h3 style='color: blue;'>2.1. Sắp xếp theo hàm sort()</h3>";

    echo "<h3>Mảng 1 sau khi sắp xếp:</h3> <br>";
     foreach($mang2 as $i => $value) {
        echo "[$i]" . " => " .$mang2[$i] . ",<br>";
    }

    echo "<br><h3>Mảng 2 sau khi sắp xếp:</h3> <br>";
    foreach($mang2 as $i => $value) {
        echo "[$i]" . " => " .$mang2[$i] . ",<br>";
    }

    echo "<br><h3>Mảng 3 sau khi sắp xếp:</h3> <br>";
     foreach($mang3 as $i => $value) {
        echo "[$i]" . " => " .$mang3[$i] . ",<br>";
    }
// asort(): 
asort($mang1);
asort($mang2);
asort($mang3);
echo "<h3 style='color: blue;'>2.2. Sắp xếp theo hàm asort(): sắp xếp các phần tử trong mảng theo thứ tự tăng dần theo giá trị, giữ nguyên key của mảng.</h3>";

    echo "<h3>Mảng 1 sau khi sắp xếp:</h3> <br>";
     foreach($mang2 as $i => $value) {
        echo "[$i]" . " => " .$mang2[$i] . ",<br>";
    }

    echo "<br><h3>Mảng 2 sau khi sắp xếp:</h3> <br>";
    foreach($mang2 as $i => $value) {
        echo "[$i]" . " => " .$mang2[$i] . ",<br>";
    }

    echo "<br><h3>Mảng 3 sau khi sắp xếp:</h3> <br>";
     foreach($mang3 as $i => $value) {
        echo "[$i]" . " => " .$mang3[$i] . ",<br>";
    }

 // ksort(): 
 ksort($mang1);
 ksort($mang2);
 ksort($mang3);
 echo "<h3 style='color: blue;'>2.2. Sắp xếp theo hàm ksort(): </h3>";

     echo "<h3>Mảng 1 sau khi sắp xếp:</h3> <br>";
      foreach($mang2 as $i => $value) {
         echo "[$i]" . " => " .$mang2[$i] . ",<br>";
     }

     echo "<br><h3>Mảng 2 sau khi sắp xếp:</h3> <br>";
     foreach($mang2 as $i => $value) {
         echo "[$i]" . " => " .$mang2[$i] . ",<br>";
     }

     echo "<br><h3>Mảng 3 sau khi sắp xếp:</h3> <br>";
      foreach($mang3 as $i => $value) {
         echo "[$i]" . " => " .$mang3[$i] . ",<br>";
     }


// Xóa phần tử thứ 3 của mảng 1
echo "<h2 style='color: red'>3. Xóa phần tử mảng dùng unset()</h2>";
unset($mang1[2]);

echo "<h3>Mảng 1 sau khi xóa phần tử thứ 3: </h3><br>";
foreach($mang1 as $i => $value) {
    echo "[$i]" . " => " .$mang1[$i] . ",<br>";
}

// Thêm một phần tử có giá trị 55 vào cuối mảng 2
echo "<h2 style='color: red'>4. Thêm một phần tử có giá trị 55 vào cuối mảng 2</h2>";
$mang2[] = 55;

echo "<h3>Mảng 2 sau khi thêm phần tử 55: </h3> <br>";
foreach($mang2 as $i => $value) {
    echo "[$i]" . " => " .$mang2[$i] . ",<br>";
}

// Gán giá trị 68 cho phần tử thứ 4 của mảng 3
echo "<h2 style='color: red'>5. Gán giá trị 68 cho phần tử thứ 4 của mảng 3</h2>";
$mang3[3] = 68;

echo "<h3>Mảng 3 sau khi gán giá trị 68 vào phần tử thứ 4:</h3> <br> ";
foreach($mang3 as $i => $value) {
    echo "[$i]" . " => " .$mang3[$i] . ",<br>";
}


// Chèn một phần tử có giá trị 88 vào sau phần tử thứ 2 của mảng 2
echo "<h2 style='color: red'>6. Chèn một phần tử có giá trị 88 vào sau phần tử thứ 2 của mảng 2</h2>";
array_splice($mang2, 2, 0, 88);

echo "Mảng 2 sau khi chèn phần tử 88 vào sau phần tử thứ 2: ";
foreach($mang2 as $i => $value) {
    echo "[$i]" . " => " .$mang2[$i] . ",<br>";
}

// Tìm giá trị lớn nhất và bé nhất của 3 mảng
echo "<h2 style='color: red'>7.  Tìm giá trị lớn nhất và bé nhất của 3 mảng</h2>";
$max = max(max($mang1), max($mang2), max($mang3));
$min = min(min($mang1), min($mang2), min($mang3));

echo "Giá trị lớn nhất của 3 mảng: $max<br>";
echo "Giá trị bé nhất của 3 mảng: $min<br>";



// CÂU 02. 

$colors = array(0 => 'Red',4 => 'Green',2 => 'White',1 => 'Black',3 => 'Red',);   
$numbers = array(0 => 100, 1 => 200, 2 => 100, 3 => -10, 4 => -10, 5 => 0,     6 => 80,); 

// Hiển thị mảng
echo "<h2 style='color: red'>1. Hiển thị mảng</h2>";


echo "<h3>Hiển thị mảng colors theo Print_r</h3> <br>";
print_r($colors);

echo "<h4>Hiển thị mảng colors theo foreach()</h4> <br>";
foreach($colors as $i => $value) {
    echo "[$i]" . " => " .$colors[$i] . ",<br>";
}


echo "<h3>Hiển thị mảng numbers theo Print_r</h3> <br>";
print_r($numbers);

echo "<h4>Hiển thị mảng numbers theo foreach()</h4> <br>";
foreach($numbers as $i => $value) {
    echo "[$i]" . " => " .$numbers[$i] . ",<br>";
}

// Sắp xếp mảng theo key
echo "<h2 style='color: red'>2. Sắp xếp mảng theo key</h2>";

echo "<h3>2.1. Mảng colors</h3> <br>";
echo "<h4>- Mảng colors sau khi được sắp xếp tăng dần theo key</h4> <br>";
ksort($colors);

foreach($colors as $x => $x_value) {
    echo "[$x]" . " => " . $x_value;
    echo "<br>";
}

echo "<h4>- Mảng colors sau khi được sắp xếp giảm dần theo key</h4> <br>";
krsort($colors);

foreach($colors as $x => $x_value) {
    echo "[$x]" . " => " . $x_value;
    echo "<br>";
}

echo "<h3>2.2. Mảng numbers</h3> <br>";
echo "<h4>- Mảng numbers sau khi được sắp xếp tăng dần theo key</h4> <br>";
ksort($numbers);

foreach($numbers as $x => $x_value) {
    echo "[$x]" . " => " . $x_value;
    echo "<br>";
}

echo "<h4>- Mảng numbers sau khi được sắp xếp giảm dần theo key</h4> <br>";
krsort($numbers);

foreach($numbers as $x => $x_value) {
    echo "[$x]" . " => " . $x_value;
    echo "<br>";
}

// - Xóa các bản sao các giá trị giống nhau trong các mảng
echo "<h2 style='color: red'>3. Xóa các bản sao các giá trị giống nhau trong các mảng</h2>";

$result = array_unique($colors);
echo "<h4>3.2. Hiển thị mảng colors sau khi xóa các giá trị giống nhau</h4> <br>";
foreach($result as $i => $value) {
    echo "[$i]" . " => " .$result[$i] . ",<br>";
}

$result_num = array_unique($numbers);
echo "<h4>3.2. Hiển thị mảng numbers sau khi xóa các giá trị giống nhau</h4> <br>";
foreach($result_num as $i => $value) {
    echo "[$i]" . " => " .$result_num[$i] . ",<br>";
}

// -  Tìm key lớn nhất của các mảng

echo "<h2 style='color: red'>4. Tìm key lớn nhất của các mảng</h2>";

$max_key_color = max(array_keys($colors));
echo "Key lớn nhất của mảng colors là: ". $max_key_color . "<br>";

$max_key_number = max(array_keys($numbers));
echo "Key lớn nhất của mảng numbers là: ". $max_key_number . "<br>";




// -  Lấy key của giá trị lớn nhất trong mảng $numbers
echo "<h2 style='color: red'>5. Lấy key của giá trị lớn nhất trong mảng numbers</h2>";

$max_value = max($numbers);
$max_keys = array_keys($numbers, $max_value);
if (count($max_keys) == 1) {
    echo "Key của giá trị lớn nhất: " . $max_keys[0];
} else {
    echo "Các key của giá trị lớn nhất: " . implode(', ', $max_keys);
}




?>
    </div>
</div>