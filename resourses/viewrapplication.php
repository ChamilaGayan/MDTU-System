 <?php
//session_start();
//if(isset($_SESSION["username"]))
//{
//include("../trainee/dbconnection.php")
session_start();

$id=$_SESSION["username"];

if(isset($_SESSION["username"]))
{
include("../trainee/dbconnection.php");
}

$sql_getData = "SELECT * from resourses WHERE r_id = '$id'";
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
  <link href="assets/css/style.css" rel="stylesheet">
  
  <!--js-->
   <script src="jquery/jquery.min.js"></script>
   
	

	
<!--end js-->

</head>

<body>

<!-- ======= header section ======= -->
  <?php include ("header.php") ?>
<!-- end header -->

<main id="main">
  

    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
      <div class="container">


<!--application form-->	
<form action="catch.php" method="POST" >
</br></br>
		<div class="row" style="background-color:white;">
			<center><img src="assets/img/sllogo.png" width="100px" height="auto"></center>
			<center><label for="staticEmail" class="col-sm-8 col-form-label" style="font-size:20px;"><b>මාතලේ දිස්ත්‍රික් ලේකම් කාර්යාලය </br> කළමනාකරණ සංවර්ධන හා පුහුණු  අංශය (MDTU)</br> සම්පත්දායක සංචිතය සඳහා නිලධාරීන් බඳවා ගැනිමේ අයදුම් පත්‍රය - 2020/2021</b></label></br></center>
				<div class="col-2" ></div>





					<div class="col-8" style="background-color:#65d1e1;">
						<label for="staticEmail" class="col-sm-5 col-form-label" ><b>01. නම(මුලකුරු සමඟ නම) :- </b></label>
						<input type="text" class="form-control" placeholder="මුලකුරු සමඟ නම" name="name" required disabled value= <?php echo "'" . $row["rname"] . "'" ?>>
						
						<label for="staticEmail" class="col-sm-5 col-form-label"><b>02.කාර්යාලීය ලිපිනය :-</b></label>
						<input type="text" class="form-control" placeholder="කාර්යාලීය ලිපිනය" name="oaddress" required disabled value=<?php echo "'" . $row["office_address"] . "'" ?>>
						  
						<label for="staticEmail" class="col-sm-5 col-form-label"><b>03.පෞද්ගලික ලිපිනය:-</b></label>
						<input type="text" class="form-control" placeholder="පෞද්ගලික ලිපිනය" name="paddress" required disabled value=<?php echo "'" . $row["private_address"] . "'" ?>>
			 
						<label for="staticEmail" class="col-sm-5 col-form-label"><b>04.තනතුර / අවසන් වරට දැරූ තනතුර :-</b> </label>
						<input type="text" class="form-control" placeholder="තනතුර / අවසන් වරට දැරූ තනතුර" name="position" required disabled value=<?php echo "'" . $row["position"] . "'" ?>>
								
						<label for="staticEmail" class="col-sm-5 col-form-label" style="text-align:left;"><b>05.E - තැපැල්  ලිපිනය :- </b> </label>
						<input type="text" class="form-control" placeholder="E - තැපැල්  ලිපිනය" name="email" style="width:300px;" disabled value=<?php echo "'" . $row["email"] . "'" ?>> 
			
						<label for="staticEmail" class="col-sm-5 col-form-label"  style="text-align:left;"><b>06. ස්ත්‍රී / පුරුෂ භාවය :-</b> </label></br>
						
						  <div class="form-check form-check-inline">
							  <input class="form-check-input" type="radio" id="inlineCheckbox1" value="f" name="gender" required disabled <?php if( $row["gender"]=="f"){ echo "checked='checked'"; } ?>>
							  <label class="form-check-label" for="inlineCheckbox1" >ස්ත්‍රී </label>
						</div>
						
						<div class="form-check form-check-inline">
							  <input class="form-check-input" type="radio" id="inlineCheckbox2" value="m" name="gender" required disabled <?php if( $row["gender"]=="m"){ echo "checked='checked'"; } ?>>
							  <label class="form-check-label" for="inlineCheckbox2">පුරුෂ </label>
						</div></br>
			 
						<label for="staticEmail" class="col-sm-5 col-form-label"  style="text-align:left;"><b>07. විවාහක / අවිවාහක භාවය :-</b> </label></br>
						
						  <div class="form-check form-check-inline">
							  <input class="form-check-input" type="radio" id="inlineCheckbox1" value="m" name="status" required disabled <?php if( $row["status"]=="m"){ echo "checked='checked'"; } ?>>
							  <label class="form-check-label" for="inlineCheckbox1">විවාහක  </label>
						</div>
						
						<div class="form-check form-check-inline">
							  <input class="form-check-input" type="radio" id="inlineCheckbox2" value="um" name="status" required disabled <?php if( $row["status"]=="um"){ echo "checked='checked'"; } ?>>
							  <label class="form-check-label" for="inlineCheckbox2"> අවිවාහක  </label>
						</div></br>
			 
			 
						<label for="staticEmail" class="col-sm-5 col-form-label" style="text-align:left;"><b>08. වයස  (2021/01/01 දිනට) :-</b> </label></br>
						<!--<label for="staticEmail" class="col-sm-5 col-form-label" style="text-align:left; color:red;">උදා :- අවුරුදු  xx, මාස  xx, දින  xx </label>-->
						<input type="text" class="form-control" placeholder="අවුරුදු  "  style="width:100px;" name="age" required disabled value=<?php echo "'" . $row["age"] . "'" ?> >
					

											 <!--------------------end persional details--------------------->
											 
			
<!-----------------------------------------------------------------education courses table---------------------------------------------------------------------------------->
	

		<label for="staticEmail" class="col-sm-10 col-form-label" style="text-align:left;"><b>09. අධ්‍යාපනික සුදුසුකම්.</b></label></br>
			<div class="input_fields_wrap">
			<?php
			$sql_complete="SELECT * FROM resourses,rqulifications WHERE  resourses.r_id=rqulifications.r_id AND rqulifications.r_id='$id'";
			$result_complete = $conn->query($sql_complete);
			if ($result_complete->num_rows > 0) {
				while($row_complete = $result_complete ->fetch_assoc()) {
			?>
				<div class="row">
					<div class="col-md-5 mb-3">
						<!--<label for="staticEmail"  style="text-align:left;">පශ්චාත් උපාධි /උපාධි/ඩිප්ලෝමා/වෙනත්</label>-->
						<input type="text" class="form-control" placeholder="පශ්චාත් උපාධි/උපාධි/ඩිප්ලෝමා/වෙනත් "   name="comcourse[]" required disabled value="<?php echo $row_complete["qualification"] ?>">	
					</div>
				
					
					<div class="col-md-3 mb-3">
						<!--<label for="staticEmail"  style="text-align:left;">වර්ෂය</label> -->
						<input type="text" class="form-control" placeholder="වර්ෂය "   name="comyear[]" required disabled value="<?php echo $row_complete["year"] ?>" >	
					</div>
					
					<div class="col-md-4 mb-3">
						<!--<label for="staticEmail"  style="text-align:left;">ආයතනය</label> -->
						<input type="text" class="form-control" placeholder="ආයතනය "   name="comdate[]" required disabled value="<?php echo $row_complete["institute"] ?>">			
					</div>
							
					<!--<div class="col-md-4 mb-3">
						<label for="staticEmail"  style="text-align:left;"></label><button class="add_field_button">+</button>
					</div>-->
				</div>
				<?php
				}}
				?>
		</div>
											<!---------------end qualification table--------------->
											
		<!-----------------------------------------------------------------service experiance courses table---------------------------------------------------------------------------------->										
		<label for="staticEmail" class="col-sm-10 col-form-label" style="text-align:left;"><b>10. සේවා පළපුරුද්ද.</b></label></br>
			<div class="input_fields_wrap1">
			<?php
			$sql_complete="SELECT * FROM resourses,rexpireance WHERE  resourses.r_id=rexpireance.r_id AND rexpireance.r_id='$id'";
			$result_complete = $conn->query($sql_complete);
			if ($result_complete->num_rows > 0) {
				while($row_complete = $result_complete ->fetch_assoc()) {
			?>
				<div class="row">
					<div class="col-md-5 mb-3">
						<!--<label for="staticEmail"  style="text-align:left;">සේවාය කළ ආයතනය</label>-->
						<input type="text" class="form-control" placeholder="සේවාය කළ ආයතනය "   name="center[]" required disabled value="<?php echo $row_complete["center"] ?> ">	
					</div>
				
					
					<div class="col-md-4 mb-3">
						<!--<label for="staticEmail"  style="text-align:left;">තනතුර</label> -->
						<input type="text" class="form-control" placeholder="තනතුර "   name="post[]" required disabled value="<?php echo $row_complete["post"] ?>">	
					</div>
					
					<div class="col-md-3 mb-3">
						<!--<label for="staticEmail"  style="text-align:left;">කාලසීමාව</label> -->
						<input type="text" class="form-control" placeholder="කාලසීමාව "   name="duration[]" required disabled value="<?php echo $row_complete["duration"] ?>">			
					</div>
					
					
					<!--<div class="container1">
						<button class="add_form_field"> <span style="font-size:16px; font-weight:bold;">+ </span></button>
					</div>--></br>							
				</div>
				<?php
				}}
				?>
			</div>								
										<!---------------end experiance table--------------->
										
										
<!----------------------------------------------------------------education experiance courses table---------------------------------------------------------------------------------->										
		<label for="staticEmail" class="col-sm-10 col-form-label" style="text-align:left;"><b>11. සම්පත්දායකත්වය සැපයීම සම්බන්ධයෙන් ලබා ඇති පළපුරුද්ද.</b></label></br>										
		<label for="staticEmail" class="col-sm-10 col-form-label"  style="text-align:left;"><b> ඔබ දැනටමත් සම්පත්දායකයෙකු ලෙස කටයුතු කරන්නේද ? </b> </label></br>
						
						<div class="form-check form-check-inline">
							<input class="form-check-input" type="radio" onclick="javascript:yesnoCheck();" value="y" id="yesCheck" name="ok"  required disabled  <?php if( $row["yes_no"]=="y"){ echo "checked='checked'"; } ?> >
							  <label class="form-check-label" for="inlineCheckbox1" >ඔව්</label>
							
							<div class="input_fields_wrap2">							
								<div class="group" id="ifYes" style="display:none">
		
									<div class="row">
										<div class="col-md-6 mb-1">
											<?php
												$sql_accna="SELECT * FROM courses order by course_code";
												$accna_info=$conn->query($sql_accna)or die(mysqli_error($conn));
												$numrows_accna=mysqli_num_rows($accna_info);
											?>
												
														<select class="form-control"  name="s[]"    >
														
														<option value="" selected disabled>සම්පත්දායකත්වය සපයන විෂය තෝරන්න</option>
												<?php 
													if($numrows_accna > 0)
													{
														while($row_accna=$accna_info->fetch_assoc()){?>
													
													<option value="<?php echo $row_accna['course_code'];?>"><?php echo $row_accna['course_code'];?> . <?php echo $row_accna['course_name'];?></option>
													
													<?php }}?>
														</select>
										</div>
										<div class="col-md-6 mb-1">
											<?php
												$sql_accna="SELECT * FROM rsupport_level order by level_no";
												$accna_info=$conn->query($sql_accna)or die(mysqli_error($conn));
												$numrows_accna=mysqli_num_rows($accna_info);
											?>
												
														<select class="form-control"  name="l[]"   >
														
														<option value="" selected disabled> සම්පත්දායකත්වය සපයන සේවා මට්ටම.</option>
												<?php 
													if($numrows_accna > 0)
													{
														while($row_accna=$accna_info->fetch_assoc()){?>
													
													<option value="<?php echo $row_accna['level_no'];?>"><?php echo $row_accna['level_no'];?> . <?php echo $row_accna['level_name'];?></option>
													
													<?php }}?>
														</select>			
										</div>
									
										<div class="container2">
											<button class="add_form_field2"> <span style="font-size:16px; font-weight:bold;">+ </span></button>
										</div>
										
									</div>
										
								</div>	
							</div>	
							
								<div class="form-check form-check-inline">
									  <input class="form-check-input" type="radio" id="inlineCheckbox2" value="n" name="ok" required disabled  <?php if( $row["yes_no"]=="n"){ echo "checked='checked'"; } ?>>
									  <label class="form-check-label" for="inlineCheckbox2">නැත </label>
								</div>
				
						</div></br>
						
						
						
											<!---------------end education experiance table--------------->
											
											
<!-----------------------------------------------------------------tot table---------------------------------------------------------------------------------->										
		<label for="staticEmail" class="col-sm-10 col-form-label" style="text-align:left;"><b>12. පුහුණු කරන්නෙකු ලෙස ලබා ඇති පුහුණුව.</b></label></br>
			<div class="input_fields_wrap3">
			<?php
			$sql_complete="SELECT * FROM resourses,rtot WHERE  resourses.r_id=rtot.r_id AND rtot.r_id='$id'";
			$result_complete = $conn->query($sql_complete);
			if ($result_complete->num_rows > 0) {
				while($row_complete = $result_complete ->fetch_assoc()) {
			?>
				<div class="row">
					<div class="col-md-6 mb-3">
						<!--<label for="staticEmail"  style="text-align:left;">පුහුණුව ලබා දුන් ආයතනය</label>-->
						<input type="text" class="form-control" placeholder="පුහුණුව ලබා දුන් ආයතනය "  name="place[]" required disabled value="<?php echo $row_complete["trainee_place"] ?>">	
					</div>
				
					
					<div class="col-md-3 mb-3">
						<!--<label for="staticEmail"  style="text-align:left;">වර්ෂය</label> -->
						<input type="text" class="form-control" placeholder="වර්ෂය "  name="tyear[]" required disabled value="<?php echo $row_complete["tyear"] ?> ">	
					</div>
					
					<div class="col-md-3 mb-3">
						<!--<label for="staticEmail"  style="text-align:left;">දින ගණන</label> -->
						<input type="text" class="form-control" placeholder="දින ගණන "   name="tdates[]" required disabled value="<?php echo $row_complete["no_of_dates"] ?>" >			
					</div>
					
					
					<!--<div class="container3">
						<button class="add_form_field3"> <span style="font-size:16px; font-weight:bold;">+ </span></button>
					</div>--></br>							
				</div>
				<?php
				}}
				?>
			</div>								
										<!---------------end experiance table--------------->											
											
											
											
											
											
<!-----------------------------------------------------------------like courses---------------------------------------------------------------------------------->										
						<label for="staticEmail" class="col-sm-10 col-form-label" style="text-align:left;"><b>13.සම්පත්දායකත්වය සැපයිමට කැමති පුහුණු පාඨමාලාවන්.</b></label></br>											
							<?php
						$sql_request="SELECT * FROM rcourses,courses WHERE  rcourses.course_code=courses.course_code AND rcourses.r_id='$id'";
						$result_request = $conn->query($sql_request);
						if ($result_request->num_rows > 0) {
							while($row_request = $result_request ->fetch_assoc()) {

											echo "<input  disabled class='form-control' type='text' value='" . $row_request["course_name"] . "' required><br>";

										}
									}
						?>
									
										<!---------------end like courses table--------------->		
							
							
							
<!-----------------------------------------------------------------like level---------------------------------------------------------------------------------->										
						<label for="staticEmail" class="col-sm-10 col-form-label" style="text-align:left;"><b>14.සම්පත්දායකත්වය සැපයිමට කැමති  සේවා මට්ටම්.</b></label></br>											
							<?php
						$sql_request="SELECT * FROM rlevel,rsupport_level WHERE  rlevel.level_no=rsupport_level.level_no AND rlevel.r_id='$id'";
						$result_request = $conn->query($sql_request);
						if ($result_request->num_rows > 0) {
							while($row_request = $result_request ->fetch_assoc()) {

											echo "<input  disabled class='form-control' type='text' value='" . $row_request["level_name"] . "' required><br>";

										}
									}
						?>
		
										<!---------------end like level table--------------->													

										
										
						<label for="staticEmail" class="col-sm-5 col-form-label" style="text-align:left;"> දිනය :- </label>
						</br><input type="date" class="form-control" name="applydate" style="width:200px;" required disabled value=<?php echo "'" . $row["apply_date"] . "'" ?>>
<br>
						<!-- </br><button type="submit" class="btn btn-outline-secondary" name="submit"  style="width:100px;" disabled >Apply</button>  -->
			
				
						<div class="col-2">
						</div>
			
				</div>	
		</div>			
</form>
<!--end form-->		
		
		
</main>


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

