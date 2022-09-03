<?php
	$servername = "localhost";
	$username = "root";
	$password = "";
	$database="mydb";
	
	
		$conn=mysqli_connect($servername,$username,$password,$database);
		$conn->set_charset("utf8");

			if ($conn) 
			{

			}
			else
			{
				echo "Connection failed:  <br>" . mysqli_connect_error();
			}	
?>