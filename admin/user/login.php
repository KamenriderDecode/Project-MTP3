
<?php 
session_start();
if(isset($_SESSION['user'])){
  		header('location:../../../index2.php');}


require '../../../models/user.php';

 if(isset($_POST['username'])  && !empty($_POST['username']) &&  isset($_POST['password']) && !empty($_POST['password'])){
// //Gán tài khoản và mật khẩu nhận được từ form vào 2 biến tương ứng
 $username = $_POST['username'];
 $password = $_POST['password'];
 //insert_user($username,$password);
 $user = get_user_by_username($username);

 //insert_user($username,$password);
 if($user['passwd'] === ($password)){
// //Tạo session lưu thông tin thành viên đăng nhập thành công
$_SESSION['user'] = $user['user_name'];

 echo "Login sucessfull <br>";
 header('location:../../../index2.php');
 }
else{
//Bật cờ lỗi
$error = true;
 }
 }


?>
