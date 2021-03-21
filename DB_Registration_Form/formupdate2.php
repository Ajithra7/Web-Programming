<html>
<head>
<title> update data </title>
</head>
<body bgcolor="cyan">
<form method="post" action="formupdate3.php">
<center>
<?php
include_once'conn.php';
$rid=$_POST['id'];
$sql="SELECT *FROM formtbl WHERE id='$rid'";
$result=mysqli_query($conn,$sql);
if(mysqli_num_rows($result)>0)
{ ?>
<br> <br>
<?php
if($row=mysqli_fetch_assoc($result))
{
?>
Form ID: &nbsp&nbsp<input type="text" value="<?php echo $row["id"];
?> "name="id"> <br> <br>
<b>
Username:&nbsp&nbsp  
</b>
<input type="text" value=" <?php echo $row["name"];?>"
name="updname"> <br> <br>
<b> password:&nbsp&nbsp  
</b>
<input type="text" value=" <?php echo $row["password"];?>"
name="updpass"> <br> <br>
<b>
Gender:&nbsp&nbsp 
</b>
<input type="radio" name="gender" value="male"<? 
if($row["gender"]=="male")
{ echo "checked...";}?>male
<input type="radio" name="gender" value="female"<? 
if($row["gender"]=="female")
{ echo "checked...";}?>female
<br> <br>
<b>Email:&nbsp&nbsp
</b>
<input type="text" value="<?php echo $row["email"];?>"
name="updemail"><br><br>
<b>
Phone number:&nbsp&nbsp</b>
<select name="code">
<option<?php if($row["code"]=="977"){echo "Selected";}?>>977</option>
<option<?php if($row["code"]=="978"){echo "Selected";}?>>978</option>
<option<?php if($row["code"]=="979"){echo "Selected";}?>>979</option>
<option<?php if($row["code"]=="972"){echo "Selected";}?>>972</option>
<option<?php if($row["code"]=="973"){echo "Selected";}?>>973</option>
<option<?php if($row["code"]=="974"){echo "Selected";}?>>974</option>
</select>
<input type="text" value="<?php echo $row["phno"];?>" name="phno"><br><br>
<input type="Submit" value="Update" name="submit">
<?php
}
?>
<?php
}
else
{
echo "No results";
}
?>
</center>
</form>
</body>
</html>