<?php
require("connect_db.php");

if (isset($_POST['id'])) {
    $cartId = $_POST['id'];

    $sql = "DELETE FROM carts WHERE CartID = $cartId";
    if ($connect->query($sql)) {
        header("Location: ../index.php?page=cart"); // quay lại giỏ hàng
        exit;
    } else {
        echo "Lỗi: " . $connect->error;
    }
} else {
    echo "Không có sản phẩm để xóa!";
}
?>
