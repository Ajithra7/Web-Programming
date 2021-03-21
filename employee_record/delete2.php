<html>
   <body bgcolor="#F778A1">
      <form action="main.html" method="post">
         <center>
	    <?php
	       include_once 'conn.php';
               $rid=$_POST['id'];
               $sql="DELETE FROM employee_record WHERE eid='$rid'";

	       if(mysqli_query($conn,$sql))
		 {
		  echo "Record Deleted Successfully!!!";
		 }
	     else
		 { 
	          echo "Error in Deleting Record:".mysqli_error($conn);
		 }
	   <br><br>
	   <input type="submit" value = "Back to Home Page" name = "submit">
       </center>
     </form>
  </body>
</html>