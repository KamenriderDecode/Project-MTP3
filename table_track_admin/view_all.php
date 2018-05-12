<?php
    session_start();
    if(isset($_SESSION['user']))
    {
    //display data from table track
    //1.connect to database
    echo "<p><a href='view_phan_trang.php'>View Phan Trang</a>";
    require '../configs/connect.php';
    echo "<table border='1' cellpadding='10'>";
    echo "<tr>  <th>track_id</th> 
                <th>category</th>
                <th>publishment</th>
                <th>track_name</th>
                <th>track_link</th>
                <th>track_avt</th>
                <th>name_art</th>
                <th></th>
                <th></th>
         </tr>";
    $result=mysqli_query($conn,"SELECT category, track_id,publishment,track_name,track_link,track_avt,name_art FROM track");
    if(!$result) echo 'cant query!!'.$result->error;
    else echo 'query successfully (connection)';
    //loop by result to display all database on table:
    while($row=mysqli_fetch_array($result)){
    echo "  <tr>";
    echo        '<td>'.$row['track_id'].'</td>';
    echo         '<td>'.$row['category'].'</td>';
    echo       '<td>'.$row['publishment'].'</td>';
    echo       '<td>'.$row['track_name'].'</td>';
    echo       '<td><audio controls><source src="../'.$row['track_link'].'"></audio></td>';
    echo       '<td><img style="width:150px; height:150px; "src="../'.$row['track_avt'].'"></td>';
    echo       '<td>'.$row['name_art'].'</td>';
    echo       '<td><a href="edit.php?id='.$row['track_id'].'">edit</a></td>';
    echo       '<td><a href="delete.php?id='.$row['track_id'].'">delete</a></td>';
          
    echo     "</tr>"
        ;
  
    }
    echo "</table>";
    echo " <div><p><a href='new_record.php'>Add New Record</a></p></div>";
 }
    else { header('location:../index2.php');}

?>