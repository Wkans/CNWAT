
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
                        case 'drawTable':
                            include 'pages/drawTable.php';
                            break;

                        case 'loop':
                            include 'pages/loop.php';
                            break;

                        case 'calculate1':
                            include 'pages/calculate1.php';
                            break;

                        case 'calculate2':
                            include 'pages/calculate2.php';
                            break;

                        case 'array1':
                            include 'pages/array1.php';
                            break;

                        case 'uploadform':
                            include 'pages/uploadform.php';
                            break;

                        case 'uploadprocess':
                            include 'pages/uploadprocess.php';
                            break;

                        case 'array3':
                            include 'pages/array3.php';
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
