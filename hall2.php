<?php

	
	include("dbconnection.php")	;
	
if(isset($_POST["ok"]))
		{ 
	
				$hallno=$_POST["hallno"];
				$nicno=$_POST["nicno"];
				$tpno=$_POST["tpno"];
				$name=$_POST["name"];
				$add=$_POST["add"];
				$reason=$_POST["reason"]; 
				$indate=$_POST["indate"];
				$outdate=$_POST["outdate"];
				
				
				$sql = "INSERT INTO booking_details(hall_no,nic_no,tele_no,name,address,reason,in_date,out_date) 
							VALUES('$hallno','$nicno','$tpno','$name','$add','$reason','$indate','$outdate');"; 
							
					
				if(mysqli_query($conn,$sql))
					{
					header("location:hall2.php?msg=Your Programme Reservation is Successfully ! Thank you ");
		//echo "hi";
						/*echo "New record created successfully";*/
					} 
				else 
					{
						echo "Error: " /*. $sql . "<br>"*/ . mysqli_error($conn);
					}
		}

?>	

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

	<title>Booking Form </title>

	<!-- Google font -->
	<link href="https://fonts.googleapis.com/css?family=Cabin:400,700" rel="stylesheet">
   
   
	<!-- Bootstrap -->
	<link type="text/css" rel="stylesheet" href="css/bootstrap.min.css" />

	<!-- Custom stlylesheet -->
	<link type="text/css" rel="stylesheet" href="css/style.css" />
	
	
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
  <link href="css/bootstrap.css" rel="stylesheet">
	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
		  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
		  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->
 <link href="http://code.jquery.com/ui/1.10.4/themes/smoothness/jquery-ui.css" rel="Stylesheet"type="text/css" />
    <script type="text/javascript" src="http://code.jquery.com/jquery-1.7.2.min.js"></script>
    <script type="text/javascript" src="http://code.jquery.com/ui/1.10.4/jquery-ui.js"></script>

<script>

        $(document).ready(function () {
            $("#txtdate").datepicker({
                minDate: 0
            });
        });
		
	 $(document).ready(function () {
            $("#txtdate1").datepicker({
                minDate: 0
            });
        });	
		
 </script>
 
</head>

  
<body style="background-color:#eff1f4;">
<!-- ======= Header ======= -->
	<?php  include ("header.php") ?>
<!-- End Header -->

<section id="" class="">
     </br></br>
<div class="container">

	<!--<div id="booking" class="section">
		<div class="section-center">
			<div class="container">-->
				<div class="row">
					<div class="booking-form" style="width:500px; background-color:#031a34;">
					<div  style="width:400px; background-color:white;">
						<div class="booking-bg"></div>
						<form action="hall2.php" autocomplete="off" method="POST">
							<div class="form-header"></br>
								<center><h2>Make your reservation</h2></center>
							</div>
							<div class="form-group">
							&nbsp 	<span class="form-label" style="color:gray;">Hall No</span></br>
							&nbsp  &nbsp	<b><input class="" type="NIC No" value="02" name="hallno"  style="width:40px; border:none; font-size:20px;"></b>
							</div> 
							<div class="row">
								<div class="col-md-6">
									<div class="form-group">
										&nbsp <span class="form-label" style="color:gray;">Check In</span>
										<input class="form-control" type="text" style="width:175px;" name="indate"  id="txtdate" placeholder="Check In Date" required>
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										&nbsp <span class="form-label" style="color:gray;">Check Out</span>
										<input class="form-control" type="text" style="width:175px;" name="outdate" id="txtdate1"  placeholder="Check Out Date" required>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-6">
									<div class="form-group">
										&nbsp <span class="form-label" style="color:gray;">No Of Traineers</span>
										<input class="form-control" name="reason" type="text" placeholder="No " maxlength="2" style="width:42px;"required >
										<span class="select-arrow"></span>
									</div>
								</div>
								
							</div>
							<div class="row">
								<div class="col-md-6">
									<div class="form-group">
								&nbsp <span class="form-label" style="color:gray;">NIC Number</span>
								<input class="form-control" type="NIC No" name="nicno" style="width:150px;" maxlength="12" placeholder="NIC Number">
							</div> 
							<div class="form-group">
								&nbsp <span class="form-label" style="color:gray;">Phone Number</span>
								<input class="form-control" type="tel" name="tpno"  style="width:150px;" maxlength="10" placeholder=" Phone Number">
							</div>
								</div> 
								
							</div>
							
							<div class="form-group">
								&nbsp <span class="form-label" style="color:gray;">Name In Full</span>
								<input class="form-control" name="name" type="tel" placeholder="Enter Your Name">
							</div>
							<div class="form-group">
								&nbsp <span class="form-label" style="color:gray;">Name Of Institute</span>
								<input class="form-control" name="add"  type="tel" placeholder="Enter Institute Name">
							</div>
							
							<div class="form-btn">
								<center><button class="btn submit-btn" style="backgroung-color:gray; width:380px;"  name="ok" >Book Now</button><center>
							</div>
						</form>
					</div>
				</div>
			</div>
</body><!-- This templates was made by Colorlib (https://colorlib.com) -->

</section>
<!-- End Contact Section -->
  <main id="main">

</br></br></br></br></br></br></br>
<!-- ======= fotter ======= -->
	<?php include ("footer.php") ?>
<!-- End fotter -->

</html>