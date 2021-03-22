<html>
 <head>
 <title> Item update</title>
 </head>
<body bgcolor="cyan">
  <form method="post" action="itemupdate3.php">
<center>


<?php
include_once 'conn1.php';
$rid = $_POST['id'];
$sql = "SELECT * FROM item where id='$rid'";
$result=mysqli_query($conn,$sql);
	
		if (mysqli_num_rows($result) > 0) 
		{
	?>
<br><br>
  	
   

	<?php
	
	if($row = mysqli_fetch_assoc($result)) {
	?>
                  Id:&nbsp&nbsp <input type="text" value="<?php echo $row["id"]; ?>" name="id"><br><br>
	<b
>Product Name &nbsp&nbsp</b>
    	<input type="text" value="<?php echo $row["item_name"]; ?>" name="pname"><br><br>

	<b>Price &nbsp&nbsp</b>
	<input type="text" value="<?php echo $row["price"]; ?>" name="price"><br><br>

	<b>Quantity &nbsp&nbsp</b>
	<input type="text" value="<?php echo $row["quantity"]; ?>" name="qty"><br><br>



	<input type="Submit" value="Update" name="submit" >


	<?php
	
	}
	?>

	

 	<?php
	}
	else{
   	 echo "No result found";
	}
	?>
</center>
</form>
 </body>
</html>
