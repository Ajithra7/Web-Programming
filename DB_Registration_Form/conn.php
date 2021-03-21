<?php
$servername='localhost';
$username='root';
$password='';
$dbname="db1";
$conn=mysqli_connect($servername,$username,$password,$dbname);
if(!$conn)
{
die('could not connect my sql:' .mysql_error());
}
else
{
echo"database conected";
}
?>