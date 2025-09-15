<?php

// Câu 9: In ra màn hình chữ nhật rỗng 5x7 bằng dấu *
function inHinhChuNhatRong($chieuRong, $chieuDai) {
    echo "<h2>Câu 9: In hình chữ nhật rỗng " . $chieuRong . "x" . $chieuDai . "</h2>";
    for ($i = 0; $i < $chieuRong; $i++) {
        for ($j = 0; $j < $chieuDai; $j++) {
            // Kiểm tra nếu là các cạnh (hàng đầu, hàng cuối, cột đầu, cột cuối)
            if ($i == 0 || $i == $chieuRong - 1 || $j == 0 || $j == $chieuDai - 1) {
                echo "*";
            } else {
                echo "&nbsp;&nbsp;"; // Dùng 2 khoảng trắng để khoảng cách đều
            }
        }
        echo "<br>";
    }
}

// Gọi function in hình chữ nhật với kích thước 5x7
inHinhChuNhatRong(5, 7);

?>