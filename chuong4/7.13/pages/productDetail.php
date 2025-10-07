<?php
require("connect_db.php");
$id = $_GET['id'] ?? 0;

$sql = "SELECT * FROM products WHERE ProductID=$id";
$result = $connect->query($sql);
$row = $result->fetch_assoc();

echo "<h1>".$row['ProductName']."</h1>";
echo "<img src='images/".$row['Image']."' width='300'><br>";
echo "<p>Giá: ".$row['Price']." VND</p>";
echo "<p>Mô tả: ".$row['Description']."</p>";
echo "<br><button onclick='addToCart(".$row['ProductID'].")'>Thêm vào giỏ hàng</button>";
?>
<script>
function addToCart(productId) {
    // Gửi request ngầm đến addToCart.php
    fetch("addToCart.php?productid=" + productId )
        .then(response => {
            // Có thể hiển thị thông báo thêm vào giỏ thành công
            alert("Đã thêm sản phẩm vào giỏ!");
        })
        .catch(error => {
            console.error("Lỗi:", error);
        });
}
</script>
