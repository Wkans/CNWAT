<?php
// Kết nối database
require ("connect_db.php");

// Lấy danh sách lớp
$sql = "SELECT * FROM classes";
$classresult = $connect->query($sql);

echo "<h2>Danh sách các lớp</h2>";
echo "<ul>";
while ($row = $classresult->fetch_assoc()) {
    echo "<li><a href='index.php?classid=" . $row['ID'] . "'>" . $row['ClassName'] . "</a></li>";
}
echo "</ul>";

$connect->close();
?>
