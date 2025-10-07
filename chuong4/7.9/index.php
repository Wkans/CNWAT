
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
    <table border="1" width="100%" style="border-collapse: collapse; height: 400px;">
        <tr>
            <!-- Cột bên trái -->
            <td style="width:20%;">
                <?php include("./pages/left.php"); ?>
            </td>

            <!-- Cột nội dung chính -->
            <td>
                
                <!-- Nội dung -->
                <div class="content">
                    <?php
                    switch ($page) {
                        case 'list':
                            include 'pages/list.php';
                            break;
                        case 'add':
                            include 'pages/add.php';
                            break;
                        case 'login':
                            include 'pages/login.php';
                            break;
                        case 'home':
                        default:
                            include 'pages/home.php';
                            break;
                    }
                    ?>
            </td>
        </tr>
    </table>

    <!-- Phần chân trang -->
    <?php include("./pages/footer.php"); ?>
</body>
</html>
