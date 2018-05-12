<?php
	require_once '../configs/config.php';
	require_once 'connect.php';
	
		global $conn;
		$track_id="SELECT MAX(track_id) FROM track";
		$sql="SELECT track_name FROM track WHERE track_id=(SELECT Max(track_id) FROM track )";
		$result = mysqli_query($conn,$sql);
		$row = mysqli_fetch_assoc($result);
		echo $row["track_name"];
?>