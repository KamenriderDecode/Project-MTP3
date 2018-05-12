<?php   
        
 
try {
    $db = new PDO('mysql:host=localhost; dbname=mtp3_music', 'root', '');
    $db->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
    $db->exec("set names utf8");
 
} 
catch(PDOException $errMsg) 
{
     echo 'ERROR: ' . $errMsg->getMessage();
}
?>