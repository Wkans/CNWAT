<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Calculate</title>
    <style>
        body {
            text-align: center;
            margin-top: 50px;
        }
        .hello {
            font-size: 30px;
            font-weight: bold;
            color: blue;
            position: relative;
            animation: moveText 4s linear infinite;
        }
        @keyframes moveText {
            0%   { left: -100px; }
            50%  { left: 100px; }
            100% { left: -100px; }
        }
    </style>
</head>
<body>
    <h2>Kết quả tính toán</h2>
    <?php
    // 1. Giai thừa 10
    function giaiThua($n) {
        $kq = 1;
        for ($i = 1; $i <= $n; $i++) {
            $kq *= $i;
        }
        return $kq;
    }
    $gt10 = giaiThua(10);

    // 2. Diện tích hình tròn bán kính r = 10
    $r = 10;
    $dienTich = pi() * $r * $r;

    // 3. Thể tích khối cầu bán kính r = 10
    $theTich = (4/3) * pi() * pow($r, 3);

    echo "<p><b>Giai thừa của 10:</b> $gt10</p>";
    echo "<p><b>Diện tích hình tròn bán kính 10:</b> " . round($dienTich, 2) . "</p>";
    echo "<p><b>Thể tích khối cầu bán kính 10:</b> " . round($theTich, 2) . "</p>";
    ?>
    
    <div class="hello">Hello</div>
</body>
</html>
