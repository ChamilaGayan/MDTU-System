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
  

  <!-- =======================================================
  * Template Name: Arsha - v3.0.2
  * Template URL: https://bootstrapmade.com/arsha-free-bootstrap-html-template-corporate/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
   <script src="jquery/jquery.min.js"></script>
    <script>
        $(document).ready(function() {
            var max_fields = 10; //maximum input boxes allowed
            var wrapper = $(".input_fields_wrap"); //Fields wrapper
            var add_button = $(".add_field_button"); //Add button ID

            var x = 1; //initlal text box count
            $(add_button).click(function(e) { //on add input button click
                e.preventDefault();
                if (x < max_fields) { //max input box allowed
                    x++; //text box increment
                    $(wrapper).append('<div id="row'+ x +'"><div class="row"><div class="col-md-4 mb-3"><b><?php /*$conn=mysqli_connect('localhost','root','','mydb');*/ $conn->set_charset("utf8"); $sql_accna="SELECT * FROM courses order by course_code"; $accna_info=$conn->query($sql_accna)or die(mysqli_error($conn)); $numrows_accna=mysqli_num_rows($accna_info);?> පාඨමාලාවේ නම</b><select class="form-control" name="comcourse[]"><option value="" selected disabled>පාඨමාලාව තෝරන්න</option>"<?php if($numrows_accna > 0){while($row_accna=$accna_info->fetch_assoc()){?>"<option  value="<?php echo $row_accna['course_code'];?>"><?php echo $row_accna['course_name'];?></option><?php }}?>"</option></select></div> <div class="col-md-4 mb-3"> <b>වර්ෂය</b> <select name="comyear[]" class="form-control"><option value="" selected disabled>වර්ෂය</option>  <option value="2000">2000</option><option value="2001" >2001</option><option value="2002" >2002</option><option value="2003" >2003</option> <option value="2004">2004</option><option value="2005" >2005</option><option value="2006" >2006</option> <option value="2007" >2007</option><option value="2008" >2008</option><option value="2009" >2009</option<option value="2010" ></option>2010<option value="2011" >2011</option><option value="2012" />2012</option><option value="2013" >2013</option><option value="2014" >2014</option><option value="2015" >2015</option><option value="2016" >2016</option> <option value="2017" >2017</option><option value="2018" >2018</option><option value="2019" >2019</option><option value="2020" >2020</option></select></div><div class="col-md-4 mb-3"> <b>පැවැත්වූ දිනය</b> <input type="date" placeholder="පැවැත්වූ දිනය" class="form-control" name="comdate[]"></div> <div class="col-md-4 mb-3"><button class="remove_field" onclick="removeElement(&apos;row'+x+'&apos;);" >-</button></div></div></div>'); //add input box

                }
            });

        });
		function removeElement(elementId) {
			// Removes an element from the document
			var element = document.getElementById(elementId);
			element.parentNode.removeChild(element);
			}
    </script>
	
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
</br></br>
		<div class="row" >
			<center><img src="assets/img/sllogo.png" width="100px" height="auto"></center>
			<center><label for="staticEmail" class="col-sm-5 col-form-label" style="font-size:20px;"><b>මාතලේ දිස්ත්‍රික් ලේකම් කාර්යාලය  </br>කළමනාකරන සංවර්ධන හා පුහුණු අංශය (MDTU) </br>පුහුණුවීම් සඳහා අයදුම් පත්‍රය - 2020/2021</b></label></br></center>
				<div class="col-2" ></div>
					<div class="col-8" style="background-color:#64bdfc;">
						<label for="staticEmail" class="col-sm-5 col-form-label" ><b>01.රාජකාරී තොරතුරු</b></label></br>
						<label for="staticEmail" class="col-sm-5 col-form-label" >1.1 නම(මුලකුරු සමඟ නම) :- </label>
						<input type="text" disabled class="form-control" placeholder="මුලකුරු සමඟ නම" name="name" required value=<?php echo "'" . $row["name"] . "'" ?> >
						  
						<label for="staticEmail" class="col-sm-5 col-form-label">1.2 තනතුර :-</label>
						<input type="text"disabled   class="form-control" placeholder="තනතුර" name="position" required value=<?php echo "'" . $row["position"] . "'" ?> >
			 
						<label for="staticEmail" class="col-sm-5 col-form-label">1.3 සේවා ස්ථානය :- </label>
						<?php
						$sql_institute="SELECT * FROM office,institute WHERE office.office_no=institute.location AND t_id='$ssid'";
						$result_institute = $conn->query($sql_institute);
						if ($result_institute->num_rows > 0) {
							while($row_institute = $result_institute ->fetch_assoc()) {

											echo "<input  disabled class='form-control' type='text' value='" . $row_institute["office_name"] . "' required><br>";

										}
									}
						?>
						
						<label for="staticEmail" class="col-sm-5 col-form-label" style="text-align:left;">1.4 දුරකථන අංකය :-  </label>
						<input type="text" disabled class="form-control" placeholder="දුරකථන අංකය" name="otpno" style="width:130px;" required value=<?php echo "'" . $row["tp_no"] . "'" ?> >
			  
						<label for="staticEmail" class="col-sm-5 col-form-label">1.5 සේවය/පන්තිය/ශ්‍රේණිය :</label></br>
						
						<label for="staticEmail" class="col-sm-5 col-form-label">සේවය</label></br>
						<?php
						$sql_service="SELECT * FROM service,trainee WHERE service.service_no=trainee.service AND t_id='$ssid' ";
						$result_service = $conn->query($sql_service);
						if ($result_service->num_rows > 0) {
							while($row_service= $result_service ->fetch_assoc()) {

											echo "<input  disabled class='form-control' type='text' value='" . $row_service["service_name"] . "' required><br>";

										}
									}
						?>
						
						<label for="staticEmail" class="col-sm-5 col-form-label">පන්තිය</label>
						<select  disabled  class="form-control" name="class" required> 
										<option value="" selected disabled>පන්තිය තෝරන්න</option>
										<option value="පළමු  පන්තිය" <?php if( $row["class"]=="පළමු  පන්තිය"){ echo "selected"; } ?> >i පන්තිය</option>
										<option value="දෙවන පන්තිය" <?php if( $row["class"]=="දෙවන පන්තිය"){ echo "selected"; } ?> >ii පන්තිය</option>
										<option value="තෙවන පන්තිය" <?php if( $row["class"]=="තෙවන පන්තිය"){ echo "selected"; } ?> >iii පන්තිය</option>
						</select></br>
									
						<label for="staticEmail" class="col-sm-5 col-form-label">ශ්‍රේණිය </label>
						
						<select disabled  class="form-control" name="grade" required>
										<option value="" selected disabled>ශ්‍රේණිය තෝරන්න</option>
										<option value="පළමු ශ්‍රේණිය" <?php if( $row["grade"]=="පළමු ශ්‍රේණිය"){ echo "selected"; } ?> >i ශ්‍රේණිය</option>
										<option value="දෙවන ශ්‍රේණිය" <?php if( $row["grade"]=="දෙවන ශ්‍රේණිය"){ echo "selected"; } ?> >ii ශ්‍රේණිය</option>
										<option value="තෙවන ශ්‍රේණිය" <?php if( $row["grade"]=="තෙවන ශ්‍රේණිය"){ echo "selected"; } ?> >iii ශ්‍රේණිය</option>
						</select></br>
			
						<label for="staticEmail" class="col-sm-5 col-form-label">1.6 රාජ්‍ය සේවයට බැඳුනු දිනය :- </label>
						<input disabled  type="date" class="form-control" name="jdate" style="width:200px" required value=<?php echo "'" . $row["join_date"] . "'" ?> >
			  
						 
						<label for="staticEmail" class="col-sm-5 col-form-label" >1.7සේවා කාලය (වසර):-  </label>
						<input disabled type="text" class="form-control" placeholder="සේවා කාලය " name="year" style="width:130px;text-align:left;" required value=<?php echo "'" . $row["service_time"] . "'" ?> >
						

						<label for="staticEmail" class="col-sm-10 col-form-label" style="text-align:left;">1.8 ඔබට පැවරී ඇති විෂය පථයට අඳාළ රාජකාරී කෙටියෙන් විස්තර කරන්න.(ඉතා වැදගත්) :-</label>
						<textarea  disabled style=" height:100px;" class="form-control" placeholder="විෂය පථයට අඳාළ රාජකාරී  " name="discrip" required><?php echo  $row["duty"] ?></textarea>
						
<!-----------------------------------------------------------------------persional Details table-------------------------------------------------------------------------->	
		
						<label for="staticEmail" class="col-sm-5 col-form-label"><b>02.පුද්ගලික තොරතුරු</b></label></br>
						
						<label for="staticEmail" class="col-sm-5 col-form-label"  style="text-align:left;"><b>ස්ත්‍රී / පුරුෂ භාවය :-</b> </label></br>
						
						  <div class="form-check form-check-inline">
							  <input disabled  class="form-check-input" type="radio" id="inlineCheckbox1" value="female" name="gender" required <?php if( $row["gender"]=="female"){ echo "checked='checked'"; } ?> >
							  <label class="form-check-label" for="inlineCheckbox1">ස්ත්‍රී </label>
						</div>
						
						<div class="form-check form-check-inline">
							  <input  disabled class="form-check-input" type="radio" id="inlineCheckbox2" value="male" name="gender" required <?php if( $row["gender"]=="male"){ echo "checked='checked'"; } ?> >
							  <label class="form-check-label" for="inlineCheckbox2" >පුරුෂ </label>
						</div></br>
			 
			 
						<label for="staticEmail" class="col-sm-5 col-form-label" style="text-align:left;"><b>ලිපිනය :-</b> </label>
						<input disabled  type="text" class="form-control" placeholder="ලිපිනය" name="paddress" required value=<?php echo "'" . $row["private_address"] . "'" ?> >
						  
						  
						<label for="staticEmail" class="col-sm-5 col-form-label" style="text-align:left;"><b> ජංගම/නිවස :- </b> </label>
						<input disabled type="text" class="form-control" placeholder="ජංගම/නිවස " name="ptpno" style="width:130px;" required value=<?php echo "'" . $row["email_address"] . "'" ?> >
						
							
						<label for="staticEmail" class="col-sm-5 col-form-label" style="text-align:left;"><b> E - තැපැල්  ලිපිනය :- </b> </label>
						<input type="text" class="form-control" placeholder="E - තැපැල්  ලිපිනය" name="email" style="width:250px;" value=<?php echo "'" . $row["email"] . "'" ?>  > 
						
						
						<label for="staticEmail" class="col-sm-5 col-form-label" style="text-align:left;"><b>ජාතික හැදුනුම්පත් අංකය :- </b> </label>
						<input disabled  type="text" class="form-control" placeholder="ජා:හැ අංකය" name="idno" style="width:130px;" required value=<?php echo "'" . $row["t_id"] . "'" ?> >
			 
											 <!--------------------end persional details--------------------->
								
<!-----------------------------------------------------------------request courses table----------------------------------------------------------->		
	 
						<label for="staticEmail" class="col-sm-5 col-form-label" style="text-align:left;"><b>03.ඔබ ඉල්ලුම් කරන පාඨමාලා (විෂය පථයට අදාළව)</b></label></br>
			
						<?php
						$sql_request="SELECT * FROM request_courses,courses WHERE  request_courses.course_code1=courses.course_code AND request_courses.t_id='$ssid'";
						$result_request = $conn->query($sql_request);
						if ($result_request->num_rows > 0) {
							while($row_request = $result_request ->fetch_assoc()) {

											echo "<input  disabled class='form-control' type='text' value='" . $row_request["course_name"] . "' required><br>";

										}
									}
						?>
												<!----------------end request courses table--------------->			 				
			

			
<!-----------------------------------------------------------------completed courses table---------------------------------------------------------------------------------->

<label for="staticEmail" class="col-sm-10 col-form-label" style="text-align:left;"><b>04.එම වැඩසටහන් සඳහා පසුගිය වසර දෙක තුළ සහභාගී වූයේ නම් ඒ පිළිබඳ විස්තර.</b></label></br>
		<div class="input_fields_wrap">
			<?php
			$sql_complete="SELECT * FROM completed_course,courses WHERE  completed_course.course_code=courses.course_code AND completed_course.t_id='$ssid'";
			$result_complete = $conn->query($sql_complete);
			if ($result_complete->num_rows > 0) {
				while($row_complete = $result_complete ->fetch_assoc()) {
			?>
				<div class="row">
					<div class="col-md-4 mb-3">
						<!--<label for="staticEmail"  style="text-align:left;">පාඨමාලාවේ නම </label>-->
							
							<select name="comcourse[]" disabled   class="form-control" required>
								
								<option  value="" selected disabled><?php echo $row_complete["course_name"] ?></option>
							
							</select>
					</div>
					
						<div class="col-md-4 mb-3">
						<!--<label for="staticEmail"  style="text-align:left;">වර්ෂය </label>-->
								<select name="comyear[]" disabled  class="form-control"  required>
										<option value="" selected disabled><?php echo $row_complete["completed_year"] ?></option>
								</select>
						</div>
					
							<div class="col-md-4 mb-3">
								<!--<label for="staticEmail"  style="text-align:left;">පැවැත්වූ දිනය</label> -->
								<input disabled type="date" name="comdate[]" class="form-control"  required value=<?php echo $row_complete["completed_date"] ?> >    
							</div>
							
					<div class="col-md-4 mb-3">
						 <label type="hidden" for="staticEmail"  style="text-align:left;"><button class="button" style="border:none; background-color:#64bdfc; height:25px;"></button></label> 
					</div>
					
				</div>
				<?php
				}}
				?>
		</div>
											<!---------------end completed courses table--------------->
										

						<label for="staticEmail" class="col-sm-5 col-form-label" style="text-align:left;"> දිනය :-  
						&#09 <input type="date" disabled  class="form-control" name="applydate" style="width:200px;" required  value=<?php echo "'" . $row["request_date"] . "'" ?> ></label>

						<!--</br><button type="submit" disabled class="btn btn-outline-secondary" name="update" onclick="myFunction()" style="width:100px;">Apply</button>-->
			
				
						<div class="col-2">
						</div>
			
					</div>
		</div>			
</form>
		
		
		
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
<?php
}
else
{

	header("location:../1/index.php");

}
?>