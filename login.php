<?php 
session_start();
include("dbconnection.php");
if(isset($_POST["signin"]))
		{
			
			$uname=strtoupper($_POST["uname"]);
			$pword=$_POST["pword"];
			//$type=$_POST["type"];
			
				
		
				//$conn=mysqli_connect($servername,$username,$password,$database);
				
				$sql="SELECT * FROM user,office WHERE user_name='$uname' and pass_word='$pword'";
					
				$result=mysqli_query($conn,$sql);
			
				$row=mysqli_fetch_assoc($result);
				$ut=$row['user_type'];
				
				if($uname=="ADMIN" and $pword=="admin")
					{
						$_SESSION["username"]="$uname";
						
						header("location:admin/index.html");
						
					}
					elseif($uname==$row['user_name'] and $pword==$row['pass_word'])
					{
						
						$_SESSION["username"]="$uname";
						
						
						if($ut=="T"){
						header("location:trainee/index.php");
						}

						elseif($ut=="R"){

							$_SESSION["usertype"]=$row['user_type'];
							header("location:resourses/index.php");

						}
						
					}
					else
					{
						header("location:login.php?msg=User Name And Password Incorrect");
					}
									
		}

?>



<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>mdtu-login-page</title>
  <meta content="" name="descriptison">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/icofont/icofont.min.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/line-awesome/css/line-awesome.min.css" rel="stylesheet">
  <link href="assets/vendor/venobox/venobox.css" rel="stylesheet">
  <link href="assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/css/style.css" rel="stylesheet">
  
  <link href="css/bootstrap.css" rel="stylesheet"/>
  <link href="css/mystyle.css" rel="stylesheet"/>
  <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
  <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
  <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</head>

<body>

<!-- ======= Header ======= -->
	<?php  include ("header.php") ?>
<!-- End Header -->


<section class="inner-page">
    <div class="container">
    </div>
</section>

 
  
<div class="wrapper fadeInDown" >
	<div id="formContent" > 
		<!-- Login Form -->
		<form action="<?php echo $_SERVER['PHP_SELF']; ?>"  method="POST" class="form" autocomplete="off">
			</br>
			<input type="text" id="login" class="fadeIn second" name="uname" placeholder="Your ID NO" required  >
			<input type="text" id="password" class="fadeIn third" name="pword" placeholder="Password"  required style="-webkit-text-security: disc;"></br>
			<input type="submit" class="fadeIn fourth" value="LogIn" name="signin"></br></br>
			<b>Are You A New Member ?</b> &nbsp <a href="signup.php" class="underlineHover"> Register Now</a></button>
			<div id="formFooter">
			  <a class="underlineHover" href="change_pw.php">Forgot Password?</a>
			</div>
		</form>
		<!--end form-->
	</div>
</div>
  
  
<!-- ======= fotter ======= -->
	<?php include ("footer.php") ?>
<!-- End fotter -->

  
  
  <!--JS Files -->
  <script src="assets/vendor/jquery/jquery.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/jquery.easing/jquery.easing.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/venobox/venobox.min.js"></script>
  <script src="assets/vendor/owl.carousel/owl.carousel.min.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/js/main.js"></script>

</body>

</html>
	
	
	
	
	
	
	
	

		
		
		
		