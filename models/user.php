
<?php
require_once '../../../configs/config.php';
require_once '../../../configs/connect.php';

function insert_user($username,$password){
// require '../../configs/config.php';
// require '../../models/connect.php';
 global $conn;
   $sql = "INSERT INTO user_info (user_name, passwd) VALUES ('".$username."','".$password."')";
   //$sql = "INSERT INTO user_info (user_name, passwd) VALUES ($username,$password)";
    if (mysqli_query($conn, $sql)) {
      header('location:../../../index2.php');  
      echo "New record created successfully";
      } else {
          echo "Error: " . $sql . "<br>" . mysqli_error($conn);
          }
      mysqli_close($conn);

}

function get_user_by_username($username){//tim ten user và password cua user bang ten user
 global $conn;
 $sql = "SELECT user_name,passwd FROM user_info
          WHERE user_name = '".$username."'";

    $query = mysqli_query($conn,$sql);
     while($row = mysqli_fetch_array($query, MYSQLI_ASSOC))
          {
       return $row ;
      mysqli_close($conn);
      }
}
 function check_existed_user($username){// ten user tim trong sql neu co tra ve number>0
   global $conn;
   $sql = "SELECT user_name FROM user_info WHERE user_name ='".$username."' ";
    $query = mysqli_query($conn,$sql);
    return mysqli_num_rows($query);
echo '<script type="text/javascript">alert("User aready exited, go to login -->!");</script>';    // if ($query == false) {
    //   echo "query false";
    // }
    // else {
    //   echo "query ok<br>";
    // $check = mysqli_num_rows($query);
    // if ($check >= 0) {
    //   echo "user aready exited";
    // }
    //  else {echo "oke";}
    // }
}

?>
