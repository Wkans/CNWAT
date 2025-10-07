<?php
include("connect_db.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $mahs = $_POST['mahs'];
    $hoten = $_POST['hoten'];
    $ngaysinh = $_POST['ngaysinh'];
    $diachi = $_POST['diachi'];
    $lop = $_POST['lop'];
    $toan = $_POST['diemtoan'];
    $ly = $_POST['diemly'];
    $hoa = $_POST['diemhoa'];

    $sql = "INSERT INTO HOSO (MAHS, HOTEN, NGAYSINH, DIACHI, LOP, DIEMTOAN, DIEMLY, DIEMHOA)
            VALUES ('$mahs','$hoten','$ngaysinh','$diachi','$lop','$toan','$ly','$hoa')";
    if ($connect->query($sql)) {
        echo "Thêm thành công";
    } else {
        echo "Lỗi: " . $connect->error;
    }
}
?>
<!DOCTYPE html>
<html>
<head><meta charset="UTF-8"><title>Thêm HOSO</title></head>
<body>
<h2>Thêm HOSO mới</h2>
<form method="post">
    Mã HS: <input type="text" name="mahs"><br>
    Họ tên: <input type="text" name="hoten"><br>
    Ngày sinh: <input type="date" name="ngaysinh"><br>
    Địa chỉ: <input type="text" name="diachi"><br>
    Lớp: <input type="text" name="lop"><br>
    Điểm Toán: <input type="text" name="diemtoan"><br>
    Điểm Lý: <input type="text" name="diemly"><br>
    Điểm Hóa: <input type="text" name="diemhoa"><br>
    <input type="submit" value="Thêm">
</form>
</body>
</html>
