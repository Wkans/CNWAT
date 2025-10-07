<?php
require ("connect_db.php");
// Lấy ID lớp từ GET
$classid = $_GET['classid'] ?? 0;

// Lấy danh sách sinh viên trong lớp
$sql = "SELECT * FROM students WHERE ClassID = '$classid'";
$studentResult = $connect->query($sql);

echo "<h2>DANH SÁCH SINH VIÊN TRONG LỚ</h2>";
echo "<table border='1' cellpadding='5'>";
echo "<tr>
    <th>Tên</th>
    <th>Địa chỉ</th>
    <th>Giới tính</th>
    <th>Thao tác</th>
    </tr>";

while ($row = $studentResult->fetch_assoc()) {
    echo "<tr>";
    echo "<td>" . $row['StudentName'] . "</td>";
    echo "<td>" . $row['StudentAddress'] . "</td>";
    echo "<td>" . $row['StudentGender'] . "</td>";
    echo "<td><a href='/pages/StudentDetail.php?id=" . $row['ID'] . "'>Chi tiết</a></td>";
    echo "</tr>";
}
echo "</table>";

$connect->close();
?>
