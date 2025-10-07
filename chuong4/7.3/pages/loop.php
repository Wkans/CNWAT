<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Loop</title>
</head>
<body>
    <h3>In kết quả dưới theo 3 cách: For, While, Do-While</h3>

    <?php
    $n = 10; // số dòng
    echo "<h4>Dùng For:</h4>";
    for ($i = 1; $i <= $n; $i++) {
        for ($j = 1; $j <= $i; $j++) {
            echo "* ";
        }
        echo "<br>";
    }

    echo "<h4>Dùng While:</h4>";
    $i = 1;
    while ($i <= $n) {
        $j = 1;
        while ($j <= $i) {
            echo "* ";
            $j++;
        }
        echo "<br>";
        $i++;
    }

    echo "<h4>Dùng Do-While:</h4>";
    $i = 1;
    do {
        $j = 1;
        do {
            echo "* ";
            $j++;
        } while ($j <= $i);
        echo "<br>";
        $i++;
    } while ($i <= $n);
    ?>
</body>
</html>
