<?php 
    if(isset($_POST['username'])  && !empty($_POST['username']) &&  isset($_POST['password']) && !empty($_POST['password']))
   {
//Gán tài khoản và mật khẩu nhận được từ form vào 2 biến tương ứng
	$username = $_POST['username'];
	$password = $_POST['password'];
//	echo "$username<br>";
//	echo "$password<br>";

   $sql = "INSERT INTO user_info (user_name, passwd) VALUES ('".$username."','".$password."')";
   mysql_select_db('mtp3_music');
   $stt = mysql_query($sql,$conn);
   if(!$stt){
   	die ('insert_user false <br>');
   }
   else 
   	echo "insert_user succesfull <br>";
   mysql_close($conn);
 }
 // a chua hieu sao n failse
   // header("Location:".BASE_URL);
   // die();
?>
		