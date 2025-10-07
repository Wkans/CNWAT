<?php
include ("connect_db.php");

// Lấy số trang hiện tại (mặc định là 1)
$page = isset($_GET['page']) && is_numeric($_GET['page']) ? (int)$_GET['page'] : 1;
if ($page < 1) $page = 1;
$limit = 10; // số bản ghi mỗi trang
$start = ($page - 1) * $limit;

// Lấy tổng số bản ghi
$totalResult = $connect->query("SELECT COUNT(*) as total FROM HOSO");
$totalRow = $totalResult->fetch_assoc();
$totalRecords = $totalRow['total'];
$totalPages = ceil($totalRecords / $limit);

// Lấy dữ liệu HOSO theo trang
$result = $connect->query("SELECT * FROM HOSO LIMIT $start, $limit");
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Danh sách HOSO</title>
</head>
<body>
    <h2>Danh sách HOSO</h2>
    <table border="1" cellspacing="0" cellpadding="5">
        <tr>
            <th>MAHS</th>
            <th>Họ tên</th>
            <th>Ngày sinh</th>
            <th>Địa chỉ</th>
            <th>Lớp</th>
            <th>Điểm Toán</th>
            <th>Điểm Lý</th>
            <th>Điểm Hóa</th>
            <th>Thao tác</th>
        </tr>
        <?php
        while ($row = $result->fetch_assoc()){
            echo "
            <tr>
                <td>{$row['MAHS']}</td>
                <td>{$row['HOTEN']}</td>
                <td>{$row['NGAYSINH']}</td>
                <td>{$row['DIACHI']}</td>
                <td>{$row['LOP']}</td>
                <td>{$row['DIEMTOAN']}</td>
                <td>{$row['DIEMLY']}</td>
                <td>{$row['DIEMHOA']}</td>
                <td>
                    <a href='pages/edit_hoso.php?id={$row['MAHS']}'>Sửa</a> |
                    <a href='pages/delete_hoso.php?id={$row['MAHS']}' onclick=\"return confirm('Bạn chắc chắn muốn xóa?')\">Xóa</a>
                </td>
            </tr>
            ";
        }
        ?>

    </table>

    <!-- Phân trang -->
</body>
</html>
