<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>upload process</title>
</head>
<body>
    <h2>Danh sách file đã upload</h2>
    <?php
    $upload_dir = "uploads/";

    // Trường hợp upload file mới
    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_FILES['files'])) {
        foreach ($_FILES['files']['name'] as $i => $filename) {
            $tmp = $_FILES['files']['tmp_name'][$i];
            if ($filename == "") continue;

            $targetFile = $upload_dir . basename($filename);
            move_uploaded_file($tmp, $targetFile);
        }
    }

    // Luôn hiển thị danh sách file trong thư mục uploads
    $files = scandir($upload_dir);

    foreach ($files as $file) {
        if ($file != "." && $file != "..") {
            echo "<p><a href='$upload_dir$file' download>Download File: $file</a></p>";
        }
    }
?>

</body>
</html>