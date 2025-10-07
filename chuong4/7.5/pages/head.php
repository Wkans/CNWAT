<?php
// --- Phần dữ liệu sinh viên (có thể thay đổi tùy ý) ---
$hoten = "Nguyễn Khắc Doanh";
$mssv  = "AT190411";
$banner = "./images/28237.jpg"; // đường dẫn tới banner
?>
<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Thông tin sinh viên</title>
    <style>
        .container {
            display: flex;           /* chia nội dung thành 2 cột */
            border: 1px solid black; /* khung bao quanh */
            padding: 10px;
            height: 150px;
        }
        .info {
            width: 20%;            /* cột thông tin bên trái */
            margin-right: 20px;
            border-right: 1px solid black;
            padding-right: 10px;
        }
        .banner{
            width: 80%;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="info">
            <?php
            echo "<p><b>Thông tin của sinh viên:</b></p>";
            echo "<p>Họ và tên: $hoten</p>";
            echo "<p>MSSV:$mssv</p>";
            ?>
        </div>
        <div class="banner">
            <?php 
            echo "<img src='$banner' alt='Banner' style='width: 100%;height: 100%;' >";
             ?>
        </div>
    </div>
</body>
</html>
