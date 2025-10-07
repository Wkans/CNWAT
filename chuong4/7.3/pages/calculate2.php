<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Calculate2</title>
</head>
<body>
    <h3>Nhập thông tin sinh viên</h3>
    <form method="post">
        <table border="1">
            <tr>
                <td>Họ và tên</td>
                <td><input type="text" name="name" required></td>
            </tr>
            <tr>
                <td>Lớp</td>
                <td><input type="text" name="class" required></td>
            </tr>
            <tr>
                <td>Điểm M1</td>
                <td><input type="number" name="m1" step="0.1" required></td>
            </tr>
            <tr>
                <td>Điểm M2</td>
                <td><input type="number" name="m2" step="0.1" required></td>
            </tr>
            <tr>
                <td>Điểm M3</td>
                <td><input type="number" name="m3" step="0.1" required></td>
            </tr>
            <tr>
                <td>Tổng điểm</td>
                <td>
                    <!-- Hiển thị tổng điểm nếu đã tính -->
                    <input type="text" name="total" value="<?php 
                        if ($_SERVER["REQUEST_METHOD"] == "POST") {
                            $m1 = (float)$_POST['m1'];
                            $m2 = (float)$_POST['m2'];
                            $m3 = (float)$_POST['m3'];
                            echo $m1 + $m2 + $m3;
                        }
                    ?>">
                </td>
            </tr>
            <tr>
                <td colspan="2" align="center">
                    <input type="submit" value="OK">
                    <input type="reset" value="Cancel">
                </td>
            </tr>
        </table>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $name = htmlspecialchars($_POST['name']);
        $class = htmlspecialchars($_POST['class']);
        $m1 = (float)$_POST['m1'];
        $m2 = (float)$_POST['m2'];
        $m3 = (float)$_POST['m3'];
        $total = $m1 + $m2 + $m3;

        echo "<h3>Result:</h3>";
        echo "Họ tên: $name <br>";
        echo "Lớp: $class <br>";
        echo "M1 = $m1, M2 = $m2, M3 = $m3 <br>";
        echo "👉 Tổng điểm = <b>$total</b>";
    }
    ?>
</body>
</html>
