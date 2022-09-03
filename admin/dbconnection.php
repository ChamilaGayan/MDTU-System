<?php
	$servername = "localhost";
	//$username = "root";
	//$password = "";
	//$database="new_mdtu";
	$username = "root";
	$password = "";
	$database="matale_mdtu";
	
		$conn=mysqli_connect($servername,$username,$password,$database);
		$conn->set_charset("utf8");

			if ($conn) 
			{
				/* echo "Connected successfully";  */
			}
			else
			{
				echo "Connection failed: " . mysqli_connect_error();
			}	
?>