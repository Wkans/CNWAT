
<?php
// Xác định trang cần hiển thị, mặc định là 'home'
$page = $_GET['page'] ?? 'home';
session_start();

// Mặc định tiếng Anh
$lang = "english";

// Nếu đã có session thì dùng lại
if (isset($_SESSION["lang"])) {
    $lang = $_SESSION["lang"];
}
    // Nạp file ngôn ngữ
    require_once("lang/" . $lang . ".php");
    // Nếu bấm nút chọn ngôn ngữ
if (isset($_POST["btnEnglish"])) {
    $_SESSION["lang"] = "english";
    header("Location: index.php?page=$page");
}
if (isset($_POST["btnVietnamese"])) {
    $_SESSION["lang"] = "vietnamese";
    header("Location: index.php?page=$page");

}
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Website Demo</title>
     <style>
        .menu { background: #ddd; padding: 10px; }
    </style>
</head>
<body>
    <!-- Phần đầu trang -->


    <!-- Thanh menu -->
     <!-- Nội dung -->
                <form method="post" class="lang">
                    <input type="submit" name="btnEnglish" value="English">
                    <input type="submit" name="btnVietnamese" value="Tiếng Việt">
                </form>

                <!-- Menu -->
                <div class="menu" style="float:right;" >
                    <a href="index.php?page=home"><?php echo HOME; ?></a> |
                    <a href="index.php?page=contact"><?php echo CONTACT; ?></a> |
                    <a href="index.php?page=intro"><?php echo INTRO; ?></a> |
                    <a href="index.php?page=login"><?php echo LOGIN; ?></a>
                </div>
    <table border="1" width="100%" style="border-collapse: collapse; height: 400px;">
        <tr>
            <!-- Cột bên trái -->
            <td style="width:20%;">
                <?php include("./pages/left.php"); ?>
            </td>

            <!-- Cột nội dung chính -->
            <td>
                <!-- Nội dung -->
                 <div class="content">
                    <?php
                    $page = $_GET['page'] ?? 'home';
                    if (file_exists("pages/$page.php")) {
                        include("pages/$page.php");
                    } else {
                        echo "Page not found.";
                    }
                    ?>
                </div>

            </td>
        </tr>
    </table>

    <!-- Phần chân trang -->
    <?php include("./pages/footer.php"); ?>
</body>
</html>
