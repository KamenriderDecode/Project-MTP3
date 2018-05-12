<?php
    session_start();
?>
<?php
 if(isset($_SESSION['user']))
    {
?>
<!DOCTYPE html>
<html>
    <title>New_Record</title>
    <head>
        <body>
        <form action="" method="POST" enctype="multipart/form-data"><!--enctype la bat buoc thi moi gui file dc-->
            <strong>artist_id</strong><input type="text" name="artist_id" /><br/>
            <strong>artist_avr    </strong><input type="file" name="UpLoadIMG" /><br/>
            <strong>artist_cover</strong><input type="file" name="UpLoadMP3" /><br/> <!--name phan biet ca dau space :(( mat ca buoi chieu))-->
            <strong>birthday(*years*month*day)</strong><input type="text" name="birthday" /><br/>
            <strong>name</strong><input type="text" name="name" /><br/>
            <strong>country  </strong><input type="text" name="country" /><br/>

      
            <input type="submit" name="submit" value="Upload"/>
        </form>
        </body>
    </head>
</html>
<?php

    require '../configs/connect.php';
    if(isset($_POST['submit']))
    {   
           $birthday=mysqli_real_escape_string($conn,$_POST['birthday']);// cai nay de loai bo ki tu dac biet chua hieu lam
           $artist_id=mysqli_real_escape_string($conn,$_POST['artist_id']);
            $name=mysqli_real_escape_string($conn,$_POST['name']);
           $country=mysqli_real_escape_string($conn,$_POST['country']);
           
        if($birthday==''||$name==''||$country=='')
        {       echo "Ban phai dien het cac o\n";}
        else{
          //Upload img
            
            $folderIMG="uploads/";
            $folderIMG2="../uploads/";
            $error=array();
            $name_endIMG=$_FILES['UpLoadIMG']['name'];// **['name'] o day la mac dinh ['tmp'] cung vay-->name la file minh co the nhin thay dc con tmp name no thuoc phan sever() chua hieu lam
            $name_firstIMG=$_FILES['UpLoadIMG']['tmp_name'];
            $file_size=$_FILES['UpLoadIMG']['size'];
            $file_type=pathinfo($name_endIMG,PATHINFO_EXTENSION);// de lấy đuôi file day 
            $file_arrayIMG=array('png','jpeg','jpg','gif');
            if(!in_array(strtolower($file_type),$file_arrayIMG)){ $error['UpLoadIMG']= "this file is ko nhan.\n"; }//strtolower de HOA thanh thường
            if($file_size>50000000){$error['UpLoadIMG']="file is lager(phai duoi 50MB)-->failed\n";}
            if(file_exists($folderIMG2.$name_endIMG)){$error['UpLoadIMG']="file da ton tai\n";}
            
        //upmp3
    

     
           
            //up lentnao
            if(empty($error))
            {   move_uploaded_file($name_firstIMG,$folderIMG2.$name_endIMG);
                echo "upfileIMG successfully\n";
            
                $upALL=mysqli_query($conn,"INSERT INTO artist (artist_id,artist_avr,artist_cover,name,birthday,country) VALUES ('$artist_id','$folderIMG$name_endIMG','$folderIMG$name_endIMG','$birthday','$name','$country') ");
            }
            else {echo "failed: \n".$error['UpLoadIMG'];}
        
        }


    }
    } else { header('location:../index2.php');}
 

?>
