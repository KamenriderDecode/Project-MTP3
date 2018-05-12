<?php
//require_once "config.php";
global $conn;
$conn = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD,DB_DATABASE);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysql_connect_error());
}
mysqli_select_db(DB_DATABASE,$conn);
mysqli_set_charset('utf-8',$conn);


// require "config.php";
// $conn = mysql_connect(DB_SERVER, DB_USERNAME, 123456789);

// // Check connection
// if (!$conn) {
//     die("Connection failed: " . mysql_error());
// }
// echo "Connected successfully";
?>
