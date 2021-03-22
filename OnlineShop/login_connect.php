<?php
include_once 'conn1.php';
if(isset($_POST['submit']))
{
     $em=$_POST['email'];
	$pass=$_POST['password'];
    $user="admin"

	 $sql = "Select * from users where EMAIL_ID='$em' AND PASSWORD='$pass'";
      $result=mysqli_query($conn,$sql);
        if (mysqli_num_rows($result)==1)
         {
             if($user==$em)
             {
                header("location:add.php");
             }
                 
             else
             {
                header("location:view.php");
             }
                        
        }  
        else{
            echo "No result found";
        }
    
	 mysqli_close($conn);
}

?>