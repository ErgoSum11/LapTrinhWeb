<?php
function tinhTong($num1, $num2){
    return $num1 + $num2;
}
function tinhHieu($num1, $num2){
    return $num1 - $num2;
}
function tinhTich($num1, $num2){
    return $num1 * $num2;
}
function tinhThuong($num1, $num2){
    return $num1/$num2;
}
function evenOdd($num) {
    if ($num % 2 == 0){
        echo "<h3>Số chẵn</h3>";
        return;
    }
    echo "<h3>Số lẻ</h3>";
    return;
}

function isPrime($num) {
    if ($num <= 1) {
       echo "<h3>Không phải số nguyên tố</h3>";
       return;
    }
    for ($i = 2; $i <= sqrt($num); $i++) {
        if ($num % $i == 0) {
            echo "<h3>Kết quả: Không phải số nguyên tố</h3>";
            return;
        }
    }
    echo "<h3>Kết quả: Là số nguyên tố</h3>";
    return;
}
?>