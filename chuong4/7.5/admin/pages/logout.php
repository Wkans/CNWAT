<?php
session_start(); // Khởi động session

// Xóa tất cả session
session_unset();    // Xóa các biến session
session_destroy();  // Hủy session

// Chuyển hướng về trang đăng nhập
header("Location: ../index.php");
exit();
?>
