<?php
require("connect_db.php");

// Lấy tất cả sản phẩm trong giỏ hàng (không có UserID)
$sql = "SELECT c.CartID, p.ProductName, p.Price, c.Quantity, p.Image
        FROM carts c
        JOIN products p ON c.ProductID = p.ProductID";

$result = $connect->query($sql);

echo "<h1>Giỏ hàng</h1>";
$total = 0;

while($row = $result->fetch_assoc()) {
    $subtotal = $row['Price'] * $row['Quantity'];
    $total += $subtotal;

    echo "<div style='margin:10px; border:1px solid #ccc; padding:10px;'>";
    echo "<img src='../images/".$row['Image']."' width='80'><br>";
    echo "<strong>".$row['ProductName']."</strong><br>";
    echo "Giá: ".number_format($row['Price'])." VND<br>";
    echo "Số lượng: ".$row['Quantity']."<br>";
    echo "Thành tiền: ".number_format($subtotal)." VND<br>";

    echo "<form method='POST' action='pages/deleteCart.php' style='margin-top:5px;'>";
    echo "<input type='hidden' name='id' value='".$row['CartID']."'>";
    echo "<button type='submit' style='background:red;color:white;border:none;padding:5px 10px;cursor:pointer;'>Xóa</button>";
    echo "</form>";

    echo "</div>";
}
echo "<h2>Tổng cộng: ".number_format($total)." VND</h2>";
?>
