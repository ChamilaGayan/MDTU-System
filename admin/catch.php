<?php
session_start();

/* error_reporting(0); */
include("dbconnection.php");
	
/*add a new course */
		if(isset($_POST["addc"]))
		{
				$addcourse=$_POST["addcourse"];
				$duration=$_POST["duration"];
				
					$sql = "INSERT INTO courses(course_name,duration) 
						VALUES('$addcourse','$duration');";
		
					
					
				if(mysqli_query($conn,$sql))
					{
						header("location:course.php?msg=Add A New Course Successfully ");
		
						/*echo "New record created successfully";*/
					} 
				else 
					{
						echo "Error: " /*. $sql . "<br>"*/ . mysqli_error($conn);
					}
		}
		
/*delete a course */
		if(isset($_POST["delete"]))
		{
			echo "hi";
	
			$addcourse=$_POST["course_name"];
				
			$sql1 = "DELETE FROM courses WHERE  course_name='$addcourse'";
		
			if(mysqli_query($conn,$sql1))
			{
				//header("location:course.php?msg=Delete A Course Successfully");
		
				echo "New record Deleted successfully";
			} 
			else 
			{
				echo "Error: " /*. $sql . "<br>"*/ . mysqli_error($conn);
			}
		}
		
	
/*if(! $conn )
{
die('Could not connect: ' . mysql_error());
}
$course_name = $_POST['course_name'];
$sql = "DELETE FROM courses WHERE course_name = $course_name" ;
mysql_select_db('mydb');
$retval = mysql_query( $sql, $conn );
if(! $retval ) {
die('Could not delete data: ' . mysql_error());
}
echo "Deleted data successfully\n";
mysql_close($conn);*/

		
		
/*if(isset($_POST["delete"]))
{
$yes=$_POST["yes"];
if (mysqli_connect_errno()) {
echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
mysqli_query($conn,"DELETE FROM courses WHERE no='$yes'");
mysqli_close($conn);
header("Location: course.php");*/
			
		
		
/*update a course*/


/*add a institute */
		if(isset($_POST["addi"]))
		{
				$addinstitute=$_POST["addinstitute"];
				
				
					$sql = "INSERT INTO office(office_name) 
						VALUES('$addinstitute');";
		
					
					
				if(mysqli_query($conn,$sql))
					{
						header("location:institute.php?msg=Add A New Course Successfully ");
		
						/*echo "New record created successfully";*/
					} 
				else 
					{
						echo "Error: " /*. $sql . "<br>"*/ . mysqli_error($conn);
					}
		}

/*add a service */
		if(isset($_POST["adds"]))
		{
				$addservice=$_POST["addservice"];
				
				
					$sql = "INSERT INTO service(service_name) 
						VALUES('$addservice');";
		
					
					
				if(mysqli_query($conn,$sql))
					{
						header("location:service.php?msg=Add A New Course Successfully ");
		
						/*echo "New record created successfully";*/
					} 
				else 
					{
						echo "Error: " /*. $sql . "<br>"*/ . mysqli_error($conn);
					}
		}
?>
		
		
		