<?php

 require 'configs/connect.php';

    $artist_id=$_GET["artist_id"];
    if(!isset($artist_id))
    {
      include"index2.php";
    }
    else
  {
    $check_id="SELECT * FROM artist WHERE artist_id='".$artist_id."'";
    $stt=mysqli_query($conn,$check_id);
    //var_dump($conn); die();
    if(!$stt){
    die ('Record not exist <br>');
   }
      while ($row=mysqli_fetch_array($stt)) 
      //MYSQL_ASSOC tranh dao nguoc SQL
      {
        $name = $row['name'];
        $img_avr = $row['artist_avr'];
        $img_cover=$row['artist_cover'];
        $birthday=$row['artist_birthday'];
        $country=$row['country'];
        $category=$row['category'];
        $track=$row['track_list'];
        $history=$row['history'];
      }

    $category="SELECT artist.category,category.cate_name
    FROM artist
    INNER JOIN category ON artist.category=category.cate_id
    WHERE artist_id='".$artist_id."'" ;
    $cate=mysqli_query($conn,$category);
    if(!$cate){
    die ('Record not exist <br>');
    }
      while ($row=mysqli_fetch_array($cate)) {
        $cate_name=$row['cate_name'];
    }
   mysqli_close($conn);
 }
?>