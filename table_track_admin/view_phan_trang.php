<?php session_start();
if(isset($_SESSION['user']))
    {?>
<!DOCTYPE html>
<html>
    <head>
        <title>View_Trang</title>
    </head>
    <body>
        <?php
        // khao bao bien de phan trang
        require'../configs/connect.php';
        $display_perpages=5;
        $result=mysqli_query($conn,"SELECT * FROM track");
        $total_rows= mysqli_num_rows($result);
        $number_pages=ceil($total_rows/$display_perpages);
        if(isset($_GET['page'])&&is_numeric($_GET['page']))
        {
            $pages=$_GET['page'];
            if($pages>0&&$pages<=$number_pages){ $start=($pages-1)*$display_perpages;
            $end= $display_perpages;}                                                      
            else{ $start=0;$end=$display_perpages;}
        }
        else{ $page=1;$start=0;$end=$display_perpages;}
        // content
        echo "<p><a href='view_all.php'>View All</a> | <b>View Page:</b> ";
            for ($i = 1; $i <= $number_pages; $i++)
            {
                echo "<a href='view_phan_trang.php?page=$i'>$i</a> ";
            }
        echo "<table border='1' cellpadding='10'>";
        echo "<tr>
                <th>publishment</th>
                <th>track_name</th>
                <th>track_link</th>
                <th>track_avt</th>
                <th>name_art</th>
                <th></th>
                <th></th>
         </tr>"; 
         $result2=mysqli_query($conn,"SELECT * FROM track LIMIT $start,$end");
         while($row=mysqli_fetch_array($result2))
         {
                   echo    "<tr>";
            echo    '<td>'.$row['publishment'].'</th>';
            echo    '<td>'.$row['track_name'].'</td>';
            echo    '<td><audio controls><source src="../'.$row['track_link'].'"></audio></td>';
            echo    '<td><img style="width:150px; height:150px; "src="../'.$row['track_avt'].'"></td>';
            echo    '<td>'.$row['name_art'].'</td>';
            echo    '<td><a href="edit.php?id='.$row['track_id'].'">edit</a></td>';
            echo    '<td><a href="delete.php?id='.$row['track_id'].'">delete</a></td>';
            echo         "</tr>";
         }
        
        ?>
        <div><p><a href='new_record.php'>Add New Record</a></p></div>
    </body>
</html>
<?php
}
    else { header('location:../index2.php');} ?>