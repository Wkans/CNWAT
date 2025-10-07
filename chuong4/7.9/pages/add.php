<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Thêm sinh viên mới</title>
    <style>
        form {
            width: 400px;
            margin: 20px auto;
        }
        label {
            display: inline-block; 
            width: 100px;          
        }
    </style>
</head>
<body>
    <h2 style="text-align:center;">Thêm sinh viên mới</h2>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $ten    = trim($_POST["ten"]);
        $ngaysinh = trim($_POST["ngaysinh"]);
        $diachi = trim($_POST["diachi"]);
        $lop    = trim($_POST["lop"]);
        $anh    = "";

        // Xử lý upload ảnh
        if (!empty($_FILES["anh"]["name"])) {
            $target_dir = "uploads/";
            $target_file = $target_dir . basename($_FILES["anh"]["name"]);
            if (move_uploaded_file($_FILES["anh"]["tmp_name"], $target_file)) {
                $anh = $target_file;
            } else {
                echo "<p style='color:red;text-align:center;'>Lỗi upload ảnh!</p>";
            }
        }

        if ($ten && $ngaysinh && $diachi && $lop) {
            $fp = fopen("pages/student.txt", "a");
            fwrite($fp, "\n".$ten."\n");
            fwrite($fp, $ngaysinh."\n");
            fwrite($fp, $diachi."\n");
            fwrite($fp, $anh."\n");
            fwrite($fp, $lop);
            fclose($fp);

            echo "<p style='color:green;text-align:center;'>Thêm sinh viên thành công!</p>";
        } else {
            echo "<p style='color:red;text-align:center;'>Vui lòng nhập đầy đủ thông tin!</p>";
        }
    }
    ?>

    <form method="POST" enctype="multipart/form-data">
        <label>Full name:</label>
        <input type="text" name="ten" required><br>

        <label>Birthday:</label>
        <input type="date" name="ngaysinh" required><br>

        <label>Address:</label>
        <input type="text" name="diachi" required><br>

        <label>Image:</label>
        <input type="file" name="anh" required><br>

        <label>Class:</label>
        <input type="text" name="lop" required><br>

        <input type="reset" value="Nhập lại">
        <input type="submit" value="Lưu">
    </form>
</body>
</html>
