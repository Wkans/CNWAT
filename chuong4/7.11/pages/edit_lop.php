<?php
include "connect_db.php";

$id = $_GET['id'] ?? '';
$sql = "SELECT * FROM LOP WHERE MALOP='$id'";
$result = $connect->query($sql);
$lop = $result->fetch_assoc();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $tenlop = $_POST['TENLOP'];
    $khoahoc = $_POST['KHOAHOC'];
    $gvcn = $_POST['GVCN'];

    $sql = "UPDATE LOP SET TENLOP='$tenlop', KHOAHOC=$khoahoc, GVCN='$gvcn' WHERE MALOP='$id'";
    if ($connect->query($sql) === TRUE) {
        echo "Sửa thành công";
        echo '<a href="../index.php">Quay về trang danh sách</a>';
    } else {
        echo "Lỗi: " . $connect->error;
    }
}
?>
<!DOCTYPE html>
<html>
<head><meta charset="UTF-8"><title>Sửa lớp</title></head>
<body>
    <h2>Sửa lớp <?php echo $id; ?></h2>
    <form method="post">
        Tên lớp: <input type="text" name="TENLOP" value="<?php echo $lop['TENLOP']; ?>"><br><br>
        Khóa học: <input type="number" name="KHOAHOC" value="<?php echo $lop['KHOAHOC']; ?>"><br><br>
        GVCN: <input type="text" name="GVCN" value="<?php echo $lop['GVCN']; ?>"><br><br>
        <input type="submit" value="Cập nhật">
    </form>
</body>
</html>
