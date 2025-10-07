<?php
require("connect_db.php");

// Lấy danh sách user
$sql = "SELECT * FROM users";
$result = $connect->query($sql);

echo "<h1>Danh sách Users</h1>";
echo "<table border='1' cellspacing='0' cellpadding='5'>";
echo "<tr><th>ID</th><th>Fullname</th><th>Image</th><th>Action</th></tr>";

while($row = $result->fetch_assoc()) {
    echo "<tr>";
    echo "<td>".$row['UserID']."</td>";
    echo "<td>".$row['Fullname']."</td>";
    echo "<td><img src='uploads/".$row['Image']."' width='60'></td>";
    echo "<td>
            <a href='pages/userDetail.php?id=".$row['UserID']."'>Chi tiết</a> | 
            <a href='pages/userEdit.php?id=".$row['UserID']."'>Sửa</a> | 
            <a href='pages/userDelete.php?id=".$row['UserID']."' onclick='return confirm(\"Xoá user này?\")'>Xoá</a>
          </td>";
    echo "</tr>";
}
echo "</table>";
?>
