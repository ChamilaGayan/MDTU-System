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
				$date=$_POST["date"];
				
				
					$sql = "INSERT INTO booking_details(hall_no,nic_no,tele_no,name,address,reason,date) 
							VALUES('$hallno','$nicno','$tpno','$name','$add','$reason','$date');";
							
							
					
				if(mysqli_query($conn,$sql))
					{
						//header("location:hall1.php?msg=Your Programme Reservation is Successfully ! Thank you ");
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
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>mdtu-contact-page</title>
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
  <link href="css/bootstrap.css" rel="stylesheet">
</head>

<body style="background-color:#C0C0C0;">

<!-- ======= Header ======= -->
	<?php  include ("header.php") ?>
<!-- End Header -->

  
    <!-- ======= Contact Section ======= -->
    <section id="" class="">
     </br></br>
<div class="container">

<div class="container">
	<div class="row">
        <div class="col-md-12">
				<?php
				
					$sql_accna="SELECT * FROM hall_booking where hall_no=1";
					$accna_info=$conn->query($sql_accna)or die(mysqli_error($conn));
					$numrows_accna=mysqli_num_rows($accna_info);
					
				?>
					
					
									
				<?php 
					if($numrows_accna > 0)
					{
						echo "<table id='example' class='display'><thead style='color:black;'><tr><th>මෙම ශාලාව දැනට වෙන් වී ඇති දින</th></thead></tr>";
					while($row_accna=$accna_info->fetch_assoc()){?>
												
						<tr><tbody><td><?php echo $row_accna['booking_date'];?></td></tr>
						
		
					
				<?php }} else{ echo "No Booking";}?>
				 
				</tbody>
			</table>
		</div>
	</div>
</div>


<div class="row">
	<div class="col-md-6 mb-3"></br>
	&nbsp &nbsp 	<input type="button" class="btn btn-sm btn-primary"  value=" Booking" style="height:30px;" data-title="Delete" data-toggle="modal" data-target="#delete">
	</div>
</div>

		
      </div>
	</section>
<!-- End Contact Section -->
  <main id="main">

</br></br></br></br></br></br>
<!-- ======= fotter ======= -->
	<?php include ("footer.php") ?>
<!-- End fotter -->


	
<form action="hall1.php" autocomplete="off" method="POST">
    <div class="modal fade" id="delete" tabindex="-1" role="dialog" aria-labelledby="edit" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<!--<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>-->
					<h4 class="modal-title custom_align" id="Heading" >Enter Your Details And Programme Reservation Details</h4>
				</div>
				<!--<div class="modal-body">
					<div class="alert alert-danger"><span class="glyphicon glyphicon-warning-sign"></span> Are you sure you want to delete this Record?</div>
				</div>-->
				<div class="col-2"></div>
				<div class="col-8">
				<div class="row">
					
						<label for="staticEmail" class="col-sm-8 col-form-label" style="text-align:left;"> Hall:No :-  
						<input type="text" class="form-control" placeholder="NIC:No" name="hallno" required value="1" style="width:40px;"></label>
					
				</div>
				<div class="row">
					
						<label for="staticEmail" class="col-sm-8 col-form-label" style="text-align:left;"> NIC:No :-  
						<input type="text" class="form-control" placeholder="NIC:No" name="nicno" required></label>
					
				</div>
				<div class="row">
					
						<label for="staticEmail" class="col-sm-8 col-form-label" style="text-align:left;"> Telephone:No :-  
						<input type="text" class="form-control" placeholder="Telephone:No" name="tpno"  required></label>
				</div>
				<div class="row">
						<label for="staticEmail" class="col-sm-12 col-form-label" style="text-align:left;"> Name With Initial :-  
						<input type="text" class="form-control" placeholder="Name With Initial" name="name"  required></label>
					
				</div>
				<div class="row">
						<label for="staticEmail" class="col-sm-12 col-form-label" style="text-align:left;"> Name Of Institute :-  
						<input type="text" class="form-control" placeholder="Name Of Institute " name="add" style="width:400px;" required></label>
				</div>
				<div class="row">
						<label for="staticEmail" class="col-sm-12 col-form-label" style="text-align:left;">No Of Traineers :-  
						<input type="text" class="form-control" placeholder="No Of Traineers " name="reason" style="width:50px;" required></label>
				</div>
				<div class="row">
						<label for="staticEmail" class="col-sm-8 col-form-label" style="text-align:left;">Date / Dates:-  
						<input type="date" class="form-control" placeholder="Date / Dates" name="date"  required></label>
					
				</div></br>		
				<div style="left:500px;">	
					<input type="submit" class="btn btn-outline-danger" style="width:150px;" name="ok" value="Booking">
				</div></br>
			<div class="col-2"></div>
	</div>
</div>	
	

</form>	
	




  <a href="#" class="back-to-top"><i class="ri-arrow-up-line"></i></a>

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
