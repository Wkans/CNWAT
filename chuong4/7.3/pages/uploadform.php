<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>upload form</title>
</head>
<body>
    <h3>Sử dụng mảng kết hợp (Upload 10 file, in danh sách tên file và đường dẫn download)</h3>
    <form action="index.php?page=uploadprocess" method="post" enctype="multipart/form-data">
        <?php
        for ($i = 1; $i <= 3; $i++) {
            echo "File $i: <input type='file' name='files[]'><br><br>";
        }
        ?>
        <input type="reset" value="Reset">
        <input type="submit" value="Upload">
    </form>
</body>
</html>
