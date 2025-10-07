<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

// Nếu chưa login thì chặn lại
if (empty($_SESSION['username']) || empty($_SESSION['password'])) {
    echo "Bạn chưa đăng nhập!";
    echo "<br><a href='../index.php?page=login'>Quay lại trang đăng nhập</a>";
    exit;
}
?>
<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Trang Home</title>
</head>
<body>
    <h2>Xin chào, <?php echo htmlspecialchars($_SESSION['username']); ?>!</h2>
    <p>Bạn đã đăng nhập thành công.</p>
    <p><strong>Username:</strong> <?php echo htmlspecialchars($_SESSION['username']); ?></p>
    <p><strong>Password:</strong> <?php echo htmlspecialchars($_SESSION['password']); ?></p>

    <p>
        <a href="logout.php">Đăng xuất</a>
    </p>
</body>
</html>
