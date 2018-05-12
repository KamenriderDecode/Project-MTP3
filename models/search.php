<?php
 if(isset($_POST['timkiem']))
 {  $timkiem=$_POST['timkiem'];
    require 'configs/connect.php';
 $recordss="SELECT * FROM artist WHERE name LIKE '%$timkiem%'" ;
 $records=$conn->query("SELECT * FROM artist  WHERE name LIKE '%$timkiem%' ");
$num=$records->num_rows;

 if($num>0 && $timkiem!="" ) 
 { 
     echo 'có '.$num.' kết quả cho từ khóa <b>'.$_POST['timkiem'].'</b><br>'; 
     while($row=mysqli_fetch_array($records))
     {
        echo '          
                       <div class="item">
                            <img src="'.$row['artist_cover'].' " alt="'.$row['name'].'" />
                            <div class="contentitem"><h3><a href="views/front/singer_form.php?artist_id='.$row['artist_id'].'">'.$row['name'].'</a></h3></div>
                        </div>
                    ';
     }
 }
 
 else if($num==0) echo "";
}



 

?>