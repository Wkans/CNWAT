<?php
require("connect_db.php");

$id = $_GET['id'] ?? 0;
$sql = "SELECT * FROM users WHERE UserID=$id";
$result = $connect->query($sql);
$user = $result->fetch_assoc();
?>

<h1>Thông tin chi tiết người dùng: <?php echo $user['Username']; ?></h1>
<p><img src="../uploads/<?php echo $user['Image']; ?>" width="200"></p>
<p>Fullname: <?php echo $user['Fullname']; ?></p>
<p>Birthday: <?php echo $user['Birthday']; ?></p>
<p>Address: <?php echo $user['Address']; ?></p>
<a href="../index.php">Quay lại</a>
