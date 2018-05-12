
<?php 
require '../../../models/user.php';
if(isset($_POST['submit']))
if(isset($_POST['username'])  && !empty($_POST['username']) &&  isset($_POST['password']) && !empty($_POST['password']))
   {
   $username = $_POST['username'];
   $password=$_POST['password'];
   $check_user = check_existed_user($username);
  	if ($check_user) {
  		//alert('User aready exited, go to login -->')
  		echo '<script type="text/javascript">alert("User aready exited, go to login -->!");</script>';
  		header('location:login.php');

  	}
  	else{
	  insert_user($username,$password);
	  echo '<script type="text/javascript">alert("Signup done!");</script>';
  	}

 
}

?>
