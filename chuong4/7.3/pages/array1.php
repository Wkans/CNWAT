<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Array1</title>
</head>
<body>
    <h3>Sử dụng mảng để tính: hiệu, tổng, tích 2 ma trận</h3>
    <form method="post">
        <div style ="display:flex;">
            <table border="1">
                <tr>
                    <th colspan="3">Nhập Ma trận 1</th>
                </tr>
                <?php
                for ($i = 0; $i < 3; $i++) {
                    echo "<tr>";
                    for ($j = 0; $j < 3; $j++) {
                        echo "<td><input type='number' name='a[$i][$j]'></td>";
                    }
                    echo "</tr>";
                }
                ?>
            </table>
            <table border="1" >
                <tr>
                    <th colspan="3">Nhập Ma trận 2</th>
                </tr>
                <?php
                // tạo ô nhập cho 3x3
                for ($i = 0; $i < 3; $i++) {
                    echo "<tr>";
                    for ($j = 0; $j < 3; $j++) {
                        echo "<td><input type='number' name='b[$i][$j]'></td>";
                    }
                    echo "</tr>";
                }
                ?>
            </table>
        </div>
        <br>
        <input type="reset" value="Nhập lại">
        <input type="submit" value="Tính">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $a = $_POST['a'];
        $b = $_POST['b'];
        $n = 3;

        // Khởi tạo ma trận kết quả
        $tong = $hieu = $tich = array();

        // Tính tổng và hiệu
        for ($i = 0; $i < $n; $i++) {
            for ($j = 0; $j < $n; $j++) {
                $tong[$i][$j] = $a[$i][$j] + $b[$i][$j];
                $hieu[$i][$j] = $a[$i][$j] - $b[$i][$j];
            }
        }

        // Tính tích
        for ($i = 0; $i < $n; $i++) {
            for ($j = 0; $j < $n; $j++) {
                $tich[$i][$j] = 0;
                for ($k = 0; $k < $n; $k++) {
                    $tich[$i][$j] += $a[$i][$k] * $b[$k][$j];
                }
            }
        }

        // Hàm in ma trận
        function printMatrix($m, $n) {
            for ($i = 0; $i < $n; $i++) {
                for ($j = 0; $j < $n; $j++) {
                    echo $m[$i][$j] . " ";
                }
                echo "<br>";
            }
        }

        echo "<h3>KẾT QUẢ:</h3>";
        echo "<b>Ma trận Tổng:</b><br>";
        printMatrix($tong, $n);
        echo "<br><b>Ma trận Hiệu:</b><br>";
        printMatrix($hieu, $n);
        echo "<br><b>Ma trận Tích:</b><br>";
        printMatrix($tich, $n);
    }
    ?>
</body>
</html>
