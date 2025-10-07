<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Menu</title>
    <style>
        .menu {
            list-style: none;
            display: flex;
            background: #333; /* nền màu xám đen */
        }

        .menu li {
            margin: 0;
        }

        .menu li a {
            display: block;
            padding: 10px 20px;
            color: #fff;
            text-decoration: none;
        }

    </style>
</head>
<body>
    <ul class="menu">
        <?php
        echo "<li><a href='index.php?page=home'>Home</a></li>";
        echo "<li><a href='index.php?page=drawTable'>DrawTable</a></li>";
        echo "<li><a href='index.php?page=loop'>Loop</a></li>";
        echo "<li><a href='index.php?page=calculate1'>Calculate1</a></li>";
        echo "<li><a href='index.php?page=calculate2'>Calculate2</a></li>";
        echo "<li><a href='index.php?page=array1'>Array1</a></li>";
        echo "<li><a href='index.php?page=uploadform'>UploadForm</a></li>";
        echo "<li><a href='index.php?page=uploadprocess'>UploadProcess</a></li>";
        echo "<li><a href='index.php?page=array3'>Array3</a></li>";
        ?>
    </ul>
</body>
</html>
