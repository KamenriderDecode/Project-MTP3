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
            <strong>track_avt    </strong><input type="file" name="UpLoadIMG" /><br/>
            <strong>track_link</strong><input type="file" name="UpLoadMP3" /><br/> <!--name phan biet ca dau space :(( mat ca buoi chieu))-->
            <strong>publishment(*year)</strong><input type="text" name="years" /><br/>
            <strong>trank_id</strong><input type="text" name="trackid" /><br/>
            <strong>track_name  </strong><input type="text" name="nametrack" /><br/>
            <strong>name_art    </strong><input type="text" name="nameartist" /><br/>
            <input type="submit" name="submit" value="Upload"/>
        </form>
        </body>
    </head>
</html>
<?php

    require '../configs/connect.php';
    if(isset($_POST['submit']))
    {   
           $publishment=mysqli_real_escape_string($conn,$_POST['years']);// cai nay de loai bo ki tu dac biet chua hieu lam
            $track_name=mysqli_real_escape_string($conn,$_POST['nametrack']);
           $name_art=mysqli_real_escape_string($conn,$_POST['nameartist']);
           $track_id=mysqli_real_escape_string($conn,$_POST['trackid']);
           
        if($publishment==''||$track_name==''||$name_art==''||$track_id=='')
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
    

     
            $folderMP3="uploads/";
             $folderMP32="../uploads/";
            $error2=array();
           $name_endMP3=$_FILES['UpLoadMP3']['name'];
           $file_sizeMP3=$_FILES['UpLoadMP3']['size'];
            $name_firstMP3=$_FILES['UpLoadMP3']['tmp_name'];
            $file_typeMP3=pathinfo($name_endMP3,PATHINFO_EXTENSION);
            $file_arrayMP3=array('mp3');
            if(!in_array(strtolower($file_typeMP3),$file_arrayMP3)){ $error2['UpLoadMP3']= "this file is ko nhan.\n"; }
            if($file_sizeMP3>50000000){$error2['UpLoadMP3']="file is lager(phai duoi 50MB)-->failed\n";}
            if(file_exists($folderMP32.$name_endMP3)){$error2['UpLoadMP3']="file da ton tai\n";}

            //up lentnao
            if(empty($error2)&&empty($error))
            {   move_uploaded_file($name_firstIMG,$folderIMG2.$name_endIMG);
                echo "upfileIMG successfully\n";
                move_uploaded_file($name_firstMP3,$folderMP32.$name_endMP3);
                echo "upfileMP3 successfully\n";
                $upALL=mysqli_query($conn,"INSERT INTO track (track_link,publishment,track_avt,track_name,name_art,track_id) VALUES ('$folderMP3$name_endMP3','$publishment','$folderIMG$name_endIMG','$track_name','$name_art','$track_id') ");
            }
            else {echo 'failed: '.$error2['UpLoadMP3'];echo "failed: \n".$error['UpLoadIMG'];}
        
        }


    }
    } else { header('location:../index2.php');}
 

?>
