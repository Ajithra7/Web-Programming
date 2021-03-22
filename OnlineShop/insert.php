<html>
<head>
    <title>SIGNUP</title>
	<link rel="stylesheet" type="text/css" href="css2.css">
    <script src="https://kit.fontawesome.com/d69e372328.js" crossorigin="anonymous"></script>
</head> 
<body>  
    <div class="loginbox">
	<center>
        <i class="fas fa-user-circle fa-5x"></i><br><br><br>
        <h1>SIGN UP</h1><br><br>
            <p>Name</p>
            <input type="text" name="name" placeholder="Enter your name"><br>
            
            <p>Email id</p>
            <input type="email" name="email" placeholder="Enter your email id">
            <p>Password</p>
            <input type="password" name="password" placeholder="Enter your password">
            <br>
            <input type="submit"  value="Sign Up" name="submit">
            <br>
            
            <a href="login.html">Already have an account?Login</a><br><br>
    </center>
<div class="message">
<?php
include_once 'conn1.php';
if(isset($_POST['submit']))
{
	 
	 $name = $_POST['name'];
    
     $em=$_POST['email'];
	$pass=$_POST['password'];
	

	 $sql = "INSERT INTO users(NAME,EMAIL_ID,PASSWORD) 
		VALUES ('$name','$em','$pass')";

    
	 if (mysqli_query($conn, $sql)) 
	 {
		
		echo "Successfully Signed Up !!<br>";
		
	 } 
	else
	 {
		echo "Error: " . $sql . "" . mysqli_error($conn);
	 }
	 
	 mysqli_close($conn);
}

?>
</div>
</form>
    </div>
</body>
</html>