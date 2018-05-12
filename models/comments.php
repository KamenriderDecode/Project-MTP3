<?php
   function getComments($conn)
   {    if(isset($_POST['submit']))
       {
       $username=$_POST['username'];
        $message=$_POST['message'];
         $date=$_POST['date'];
         $id=$_POST['trackidget'];
         $getcomments=mysqli_query($conn,"INSERT INTO comments(username,message,date,track_id) VALUES ('$username','$message','$date','$id')");
       }
   }
   function displayComments($conn,$id)
   {   $displaycomments="SELECT * FROM comments WHERE track_id=$id";
        $result=$conn->query($displaycomments);
        while($row=mysqli_fetch_assoc($result))
        {
            echo "  <div class='historycomments'>";
            echo  " <div class='historycomments1'><a>".$row['username']."</a>
                    <span>".$row['date']."</span></div>
                    <p>".$row['message']."</p>";
  if(isset($_SESSION['user'])&&$_SESSION['user']==$row['username'])          
                    {  echo '<form class="editsubmit" action="models/comments_edit.php" method="POST">
                    <input type="hidden" name="trackid" value="'.$id.'">
                    <input type="hidden" name="id" value="'.$row['id'].'">
					<input type="hidden" name="message" value="'.$row['message'].'" >
					<input class="editsubmit1" type="submit" name="edit1" value="EDIT"/>
				  	</form>    
                    ';
                echo '<form class="deletesubmit"action="'.deleteComments($conn).'" method="POST">
                      <input class="deletesubmit1" type="submit" name="delete" value="DELETE">
                      <input type="hidden" name="id" value="'.$row['id'].'">
                      </form>';
                    }
                echo "</div>";
        }    
   }
   function deleteComments($conn)
   {    if(isset($_POST['delete']))
        { $id=$_POST['id'];
         $deleteComments=mysqli_query($conn,"DELETE FROM comments WHERE id='$id'");
        header("Location:#");

        }
   }

?>