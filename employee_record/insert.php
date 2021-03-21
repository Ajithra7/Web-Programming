<html>
   <body bgcolor ="#FBB117">
	
      <form action="main.html method="post">
         <center>
	    <br><br>
	       <?php
	          include_once 'conn.php';
		  if(isset($_POST['submit']))
		    {
			$eid=$_POST['id'];
			$name=$_POST['name'];
			$desig=$_POST['desig'];
			$salary=$_POST['salary'];

			$sql="INSERT INTO employee_record(Eid,ename,desig,salary)
			      VALUES('$eid','$name','$desig','$salary')";
		
			if(mysqli_query($conn,$sql))
			   {
			      echo "<br>New Employee Added!!!<br>";
			   }
		        else
			   {
		 	      echo"Error:".$sql."".mysqli_error($conn);
			   }
			mysqli_close($conn);
		   }
	     ?>
	   <br><br><input type="submit" value="Back to Home Page" name= "submit">
         </center>
      </form>
   <body>
</html>