<?php
 if(isset($_POST['timkiem']))
 {  $timkiem=$_POST['timkiem'];
    require 'configs/connect.php';
 $records="SELECT * FROM track WHERE name LIKE '%$timkiem%'" ;
 $record=$conn->query("SELECT * FROM track  WHERE track_name LIKE '%$timkiem%' ");
$num=$record->num_rows;

 if($num>0 && $timkiem!="" ) 
 { 
     echo 'có '.$num.' kết quả cho từ khóa <b>'.$_POST['timkiem'].'</b><br>'; 
     while($row=mysqli_fetch_array($record))
     {
        echo '          
                       <div class="item">
                            <img src="'.$row['track_avt'].' " alt="'.$row['track_name'].'" />
                            <div class="contentitem"><h3><a href="track_test.php?track_id='.$row['track_id'].'">'.$row['track_name'].'</a></h3></div>
                        </div>
                    ';
     }
 }
 
 else if($num==0) echo "";
}



 

?>