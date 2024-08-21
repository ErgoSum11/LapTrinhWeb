<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bài 4</title>
</head>

<body>
<?php
    require 'bai4a.php';
    $arr = array(9,5,2,4,6,1,7,8);
?>
    <p>Mảng ban đầu: <?php showArray($arr) ?></p>     
    <p>Giá trị lớn nhất trong mảng: <?php echo arrMax($arr)?></p>
    <p>Giá trị nhỏ nhất trong mảng: <?php echo arrMin($arr)?></p>
    <p>Tổng các phần tử trong mảng: <?php echo arrSum($arr)?></p>
    <P>Mảng sau khi sắp xếp: <?php showSorted($arr)?></P>
    <p><?php checkArray(7, $arr)?></p>
</body>
</html>