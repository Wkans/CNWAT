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
        echo "<li><a href='index.php?page=calculate'>Calculate</a></li>";
        echo "<li><a href='index.php?page=drawtable'>Drawtable</a></li>";
        echo "<li><a href='index.php?page=register'>register</a></li>";
        echo "<li><a href='index.php?page=contact'>Contact</a></li>";
        ?>
    </ul>
</body>
</html>
