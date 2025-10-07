<?php
$host ="localhost";
$user = "user1";
$pass = "user1";
$db = "users";

$connect = new mysqli($host, $user, $pass, $db);
if($connect ->connect_error){
    die("Kết nối thất bại".$connect->connect_error);
}
?>