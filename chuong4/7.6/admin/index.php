
<?php
// Xác định trang cần hiển thị, mặc định là 'home'
$page = $_GET['page'] ?? 'adminhome';
session_start();

// Kiểm tra session

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
    <?php include("pages/menu.php"); ?>
    <table border="1" width="100%" style="border-collapse: collapse; height: 400px;">
        <tr>
            <!-- Cột bên trái -->

            <!-- Cột nội dung chính -->
            <td>
                
                <!-- Nội dung -->
                <div class="content">
                    <?php
                    switch ($page) {
                        case 'logout':
                            include ('./pages/logout.php');
                            break;
                        case 'adminhome':
                        default:
                            include ('./pages/adhome.php');
                            break;
                    }
                    ?>
            </td>
        </tr>
    </table>

    <!-- Phần chân trang -->
    
</body>
</html>
