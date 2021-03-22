<?php
include_once 'conn1.php';
if(isset($_POST['submit']))
{
     $em=$_POST['email'];
	$pass=$_POST['password'];
    

	 $sql = "Select * from users where EMAIL_ID='$em' AND PASSWORD='$pass'";
      $result=mysqli_query($conn,$sql);
        if (mysqli_num_rows($result)==1)
         {
                header("location:view.php");
             
                        
        }      
    $sq="Select * from admin where EMAIL_ID='$em' AND PASSWORD='$pass'";
    $res=mysqli_query($conn,$sq);
    if (mysqli_num_rows($res)==1)
    {
           header("location:add.php");
                 
   }
   else{
    echo "No result found";
}  
	 mysqli_close($conn);
}

?>