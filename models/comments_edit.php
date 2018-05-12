<?php      require '../configs/connect.php';
            
            echo        "<form action='".updatecomment($conn)."'method='POST'>";
            echo        '<input type="hidden" name="trackidedit" value="'.$_POST['trackid'].'">';
            echo        '<input type="hidden" name="editid" value="'.$_POST['id'].'">';
			echo		"<textarea name='editmessage' >".$_POST['message']."</textarea>";
			echo		"<input type='submit' name='edit2' value='EDIT'/>";
			echo	  	'</form>';
                    
                    function updatecomment($conn)
                    {
                    if(isset($_POST['edit2'])){
                    $id=$_POST['trackidedit'];
                    $editmessage=$_POST['editmessage'];
                    $editid=$_POST['editid'];
                    $editcomments=mysqli_query($conn,"UPDATE comments SET message='$editmessage' WHERE id='$editid'" ) or die ('Không thể kết nối tới database') ;
                    header("Location:../track_test.php?track_id=".$id."");
                   
                    }
                    
                    }  

?>