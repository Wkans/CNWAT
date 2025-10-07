<?php
require("connect_db.php");

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $password = md5($_POST['password']); // mã hoá đơn giản, thực tế nên dùng bcrypt
    $fullname = $_POST['fullname'];
    $birthday = $_POST['birthday'];
    $address = $_POST['address'];

    // Upload file ảnh
    $image = $_FILES['image']['name'];
    $target = "uploads/".basename($image);
    move_uploaded_file($_FILES['image']['tmp_name'], $target);

    // Thêm vào DB
    $sql = "INSERT INTO users (Username, Password, Fullname, Birthday, Address, Image)
            VALUES ('$username', '$password', '$fullname', '$birthday', '$address', '$image')";
    if ($connect->query($sql) === TRUE) {
        echo "Thêm user thành công! ";
    } else {
        echo "Lỗi: ".$connect->error;
    }
}
?>

<h1>Thêm người dùng mới</h1>
<form method="post" enctype="multipart/form-data">
    Username: <input type="text" name="username"><br>
    Password: <input type="password" name="password"><br>
    Fullname: <input type="text" name="fullname"><br>
    Birthday: <input type="date" name="birthday"><br>
    Address: <textarea name="address"></textarea><br>
    Image: <input type="file" name="image"><br>
    <input type="submit" value="Save">
    <input type="reset" value="Reset">
</form>
