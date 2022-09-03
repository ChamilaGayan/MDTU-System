<?php
session_start();

$ssid=$_SESSION["username"];

if(isset($_SESSION["username"]))
{
	include("dbconnection.php");
	
	$sql_getData = "SELECT * from user,trainee,request_courses,completed_course,institute WHERE user.user_name=trainee.t_id AND user.user_name=request_courses.t_id AND user.user_name=institute.t_id AND user.user_name=completed_course.t_id AND user.user_name='$ssid'";
	// echo $sql_getData; 

	$result=mysqli_query($conn,$sql_getData);

	$A=1;
	$row=mysqli_fetch_assoc($result);
?>

<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>application</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Jost:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/icofont/icofont.min.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/venobox/venobox.css" rel="stylesheet">
  <link href="assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  
  <link href="css/bootstrap.css" rel="stylesheet"/>

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">
  
</head>

<body>

<!-- ======= header section ======= -->
<?php include ("header.php") ?>
<!-- end header -->
 
<?php //echo"$ssid";?>

<main id="main">

<!-- ======= Breadcrumbs ======= -->
<section id="breadcrumbs" class="breadcrumbs">
<div class="container">

	  
<!-- application form-->
<form action="catch1.php" method="POST">
		</br>
		<div class="input_fields_wrap">
			<?php
			$sql_complete="SELECT * FROM completed_course,courses WHERE  completed_course.course_code=courses.course_code AND completed_course.t_id='$ssid'";
			$result_complete = $conn->query($sql_complete);
			echo "<center><table class='table table-striped table-dark' style='width:80%';><tr><thead class='thead-dark'><th>Course Name</th><th>Year</th><th>Date</th></tr><thead>";
			if ($result_complete->num_rows > 0) {
				while($row_complete = $result_complete ->fetch_assoc()) {
			?>
			
				<div class="row">
					<div class="col-1"></div>
						<div class="col-10">
							
								<tbody>
									<tr>
										<td>
											<label><?php echo $row_complete["course_name"] ?></label> 
										</td>
										
										<td style="width:10px;">
											<label> <?php echo $row_complete["completed_year"] ?> </label> 
										</td>
										
										<td >
											<label> <?php echo $row_complete["completed_date"] ?></label>  
										</td>		
									</tr>
								</tbody>	
							
						</div>
					<div class="col-1"></div>
				</div>
				<?php
			}}
			echo "</table></center>";
				?>
		</div>
<div class="col-2"></div>

</div>		
		
</form>
</main>

<div style="height:300px;"></div>
<!-- ====== fotter section ====== -->
<?php include ("fotter.php") ?>
<!-- end fotter-->
 

  <a href="application.php" class="back-to-top"><i class="ri-arrow-up-line"></i></a>
  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/jquery/jquery.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/jquery.easing/jquery.easing.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/waypoints/jquery.waypoints.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/venobox/venobox.min.js"></script>
  <script src="assets/vendor/owl.carousel/owl.carousel.min.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>
</html>
<?php
}
else
{

	header("location:../1/index.php");

}
?>