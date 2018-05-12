<?php
    session_start();
    if(isset($_SESSION['user']))
    {
    //display data from table track
    //1.connect to database
    echo "<p><a href='view_phan_trang.php'>View Phan Trang</a>";
    require '../configs/connect.php';
    echo "<table border='1' cellpadding='10'>";
    echo "<tr>  <th>artist_id</th>
                <th>artist_avr</th> 
                <th>artist_cover</th>
                <th>name</th>
                <th>artist_bỉrthday</th>
                <th>country</th>
                <th></th>
                <th></th>
         </tr>";
    $resul=mysqli_query($conn,"SELECT * FROM artist");
    if(!$resul) echo 'cant query!!'.$resul->error;
    else echo 'query successfully (connection)';
    //loop by result to display all database on table:
    while($row=mysqli_fetch_array($resul)){
    echo "  <tr>";
    echo        '<td>'.$row['artist_id'].'</td>';
    echo         '<td><img style="width:150px; height:150px; "src="../'.$row['artist_avr'].'"></td>';
    echo       '<td><img style="width:150px; height:150px; "src="../'.$row['artist_cover'].'"></td>';
    echo       '<td>'.$row['name'].'</td>';
    echo       '<td>'.$row['artist_birthday'].'</td>';
    echo       '<td>'.$row['country'].'</td>';
    echo       '<td><a href="edit_artist.php?id='.$row['artist_id'].'">edit</a></td>';
    echo       '<td><a href="delete_artist.php?id='.$row['artist_id'].'">delete</a></td>';
          
    echo     "</tr>"
        ;
  
    }
    echo "</table>";
    echo " <div><p><a href='new_artist.php'>Add New Record</a></p></div>";
 }
    else { header('location:../index2.php');}

?>