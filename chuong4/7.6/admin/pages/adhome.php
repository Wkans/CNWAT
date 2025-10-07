<?php

if (empty($_SESSION['username']) || empty($_SESSION['password'])) {
    echo "Bạn chưa đăng nhập!";
    echo "<br><a href='../index.php?page=login'>Quay lại trang đăng nhập</a>";
    exit;
}

// Tên cookie để lưu danh sách link
$cookie_name = "fav_links";

// Lấy danh sách link từ cookie (nếu có)
$links = [];
if (isset($_COOKIE[$cookie_name])) {
    $links = json_decode($_COOKIE[$cookie_name], true);
    if (!is_array($links)) {
        $links = [];
    }
}

// Nếu submit form thêm link
if ($_SERVER["REQUEST_METHOD"] == "POST" && !empty($_POST['new_link'])) {
    $new_link = trim($_POST['new_link']);
    if ($new_link !== "") {
        $links[] = $new_link;
        // Lưu lại cookie (30 ngày)
        setcookie($cookie_name, json_encode($links), time() + 20, "/");
        // Refresh để hiển thị danh sách cập nhật
        header("Location: index.php");
        exit();
    }
}
?>

<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Quản lý Link yêu thích</title>
</head>
<body>
    <h2>Danh sách Web link ưa thích</h2>

    <?php
    if (count($links) > 0) {
        echo "<ul>";
        foreach ($links as $link) {
            $safeLink = $link;
            echo "<li><a href='{$safeLink}' target='_blank'>{$safeLink}</a></li>";
        }
        echo "</ul>";
    } else {
        echo "<p>Chưa có link nào được lưu.</p>";
    }
    ?>


    <h3>Thêm link mới</h3>
    <form method="post">
        <input type="text" name="new_link" placeholder="Nhập URL..." required>
        <button type="submit">Thêm</button>
    </form>
</body>
</html>

