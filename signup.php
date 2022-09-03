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
						//echo '<script>alert("Welcome to MDTU! Thank For Your Rejistration ")</script>'; 
						
						header("location:login.php?msg=Welcome! Thank For Your Registration");
						
						
						
					}
												
						//header("location:login.php?msg=Welcome! Thank For Your Registration");
		
						/*echo "New record created successfully";*/
		 
				else 
					{
						header("location:signup.php?msg=මෙම හැනුදුම්පත් අංකයෙන් කලින් ලියාපදිංචි  වී ඇති බැවින් නැවත එම අංකයෙන් ලියාපදිංචි   විය නොහැක");
						//echo "Error: " /*. $sql . "<br>"*/ . mysqli_error($conn);
						//echo '<script>alert("මෙම හැනුදුම්පත් අංකයෙන් කලින් ලියාපදිංචි  වී ඇති බැවින් නැවත එම අංකයෙන් ලියාපදිංචි   විය නොහැක.")</script>'; 
						
					
		
//function function_alert($message) { 
      
// Display the alert box  
 //echo "<script>alert('$message');</script>"; 
//} 
// Function call 
//function_alert("Previously registered. Cannot re-register"); 
						
						
//header("location:signup.php?msg=මෙම හැනුදුම්පත් අංකයෙන් ලියාපදිංචි විය නොහැක");
						
//echo "Error: " /*. $sql . "<br>"*/ . mysqli_error($conn);
					}
		}

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>mdtu-signup-page</title>
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
  <link rel="stylesheet" type="text/css" href="assets\css\singup.css">
  <link href="assets/css/style.css" rel="stylesheet">

<script type="text/javascript">

<!--password validate-->
 function validate()
 {
	var password=document.getElementById("password").value;
	var confirm_password=document.getElementById("confirm_password").value;
	  
	 if(password!=confirm_password)
	{
		alert (" Mismatch Password ");
		  return false; 
	}
	return true;
	}
	
	
	
<!--telephone no validate-->
function isNumberphone(evt)
  {
    var charCode = (evt.which) ? evt.which : event.keyCode
    if (charCode > 31 && (charCode < 48 || charCode > 58))
    return false;

    return true;
  }
	
<!--id no validate-->
 function isNumberKey(evt)
  {
    var charCode = (evt.which) ? evt.which : event.keyCode
    if (charCode > 31 && (charCode < 48 || charCode > 60))
        return false;

        return true;
  }
 
 
function myFunction() {
  alert("මෙහි ඔබගේ ජාතික හැනුදුම්පත් අංකය නිවරදිව  ඇතුලත් කරන්න.");
}


<!--registraion confirm -->
//function myconfirm() {
  //alert("ඔබගේ ලියාපදිංචිය සාර්ථකයි.");
//}

<!--radio button checked-->
function yesnoCheck() {
    if (document.getElementById('yesCheck').checked) {
        document.getElementById('ifYes').style.display = 'block';
    }
    else document.getElementById('ifYes').style.display = 'none';

}
</script>

</head>
<body>



<!-- ======= Header ======= -->
	<?php  include ("header.php") ?>
<!-- End Header -->


	</br><div class="logo mr-auto">
        <h3 class="text-light"></a></h3>
      </div></br></br></br>


<!-- =======signup form ======= -->
<form action="signup.php" method="POST" autocomplete="off">
<div class="row">
<div class="col-2"></div>
    <div class="col-8">
        <div class="login-box">
            <div class="login-snip"> <input id="tab-1" type="radio" name="tab" class="sign-in" checked><label for="tab-1" class="tab">Sign Up</label> <input id="tab-2" type="radio" name="tab" class="sign-up"><label for="tab-2" class="tab"><a href="login.php"></a></label>
                <div class="login-space">
                    <div class="login">
                        <div class="group"><label for="user" class="label">Username</label> <input onclick="myFunction()"  onkeypress="isNumberKey(evt)" maxlength="12" id="user" type="text" class="input" placeholder="Type your ID NO" name="uname" required /></div>
                        <div class="group"><label for="pass" class="label">Password</label> <input id="password" type="password" class="input" data-type="password" placeholder="Create your Password" name="pword" required /></div>
                        <div class="group"><label for="pass" class="label">Repeat Password</label> <input id="confirm_password" type="password" class="input" data-type="password" placeholder="Repeat your password" name="retypepw" required  /> </div>
                        <div class="group"><label for="pass" class="label">Telephone No</label> <input onkeypress="return isNumberphone(evt)" maxlength="10"  onclick="return validate()" id="pass" type="text" class="input" placeholder="Telephone No" name="email"  required/></div><br>
						<h5><input type="radio" name="type" onclick="javascript:yesnoCheck();" value="T" id="yesCheck" required >
							<label for="t1" style="color:#e4e2e2;">ආයතනයක් ද ?</label>
						</h5>
							<div class="group" id="ifYes" style="display:none">
							<?php
								$sql_accna="SELECT * FROM office order by office_no";
								$accna_info=$conn->query($sql_accna)or die(mysqli_error($conn));
								$numrows_accna=mysqli_num_rows($accna_info);
							?>
								
										<select class="custom-select" placeholder="සේවා ස්ථානය" name="type"  value="" >
										
										<option value="" selected disabled>සේවා ස්ථානය තෝරන්න</option>
								<?php 
									if($numrows_accna > 0)
									{
										while($row_accna=$accna_info->fetch_assoc()){?>
									
									<option value="<?php echo $row_accna['office_no'];?>"><?php echo $row_accna['office_no'];?> . <?php echo $row_accna['office_name'];?></option>
									
									<?php }}?>
										</select></br>
							</div>
							<h5><input type="radio" name="type" onclick="javascript:yesnoCheck();" value="T" id="noCheck" required value="" >
								<label for="t1" style="color:#e4e2e2;">පුහුණු  අපේක්ෂකයෙක් ද ?</label>
							</h5>
							<h5><input type="radio" name="type" onclick="javascript:yesnoCheck();" value="R" id="noCheck" required value="">
								<label for="t2" style="color:#e4e2e2;">සම්පත්දායකයෙක් ද ?</label>
							</h5>
							<br><br>
							<div class="group"><input type="submit" class="button" value="Sign Up" name="signup" onclick="myconfirm()"/> </div>
                            <div class="hr"></div>
                    </div>
				</div>
			</div>
		</div>
	</div>
<div class="col-2"></div>	
</div>
</form></br>
<!-- form end-->
  
  
<!-- ======= fotter ======= -->
	<?php include ("footer.php") ?>
<!-- End fotter -->




  <!-- Vendor JS Files -->
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