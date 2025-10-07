<!DOCTYPE html>
<html>
<head>
    <meta charset ="UTF-8">
    <title>Draw Table</title>
</head> 
<body>
    <h2>Trang DrawTable:</h2>
    <p>Form vẽ bảng:</p>

    <form method="post">
        Số dòng: <input type="text" name="rows" required><br>
        Số cột: <input type="text" name="cols" required><br><br>
        <input type="reset" value="Nhập Lại">
        <input type="submit" name="draw" value="Vẽ">
        
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $rows = (int)$_POST['rows'];
        $cols = (int)$_POST['cols'];

        echo "<br><table border='1' style='max-width: 600px; max-height: 400px'>";

        for ($i = 1; $i <= $rows; $i++) {
            echo "<tr>";
            for ($j = 1; $j <= $cols; $j++) {
                if ($j <= $i) {
                    echo "<td>$j</td>";
                } else {
                    echo "<td></td>";
                }
            }
            echo "</tr>";
        }

        echo "</table>";
    }
?>

</body>   
</html>