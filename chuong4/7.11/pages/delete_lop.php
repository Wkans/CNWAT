<?php
include "connect_db.php";

$id = $_GET['id'] ?? '';
if ($id != "") {
    $sql = "DELETE FROM LOP WHERE MALOP='$id'";
    if ($connect->query($sql) === TRUE) {
        header("Location: ../index.php");
    }
}
?>
