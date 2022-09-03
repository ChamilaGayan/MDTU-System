<?php
session_start();

$ssid=$_SESSION["username"];

if(isset($_SESSION["username"]))
{
	include("dbconnection.php");
	
	$sql_getData = "SELECT * from user,trainee,request_courses,completed_course,institute WHERE user.user_name=trainee.t_id AND user.user_name=request_courses.t_id AND user.user_name=institute.t_id AND user.user_name=completed_course.t_id AND user.user_name='$ssid'";
	/* echo $sql_getData; */

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
			<center><label for="staticEmail" class="col-sm-5 col-form-label" style="font-size:20px;"><b>මාතලේ දිස්ත්‍රික් ලේකම් කාර්යාලය  </br>කළමනාකරන සංවර්ධන හා පුහුණු අංශය (MDTU) </br>පුහුණුවීම් සඳහා අයදුම් පත්‍රය - 2020/2021</b></label></br></center>
				<div class="col-2" ></div>
					<div class="col-8" style="background-color:#64bdfc;">
						<label for="staticEmail" class="col-sm-5 col-form-label" ><b>01.රාජකාරී තොරතුරු</b></label></br>
						<label for="staticEmail" class="col-sm-5 col-form-label" >1.1 නම(මුලකුරු සමඟ නම) :- </label>
						<input type="text" disabled class="form-control" placeholder="මුලකුරු සමඟ නම" name="name" required value=<?php echo "'" . $row["name"] . "'" ?> >
						  
						<label for="staticEmail" class="col-sm-5 col-form-label">1.2 තනතුර :-</label>
						<input type="text"disabled   class="form-control" placeholder="තනතුර" name="position" required value=<?php echo "'" . $row["position"] . "'" ?> >
			 
						<label for="staticEmail" class="col-sm-5 col-form-label">1.3 සේවා ස්ථානය :- </label>
						<input type="text" disabled  class="form-control" placeholder="සේවා ස්ථානය" name="oaddress" required value=<?php echo "'" . $row["location"] . "'" ?> >
						
						<label for="staticEmail" class="col-sm-5 col-form-label" style="text-align:left;">1.4 දුරකථන අංකය :-  </label>
						<input type="text" disabled class="form-control" placeholder="දුරකථන අංකය" name="otpno" style="width:130px;" required value=<?php echo "'" . $row["tp_no"] . "'" ?> >
			  
						<label for="staticEmail" class="col-sm-5 col-form-label">1.5 සේවය/පන්තිය/ශ්‍රේණිය :</label></br>
						
						<label for="staticEmail" class="col-sm-5 col-form-label">සේවය</label>
						<select name="service" disabled  class="form-control" name="service" required>
									    <option value="" selected disabled>සේවය තෝරන්න</option>
										<option value="තොරතුරු තාක්ෂණ සේවය" <?php if( $row["service"]=="තොරතුරු තාක්ෂණ සේවය"){ echo "selected"; } ?> >තොරතුරු තාක්ෂණ සේවය</option>
										<option value="කළමනාකරණ සේවය" <?php if( $row["service"]=="කළමනාකරණ සේවය"){ echo "selected"; } ?> >කළමනාකරණ සේවය</option>
										<option value="සංවර්ධන සේවය" <?php if( $row["service"]=="සංවර්ධන සේවය"){ echo "selected"; } ?> >සංවර්ධන සේවය</option>
										<option value="ගණකාධීකරන සේවය" <?php if( $row["service"]=="ගණකාධීකරන සේවය"){ echo "selected"; } ?> >ගණකාධීකරන  සේවය</option>
										<option value="විද්‍යාත්මක සේවය" <?php if( $row["service"]=="විද්‍යාත්මක සේවය"){ echo "selected"; } ?> >විද්‍යාත්මක  සේවය</option>
										<option value="සැලසුම් සේවය" <?php if( $row["service"]=="සැලසුම් සේවය"){ echo "selected"; } ?> >සැලසුම්  සේවය</option>
										<option value=" තාක්ෂණ සේවය" <?php if( $row["service"]=="තාක්ෂණ සේවය"){ echo "selected"; } ?> > තාක්ෂණ සේවය</option>
										<option value="පරිවර්තන සේවය" <?php if( $row["service"]=="පරිවර්තන සේවය"){ echo "selected"; } ?> >පරිවර්තන සේවය</option>
										<option value="පුස්තකාල සේවය" <?php if( $row["service"]=="පුස්තකාල සේවය"){ echo "selected"; } ?> >පුස්තකාල  සේවය</option>
										<option value="කාර්යාල සේවක සේවය" <?php if( $row["service"]=="කාර්යාල සේවක සේවය"){ echo "selected"; } ?> >කාර්යාල සේවක සේවය</option>
										<option value="රියදුරු සේවය" <?php if( $row["service"]=="රියදුරු සේවය"){ echo "selected"; } ?> >රියදුරු   සේවය</option>
						</select></br>
						
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
								//$conn=mysqli_connect('localhost','root','','mydb');
								//$conn->set_charset("utf8");
							?>

								<?php
										$sql_accna="SELECT * FROM courses order by course_code";
										$accna_info=$conn->query($sql_accna)or die(mysqli_error($conn));
										$numrows_accna=mysqli_num_rows($accna_info);
								?>
								
										<select name="course1" disabled   class="form-control" required>
										
										<option value="" selected disabled>පාඨමාලාව තෝරන්න</option>
								<?php 
									if($numrows_accna > 0)
									{
										while($row_accna=$accna_info->fetch_assoc()){
											if( $row["course_code1"]==$row_accna['course_code']){
												?>

											<option value="<?php echo $row_accna['course_code'];?>"  selected ><?php echo $row_accna['course_name'];?></option>

												<?php
											}
											else{

											?>

									<option value="<?php echo $row_accna['course_code'];?>"><?php echo $row_accna['course_name'];?></option>
									
									<?php }}}?>
							</select></br>
							
								<?php
										$sql_accna="SELECT * FROM courses order by course_code";
										$accna_info=$conn->query($sql_accna)or die(mysqli_error($conn));
										$numrows_accna=mysqli_num_rows($accna_info);
								?>
								
										<select name="course2" disabled  class="form-control" required >
										
										<option value="" selected disabled>පාඨමාලාව තෝරන්න</option>
								<?php 
									if($numrows_accna > 0)
									{
										while($row_accna=$accna_info->fetch_assoc()){
											if( $row["course_code2"]==$row_accna['course_code']){
											?>

										<option value="<?php echo $row_accna['course_code'];?>"  selected ><?php echo $row_accna['course_name'];?></option>

											<?php
										}
										else{

										?>

								<option value="<?php echo $row_accna['course_code'];?>"><?php echo $row_accna['course_name'];?></option>
								
								<?php }}}?>
							</select></br>
							
							<?php
								//$conn=mysqli_connect('localhost','root','','mydb');
								//$conn->set_charset("utf8");
							?>

								<?php
										$sql_accna="SELECT * FROM courses order by course_code";
										$accna_info=$conn->query($sql_accna)or die(mysqli_error($conn));
										$numrows_accna=mysqli_num_rows($accna_info);
								?>
								
										<select name="course3" disabled  class="form-control" required >
										
										<option value="" selected disabled>පාඨමාලාව තෝරන්න</option>
								<?php 
									if($numrows_accna > 0)
									{
										while($row_accna=$accna_info->fetch_assoc()){
											if( $row["course_code3"]==$row_accna['course_code']){
												?>

											<option value="<?php echo $row_accna['course_code'];?>"  selected ><?php echo $row_accna['course_name'];?></option>

												<?php
											}
											else{

											?>

									<option value="<?php echo $row_accna['course_code'];?>"><?php echo $row_accna['course_name'];?></option>
									
									<?php }}}?>
							</select></br>
												<!----------------end request courses table--------------->			 				
			

			
<!-----------------------------------------------------------------completed courses table---------------------------------------------------------------------------------->

		<label for="staticEmail" class="col-sm-10 col-form-label" style="text-align:left;"><b>04.එම වැඩසටහන් සඳහා පසුගිය වසර දෙක තුළ සහභාගී වූයේ නම් ඒ පිළිබඳ විස්තර.</b></label></br>
		<div class="input_fields_wrap">
				<div class="row">
					<div class="col-md-4 mb-3">
						<label for="staticEmail"  style="text-align:left;">පාඨමාලාවේ නම </label>
							<?php
								//$conn=mysqli_connect('localhost','root','','mydb');
								//$conn->set_charset("utf8");
							?>

							<?php
								$sql_accna="SELECT * FROM courses order by course_code";
								$accna_info=$conn->query($sql_accna)or die(mysqli_error($conn));
								$numrows_accna=mysqli_num_rows($accna_info);

								
							?>
							
							<select name="comcourse[]" disabled   class="form-control" required>
								
								<option  value="" selected disabled>පාඨමාලාව තෝරන්න</option>
							<?php 
							if($numrows_accna > 0)
							{
								while($row_accna=$accna_info->fetch_assoc()){?>
							
							<option  value="<?php echo $row_accna['course_code'];?>" <?php if( $row["course_code"]==$row_accna['course_code']){ echo " selected"; }  ?> ><?php echo $row_accna['course_name'];?></option>
							
							<?php }}?>
							</select>
					</div>
					
						<div class="col-md-4 mb-3">
						<label for="staticEmail"  style="text-align:left;">වර්ෂය </label>
								<select name="comyear[]" disabled  class="form-control"  required>
										<option value="" selected disabled>වර්ෂය</option>
										<option value="2000" <?php if( $row["completed_year"]=="2000"){ echo "selected"; } ?> >2000</option>
										<option value="2001" <?php if( $row["completed_year"]=="2001"){ echo "selected"; } ?> >2001</option>
										<option value="2002" <?php if( $row["completed_year"]=="2002"){ echo "selected"; } ?> >2002</option>
										<option value="2003" <?php if( $row["completed_year"]=="2003"){ echo "selected"; } ?> >2003</option>
										<option value="2004" <?php if( $row["completed_year"]=="2004"){ echo "selected"; } ?> >2004</option>
										<option value="2005" <?php if( $row["completed_year"]=="2005"){ echo "selected"; } ?> >2005</option>
										<option value="2006" <?php if( $row["completed_year"]=="2006"){ echo "selected"; } ?> >2006</option>
										<option value="2007" <?php if( $row["completed_year"]=="2007"){ echo "selected"; } ?> >2007</option>
										<option value="2008" <?php if( $row["completed_year"]=="2008"){ echo "selected"; } ?> >2008</option>
										<option value="2009" <?php if( $row["completed_year"]=="2009"){ echo "selected"; } ?> >2009</option>
										<option value="2010" <?php if( $row["completed_year"]=="2010"){ echo "selected"; } ?> >2010</option>
										<option value="2011" <?php if( $row["completed_year"]=="2011"){ echo "selected"; } ?> >2011</option>
										<option value="2012" <?php if( $row["completed_year"]=="2012"){ echo "selected"; } ?> >2012</option>
										<option value="2013" <?php if( $row["completed_year"]=="2013"){ echo "selected"; } ?> >2013</option>
										<option value="2014" <?php if( $row["completed_year"]=="2014"){ echo "selected"; } ?> >2014</option>
										<option value="2015" <?php if( $row["completed_year"]=="2015"){ echo "selected"; } ?> >2015</option>
										<option value="2016" <?php if( $row["completed_year"]=="2016"){ echo "selected"; } ?> >2016</option>
										<option value="2017" <?php if( $row["completed_year"]=="2017"){ echo "selected"; } ?> >2017</option>
										<option value="2018" <?php if( $row["completed_year"]=="2018"){ echo "selected"; } ?> >2018</option>
										<option value="2019" <?php if( $row["completed_year"]=="2019"){ echo "selected"; } ?> >2019</option>
										<option value="2020" <?php if( $row["completed_year"]=="2020"){ echo "selected"; } ?> >2020</option>
								</select>
						</div>
					
							<div class="col-md-4 mb-3">
								<label for="staticEmail"  style="text-align:left;">පැවැත්වූ දිනය</label> 
								<input disabled type="date" name="comdate[]" class="form-control"  required value=<?php echo "'" . $row["completed_date"] . "'" ?> >    
							</div>
							
					<div class="col-md-4 mb-3">
						 <label type="hidden" for="staticEmail"  style="text-align:left;"><button class="button" style="border:none; background-color:#64bdfc; height:25px;"></button></label> 
						<button disabled class="add_field_button">+</button>
					</div>

					<!-- List start -->

					<?php 
						$A++;
						if($A>1){
							while($row2=mysqli_fetch_assoc($result)){
							
								?>
<div id="row'+ x +'">
	<div class="row">
		<div class="col-md-4 mb-3">
			<b>
				<?php 
				//$conn=mysqli_connect('localhost','root','','mydb');
				$conn->set_charset("utf8"); $sql_accna="SELECT * FROM courses order by course_code";
				$accna_info=$conn->query($sql_accna)or die(mysqli_error($conn)); $numrows_accna=mysqli_num_rows($accna_info);
				?> 
				පාඨමාලාවේ නම
			</b>
			<select class="form-control" disabled  name="comcourse[]">
				<option value="" selected disabled>පාඨමාලාව තෝරන්න</option>
				"
				<?php 
				if($numrows_accna > 0){
					while($row_accna=$accna_info->fetch_assoc()){
						?>
						"
						<option  value="<?php echo $row_accna['course_code']; ?>" <?php if( $row2["course_code"]==$row_accna['course_code']){ echo " selected"; }  ?> ><?php echo $row_accna['course_name'];?></option>
						
						<?php 
						}}
						?>
						"
					</option>
				</select>
			</div> 
			<div class="col-md-4 mb-3">
				<b>වර්ෂය</b>
				<select name="comyear[]" disabled  class="form-control"  required>
										<option value="" selected disabled>වර්ෂය</option>
										<option value="2000" <?php if( $row2["completed_year"]=="2000"){ echo "selected"; } ?> >2000</option>
										<option value="2001" <?php if( $row2["completed_year"]=="2001"){ echo "selected"; } ?> >2001</option>
										<option value="2002" <?php if( $row2["completed_year"]=="2002"){ echo "selected"; } ?> >2002</option>
										<option value="2003" <?php if( $row2["completed_year"]=="2003"){ echo "selected"; } ?> >2003</option>
										<option value="2004" <?php if( $row2["completed_year"]=="2004"){ echo "selected"; } ?> >2004</option>
										<option value="2005" <?php if( $row2["completed_year"]=="2005"){ echo "selected"; } ?> >2005</option>
										<option value="2006" <?php if( $row2["completed_year"]=="2006"){ echo "selected"; } ?> >2006</option>
										<option value="2007" <?php if( $row2["completed_year"]=="2007"){ echo "selected"; } ?> >2007</option>
										<option value="2008" <?php if( $row2["completed_year"]=="2008"){ echo "selected"; } ?> >2008</option>
										<option value="2009" <?php if( $row2["completed_year"]=="2009"){ echo "selected"; } ?> >2009</option>
										<option value="2010" <?php if( $row2["completed_year"]=="2010"){ echo "selected"; } ?> >2010</option>
										<option value="2011" <?php if( $row2["completed_year"]=="2011"){ echo "selected"; } ?> >2011</option>
										<option value="2012" <?php if( $row2["completed_year"]=="2012"){ echo "selected"; } ?> >2012</option>
										<option value="2013" <?php if( $row2["completed_year"]=="2013"){ echo "selected"; } ?> >2013</option>
										<option value="2014" <?php if( $row2["completed_year"]=="2014"){ echo "selected"; } ?> >2014</option>
										<option value="2015" <?php if( $row2["completed_year"]=="2015"){ echo "selected"; } ?> >2015</option>
										<option value="2016" <?php if( $row2["completed_year"]=="2016"){ echo "selected"; } ?> >2016</option>
										<option value="2017" <?php if( $row2["completed_year"]=="2017"){ echo "selected"; } ?> >2017</option>
										<option value="2018" <?php if( $row2["completed_year"]=="2018"){ echo "selected"; } ?> >2018</option>
										<option value="2019" <?php if( $row2["completed_year"]=="2019"){ echo "selected"; } ?> >2019</option>
										<option value="2020" <?php if( $row2["completed_year"]=="2020"){ echo "selected"; } ?> >2020</option>
								</select>
				</div>
				<div class="col-md-4 mb-3">
					<b>පැවැත්වූ දිනය</b>
					<input type="date" disabled  placeholder="පැවැත්වූ දිනය" class="form-control" name="comdate[]" value=<?php echo "'" . $row2["completed_date"] . "'" ?> >
				</div> 
				<div class="col-md-4 mb-3">
					<label type="hidden" for="staticEmail" class="col-sm-5 col-form-label" style="text-align:left;">
					<button class="button"  disabled style="border:none; background-color:#64bdfc; height:25px;">
					<label>

					</button>
					<button class="remove_field" disabled onclick="removeElement(&apos;row'+x+'&apos;);" >-</button></div></div></div>'
								
								<?php
							}
						}
					?>

					<!-- List Close -->
					
				</div>
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