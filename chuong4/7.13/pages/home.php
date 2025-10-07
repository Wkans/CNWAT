<?php
require("pages/connect_db.php");
echo "<h1>Trang chủ - Laptop Store</h1>";

$sqlType = "SELECT * FROM categories";
$types = $connect->query($sqlType);

while($type = $types->fetch_assoc()) {
    echo "<h2>".$type['CategoryName']."</h2>";
    $sqlProduct = "SELECT * FROM products WHERE CategoryID=".$type['CategoryID']." ORDER BY CreatedDate DESC LIMIT 2";
    $result = $connect->query($sqlProduct);

    while($row = $result->fetch_assoc()) {
        echo "<div style='border:1px solid #ccc; margin:5px; padding:5px; width:200px; display:inline-block;'>";
        echo "<a href='index.php?page=productDetail&id=".$row['ProductID']."'>
                <img src='images/".$row['Image']."' width='150'><br>".$row['ProductName']."
              </a>";
        echo "<br><button onclick='addToCart(".$row['ProductID'].")'>Thêm vào giỏ hàng</button>";
        echo "</div>";
    }
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