<?php

require '../configs/config.php';
require '../models/connect.php';

function search_singer_byID(){
	echo"ok";
	$sql = "SELECT artist_id,name FROM artist WHERE artist_id = 1";
	mysql_select_db("mtp3_music");
	$query = mysql_query($sql);
	if (!$query) {
    	die('Invalid query: ' . mysql_error());
	}
     while($row = mysql_fetch_array($query, MYSQL_ASSOC))
          {
     echo "ID:{$row['artist_id']} <br>".
     "Name:{$row['name']} <br>".
     ".......................<br>";
      }
  // mysql_close($conn);
}
search_singer_byID();
?>