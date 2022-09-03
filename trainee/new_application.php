<?php
error_reporting(0);
session_start();

$ssid=$_SESSION["username"];
$uname=$_SESSION["username"];
if(isset($_SESSION["username"]))
{
	include("dbconnection.php");
	
	$sql_getData = "SELECT * from user,trainee,request_courses,completed_course,institute WHERE user.user_name=trainee.t_id AND user.user_name=request_courses.t_id AND user.user_name=institute.t_id AND user.user_name=completed_course.t_id AND user.user_name='$ssid'";
	// echo $sql_getData; 

	$result=mysqli_query($conn,$sql_getData);

	$A=1;
	$row=mysqli_fetch_assoc($result);

    $nic=$row["t_id"];
    $tpno=$row["tp_no"];
    $position=$row["position"];
    $name=$row["name"];

$location=$row['location'];

    // $q2 = $conn->query("SELECT * FROM office WHERE office_no='$location'");
    // if($q2->num_rows>0)
    // {
    //   while($row=$q2->fetch_assoc()){

    //    $office_name = $row["office_name"];

    // // $office_name = $location;
    // }
    // }


    if(isset($_POST['submit'])) 
{
    $request=$_POST["request"];
    $wp=$_POST['wp'];
    
    $sql1 = "update trainee set service='$wp' WHERE t_id='$ssid'";

    $insert = $conn->query($sql1);

    if($insert==1)
					{
						
						$course_length=count($request);
							for($a=0;$a<=$course_length-1;$a++)
							{
							
							$name=$request[$a];
						
						$sql2="REPLACE INTO request_courses(t_id,course_code1) 
						VALUES('$uname','$name');";
						
						$insert=mysqli_query($conn,$sql2) or die(mysqli_error($conn));
							}

              echo "<script>alert('විස්තර ඇතුලත් කිරීම සම්පූර්ණයි!');</script>";
              echo '<script type="text/javascript">location.href = "viewapp.php";</script>';
                        }
       
}

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
   <!-- <script src="jquery/jquery.min.js"></script>
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
    </script> -->

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
	
    <form action="" name="exappr" method="post" class="signin-form" enctype="multipart/form-data"> 
</br></br>
		<!--<div class="row" style="background-color:white1;"---->
		<div class="row" >
			<center><img src="assets/img/sllogo.png" width="100px" height="auto"></center>
			<center><label for="staticEmail" class="col-sm-5 col-form-label" style="font-size:20px;"><b>මාතලේ දිස්ත්‍රික් ලේකම් කාර්යාලය  </br>කළමනාකරන සංවර්ධන හා පුහුණු අංශය (MDTU) </br>පුහුණුවීම් සඳහා අයදුම් පත්‍රය - 2021/2022</b></label></br></center>
				<div class="col-2" ></div>
					<div class="col-8" style="background-color:#64bdfc;">
						<label for="staticEmail" class="col-sm-5 col-form-label" ><b>01.රාජකාරී තොරතුරු</b></label></br>
						<label for="staticEmail" class="col-sm-5 col-form-label" >1.1 නම(මුලකුරු සමඟ නම) :- </label>
                        <label for="staticEmail" class="form-control" ><?php echo $name; ?></label>
						  
						<label for="staticEmail" class="col-sm-5 col-form-label">1.2 තනතුර :-</label>
                        <label for="staticEmail" class="form-control"><?php echo $position; ?></label>
			 
						<label for="staticEmail" class="col-sm-5 col-form-label">1.3 සේවා ස්ථානය :- </label>
                        <label for="staticEmail" class="form-control"><?php echo $location; ?></label>












                      


















                        <label for="staticEmail" class="col-sm-5 col-form-label">සේවා ස්ථානය වෙනස් වී ඇත්නම් :- </label>

                        <?php
                        $sqlof="SELECT * FROM office order by office_no";
                        $accna_in=$conn->query($sqlof)or die(mysqli_error($conn));
                        $numrows_accna=mysqli_num_rows($accna_in);
                ?>
                
                        <select name="wp"  class="form-control">
                        
                        <option value="" selected disabled>සේවා ස්ථානය තෝරන්න</option>
                <?php 
                    if($numrows_accna > 0)
                    {
                        while($row_accna=$accna_in->fetch_assoc()){?>
                    
                    <option value="<?php echo $row_accna['office_name'];?>"><?php echo $row_accna['office_name'];?>.</option>
                    
                    <?php }}?>
            </select></br>








							<!-- <select class="form-control" placeholder="සේවා ස්ථානය" name="wp">
									    <option value="" selected disabled>සේවා ස්ථානය තෝරන්න</option>
										<option value="දිස්ත්‍රික් ලේකම් කාර්යාලය - මාතලේ">දිස්ත්‍රික් ලේකම් කාර්යාලය - මාතලේ</option>
										<option value="ප්‍රාදේශීය ලේකම් කාර්යාලය - මාතලේ ">ප්‍රාදේශීය ලේකම් කාර්යාලය - මාතලේ</option>
										<option value="ප්‍රාදේශීය ලේකම් කාර්යාලය - උකුවෙල ">ප්‍රාදේශීය ලේකම් කාර්යාලය - උකුවෙල</option>
										<option value="ප්‍රාදේශීය ලේකම් කාර්යාලය - රත්තොට">ප්‍රාදේශීය ලේකම් කාර්යාලය - රත්තොට</option>
										<option value="ප්‍රාදේශීය ලේකම් කාර්යාලය - අඔන්ගඟකෝරලේ">ප්‍රාදේශීය ලේකම් කාර්යාලය - අඔන්ගඟකෝරලේ</option>
										<option value="ප්‍රාදේශීය ලේකම් කාර්යාලය - යටවත්ත ">ප්‍රාදේශීය ලේකම් කාර්යාලය - යටවත්ත</option>
										<option value="ප්‍රාදේශීය ලේකම් කාර්යාලය - පල්ලේපොල ">ප්‍රාදේශීය ලේකම් කාර්යාලය - පල්ලේපොල</option>
										<option value="ප්‍රාදේශීය ලේකම් කාර්යාලය - ගලේවෙල ">ප්‍රාදේශීය ලේකම් කාර්යාලය -  ගලේවෙල</option>
										<option value="ප්‍රාදේශීය ලේකම් කාර්යාලය - දඹුල්ල ">ප්‍රාදේශීය ලේකම් කාර්යාලය - දඹුල්ල </option>
										<option value="ප්‍රාදේශීය ලේකම් කාර්යාලය - නාඋල ">ප්‍රාදේශීය ලේකම් කාර්යාලය -නාඋල</option>
										<option value="ප්‍රාදේශීය ලේකම් කාර්යාලය - විල්ගමුව ">ප්‍රාදේශීය ලේකම් කාර්යාලය -  විල්ගමුව</option>
										<option value="ප්‍රාදේශීය ලේකම් කාර්යාලය - ලග්ගල  පල්ලේගම ">ප්‍රාදේශීය ලේකම් කාර්යාලය - ලග්ගල පල්ලේගම</option>
										<option value="නඟර සභාව - මාතලේ ">නඟර සභාව - මාතලේ</option>
										<option value="නඟර සභාව - දඹුල්ල">නඟර සභාව - දඹුල්ල </option>
										<option value="ප්‍රාදේශීය සභාව - මාතලේ ">ප්‍රාදේශීය සභාව - මාතලේ</option>
										<option value="ප්‍රාදේශීය සභාව  - උකුවෙල">ප්‍රාදේශීය සභාව - උකුවෙල</option>
										<option value="ප්‍රාදේශීය සභාව  - රත්තොට">ප්‍රාදේශීය සභාව - රත්තොට</option>
										<option value="ප්‍රාදේශීය සභාව  - අඔන්ගඟකෝරලේ">ප්‍රාදේශීය සභාව - අඔන්ගඟකෝරලේ</option>
										<option value="ප්‍රාදේශීය සභාව  - යටවත්ත">ප්‍රාදේශීය සභාව - යටවත්ත</option>
										<option value="ප්‍රාදේශීය සභාව -  පල්ලේපොල">ප්‍රාදේශීය සභාව - පල්ලේපොල</option>
										<option value="ප්‍රාදේශීය සභාව -  ගලේවෙල">ප්‍රාදේශීය සභාව -  ගලේවෙල</option>
										<option value="ප්‍රාදේශීය සභාව  - දඹුල්ල">ප්‍රාදේශීය සභාව - දඹුල්ල</option>
										<option value="ප්‍රාදේශීය සභාව  - නාඋල ">ප්‍රාදේශීය සභාව - නාඋල</option>
										<option value="ප්‍රාදේශීය සභාව  - විල්ගමුව ">ප්‍රාදේශීය සභාව -  විල්ගමුව </option>
										<option value="ප්‍රාදේශීය සභාව  - ලග්ගල  පල්ලේගම">ප්‍රාදේශීය සභාව - ලග්ගල  පල්ලේගම</option>
										<option value="පළාත් පාලන සහකාර කොමසාරිස් කාර්යාලය - මාතලේ">පළාත් පාලන සහකාර කොමසාරිස් කාර්යාලය - මාතලේ</option>
										<option value="වාරිමාර්ග ඉංජිනේරු කාර්යාලය - මාතලේ ">වාරිමාර්ග ඉංජිනේරු කාර්යාලය- මාතලේ </option>
										<option value="වාරිමාර්ග ඉංජිනේරු කාර්යාලය - දඹුල්ල ">වාරිමාර්ග ඉංජිනේරු කාර්යාලය- දඹුල්ල </option>
										<option value="ගොවිජන සංවර්ධන සහකාර කොමසාරිස් කාර්යාලය- මාතලේ ">ගොවිජන සංවර්ධන සහකාර කොමසාරිස් කාර්යාලය- මාතලේ</option>
										<option value="අධ්‍යාපන කාර්යාලය - මාතලේ ">අධ්‍යාපන කාර්යාලය - මාතලේ  </option>
										<option value="අධ්‍යාපන කාර්යාලය - නාඋල">අධ්‍යාපන කාර්යාලය - නාඋල  </option>
										<option value="අධ්‍යාපන කාර්යාලය - ගලේවෙල ">අධ්‍යාපන කාර්යාලය - ගලේවෙල </option>
										<option value="අධ්‍යාපන කාර්යාලය - විල්ගමුව ">අධ්‍යාපන කාර්යාලය - විල්ගමුව  </option>
										<option value="පොලිස් අධිකාරී කාර්යාලය - මාතලේ ">ජේෂ්ඨ පොලිස් අධිකාරී කාර්යාලය - මාතලේ   </option>
										<option value="පොලිස් අධිකාරී කාර්යාලය - දඹුල්ල ">පොලිස් අධිකාරී කාර්යාලය - දඹුල්ල  </option>
										<option value="නියෝජ්‍ය සෞඛ්‍ය සේවා අධ්‍යක්ෂ කාර්යාලය - මාතලේ">නියෝජ්‍ය සෞඛ්‍ය සේවා අධ්‍යක්ෂ කාර්යාලය - මාතලේ  </option>
										<option value="දිස්ත්‍රික් මහ රෝහල- මාතලේ">දිස්ත්‍රික් මහ රෝහල- මාතලේ</option>
										<option value="අපනයන  කෘෂිකර්ම පර්යේෂණ  මධ්‍යස්ථානය - වාරියපොලවත්ත">අපනයන  කෘෂිකර්ම පර්යේෂණ  මධ්‍යස්ථානය - වාරියපොලවත්ත</option>
										<option value="සහකාර අධ්‍යක්ෂ අපනයන  කෘෂිකර්ම දෙපාර්තුමේන්තුව - ඇල්වල">අපනයන  කෘෂිකර්ම දිස්ත්‍රික් කාර්යාලය  - ඇල්වල</option>
										<option value="සහකාර අධ්‍යක්ෂ අපනයන  කෘෂිකර්ම පුහුණු මධ්‍යස්ථානය - ඇල්වල">අපනයන  කෘෂිකර්ම පුහුණු මධ්‍යස්ථානය  - ඇල්වල</option>
										<option value="නියෝජ්‍ය කෘෂිකර්ම අධ්‍යක්ෂ කාර්යාලය - මාතලේ">නියෝජ්‍ය කෘෂිකර්ම අධ්‍යක්ෂ කාර්යාලය - මාතලේ</option>
										<option value="ජේෂ්ඨ මිනින්දෝරු අධිකාරී කාර්යාලය- මාතලේ">ජේෂ්ඨ මිනින්දෝරු අධිකාරි කාර්යාලය - මාතලේ</option>
										<option value="දිස්ත්‍රික් අධිකාරි කාර්යාලය - මාතලේ">දිස්ත්‍රික් මිනින්දෝරු කාර්යාලය  - මාතලේ</option>
										<option value="ප්‍රාදේශීය මිනින්දෝරු කාර්යාලය - නාඋල">ප්‍රාදේශීය මිනින්දෝරු  කාර්යාලය  - නාඋල</option>
										<option value="ප්‍රාදේශීය මිනින්දෝරු කාර්යාලය - ලග්ගල">ප්‍රාදේශීය මිනින්දෝරු  කාර්යාලය  - ලග්ගල</option>
										<option value="කාර්මික විද්‍යාලය - මාතලේ">කාර්මික විද්‍යාලය  - මාතලේ</option>
										<option value="කාර්මික විද්‍යාලය - දඹුල්ල">කාර්මික විද්‍යාලය  - දඹුල්ල</option>
										<option value="තැපැල් අධිකාරි කාර්යාලය - මාතලේ">තැපැල් අධිකාරි කාර්යාලය - මාතලේ</option>
										<option value="ඉඩම් රෙජිස්ටාර් කාර්යාලය - මාතලේ">ඉඩම් රෙජිස්ටාර් කාර්යාලය - මාතලේ</option>
										<option value="සහකාර අධ්‍යක්ෂ ඉඩම් පරිහරණ හා සැලසුම් කාර්යාලය - මාතලේ">සහකාර අධ්‍යක්ෂ ඉඩම් පරිහරණ හා සැලසුම් කාර්යාලය - මාතලේ</option>
										<option value="සහකාර කම්කරු කොමසාරිස්  කාර්යාලය - මාතලේ">සහකාර කම්කරු කොමසාරිස්  කාර්යාලය - මාතලේ</option>
										<option value="සහකාර කම්කරු කොමසාරිස්  කාර්යාලය - නාඋල">සහකාර කම්කරු කොමසාරිස්  කාර්යාලය -නාඋල</option>
										<option value="දිසාවන කාර්යාලය - මාතලේ">දිසාවන කාර්යාලය - මාතලේ</option>
										<option value="මෝටර් රථ පරීක්ෂක කාර්යාලය - මාතලේ">මෝටර් රථ පරීක්ෂක කාර්යාලය - මාතලේ</option>
										<option value="දිස්ත්‍රික් උසාවිය - මාතලේ">දිස්ත්‍රික් උසාවිය - මාතලේ</option>
										<option value="කම්කරු උසාවිය - මාතලේ">කම්කරු උසාවිය - මාතලේ</option>
										<option value="සුරාබදු කාර්යාලය - මාතලේ">සුරාබදු කාර්යාලය - මාතලේ</option>
										<option value="දේශීය ආදායම් බදු කාර්යාලය- මාතලේ">දේශීය ආදායම් බදු කාර්යාලය - මාතලේ</option>
										<option value="ශ්‍රී සංඝමිත්තා බාලිකා ජාතික පාසල">ශ්‍රී සංඝමිත්තා බාලිකා ජාතික පාසල</option>
										<option value="මා/ ශාන්ත තෝමස් විද්‍යාලය">මා/ ශාන්ත තෝමස් විද්‍යාලය</option>
										<option value="ක්‍රිස්තුදේව ජාතික පාසල">ක්‍රිස්තුදේව ජාතික පාසල</option>
										<option value="රජයේ විද්‍යා විද්‍යාලය">රජයේ විද්‍යා විද්‍යාලය</option>
										<option value="විජය විද්‍යාලය">විජය විද්‍යාලය</option>
										<option value="මප/මා/රත්/ ඕවල විද්‍යාලය">මප/මා/රත්/ ඕවල විද්‍යාලය</option>
										<option value="අලුත්ගම ප්‍රාථමික විද්‍යාලය">අලුත්ගම ප්‍රාථමික විද්‍යාලය</option>
										<option value="ආමීනා බාලිකා විද්‍යාලය">ආමීනා බාලිකා විද්‍යාලය</option>
										<option value="පාක්ක්‍යම්  විද්‍යාලය">පාක්ක්‍යම්  විද්‍යාලය</option>
										<option value="හින්දු විද්‍යාලය">හින්දු විද්‍යාලය</option>
										<option value="විල්ගමුව  ප්‍රාථමික විද්‍යාලය">විල්ගමුව  ප්‍රාථමික විද්‍යාලය</option>
										<option value="අල් මිනා ප්‍රාථමික විද්‍යාලය">අල් මිනා ප්‍රාථමික විද්‍යාලය</option>
										<option value="අජ්මීර් ජාතික පාසල">අජ්මීර් ජාතික පාසල</option>
										<option value="ඉස්මලියා විද්‍යාලය">ඉස්මලියා විද්‍යාලය</option>
										<option value="ශ්‍රී නාග ජාතික පාසල">ශ්‍රී නාග ජාතික පාසල</option>
										<option value="සහිරා විද්‍යාලය">සහිරා විද්‍යාලය</option>
										<option value="සරත් ඒකනායක ආදර්ශ විද්‍යාලය">සරත් ඒකනායක ආදර්ශ විද්‍යාලය</option>
										<option value="වීර කැප්පැටිපොළ ජාතික පාසල">වීර කැප්පැටිපොළ ජාතික පාසල</option>
										<option value="මහාබෝධි ජාතික පාසල">මහාබෝධි ජාතික පාසල</option>
										<option value="මදීනා ජාතික පාසල">මදීනා ජාතික පාසල</option>
										<option value="දඹුල්ල මධ්‍ය මහ විද්‍යාලය">දඹුල්ල මධ්‍ය මහ විද්‍යාලය</option>
							</select> -->





















						
						<label for="staticEmail" class="col-sm-5 col-form-label" style="text-align:left;">1.4 දුරකථන අංකය :-  </label>
						<input type="text" disabled class="form-control" placeholder="දුරකථන අංකය" name="otpno" style="width:130px;" required value=<?php echo $tpno; ?> >
			  
						
					
<!-----------------------------------------------------------------------persional Details table-------------------------------------------------------------------------->	
		
						
			 
			 
					
						
						<label for="staticEmail" class="col-sm-5 col-form-label" style="text-align:left;"><b>ජාතික හැදුනුම්පත් අංකය :- </b> </label>
						<input type="text" class="form-control" placeholder="ජා:හැ අංකය" name="idno" style="width:130px;" required value=<?php echo $nic; ?> >
			 
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
                
                        <select name="request[]"  class="form-control" required>
                        
                        <option value="" selected disabled>පළමු පාඨමාලාව තෝරන්න</option>
                <?php 
                    if($numrows_accna > 0)
                    {
                        while($row_accna=$accna_info->fetch_assoc()){?>
                    
                    <option value="<?php echo $row_accna['course_code'];?>"><?php echo $row_accna['course_code'];?> . <?php echo $row_accna['course_name'];?></option>
                    
                    <?php }}?>
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
                
                        <select name="request[]"  class="form-control" required >
                        
                        <option value="" selected disabled>දෙවන පාඨමාලාව තෝරන්න</option>
                <?php 
                    if($numrows_accna > 0)
                    {
                        while($row_accna=$accna_info->fetch_assoc()){?>
                    
                    <option value="<?php echo $row_accna['course_code'];?>" ><?php echo $row_accna['course_code'];?> . <?php echo $row_accna['course_name'];?></option>
                    
                    <?php }}?>
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
                
                        <select name="request[]"  class="form-control" required >
                        
                        <option value="" selected disabled>තෙවන පාඨමාලාව තෝරන්න</option>
                <?php 
                    if($numrows_accna > 0)
                    {
                        while($row_accna=$accna_info->fetch_assoc()){?>
                    
                    <option value="<?php echo $row_accna['course_code'];?>"><?php echo $row_accna['course_code'];?> . <?php echo $row_accna['course_name'];?></option>
                    
                    <?php }}?>
            </select></br>
						
												<!----------------end request courses table--------------->			 				
			

			
<!-----------------------------------------------------------------completed courses table---------------------------------------------------------------------------------->


					
						
											<!---------------end completed courses table--------------->
										

					

					<center></br><button type="submit" class="btn btn-success" name="submit" onclick="myFunction()" style="width:100px;">Apply</button> </center>	<br>
			
				
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