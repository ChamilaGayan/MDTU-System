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

  $location=$row['location'];
  $service=$row['service'];

  // $q2 = $conn->query("SELECT * FROM office WHERE office_no='$location'");
  //   if($q2->num_rows>0)
  //   {
  //     while($rowq=$q2->fetch_assoc()){

  //      $office_name = $rowq["office_name"];

  //   //    $office_name = $location;


  //   }
  //   }
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
                    $(wrapper).append('<div id="row'+ x +'"><div class="row"><div class="col-md-4 mb-3"><b><?php /*$conn=mysqli_connect('localhost','root','','mydb');*/ $conn->set_charset("utf8"); $sql_accna="SELECT * FROM courses order by course_code"; $accna_info=$conn->query($sql_accna)or die(mysqli_error($conn)); $numrows_accna=mysqli_num_rows($accna_info);?> ??????????????????????????? ??????</b><select class="form-control" name="comcourse[]"><option value="" selected disabled>???????????????????????? ??????????????????</option>"<?php if($numrows_accna > 0){while($row_accna=$accna_info->fetch_assoc()){?>"<option  value="<?php echo $row_accna['course_code'];?>"><?php echo $row_accna['course_name'];?></option><?php }}?>"</option></select></div> <div class="col-md-4 mb-3"> <b>???????????????</b> <select name="comyear[]" class="form-control"><option value="" selected disabled>???????????????</option>  <option value="2000">2000</option><option value="2001" >2001</option><option value="2002" >2002</option><option value="2003" >2003</option> <option value="2004">2004</option><option value="2005" >2005</option><option value="2006" >2006</option> <option value="2007" >2007</option><option value="2008" >2008</option><option value="2009" >2009</option<option value="2010" ></option>2010<option value="2011" >2011</option><option value="2012" />2012</option><option value="2013" >2013</option><option value="2014" >2014</option><option value="2015" >2015</option><option value="2016" >2016</option> <option value="2017" >2017</option><option value="2018" >2018</option><option value="2019" >2019</option><option value="2020" >2020</option></select></div><div class="col-md-4 mb-3"> <b>???????????????????????? ????????????</b> <input type="date" placeholder="???????????????????????? ????????????" class="form-control" name="comdate[]"></div> <div class="col-md-4 mb-3"><button class="remove_field" onclick="removeElement(&apos;row'+x+'&apos;);" >-</button></div></div></div>'); //add input box

                }
            });

        });
		function removeElement(elementId) {
			// Removes an element from the document
			var element = document.getElementById(elementId);
			element.parentNode.removeChild(element);
			}
    </script>
	
	
	
<!--<script
		function myFunction()
		if()
		{
		alert("Application successful");
		}
	</script> -->
	
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top header-inner-pages">
    <div class="container d-flex align-items-center">

      <h1 class="logo mr-auto"><a href="index.php">MDTU</a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo mr-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav class="nav-menu d-none d-lg-block">
        <ul>
          <li><a href="index.php">Home</a></li>
          <li><a href="about.php">About</a></li>
         <!--  <li><a href="#services">Services</a></li>
          <li><a href="#portfolio">Portfolio</a></li>
          <li><a href="#team">Team</a></li>
          <li class="drop-down"><a href="">Drop Down</a>
            <ul>
              <li><a href="#">Drop Down 1</a></li>
              <li class="drop-down"><a href="#">Deep Drop Down</a>
                <ul>
                  <li><a href="#">Deep Drop Down 1</a></li>
                  <li><a href="#">Deep Drop Down 2</a></li>
                  <li><a href="#">Deep Drop Down 3</a></li>
                  <li><a href="#">Deep Drop Down 4</a></li>
                  <li><a href="#">Deep Drop Down 5</a></li>
                </ul>
              </li>
              <li><a href="#">Drop Down 2</a></li>
              <li><a href="#">Drop Down 3</a></li>
              <li><a href="#">Drop Down 4</a></li>
            </ul>
          </li> -->
          <li><a href="contact.php">Contact</a></li>

        </ul>
      </nav><!-- .nav-menu -->

       <a href="./logout.php" class="get-started-btn scrollto">Logout</a>


    </div>
  </header><!-- End Header -->

  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
      <div class="container">

<!--         <ol>
          <li><a href="index.html">Home</a></li>
          <li>Inner Page</li>
        </ol>
        <h2>Inner Page</h2>

      </div>
    </section> End Breadcrumbs-->
	
	<form action="catch1.php" method="POST">
</br></br>
		<!--<div class="row" style="background-color:white1;"---->
		<div class="row" >
			<center><img src="assets/img/sllogo.png" width="100px" height="auto"></center>
			<center><label for="staticEmail" class="col-sm-5 col-form-label" style="font-size:20px;"><b>??????????????? ????????????????????????????????? ??????????????? ????????????????????????  </br>???????????????????????? ????????????????????? ?????? ?????????????????? ???????????? (MDTU) </br>?????????????????????????????? ???????????? ?????????????????? ?????????????????? - 2021/2022</b></label></br></center>
				<div class="col-2" ></div>
					<div class="col-8" style="background-color:#64bdfc;">
						<label for="staticEmail" class="col-sm-5 col-form-label" ><b>01.????????????????????? ?????????????????????</b></label></br>
						<label for="staticEmail" class="col-sm-5 col-form-label" >1.1 ??????(????????????????????? ????????? ??????) :- </label>
						<input type="text" disabled class="form-control" placeholder="????????????????????? ????????? ??????" name="name" required value=<?php echo "'" . $row["name"] . "'" ?> >
						  
						<label for="staticEmail" class="col-sm-5 col-form-label">1.2 ??????????????? :-</label>
						<input type="text"disabled   class="form-control" placeholder="???????????????" name="position" required value=<?php echo "'" . $row["position"] . "'" ?> >
			 
						<label for="staticEmail" class="col-sm-5 col-form-label">1.3 ???????????? ?????????????????? :- </label>
            <label for="staticEmail" class="form-control" ><?php echo $location; ?></label>
						
						<label for="staticEmail" class="col-sm-5 col-form-label" style="text-align:left;">1.4 ?????????????????? ???????????? :-  </label>
						<input type="text" disabled class="form-control" placeholder="?????????????????? ????????????" name="otpno" style="width:130px;" required value=<?php echo "'" . $row["tp_no"] . "'" ?> >
			  
						<label for="staticEmail" class="col-sm-5 col-form-label">1.5 ????????????/??????????????????/???????????????????????? :</label></br>
						
						<label for="staticEmail" class="col-sm-5 col-form-label">????????????</label>
            <label for="staticEmail" class="form-control" ><?php echo $service; ?></label>
						
						<label for="staticEmail" class="col-sm-5 col-form-label">??????????????????</label>
						
						<select  disabled  class="form-control" name="class" required> 
										<option value="" selected disabled>?????????????????? ??????????????????</option>
										<option value="????????????  ??????????????????" <?php if( $row["class"]=="????????????  ??????????????????"){ echo "selected"; } ?> >i ??????????????????</option>
										<option value="???????????? ??????????????????" <?php if( $row["class"]=="???????????? ??????????????????"){ echo "selected"; } ?> >ii ??????????????????</option>
										<option value="???????????? ??????????????????" <?php if( $row["class"]=="???????????? ??????????????????"){ echo "selected"; } ?> >iii ??????????????????</option>
						</select></br>
									
						<label for="staticEmail" class="col-sm-5 col-form-label">???????????????????????? </label>
						
						<select disabled  class="form-control" name="grade" required>
										<option value="" selected disabled>???????????????????????? ??????????????????</option>
										<option value="???????????? ????????????????????????" <?php if( $row["grade"]=="???????????? ????????????????????????"){ echo "selected"; } ?> >i ????????????????????????</option>
										<option value="???????????? ????????????????????????" <?php if( $row["grade"]=="???????????? ????????????????????????"){ echo "selected"; } ?> >ii ????????????????????????</option>
										<option value="???????????? ????????????????????????" <?php if( $row["grade"]=="???????????? ????????????????????????"){ echo "selected"; } ?> >iii ????????????????????????</option>
						</select></br>
			
						<label for="staticEmail" class="col-sm-5 col-form-label">1.6 ?????????????????? ??????????????? ?????????????????? ???????????? :- </label>
						<input disabled  type="date" class="form-control" name="jdate" style="width:200px" required value=<?php echo "'" . $row["join_date"] . "'" ?> >
			  
						 
						<label for="staticEmail" class="col-sm-5 col-form-label" >1.7???????????? ???????????? (?????????):-  </label>
						<input disabled type="text" class="form-control" placeholder="???????????? ???????????? " name="year" style="width:130px;text-align:left;" required value=<?php echo "'" . $row["service_time"] . "'" ?> >
						

						<label for="staticEmail" class="col-sm-10 col-form-label" style="text-align:left;">1.8 ????????? ??????????????? ????????? ???????????? ???????????? ???????????? ????????????????????? ???????????????????????? ?????????????????? ???????????????.(????????? ??????????????????) :-</label>
						<textarea  disabled style=" height:100px;" class="form-control" placeholder="???????????? ???????????? ???????????? ?????????????????????  " name="discrip" required><?php echo  $row["duty"] ?></textarea>
						
<!-----------------------------------------------------------------------persional Details table-------------------------------------------------------------------------->	
		
						<label for="staticEmail" class="col-sm-5 col-form-label"><b>02.???????????????????????? ?????????????????????</b></label></br>
						
						<label for="staticEmail" class="col-sm-5 col-form-label"  style="text-align:left;"><b>????????????????????? / ??????????????? ???????????? :-</b> </label></br>
						
						  <div class="form-check form-check-inline">
							  <input disabled  class="form-check-input" type="radio" id="inlineCheckbox1" value="female" name="gender" required <?php if( $row["gender"]=="female"){ echo "checked='checked'"; } ?> >
							  <label class="form-check-label" for="inlineCheckbox1">????????????????????? </label>
						</div>
						
						<div class="form-check form-check-inline">
							  <input  disabled class="form-check-input" type="radio" id="inlineCheckbox2" value="male" name="gender" required <?php if( $row["gender"]=="male"){ echo "checked='checked'"; } ?> >
							  <label class="form-check-label" for="inlineCheckbox2" >??????????????? </label>
						</div></br>
			 
			 
						<label for="staticEmail" class="col-sm-5 col-form-label" style="text-align:left;"><b>?????????????????? :-</b> </label>
						<input disabled  type="text" class="form-control" placeholder="??????????????????" name="paddress" required value=<?php echo "'" . $row["private_address"] . "'" ?> >
						  
						  
						<label for="staticEmail" class="col-sm-5 col-form-label" style="text-align:left;"><b> ????????????/???????????? :- </b> </label>
						<input disabled type="text" class="form-control" placeholder="????????????/???????????? " name="ptpno" style="width:130px;" required value=<?php echo "'" . $row["email_address"] . "'" ?> >
						
							
						<label for="staticEmail" class="col-sm-5 col-form-label" style="text-align:left;"><b> E - ??????????????????  ?????????????????? :- </b> </label>
						<input type="text" class="form-control" placeholder="E - ??????????????????  ??????????????????" name="email" style="width:250px;" value=<?php echo "'" . $row["email"] . "'" ?>  > 
						
						
						<label for="staticEmail" class="col-sm-5 col-form-label" style="text-align:left;"><b>??????????????? ????????????????????????????????? ???????????? :- </b> </label>
						<input disabled  type="text" class="form-control" placeholder="??????:?????? ????????????" name="idno" style="width:130px;" required value=<?php echo "'" . $row["t_id"] . "'" ?> >
			 
											 <!--------------------end persional details--------------------->
								
<!-----------------------------------------------------------------request courses table----------------------------------------------------------->		
	 
						<label for="staticEmail" class="col-sm-5 col-form-label" style="text-align:left;"><b>03.?????? ????????????????????? ????????? ????????????????????? (???????????? ???????????? ???????????????)</b></label></br>
			
						<?php
						$sql_request="SELECT * FROM request_courses,courses WHERE  request_courses.course_code1=courses.course_code AND request_courses.t_id='$ssid' order by request_courses.request_date asc";
						$result_request = $conn->query($sql_request);
						if ($result_request->num_rows > 0) {
							while($row_request = $result_request ->fetch_assoc()) {

											echo "<input  disabled class='form-control' type='text' value='" . $row_request["request_date"] . " , " . $row_request["course_name"] . "' required><br>";

										}
									}
						?>
												<!----------------end request courses table--------------->			 				
			

			
<!-----------------------------------------------------------------completed courses table---------------------------------------------------------------------------------->

<label for="staticEmail" class="col-sm-10 col-form-label" style="text-align:left;"><b>04.?????? ???????????????????????? ???????????? ?????????????????? ????????? ????????? ????????? ?????????????????? ???????????? ????????? ??? ?????????????????? ??????????????????.</b></label></br>
		<div class="input_fields_wrap">
			<?php
			$sql_complete="SELECT * FROM completed_course,courses WHERE  completed_course.course_code=courses.course_code AND completed_course.t_id='$ssid'";
			$result_complete = $conn->query($sql_complete);
			if ($result_complete->num_rows > 0) {
				while($row_complete = $result_complete ->fetch_assoc()) {
			?>
				<div class="row">
					<div class="col-md-4 mb-3">
						<label for="staticEmail"  style="text-align:left;">??????????????????????????? ?????? </label>
							
							<select name="comcourse[]" disabled   class="form-control" required>
								
								<option  value="" selected disabled><?php echo $row_complete["course_name"] ?></option>
							
							</select>
					</div>
					
						<div class="col-md-4 mb-3">
						<label for="staticEmail"  style="text-align:left;">??????????????? </label>
								<select name="comyear[]" disabled  class="form-control"  required>
										<option value="" selected disabled><?php echo $row_complete["completed_year"] ?></option>
								</select>
						</div>
					
							<div class="col-md-4 mb-3">
								<label for="staticEmail"  style="text-align:left;">???????????????????????? ????????????</label> 
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
										

						<label for="staticEmail" class="col-sm-5 col-form-label" style="text-align:left;"> ???????????? :-  
						&#09 <input type="text" disabled  class="form-control" name="applydate" style="width:200px;" required  value=<?php echo "'" . $row["request_date"] . "'" ?> ></label>

						<!--</br><button type="submit" disabled class="btn btn-outline-secondary" name="update" onclick="myFunction()" style="width:100px;">Apply</button>-->
			
				
						<div class="col-2">
						</div>
			
					</div>
		</div>			
</form>
		
		
		
</main>
<!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6 footer-contact">
            <h3>MDTU</h3>
            <p>
             Secratiate Office,  <br>
             Matale<br>
             <!--  United States <br><br> -->
              <strong>Phone:</strong> 066-2222035<br>
              <strong>Email:</strong> mdtu@gmail.com<br>
            </p>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="index.html">Home</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="about.php">About us</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="contact.php">contact</a></li>
             <!--  <li><i class="bx bx-chevron-right"></i> <a href="#">Terms of service</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Privacy policy</a></li> -->
            </ul>
          </div>

          <!-- <div class="col-lg-3 col-md-6 footer-links">
            <h4>Our Services</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Web Design</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Web Development</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Product Management</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Marketing</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Graphic Design</a></li>
            </ul>
          </div> -->

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Our Social Networks</h4>
           <!--  <p>Cras fermentum odio eu feugiat lide par naso tierra videa magna derita valies</p> -->
            <div class="social-links mt-3">
              <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
              <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
              <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
              <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
              <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
            </div>
          </div>

        </div>
      </div>
    </div>

    <div class="container footer-bottom clearfix">
      <div class="copyright">
         <strong><span>Management Development Training Unit</span></strong>
      </div>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/arsha-free-bootstrap-html-template-corporate/ -->
       MDTU <!-- <a href="https://bootstrapmade.com/">BootstrapMade</a> -->
      </div>
    </div>
  </footer><!-- End Footer -->

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