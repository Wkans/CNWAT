<?php
include ("connect_db.php");

$sql = "SELECT * FROM LOP";
$result = $connect->query($sql);
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Danh sách lớp</title>
</head>
<body>
    <h2>Danh sách lớp</h2>
    <table border="1" cellspacing="0" cellpadding="8">
        <tr>
            <th>Mã lớp</th>
            <th>Tên lớp</th>
            <th>Khóa học</th>
            <th>GVCN</th>
            <th>Thao tác</th>
        </tr>
        <?php
        while ($row = $result->fetch_assoc()) {
            echo "<tr>
                    <td>{$row['MALOP']}</td>
                    <td>{$row['TENLOP']}</td>
                    <td>{$row['KHOAHOC']}</td>
                    <td>{$row['GVCN']}</td>
                    <td>
                        <a href='pages/edit_lop.php?id={$row['MALOP']}'>Sửa</a> | 
                        <a href='pages/delete_lop.php?id={$row['MALOP']}' onclick=\"return confirm('Bạn chắc chắn muốn xóa?')\">Xóa</a>
                    </td>
                </tr>";
        }
        ?>

    </table>
</body>
</html>
