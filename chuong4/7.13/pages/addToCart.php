<?php
require("connect_db.php");

$productId = $_GET['productid'] ?? 0;

if ($productId) {
    // Kiểm tra sản phẩm đã có trong giỏ chưa
    $check = "SELECT * FROM carts WHERE ProductID=$productId";
    $prd = "SELECT * FROM products WHERE ProductID=$productId";
    $result = $connect->query($check);
    $result2 = $connect->query($prd);

    if ($result->num_rows > 0) {
        // Nếu có rồi thì tăng số lượng
        $sql = "UPDATE carts SET Quantity = Quantity + 1 
                WHERE ProductID=$productId";
        
    } else {
        // Nếu chưa có thì thêm mới
        $sql = "INSERT INTO carts( ProductID, Quantity) 
                VALUES ($productId, 1)";
    }
    $sql2= "UPDATE products SET soluong = soluong - 1 WHERE ProductID=$productId";
    $connect->query($sql2);
    $connect->query($sql);
}


?>
