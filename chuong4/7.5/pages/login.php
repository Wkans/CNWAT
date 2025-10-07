<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'] ?? '';
    $password = $_POST['password'] ?? '';

    if ($username === 'admin' && $password === 'admin') {
        // Lưu session
        session_start();
        $_SESSION['username'] = $username;
        $_SESSION['password'] = $password;

        // Thông báo
        echo "<script>alert('Đăng nhập thành công!');</script>";

        // Redirect sang admin/index.php
        header("Location: admin/index.php");
        exit();
    } else {
        echo "<script>alert('Sai username hoặc password!');</script>";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Đăng nhập</title>
</head>
<body>
    <h2>Đăng nhập</h2>
    <form method="post" action="">
        Username: <input type="text" name="username"><br><br>
        Password: <input type="password" name="password"><br><br>
        <input type="submit" value="Đăng Nhập">
    </form>
</body>
</html>
