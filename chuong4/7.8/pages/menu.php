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
        echo "<li><a href='index.php?page=liststudent'>ListStudent</a></li>";
        echo "<li><a href='index.php?page=addstudent'>AddStudent</a></li>";
        echo "<li><a href='index.php?page=login'>login</a></li>";
        ?>
    </ul>
</body>
</html>
