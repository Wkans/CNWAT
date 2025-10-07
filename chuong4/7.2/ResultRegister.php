<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Kết quả Đăng Ký</title>
    <style>
        .result {
            text-align: center;     /* Căn giữa chữ */
            margin: 0 auto;        /* Căn giữa khối */
            width: 50%;            /* Đặt độ rộng khối */
        }
        h3 {
            text-align: center;     /* Căn giữa tiêu đề */
        }
    </style>
</head>

<body>
    <h3>Kết quả đăng ký</h3>
    <div class="result">
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $ten = $_POST['ten'] ?? '';
            $diachi = $_POST['diachi'] ?? '';
            $nghe = $_POST['nghe'] ?? '';
            $ghichu = $_POST['ghichu'] ?? '';

            echo "<p><b>Tên:</b> $ten</p>";
            echo "<p><b>Địa chỉ:</b> $diachi</p>";
            echo "<p><b>Nghề:</b> $nghe</p>";
            echo "<p><b>Ghi chú:</b> $ghichu</p>";
        } else {
            echo "<p>Không có dữ liệu được gửi.</p>";
        }
        ?>
    </div>
</body>
</html>
