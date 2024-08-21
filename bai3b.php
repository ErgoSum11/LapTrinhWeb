<!DOCTYPE html>
<html>
<head>
    <title>Bài 3</title>
</head>
<body>
    <h2>Chọn phép tính</h2>
    <form method="post">
        <input type="radio" name="operation" value="add" checked = "checked">Cộng
        <input type="radio" name="operation" value="subtract">Trừ
        <input type="radio" name="operation" value="multiply">Nhân
        <input type="radio" name="operation" value="divide">Chia
        <br><br>
        <label>Số thứ nhất:</label>
        <input type="number" name="num1" required>
        <br>
        <label>Số thứ hai:</label>
        <input type="number" name="num2" required>
        <br><br>
        <input type="submit" name="calculate" value="Tính">
    </form>
    <?php
     require 'bai3a.php';

    if(isset($_POST['calculate'])){
        $num1 = $_POST['num1'];
        $num2 = $_POST['num2'];
        $operation = $_POST['operation'];
        switch($operation){
            case 'add':
                $result = tinhTong($num1, $num2);
                break;
            case 'subtract':
                $result = tinhHieu($num1, $num2);
                break;
            case 'multiply':
                $result = tinhTich($num1, $num2);
                break;
            case 'divide':
                if($num2 != 0){
                    $result = tinhThuong($num1, $num2);
                } else {
                    $result = "Không thể chia cho 0";
                }
                break;
        }

        echo "<h3>Kết quả: $result</h3>";
    }
    ?>

    <h2>Chọn phép kiểm tra</h2>
    <form method="post">
        <input type="radio" name="check" value="prime" checked = "checked">Kiểm tra số nguyên tố
        <input type="radio" name="check" value="evenodd">Kiểm tra chẵn lẻ
        <br><br>
        <label>Số cần kiểm tra:</label>
        <input type="number" name="number" required>
        <br><br>
        <input type="submit" name="checkNumber" value="Kiểm tra">
    </form>

    <?php

    if(isset($_POST['checkNumber'])){
        $number = $_POST['number'];
        $check = $_POST['check'];

        switch ($check) {
            case 'prime':
                isPrime($number);
                break;
            case 'evenodd':
                evenOdd($number);
                break;
        }
    }
    ?>
</body>
</html>