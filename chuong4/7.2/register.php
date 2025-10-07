<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Form Đăng Ký</title>
    <style>
       
        /* CSS cho form */
        .form-container {
            padding: 15px;
            width: 350px;
            margin: auto;
            margin-top: 20px;
        }
        .form-group {
            display: flex;
            align-items: center;
            padding: 15px;
        }
        .form-group label {
            width: 80px;           /* chiều rộng cột label */
            font-weight: bold;
        }
    </style>
</head>
<body>
    <!-- Form đăng ký -->
    <div class="form-container">
        <h3 style="text-align:center;">Form Đăng Ký</h3>
        <form method="post" action="index.php?page=ResultRegister" style="max-width: 400px;">
            <div class="form-group">
                <label for="ten">Tên:</label>
                <input type="text" id="ten" name="ten">
            </div>

            <div class="form-group">
                <label for="diachi">Địa chỉ:</label>
                <input type="text" id="diachi" name="diachi">
            </div>

            <div class="form-group">
                <label for="nghe">Nghề:</label>
                <input type="text" id="nghe" name="nghe">
            </div>

            <div class="form-group">
                <label for="ghichu">Ghi chú:</label>
                <textarea id="ghichu" name="ghichu" rows="3"></textarea>
            </div>

            <div class="form-actions">
                <input type="reset" value="Xóa">
                <input type="submit" value="Đăng Ký">
            </div>
        </form>



    </div>

</body>
</html>
