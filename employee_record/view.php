<html>
   <head>
      <title>"View Employee"</title>
   </head>

   <body bgcolor="#FBB917">
      <form action="main.html" method="post">
   <center>

   <?php
      include_once'conn.php';
      $sql="SELECT *FROM employee_record;
      $result=mysqli_query($conn,$sql);
      
      if(mysql_num)rows($result) > 0
	{
   ?>
   <br><br>

   <table>
   <tr>
      <th>Id</th>
      <th>Name</th>
      <th>Desig</th>
      <th>Salary</th>
   </tr>

   <?php
   $i=0;
   while($row=mysql_fetch_assoc($result))
   {
   ?>
  <tr>
      <td><?php echo $row['eid'];?></td>
      <td><?php echo $row["ename"];?></td>
      <td><?php echo $row["desig"]; ?></td>
      <td><?php echo $row["salary"];?></td>
   </tr>

   <?php
   $I++;
   }?>

   </table>

   <?php
    }
      else{
        echo"Np Result found..!";
          }
    ?>
    <br><br>
    <input type="submit value="Back to Home Page" name= "submit">
    </center>
    </form>
</html>