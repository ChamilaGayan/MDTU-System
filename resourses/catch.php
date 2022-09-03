<?php
session_start();
error_reporting(0);
$uname=$_SESSION["username"];
$stype=$_SESSION["usertype"];


/* error_reporting(0); */
include("../trainee/dbconnection.php");
//print_r($_POST);
	
		if(isset($_POST["submit"]))
		{
			
				$name=$_POST["name"];
				$oaddress=$_POST["oaddress"];
				$paddress=$_POST["paddress"];
				$position=$_POST["position"];
				$email=$_POST["email"];
				$gender=$_POST["gender"];
				$status=$_POST["status"];
				$age=$_POST["age"];
				$ok=$_POST["ok"];
				$applydate=$_POST["applydate"];
				
				$comcourse=$_POST["comcourse"];
				$comyear=$_POST["comyear"];
				$comdate=$_POST["comdate"];
				
				$center=$_POST["center"];
				$post=$_POST["post"];
				$duration=$_POST["duration"];
				
				
				$s=$_POST["s"];
				$l=$_POST["l"];
			
				$subject=$_POST["subject"];
				
				$place=$_POST["place"];
				$tyear=$_POST["tyear"];
				$tdates=$_POST["tdates"];
				
				$request=$_POST["request"];
				
				
				$sql = "REPLACE INTO resourses(r_id,rname,office_address,private_address,position,email,gender,status,age,yes_no,apply_date) 
						VALUES('$uname','$name','$oaddress','$paddress','$position','$email','$gender','$status','$age','$ok','$applydate')";
				//echo "$sql";	


				
				$insert=mysqli_query($conn,$sql);


			
				if($insert==1)
				{
					$course_length=count($comcourse);
						for($a=0;$a<=$course_length-1;$a++)
						{
							
						$name=$comcourse[$a];
						$year=$comyear[$a];
						$date=$comdate[$a];
							
						$sql1="REPLACE INTO rqulifications(r_id,qualification,year,institute) 
						VALUES('$uname','$name','$year','$date');";
						//echo "$sql1";
							
						$insert=mysqli_query($conn,$sql1) or die(mysqli_error($conn));
						}
						
				if($insert==1)
				{
					$center_length=count($center);
						for($a=0;$a<=$center_length-1;$a++)
						{
						$name1=$center[$a];
						$p=$post[$a];
						$d=$duration[$a];
									
						$sql2="REPLACE INTO rexpireance(r_id,center,post,duration) 
						VALUES('$uname','$name1','$p','$d')";
						//echo "$sql2";
									
						$insert=mysqli_query($conn,$sql2) or die(mysqli_error($conn));
						} 		
				if($insert==1)
				{
					$course_length=count($s);
						for($a=0;$a<=$course_length-1;$a++)
						{
						$name=$s[$a];
						$year=$l[$a];
						
						$sql3="REPLACE INTO yes(r_id,course_code,level_no) 
						VALUES('$uname','$name','$year')";
						//echo "$sql3";
										
						$insert=mysqli_query($conn,$sql3) or die(mysqli_error($conn));
						}
				if($insert==1)
				{
					$course_length=count($request);
						for($a=0;$a<=$course_length-1;$a++)
						{
							
						$name=$request[$a];
							
						$sql4="REPLACE INTO rlevel(r_id,level_no) 
						VALUES('$uname','$name')";
						//echo "$sql4";
													
						$insert=mysqli_query($conn,$sql4) or die(mysqli_error($conn));
						} 			
									
				if($insert==1)
				{
					$course_length=count($subject);
						for($a=0;$a<=$course_length-1;$a++)
						{
							
						$name=$subject[$a];
											
						$sql5="REPLACE INTO rcourses(r_id,course_code) 
						VALUES('$uname','$name')";
						//echo "$sql5";
												
						$insert=mysqli_query($conn,$sql5) or die(mysqli_error($conn));
						} 
				if($insert==1)
				{
					$course_length=count($place);
						for($a=0;$a<=$course_length-1;$a++)
						{
							
						$tp=$place[$a];
						$ty=$tyear[$a];
						$t=$tdates[$a];
											
						$sql6="REPLACE INTO rtot(r_id,trainee_place,tyear,no_of_dates) 
						VALUES('$uname','$tp','$ty','$t')";
						//echo "$sql6";
											
						$insert=mysqli_query($conn,$sql6) or die(mysqli_error($conn));
						} 						
				if($insert==1)
				{
			  		echo "<script>alert('විස්තර ඇතුලත් කිරීම සම්පූර්ණයි!');</script>";
              		echo '<script type="text/javascript">location.href = "viewapp.php";</script>'; 
				}
									}
								}
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