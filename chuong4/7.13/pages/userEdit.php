<?php
require("connect_db.php");

$id = $_GET['id'] ?? 0;

// Lấy dữ liệu user hiện tại
$sql = "SELECT * FROM users WHERE UserID=$id";
$result = $connect->query($sql);
$user = $result->fetch_assoc();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'] ? md5($_POST['password']) : $user['Password']; 
    $fullname = $_POST['fullname'];
    $birthday = $_POST['birthday'];
    $address = $_POST['address'];

    // Nếu có upload ảnh mới thì thay, ngược lại giữ ảnh cũ
    $image = $user['Image'];
    if ($_FILES['image']['name'] != "") {
        $image = $_FILES['image']['name'];
        move_uploaded_file($_FILES['image']['tmp_name'], "../uploads/".$image);
    }

    $sqlUpdate = "UPDATE users 
                  SET Username='$username', Password='$password', Fullname='$fullname',
                      Birthday='$birthday', Address='$address', Image='$image'
                  WHERE UserID=$id";

    if ($connect->query($sqlUpdate)) {
        echo "Cập nhật thành công! <a href='../index.php'>Quay lại</a>";
    } else {
        echo "Lỗi: ".$connect->error;
    }
}
?>

<h1>Sửa thông tin user</h1>
<form method="post" enctype="multipart/form-data">
    Username: <input type="text" name="username" value="<?php echo $user['Username']; ?>"><br>
    Password: <input type="password" name="password" placeholder="Nhập nếu muốn đổi"><br>
    Fullname: <input type="text" name="fullname" value="<?php echo $user['Fullname']; ?>"><br>
    Birthday: <input type="date" name="birthday" value="<?php echo $user['Birthday']; ?>"><br>
    Address: <textarea name="address"><?php echo $user['Address']; ?></textarea><br>
    Image (ảnh cũ): <img src="../uploads/<?php echo $user['Image']; ?>" width="80"><br>
    Upload ảnh mới: <input type="file" name="image"><br>
    <input type="submit" value="Save">
    <input type="reset" value="Reset">
</form>
