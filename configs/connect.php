<?php
 require_once "config.php";
 global $conn;

$conn = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD,DB_DATABASE) or die ('Không thể kết nối tới database');

mysqli_set_charset($conn,"utf8");
?>

