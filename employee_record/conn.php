<?php

	$servername='localhost';
	$username='root';
	$password='';
	$dbname="employee_record";

	$conn=mysqli_connect($servername,$username,$password,$dbname);

	if(!$conn){
		die('Database Connection Failed!!!');
		 }
	else{
		echo "Database Connected Successfully";
		 }
?>