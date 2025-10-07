<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Danh sách sinh viên</title>
    
</head>
<body>
    <h2>Danh sách sinh viên</h2>
    <table style="border:1px solid black; border-collapse: collapse">
        <tr>
            <th>STT</th>
            <th>Tên</th>
            <th>Ngày sinh</th>
            <th>Địa chỉ</th>
            <th>Ảnh</th>
            <th>Lớp</th>
            <th>Thao tác</th>
        </tr>
        <?php
        $fp = fopen("pages/student.txt", "r");
        $i = 0;
        $stt = 1;
        $student = [];

        while(!feof($fp)) {
            $line = trim(fgets($fp));
             if ($line === "") continue; // bỏ dòng trống
            $student[] = $line;
            $i++;

            if ($i == 5) { // đủ 5 dòng => 1 sinh viên
                $id=$stt;
                echo "<tr>";
                echo "<td>".$stt++."</td>";
                echo "<td>".$student[0]."</td>";
                echo "<td>".$student[1]."</td>";
                echo "<td>".$student[2]."</td>";
                echo "<td><img src='".$student[3]."' alt='Ảnh' style='width:50px; height:50px;'></td>";
                echo "<td>".$student[4]."</td>";
                echo "<td>
                        <a href='pages/detail.php?id=".$id."'>Detail</a> | 
                        <a href='pages/edit.php?id=".$id."'>Edit</a> |
                        <a href='pages/delete.php?id=".$id."'>Delete</a>
                      </td>";
                echo "</tr>";

                // reset để đọc sinh viên kế tiếp
                $i = 0;
                $student = [];
            }
        }

        fclose($fp);
        ?>
    </table>
</body>
</html>
