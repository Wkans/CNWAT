<?php
require "libs/xuLyMaTran.php"; // dùng lại hàm đã viết ở file trước

$tong = $hieu = $tich = [];
if ($_SERVER["REQUEST_METHOD"] == "POST" ) {
    // Lấy chuỗi số từ form
    $m1 = $_POST['m1'];
    $m2 = $_POST['m2'];
    
    $tong = tinhMatranTong($m1, $m2);
    $hieu= tinhMatranHieu($m1, $m2);
    $tich=tinhMatranTich($m1, $m2);

}
?>

<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Nhập Ma Trận</title>
</head>
<body>
<h2>Nhập 2 ma trận 3x3</h2>

<form method="post">
    <table border="1" >
        <tr>
            <td>Ma trận 1</td>
            <td>Ma trận 2</td>
        </tr>
        <?php
        // Hiển thị 3x3 input cho 2 ma trận
        for ($i = 0; $i < 3; $i++) {
            echo "<tr>";
            echo "<td>";
            for ($j = 0; $j < 3; $j++) {
                $val1 = $_POST['m1'][$i][$j] ?? ''; // giữ giá trị cũ
                echo "<input type='text' name='m1[$i][$j]' value='$val1' size='3'>";
            }
            echo "</td>";
            echo "<td>";
            for ($j = 0; $j < 3; $j++) {
                $val2 = $_POST['m2'][$i][$j] ?? ''; // giữ giá trị cũ
                echo "<input type='text' name='m2[$i][$j]' value='$val2' size='3'>";
            }
            echo "</td>";
            echo "</tr>";
        }
        ?>
    </table>
    <br>
    <input type="reset" value="Nhập lại">
    <input type="submit" name="calc" value="Tính">
</form>
<?php 
if ($_SERVER["REQUEST_METHOD"] == "POST"){
    echo "<h3>KẾT QUẢ:</h3>";
    echo "<b>Ma trận Tổng:</b><br>";
    printMatrix($tong);

    echo "<br><b>Ma trận Hiệu:</b><br>";
    printMatrix($hieu);

    echo "<br><b>Ma trận Tích:</b><br>";
    printMatrix($tich);
    
}
?>
</body>
</html>
