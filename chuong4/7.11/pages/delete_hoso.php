<?php
require ("connect_db.php");

$mahs = $_GET['id'];
$sql = "DELETE FROM HOSO WHERE MAHS='$mahs'";
if ($connect->query($sql)) {
    header("Location: ../index.php");
} else {
    echo "Lỗi: " . $connect->error;
}
?>
