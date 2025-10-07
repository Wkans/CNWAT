<?php
// Xác định trang cần hiển thị, mặc định là 'home'
$page = $_GET['page'] ?? 'home';
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Website Demo</title>
    
</head>
<body>
    <!-- Phần đầu trang -->


    <!-- Thanh menu -->
    <?php include("./pages/menu.php"); ?>
    
                <!-- Nội dung -->
                <div class="content">
                    <?php
                    switch ($page) {
                        case 'productList':
                            include 'pages/productList.php';
                            break;
                        case 'productSearch':
                            include 'pages/productSearch.php';
                            break;
                        case 'productDetail':
                            include 'pages/productDetail.php';
                            break;
                        case 'userList':
                            include 'pages/userList.php';
                            break;
                        case 'userAdd':
                            include 'pages/userAdd.php';
                            break;
                        case 'cart':
                            include 'pages/cart.php';
                            break;
                        case 'productAdd':
                            include 'pages/productAdd.php';
                            break;
                        case 'home':
                        default:
                            include 'pages/home.php';
                            break;
                    }
                    ?>

    <!-- Phần chân trang -->
</body>
</html>
