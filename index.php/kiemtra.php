<?php

### BÀI 8: HÀM GIẢI PHƯƠNG TRÌNH BẬC HAI ###
echo "<h2>Bài 8: Giải phương trình bậc hai</h2>";

function giaiPhuongTrinhBacHai($a, $b, $c) {
    if ($a == 0) {
        if ($b == 0) {
            return ($c == 0) ? "Phương trình vô số nghiệm." : "Phương trình vô nghiệm.";
        } else {
            $x = -$c / $b;
            return "Phương trình có một nghiệm: x = " . $x;
        }
    }

    $delta = $b * $b - 4 * $a * $c;

    if ($delta < 0) {
        return "Phương trình vô nghiệm.";
    } elseif ($delta == 0) {
        $x = -$b / (2 * $a);
        return "Phương trình có nghiệm kép: x1 = x2 = " . $x;
    } else {
        $x1 = (-$b + sqrt($delta)) / (2 * $a);
        $x2 = (-$b - sqrt($delta)) / (2 * $a);
        return "Phương trình có hai nghiệm phân biệt: x1 = " . $x1 . " và x2 = " . $x2;
    }
}

// Ví dụ sử dụng
echo "Ví dụ 1: x^2 - 3x + 2 = 0 <br>" . giaiPhuongTrinhBacHai(1, -3, 2) . "<br>";
echo "Ví dụ 2: x^2 + 2x + 1 = 0 <br>" . giaiPhuongTrinhBacHai(1, 2, 1) . "<br>";
echo "Ví dụ 3: x^2 + x + 1 = 0 <br>" . giaiPhuongTrinhBacHai(1, 1, 1) . "<br>";

echo "<hr>";


### BÀI 9: IN HÌNH CHỮ NHẬT RỖNG 5X7 ###
echo "<h2>Bài 9: In hình chữ nhật rỗng 5x7</h2>";

$soHang = 5;
$soCot = 7;

for ($i = 0; $i < $soHang; $i++) {
    for ($j = 0; $j < $soCot; $j++) {
        if ($i == 0 || $i == $soHang - 1 || $j == 0 || $j == $soCot - 1) {
            echo "*";
        } else {
            echo "&nbsp;&nbsp;";
        }
    }
    echo "<br>";
}

echo "<hr>";


### BÀI 10: HÀM TÍNH TRUNG BÌNH CỘNG CỦA MẢNG ###
echo "<h2>Bài 10: Tính trung bình cộng của mảng</h2>";

function tinhTrungBinhCong($mangSo) {
    if (count($mangSo) == 0) {
        return 0;
    }

    $tong = 0;
    foreach ($mangSo as $so) {
        $tong += $so;
    }

    return $tong / count($mangSo);
}

// Ví dụ sử dụng
$mang1 = [1, 2, 3, 4, 5];
$mang2 = [10, 20, 30];

echo "Trung bình cộng của mảng [1, 2, 3, 4, 5] là: " . tinhTrungBinhCong($mang1) . "<br>";
echo "Trung bình cộng của mảng [10, 20, 30] là: " . tinhTrungBinhCong($mang2) . "<br>";
?>