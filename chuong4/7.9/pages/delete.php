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

// Lấy sinh viên cần xóa
$sv = $students[$id - 1];



// Xóa sinh viên khỏi mảng
unset($students[$id - 1]);

// Ghi lại file
$fp = fopen($filename, "w");
foreach ($students as $st) {
    foreach ($st as $item) {
        fwrite($fp, $item . "\n");
    }
}
fclose($fp);



exit;
?>
