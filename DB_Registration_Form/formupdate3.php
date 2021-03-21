<html>
<body bgcolor="lightgreen">
<form action="main.html" method="post">
<center>
<?php
include_once 'conn.php';
if(isset($_POST['submit']))
{
$uid=$_POST['id'];
$fname=$_POST['updname'];
$pass=$_POST['updpass'];
$gen=$_POST['gender'];
$ema=$_POST['updemail'];
$code=$_POST['code'];
$phno=$_POST['phno'];
$sql="UPDATE formtbl SET
name='$fname',password='$pass',gender='$gen',email='$ema',code='$code',phno='$phno' where id='$uid'";
if(mysqli_query($conn,$sql)) {
echo"update sucessfully ! <br> <br>";
}
else
{
echo"error:" .$sql."".mysqli_error($conn);
}
mysqli_close($conn);
}
?>
<br>
<br>
<input type="submit" value="back to homepage" name="submit">
</center>
</body>
</html>