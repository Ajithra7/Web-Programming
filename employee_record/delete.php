<html>
   <head>
      <title>Delete Data<title>
   </head>
      <body bgcolor= "#D462FF">
         <center>

        <?php
	   include_once 'conn.php';
           $sql = "SELECT * FROM employee_record";
           $result = mysqli_query($conn,$sql);
  
           if(mysql_num_rows($result) > 0)
           {  
         ?>

         <br><br>

         <table border="2">
         <tr>
            <th>Id</th>
            <th>Name</th>
            <th>Desig</th>
            <th>Salary</th>
         </tr>

      <?php
         $i=0;
         while($row=mysqli_fetch_assoc($result))
         {
       ?>
   
      <tr>
         <td><?php echo $row["eid"];?></td>
         <td><?php echo $row["name"];?></td>
         <td><?php echo $row["design];?></td>
         <td><?php echo $row["salary"];?></td>
      </tr>
 
      <?php
         $i++;
         }
      ?>

      </table>
         </tr>
         <br><br>
         <form method="post" action"delete2.php">
            Enter the Id to delete:&nbsp&nbsp
            <input type="submit" name"Submit" value="submit">
         </form>
      <?php
         }
      else{
            echo "No Result Found...";
          }

      mysqli_close($conn);
      ?>
      </center>
    </body>
</html>