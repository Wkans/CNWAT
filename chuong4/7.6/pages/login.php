<?php
// Bắt đầu session
session_start();

// Lấy dữ liệu từ Cookie nếu có
$saved_username = $_COOKIE["username"] ?? "";
$saved_password = $_COOKIE["password"] ?? "";

// Xử lý khi người dùng nhấn nút submit
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (!empty($_POST["username"]) && !empty($_POST["password"])) {
        $username = $_POST["username"];
        $password = $_POST["password"];

        if ($username === "admin" && $password === "admin") {
            // Lưu session
            $_SESSION["username"] = $username;
            $_SESSION["password"] = $password;

            // Lưu cookie
            setcookie("username", $username, time() + 20, "/");
            setcookie("password", $password, time() + 20, "/");
            // Chuyển đến admin
            header("Location: admin/index.php");
            exit;
        } else {
            $error = "Tên đăng nhập hoặc mật khẩu không chính xác!";
        }
    }
}
?>

<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Đăng nhập</title>
</head>
<body>
    <form action="" method="post">
        <h3>Đăng nhập (Cookie)</h3>
        <div>
            <label for="username">Username:</label>
            <input type="text" name="username" value="<?php echo $saved_username; ?>">
        </div>
        <div>
            <label for="password">Password:</label>
            <input type="password" name="password" value="<?php echo $saved_password; ?>">
        </div>
        <div>
            <button type="reset">Nhập lại</button>
            <button type="submit">Đăng nhập</button>
            <?php
            // Nếu có cookie thì in thông báo màu đỏ ngay bên cạnh
            if (!empty($saved_username) && !empty($saved_password)) {
                echo "<span style='color:red; margin-left:10px;'>username, password được lấy từ Cookies</span>";
            }
            ?>
        </div>
    </form>
</body>
</html>
