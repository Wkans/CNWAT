<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Left</title>
    <style>
        .left {
            float: left;
            display:flex;
            flex-direction: column; /* xếp dọc */
            gap: 15px; /* khoảng cách giữa 2 ảnh */
        }
        .left img {
            width: 250px; /* chỉnh kích thước ảnh cho gọn */
        }
    </style>
</head>
<body>
    <div class="left">
        <?php
        echo '<img src="./images/anh1.png" alt="Ảnh 1">';
        echo '<img src="./images/anh2.png" alt="Ảnh 2">';
        ?>
    </div>
</body>
</html>
