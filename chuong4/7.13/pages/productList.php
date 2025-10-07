<?php
require("connect_db.php");

$sql = "SELECT * FROM products ORDER BY CreatedDate DESC"; 
$result = $connect->query($sql);

echo "<h1>Danh sách tất cả sản phẩm</h1>";

while($row = $result->fetch_assoc()) {
    echo "<div style='margin:10px; display:inline-block; border:1px solid #ccc; padding:10px; width:200px;'>";
    echo "<a href='index.php?page=productDetail&id=".$row['ProductID']."'>
            <img src='images/".$row['Image']."' width='150'><br>".$row['ProductName']."
          </a><br>";
    echo "Giá: ".number_format($row['Price'], 0, ',', '.')." VND <br>";
    echo "số lượng". $row['soluong'];
    echo "<form method='get' action='pages/addToCart.php' style='margin-top:5px;'>
            <input type='hidden' name='productid' value='".$row['ProductID']."'>
          </form>";
    echo "<br><button onclick='addToCart(".$row['ProductID'].")'>Thêm vào giỏ hàng</button>";
    echo "</div>";
}

?>
<script>
function addToCart(productId) {
    // Gửi request ngầm đến addToCart.php
    fetch("pages/addToCart.php?productid=" + productId )
        .then(response => {
            // Có thể hiển thị thông báo thêm vào giỏ thành công
            alert("Đã thêm sản phẩm vào giỏ!");
        })
        .catch(error => {
            console.error("Lỗi:", error);
        });
}
</script>
