<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Chi tiết sinh viên</title>
    
</head>
<body>
    <h2 style="text-align:center;">Thông tin chi tiết sinh viên</h2>

    <?php
    
    $id = intval($_GET['id']); // số thứ tự sinh viên
    $fp = fopen("student.txt", "r");

    $students = [];
    $temp = [];
    $i = 0;

    while (!feof($fp)) {
        $line = trim(fgets($fp));
        if ($line === "") continue; // bỏ dòng trống
        $temp[] = $line;
        $i++;

        if ($i == 5) { // đủ 5 dòng => 1 sinh viên
            $students[] = $temp;
            $temp = [];
            $i = 0;
        }
    }
    fclose($fp);


    $sv = $students[$id - 1]; // vì mảng bắt đầu từ 0

    echo "<div style='display:flex;'>";
   
    echo "<img src='../".$sv[3]."' alt='Ảnh'>";
    echo "<div class='info'>";
    echo "<h3>".$sv[0]."</h3>"; // Tên
    echo "<p><b>Ngày sinh:</b> ".$sv[1]."</p>";
    echo "<p><b>Địa chỉ:</b> ".$sv[2]."</p>";
    echo "<p><b>Lớp:</b> ".$sv[4]."</p>";
    echo "</div>";
    echo "</div>";

    ?>
</body>
</html>
