<?php
      require_once("configs/config.php");
      require_once("configs/connect.php");
     
      
      $sql = "SELECT * FROM track";
      $retval = mysql_query($sql);

      
      
      while($row = mysql_fetch_array($retval))
      {
         $media="{$row['track_link']}";
         $lyrics="{$row['lyrics']}";
         $track_name="{$row['track_name']}";
         $artist="{$row['artist_id']}";
         $publishment="{$row['publishment']}";
         $category="{$row['category']}";
      }
      
      
      mysql_close($conn);
      while($row = mysql_fetch_array($retval))
      {
         echo $track_name;}
   ?>