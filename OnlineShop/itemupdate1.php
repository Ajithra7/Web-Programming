<html>
 <head>
 <title>Item Update</title>
 </head>
<body bgcolor="Lightgreen">
<center>
	<?php
		include_once 'conn1.php';
	$sql = "SELECT * FROM item";
	$result=mysqli_query($conn,$sql);
		if (mysqli_num_rows($result) > 0) 
		{
	?>
<br><br>
  <table  border="2">
  
  <tr>
    <th>Id</th>	
    <th>Name</th>
    <th>Price</th>	
   <th>Quantity</th>	
  
    </tr>

	<?php
	$i=0;
	while($row = mysqli_fetch_assoc($result)) {
	?>
<tr>
 <td><?php echo $row["id"]; ?></td>

    <td><?php echo $row["item_name"]; ?></td>
<td><?php echo $row["price"]; ?></td>
<td><?php echo $row["quantity"]; ?></td>


</tr>

	<?php
	$i++;
	}
	?>
</table>
	
	</tr><br><br><br>
                  <form method="post" action="itemupdate2.php">
                  Enter the Id to Update:&nbsp&nbsp
		<input type="text" name="id">
		<br><br><br>
	<input type="submit" name="Submit" value="submit">
	</form>

 	<?php
	}
	else{
   	 echo "No result found";
	}

mysqli_close($conn);
	?>
</center>
 </body>
</html>
