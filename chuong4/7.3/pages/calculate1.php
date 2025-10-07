<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Calculate1</title>
</head>
<body>
    <h3>Nhập 2 số nguyên a, b</h3>
    <form method="post">
        <table border="1">
            <tr>
                <td>Số a</td>
                <td><input type="number" name="a" required></td>
            </tr>
            <tr>
                <td>Số b</td>
                <td><input type="number" name="b" required></td>
            </tr>
            <tr>
                <td>Phép tính</td>
                <td>
                    <label>+</label>
                    <input type="radio" name="op" value="+">
                    <label>-</label>
                    <input type="radio" name="op" value="-"> 
                    <label>*</label>
                    <input type="radio" name="op" value="*"> 
                    <label>/</label>
                    <input type="radio" name="op" value="/"> 
                </td>
            </tr>
            <tr>
                <td colspan="2" align="center">
                    <input type="submit" value="Calculate">
                </td>
            </tr>
        </table>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $a = (int)$_POST['a'];
        $b = (int)$_POST['b'];
        $operator = $_POST['op'];

        
        switch ($operator) {
            case '+': $result = $a + $b; break;
            case '-': $result = $a - $b; break;
            case '*': $result = $a * $b; break;
            case '/': 
                if ($b != 0) {
                    $result = $a / $b;
                } else {
                    $result = "Error: chia cho 0";
                }
                break;
            default:
                $result = "chon phep tinh";
        }

        echo "<h3>Ket qua: $a $operator $b = $result</h3>";
    }
    ?>
</body>
</html>
