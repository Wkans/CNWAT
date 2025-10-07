<?php
// Kết nối database
require("connect_db.php");

// Xử lý thêm Category mới
if (isset($_POST["addCategory"])) {
    $newCat = $_POST["NewCategoryName"];
    $sqlAddCat = "INSERT INTO categories (CategoryName) VALUES ('$newCat')";
    if ($connect->query($sqlAddCat) === TRUE) {
        echo "Thêm loại sản phẩm thành công!<br>";
    } else {
        echo "Lỗi thêm loại sản phẩm: " . $connect->error . "<br>";
    }
}

// Xử lý khi submit form thêm sản phẩm
if (isset($_POST["addProduct"])) {
    $productName = $_POST['ProductName'];
    $categoryId = $_POST['CategoryID'];
    $price = $_POST['Price'];
    $description = $_POST['Description'];

    // Xử lý upload ảnh
    $image = "";
    if (isset($_FILES["Image"]) && $_FILES["Image"]["error"] == 0) {
        $image = "images/" . basename($_FILES["Image"]["name"]);
        move_uploaded_file($_FILES["Image"]["tmp_name"], $image);
    }

    // Thêm vào database
    $sql = "INSERT INTO products (ProductName, CategoryID, Price, Image, Description) 
            VALUES ('$productName', '$categoryId', '$price', '$image', '$description')";
    if ($connect->query($sql) === TRUE) {
        echo "Thêm sản phẩm thành công!<br>";
    } else {
        echo "Lỗi: " . $connect->error . "<br>";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Add Product</title>
    <!-- CKEditor 5 Classic -->
    <script src="https://cdn.ckeditor.com/ckeditor5/41.4.2/classic/ckeditor.js"></script>
</head>
<body>
    <h3>Thêm loại sản phẩm mới</h3>
    <form method="POST">
        <label>Tên loại sản phẩm:</label><br>
        <input type="text" name="NewCategoryName" required><br><br>
        <button type="submit"name="addCategory">Thêm loại</button>
    </form>

    <h2>Thêm sản phẩm mới</h2>
    <form method="POST" enctype="multipart/form-data">
        <label>Tên sản phẩm:</label><br>
        <input type="text" name="ProductName" required><br><br>

        <label>Loại sản phẩm:</label><br>
        <select name="CategoryID" required>
            <?php
            $result = $connect->query("SELECT CategoryID, CategoryName FROM categories");
            while ($row = $result->fetch_assoc()) {
                echo "<option value='{$row['CategoryID']}'>{$row['CategoryName']}</option>";
            }
            ?>
        </select>
        <br><br>

        <label>Giá (VND):</label><br>
        <input type="number" name="Price" step="0.01" required><br><br>

        <label>Ảnh:</label><br>
        <input type="file" name="Image"><br><br>

        <label>Mô tả:</label><br>
        <textarea id="Description" name="Description"></textarea><br><br>

        <button type="submit" name="addProduct">Save</button>
        <button type="reset">Reset</button>
    </form>

    

    <script>
        // Biến textarea "Description" thành CKEditor
        ClassicEditor
            .create(document.querySelector('#Description'))
    </script>
</body>
</html>
