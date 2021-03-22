<html>
<body bgcolor="Lightblue">
<form action="add.php" method="post">
<center>
<?php
include_once 'conn1.php';
if(isset($_POST['submit']))
{	 
	$uid=$_POST['id'];
	 $fname = $_POST['pname'];
	$pass=$_POST['price'];
	$em=$_POST['qty'];

	$sql = "UPDATE item SET item_name='$fname',price='$pass',quantity='$em' where id='$uid'";

	 if (mysqli_query($conn, $sql)) {
		echo "Updated successfully !<br><br>";
	 } 
	else
	 {
		echo "Error: " . $sql . "" . mysqli_error($conn);
	 }
	 mysqli_close($conn);
}
?>
<br>
<br>
<input type="submit" value="Back to home page"name="submit">
</center>
</body>
</html>

