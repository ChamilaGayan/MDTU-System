<?php
session_start();

$uname=$_SESSION["username"];

/* error_reporting(0); */
include("dbconnection.php");
print_r($_POST);
	
		if(isset($_POST["submit"]))
		{
			
				$name=$_POST["name"];
				$gender=$_POST["gender"];
				$service=$_POST["service"];
				$class=$_POST["class"];
				$grade=$_POST["grade"];
				$email=$_POST["email"];
				$position=$_POST["position"];
				$paddress=$_POST["paddress"];
				$oaddress=$_POST["oaddress"];
				//$ptpno=$_POST["ptpno"];
				$jdate=$_POST["jdate"];
				$otpno=$_POST["otpno"];
				$year=$_POST["year"];
				$discrip=$_POST["discrip"];
				$request=$_POST["request"];
				//$course1=$_POST["course1"];
				//$course2=$_POST["course2"];
				//$course3=$_POST["course3"];
				$comcourse=$_POST["comcourse"];
				$comyear=$_POST["comyear"];
				$comdate=$_POST["comdate"];
			
				$sql = "INSERT INTO trainee(t_id,`name`,gender,private_address,email,position,service,grade,class,join_date,service_time,duty) 
						VALUES('$uname','$name','$gender','$paddress','$email','$position','$service','$grade','$class','$jdate','$year','$discrip');";
		/* echo $sql; */
				$insert=mysqli_query($conn,$sql);
			
				if($insert==1)
				{
					$sql1="INSERT INTO institute(t_id,location,tp_no) 
					VALUES('$uname','$oaddress','$otpno');";
					echo $sql1; 
					
					$insert=mysqli_query($conn,$sql1) or die(mysqli_error($conn));
				
					if($insert==1)
					{
						
						$course_length=count($request);
							for($a=0;$a<=$course_length-1;$a++)
							{
							
							$name=$request[$a];
							
						$sql2="INSERT INTO request_courses(t_id,course_code1) 
						VALUES('$uname','$name');";
						echo $sql2;
						
						$insert=mysqli_query($conn,$sql2) or die(mysqli_error($conn));
							}
							
						if($insert==1)
						{
							$course_length=count($comcourse);
							for($a=0;$a<=$course_length-1;$a++)
							{
							
							$name=$comcourse[$a];
							$year=$comyear[$a];
							$date=$comdate[$a];
							
							$sql3="INSERT INTO completed_course(t_id,course_code,completed_date,completed_year) 
							VALUES('$uname','$name','$date','$year');";
							echo $sql3;
							
							$insert=mysqli_query($conn,$sql3) or die(mysqli_error($conn));
							} 
							
							if($insert==1)
							{
									
									header("location:./index.php?msg=Welcome! Thank For Your Registration"); 
							}
						}
					}
				}
					else
					{ 
					echo "Error: ". $sql . "<br>" . mysqli_error($conn);
					}
		}			 
		if(isset($_POST["update"]))
		{

				$name=$_POST["name"];
				$gender=$_POST["gender"];
				$service=$_POST["service"];
				$class=$_POST["class"];
				$grade=$_POST["grade"];
				$idno=$_POST["idno"];
				$position=$_POST["position"];
				$paddress=$_POST["paddress"];
				$oaddress=$_POST["oaddress"];
				$ptpno=$_POST["ptpno"];
				$jdate=$_POST["jdate"];
				$otpno=$_POST["otpno"];
				$year=$_POST["year"];
				$discrip=$_POST["discrip"];
				$course1=$_POST["course1"];
				$course2=$_POST["course2"];
				$course3=$_POST["course3"];
				$comcourse=$_POST["comcourse"];
				$comyear=$_POST["comyear"];
				$comdate=$_POST["comdate"];
				$applydate=$_POST["applydate"];
				
				
			
				$sql = "UPDATE `trainee` SET `name`='$name',`gender`='$gender',`private_address`='$paddress',`private_tpno`='$ptpno',`service`='$service',`grade`='$grade',`class`='$class',`position`='$position',`join_date`='$jdate',`service_time`='$year',`duty`='$discrip' WHERE t_id='$ssid'";
		
				echo $sql;

				$update=mysqli_query($conn,$sql);
			
				if($update==1)
				{
					$sql1="UPDATE `institute` SET `location`='$oaddress',`tp_no`='$otpno' WHERE t_id='$ssid'";
					echo $sql1;
					
					$update=mysqli_query($conn,$sql1) or die(mysqli_error($conn));
				
					if($update==1)
					{
						$sql2="UPDATE `request_courses` SET `course_code1`='$course1',`course_code2`='$course2',`course_code3`='$course3',`request_date`='$applydate' WHERE t_id='$ssid'";
						echo $sql2;
						
						$update=mysqli_query($conn,$sql2) or die(mysqli_error($conn));
					
						if($update==1)
						{
							$course_length=count($comcourse);
							for($a=0;$a<=$course_length-1;$a++)
							{
							
							$name=$comcourse[$a];
							$year=$comyear[$a];
							$date=$comdate[$a];
							
							$sql3="UPDATE `completed_course` SET `course_code`='$name',`completed_date`='$date',`completed_year`='$year' WHERE t_id='$ssid' AND `course_code`='$name'";
							echo $sql3;
							
							$update=mysqli_query($conn,$sql3) or die(mysqli_error($conn));
							} 
							
							if($update==1)
							{
									
									header("location:./index.php?msg=Welcome! Thank For Your Registration"); 
							}
						}
					}
				}
					else
					{ 
					echo "Error: ". $sql . "<br>" . mysqli_error($conn);
					}
		}
		
		
			
		
?>