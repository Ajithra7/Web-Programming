<?php
		include_once 'conn1.php';
	$sql = "SELECT * FROM users";
	$result=mysqli_query($conn,$sql);
		if (mysqli_num_rows($result) > 0) 
		{
	?>
<html>
 <head>
 <title> View Users</title>
 <style>
     body
         {
            background: url(img3.jpg);
         }
     .loginbox
     {
        width: 540px;
    height:340px;
    background: black;
    top:50%;
    left:50%;
    position:absolute;
    transform:translate(-50%,-50%);
    box-sizing:border-box;
    border-radius: 20px;
     }
    table
    {
        color:white;
    } 
     </style>
 </head>
<body >
<div class="loginbox">
<form action="#" method="post">
<center>
<br><br>
  <table border="2" >
  <tr>
    <th>Id</th>	
    <th>User Name</th>
    <th>Email id</th>		
    </tr>

	<?php
	$i=0;
	while($row = mysqli_fetch_assoc($result)) {
	?>
<tr>
 <td><?php echo $row["ID"]; ?></td>

    <td><?php echo $row["NAME"]; ?></td>
<td><?php echo $row["EMAIL_ID"]; ?></td>


</tr>

	<?php
	$i++;
	}
	?>
</table>
	

 	<?php
	}
	else{
   	 echo "No result found";
	}
	?>
<br>
<br>

</center>
</form>
</div>
 </body>
</html>
