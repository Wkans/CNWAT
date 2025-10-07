<?php
require ("connect_db.php");

$mahs = $_GET['id'];
$result = $connect->query("SELECT * FROM HOSO WHERE MAHS='$mahs'");
$hoso = $result->fetch_assoc();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $hoten = $_POST['hoten'];
    $ngaysinh = $_POST['ngaysinh'];
    $diachi = $_POST['diachi'];
    $lop = $_POST['lop'];
    $toan = $_POST['diemtoan'];
    $ly = $_POST['diemly'];
    $hoa = $_POST['diemhoa'];

    $sql = "UPDATE HOSO SET HOTEN='$hoten', NGAYSINH='$ngaysinh', DIACHI='$diachi', 
            LOP='$lop', DIEMTOAN='$toan', DIEMLY='$ly', DIEMHOA='$hoa' 
            WHERE MAHS='$mahs'";
    if ($connect->query($sql)) {
        echo "Sửa thành công";
        echo '<a href="../index.php">Quay về trang danh sách</a>';
    } else {
        echo "Lỗi: " . $connect->error;
    }
}
?>
<!DOCTYPE html>
<html>
<head><meta charset="UTF-8"><title>Sửa HOSO</title></head>
<body>
<h2>Sửa HOSO</h2>
<form method="post">
    Họ tên: <input type="text" name="hoten" value="<?php echo $hoso['HOTEN']; ?>"><br>
    Ngày sinh: <input type="date" name="ngaysinh" value="<?php echo $hoso['NGAYSINH']; ?>"><br>
    Địa chỉ: <input type="text" name="diachi" value="<?php echo $hoso['DIACHI']; ?>"><br>
    Lớp: <input type="text" name="lop" value="<?php echo $hoso['LOP']; ?>"><br>
    Điểm Toán: <input type="text" name="diemtoan" value="<?php echo $hoso['DIEMTOAN']; ?>"><br>
    Điểm Lý: <input type="text" name="diemly" value="<?php echo $hoso['DIEMLY']; ?>"><br>
    Điểm Hóa: <input type="text" name="diemhoa" value="<?php echo $hoso['DIEMHOA']; ?>"><br>
    <input type="submit" value="Cập nhật">
</form>
</body>
</html>
