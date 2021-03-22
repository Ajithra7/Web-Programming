<?php
		include_once 'conn1.php';
	$sql = "SELECT * FROM item";
	$result=mysqli_query($conn,$sql);
		if (mysqli_num_rows($result) > 0) 
		{
	?>
<html>
 <head>
 <title> View Items</title>
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
    <th>Item Name</th>
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
