<!DOCTYPE html>
<html>
<head>
    <title>Bài 2</title>
</head>
<body>

<?php
$rowsPerPage = 10; 
$totalRows = 100; 
$totalPages = ceil($totalRows / $rowsPerPage); 

$page = isset($_GET['page']) ? $_GET['page'] : 1; 

$startRow = ($page - 1) * $rowsPerPage + 1; 
$endRow = min($startRow + $rowsPerPage - 1, $totalRows);

echo "<table border='1'>";
echo "<tr><th>STT</th><th>Tên Sách</th><th>Nội dung sách</th></tr>";

for ($i = $startRow; $i <= $endRow; $i++) {
    $tenSach = "Tensach" . $i;
    $noiDungSach = "Noidung" . $i;
    echo "<tr>";
    echo "<td>$i</td>";
    echo "<td>$tenSach</td>";
    echo "<td>$noiDungSach</td>";
    echo "</tr>";
}

echo "</table>";

for ($p = 1; $p <= $totalPages; $p++) {
    echo "<a href='?page=$p'>$p</a> ";
}
?>

</body>
</html>