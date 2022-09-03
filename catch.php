<?php
session_start();


/* error_reporting(0); */
include("dbconnection.php");

/*singup*/
		if(isset($_POST["signup"]))
		{
				$uname=strtoupper($_POST["uname"]);
				$pword=$_POST["pword"];
				$email=$_POST["email"];
				$type=$_POST["type"];
				
				
		
				$sql = "INSERT INTO user(user_name,pass_word,email_address,user_type) 
						VALUES('$uname','$pword','$email','$type');";
		
					
					
				if(mysqli_query($conn,$sql))
					{
						
						
						
						header("location:login.php?msg=Welcome! Thank For Your Registration");
		
						/*echo "New record created successfully";*/
					} 
				else 
					{
						
						echo '<script>alert("Previously registered. Cannot re-register Try again")</script>'; 
						
					}
		}
//function function_alert($message) { 
      
// Display the alert box  
 //echo "<script>alert('$message');</script>"; 
//} 
// Function call 
//function_alert("Welcome to Geeks for Geeks"); 
						
//header("location:signup.php?msg=මෙම හැනුදුම්පත් අංකයෙන් ලියාපදිංචි විය නොහැක"); 
						
//echo "Error: " /*. $sql . "<br>"*/ . mysqli_error($conn);
		


	
/*login*/
		if(isset($_POST["signin"]))
		{
			
			$uname=strtoupper($_POST["uname"]);
			$pword=$_POST["pword"];
			//$type=$_POST["type"];
			
				
		
				$conn=mysqli_connect($servername,$username,$password,$database);
				
				$sql="SELECT * FROM user,office WHERE  office.office_no=user.user_type AND user_name='$uname' and pass_word='$pword'";
					
				$result=mysqli_query($conn,$sql);
			
				$row=mysqli_fetch_assoc($result);
				
				
				if($uname=="ADMIN" and $pword=="admin")
					{
						$_SESSION["username"]="$uname";
						
						header("location:admin/index.html");
						
					}
					elseif($uname==$row['user_name'] and $pword==$row['pass_word'])
					{
						
						$_SESSION["username"]="$uname";
						$_SESSION["usertype"]=$row['user_type'];
						$_SESSION["officename"]=$row['office_name'];
						
						echo $sql;
						
						header("location:trainee/index.php");
						
					}
					else
					{
						header("location:login.php?msg=User Name And Password Incorrect");
					}
									
		}
				
				
				
				
			
			/* 		
					if($uname=$row['user_name'] and $pword=$row['pass_word'])
					{
						sql1="select user_type from user where user_type='T'";
						
						$result1=mysqli_query($conn,$sql1);
			
						$row1=mysqli_fetch_assoc($result1);
						
						if(user_type=$row1['T'])
						{
							echo "hi";
						}
					}
					
					else
					{
						header("location:admin/production/index.html");
						echo "user name pass word error";
						
					}
					/* 		/*header("location:traineer/index.html");
						}			 
						elseif(user_type="R")
						{  
							/*header("location:resourser/index.html");
						}				
					}	
					else
					{
						/*header("location:login.php?msg=User Name And Password Incorrect");
						
					} 
					echo  "$sql";
		}
		 */
		
					
		
		
		
		
		/* 
		$sql="SELECT * FROM user WHERE user_name='$uname' and pass_word='$pword' user_type='$type'";
					
		$result=mysqli_query($conn,$sql);
			
		$row=mysqli_fetch_assoc($result);
		
		
		if($uname=="admin" and $pword=="admin")
					{
						header("location:admin/production/index.html");
					}
			
					elseif($uname==$row['user_name'] and $pword==$row['pass_word'] and $type=="T")
					{
									 
						header("location:traineer/index.html");
									
					}
					elseif($uname==$row['user_name'] and $pword==$row['pass_word'] and $type=="R")
					{
									 
						header("location:resourser/index.html");
									
					}
					else
					{
						header("location:login.php?msg=User Name And Password Incorrect");
					}
		} */
		
mysqli_close($conn);
?>