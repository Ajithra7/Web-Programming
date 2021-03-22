<html>
<body bgcolor="Yellowgreen">
<form action="add.php" method="post">
<center>
<br>
<br>
<?php
include_once 'conn1.php';
if(isset($_POST['submit']))
{
	
	 $name = $_POST['name'];
	 $price=$_POST['price'];
	 $qty= $_POST['qty'];
	
	 
	 $sql = "INSERT INTO item(item_name,price,quantity) VALUES ('$name','$price','$qty')";

	 if (mysqli_query($conn, $sql)) {
		echo "New Item added !<br>";
	 } 
	else
	 {
		echo "Error: " . $sql . "" . mysqli_error($conn);
	 }
	 mysqli_close($conn);
}

?>
<br><br><input type="submit" value="Back to home page" name="submit">
</center>
</body>
</html>
