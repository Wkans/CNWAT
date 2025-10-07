<?php
include "connect_db.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $malop = $_POST['MALOP'];
    $tenlop = $_POST['TENLOP'];
    $khoahoc = $_POST['KHOAHOC'];
    $gvcn = $_POST['GVCN'];

    $sql = "INSERT INTO LOP (MALOP, TENLOP, KHOAHOC, GVCN) VALUES ('$malop', '$tenlop', $khoahoc, '$gvcn')";
    if ($connect->query($sql) === True) {
        echo "Thêm thành công";
        
    } else {
        echo "Lỗi: " . $connect->error;
    }
}
?>
<!DOCTYPE html>
<html>
<head><meta charset="UTF-8"><title>Thêm lớp</title></head>
<body>
    <h2>Thêm lớp mới</h2>
    <form method="post">
        Mã lớp: <input type="text" name="MALOP" required><br><br>
        Tên lớp: <input type="text" name="TENLOP" required><br><br>
        Khóa học: <input type="number" name="KHOAHOC" required><br><br>
        GVCN: <input type="text" name="GVCN" required><br><br>
        <input type="submit" value="Thêm">
    </form>
</body>
</html>
