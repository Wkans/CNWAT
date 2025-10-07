<?php
require("connect_db.php");

// Lấy từ khóa từ form (nếu có)
$keyword = $_GET['keyword'] ?? "";
?>

<!-- Form tìm kiếm -->
<form method="get" action="index.php" style="margin-bottom:20px;">
    <input type="hidden" name="page" value="productSearch">
    <input type="text" name="keyword" value="<?php echo htmlspecialchars($keyword); ?>" placeholder="Nhập tên sản phẩm..." style="padding:5px; width:250px;">
    <button type="submit" style="padding:5px 10px;">Tìm kiếm</button>
</form>

<?php
if ($keyword != "") {
    $sql = "SELECT * FROM products WHERE ProductName LIKE '%$keyword%'";
    $result = $connect->query($sql);

    echo "<h1>Kết quả tìm kiếm: ".($keyword)."</h1>";

    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            echo "<div style='margin:10px; display:block; border:1px solid #ccc; padding:10px;'>";
            echo "<a href='index.php?page=productDetail&id=".$row['ProductID']."'>".$row['ProductName']."</a><br>";
            echo "Giá: ".number_format($row['Price'], 0, ',', '.')." VND<br>";
            echo "<img src='images/".$row['Image']."' width='100'>";
            echo "</div>";
        }
    } else {
        echo "<p>Không tìm thấy sản phẩm nào.</p>";
    }
}
?>
