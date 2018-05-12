<?php
$mysql_hostname = 'localhost';
$mysql_username = 'root';
$mysql_password = '';
$mysql_dbname = 'mtp3_music';

try {

$pdo= new PDO("mysql:host=$mysql_hostname;dbname=$mysql_dbname", $mysql_username, $mysql_password); 
     $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
     exit( $e->getMessage() );
}


try {

$stmt = $pdo->prepare('SELECT * FROM people WHERE id = :id');
$stmt->bindParam(':id', $id);
$stmt->execute();

} catch (PDOException $e) {
     echo $e->getMessage();
}
include("connect.php");
$track_id=$_GET["track_id"];
$sql="SELECT * FROM track WHERE track_id=$track_id";
$result=$conn->query($sql);
echo "$row['album']";
?>