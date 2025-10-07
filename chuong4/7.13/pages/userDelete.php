<?php
require("connect_db.php");

$id = $_GET['id'] ?? 0;
$sql = "DELETE FROM users WHERE UserID=$id";

if ($connect->query($sql)) {
    header("Location: ../index.php");
    exit;
} else {
    echo "Lỗi: ".$connect->error;
}
?>
