<?php
require "libs/xuLyMangSo.php"; // dùng lại hàm đã viết ở file trước

$result = "";
if ($_SERVER["REQUEST_METHOD"] == "POST" ) {
    // Lấy chuỗi số từ form
    $numbers = trim($_POST['numbers']);

    // Tách chuỗi thành mảng số (ngăn cách bằng khoảng trắng hoặc dấu phẩy)
    $arr = preg_split('/[\s,]+/', $numbers);
    

    if (!empty($arr)) {
        $tong = array_sum($arr);
        $trungBinh = avgDay($arr);
        $min = minDay($arr);
        $max = maxDay($arr);

        $result = "
        <h3>KẾT QUẢ:</h3>
        <p><b>Tổng:</b> $tong</p>
        <p><b>Trung bình:</b> $trungBinh</p>
        <p><b>Min:</b> $min</p>
        <p><b>Max:</b> $max</p>";
    }
}
?>

<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Thao tác trên mảng 1 chiều</title>
</head>
<body>
    <h3>Thao tác trên mảng 1 chiều:</h3>
    <p>Bài toán: nhập vào chuỗi số (ngăn cách bằng dấu cách hoặc dấu phẩy):</p>

    <form method="post">
        <input type="text" name="numbers" size="80" 
               value="<?php echo $_POST['numbers'] ?? ''; ?>">
        <br><br>
        <button type="reset">Reset</button>
        <button type="submit">Calculate</button>
    </form>

    <div style="margin-top:20px;">
        <?php echo $result; ?>
    </div>
</body>
</html>
