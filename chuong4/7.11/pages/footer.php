<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Bảng màu</title>
    <style>
        table {
            border-collapse: collapse;
            width:100%;
            left:0;
            bottom:0;
        }
        td {
            height: 30px;
        }
    </style>
</head>
<body>
    <?php
    // Mảng màu
    $colors = [
        ["blue", "red", "magenta"],
        ["yellow", "lime", "gray"],
        ["deepskyblue", "lightgray", "orangered"]
    ];
    ?>
    <table border="1">
        <?php
        foreach ($colors as $row) {
            echo "<tr>";
            foreach ($row as $color) {
                echo "<td style='background-color:$color;'></td>";
            }
            echo "</tr>";
        }
        ?>
    </table>
</body>
</html>
