<?php 
    
    include 'configs/connect.php';
   
    $display = 8; 
    $records=$conn->query("SELECT * FROM artist");
    $total_rows=$records->num_rows;
    if(isset($GET_['page'])&&($GET_['page']))
    {
        $curr_page=$GET_['page'];
    }
    else $curr_page="1";
    
    $position=($curr_page-1)*$display;
    $total_page=ceil($total_rows/$display);

    
    

   
?>