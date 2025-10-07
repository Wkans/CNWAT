<?php
$id = isset($_GET['id']) ? intval($_GET['id']) : -1;

$filename = "student.txt";
$lines = file($filename, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
$students = [];

// Gom 5 dòng = 1 sinh viên
for ($i = 0; $i < count($lines); $i += 5) {
    $students[] = array_slice($lines, $i, 5);
}

// Kiểm tra id
if ($id < 1 || $id > count($students)) {
    die("Sinh viên không tồn tại!");
}

$sv = $students[$id - 1];

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $ten = $_POST['ten'];
    $ngaysinh = $_POST['ngaysinh'];
    $diachi = $_POST['diachi'];
    $lop = $_POST['lop'];
    $anh = $sv[3]; // mặc định giữ ảnh cũ

    // Nếu có upload ảnh mới
    if (isset($_FILES['anh']) && $_FILES['anh']['error'] == 0) {
        $upload_dir = "uploads/";
        $upload_dir_server = "../uploads/";
        $tenFile = basename($_FILES['anh']['name']); 
        $duongdan_server = $upload_dir_server . $tenFile;
        $duongdan_file = $upload_dir . $tenFile;
        // Xóa ảnh cũ nếu tồn tại
        if (file_exists($sv[3])) {
            unlink($sv[3]);
        }

        // Upload ảnh mới
        if (move_uploaded_file($_FILES['anh']['tmp_name'], $duongdan_server)) {
            $anh = $duongdan_file;
        }
    }

    // Cập nhật thông tin
    $students[$id - 1] = [$ten, $ngaysinh, $diachi, $anh, $lop];

    // Ghi lại file
    $fp = fopen($filename, "w");
    foreach ($students as $st) {
        foreach ($st as $item) {
            fwrite($fp, $item . "\n");
        }
    }
    fclose($fp);

    echo "<p style='color:green;'>Cập nhật thành công!</p>";
    echo "<a href='../list.php'>Quay lại danh sách</a>";
    exit;
}
?>

<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Sửa sinh viên</title>
</head>
<body>
    <h2>Sửa thông tin sinh viên</h2>
    <form method="post" enctype="multipart/form-data">
        Tên: <br>
        <input type="text" name="ten" value="<?php echo $sv[0]; ?>"><br><br>

        Ngày sinh: <br>
        <input type="date" name="ngaysinh" value="<?php echo $sv[1]; ?>"><br><br>

        Địa chỉ: <br>
        <input type="text" name="diachi" value="<?php echo $sv[2]; ?>"><br><br>

        Ảnh hiện tại: <br>
        <img src="../<?php echo $sv[3]; ?>" width="100"><br><br>

        Chọn ảnh mới: <br>
        <input type="file" name="anh"><br><br>

        Lớp: <br>
        <input type="text" name="lop" value="<?php echo $sv[4]; ?>"><br><br>

        <input type="submit" value="Cập nhật">
    </form>
</body>
</html>
