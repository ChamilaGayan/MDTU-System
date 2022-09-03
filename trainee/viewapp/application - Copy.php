 <?php
session_start();
if(isset($_SESSION["username"]))
{
?>
<?php include("dbconnection.php")?>
 
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
                    $(wrapper).append('<div id="row'+ x +'"><div class="row"><div class="col-md-4 mb-3"><b><?php /*$conn=mysqli_connect('localhost','root','','mydb');*/ $conn->set_charset("utf8"); $sql_accna="SELECT * FROM courses order by course_code"; $accna_info=$conn->query($sql_accna)or die(mysqli_error($conn)); $numrows_accna=mysqli_num_rows($accna_info);?> පාඨමාලාවේ නම</b><select class="form-control" name="comcourse[]"><option value="" selected disabled>පාඨමාලාව තෝරන්න</option>"<?php if($numrows_accna > 0){while($row_accna=$accna_info->fetch_assoc()){?>"<option  value="<?php echo $row_accna['course_code'];?>"><?php echo $row_accna['course_code'];?> . <?php echo $row_accna['course_name'];?></option><?php }}?>"</option></select></div> <div class="col-md-4 mb-3"> <b>වර්ෂය</b> <select name="comyear[]" class="form-control"><option value="" selected disabled>වර්ෂය</option>  <option value="2000">2000</option><option value="2001" >2001</option><option value="2002" >2002</option><option value="2003" >2003</option> <option value="2004">2004</option><option value="2005" >2005</option><option value="2006" >2006</option> <option value="2007" >2007</option><option value="2008" >2008</option><option value="2009" >2009</option<option value="2010" ></option>2010<option value="2011" >2011</option><option value="2012" />2012</option><option value="2013" >2013</option><option value="2014" >2014</option><option value="2015" >2015</option><option value="2016" >2016</option> <option value="2017" >2017</option><option value="2018" >2018</option><option value="2019" >2019</option><option value="2020" >2020</option><option value="නැත" >නැත</option></select></div><div class="col-md-4 mb-3"> <b>පැවැත්වූ දිනය</b> <input type="date" placeholder="පැවැත්වූ දිනය" class="form-control" name="comdate[]"></div> <div class="col-md-4 mb-3"><button class="remove_field" onclick="removeElement(&apos;row'+x+'&apos;);" >-</button></div></div></div>'); //add input box

                }
            });

        });
		function removeElement(elementId) {
			// Removes an element from the document
			var element = document.getElementById(elementId);
			element.parentNode.removeChild(element);
			}
    </script>
	

	
<!--end js-->

</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top header-inner-pages">
    <div class="container d-flex align-items-center">
      <h1 class="logo mr-auto"><a href="index.php">MDTU</a></h1>
     

<!-- nav-menu -->
      <nav class="nav-menu d-none d-lg-block">
        <ul>
          <li><a href="index.php">Home</a></li>
          <li><a href="about.php">About</a></li>
          <li><a href="contact.php">Contact</a></li>

        </ul>
      </nav>
<!-- end nav-menu -->

       <a href="./logout.php" class="get-started-btn scrollto">Logout</a>


    </div>
  </header>
<!-- End Header -->

  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
      <div class="container">

	
<form action="catch1.php" method="POST" autocomplete="off">
</br></br>
		<div class="row" style="background-color:white;">
			<center><img src="assets/img/sllogo.png" width="100px" height="auto"></center>
			<center><label for="staticEmail" class="col-sm-5 col-form-label" style="font-size:20px;"><b>මාතලේ දිස්ත්‍රික් ලේකම් කාර්යාලය </br> කළමනාකරණ සංවර්ධන හා පුහුණු  අංශය (MDTU)</br> පුහුණුවීම් සඳහා අයදුම් පත්‍රය - 2020/2021</b></label></br></center>
				<div class="col-2" ></div>
					<div class="col-8" style="background-color:#64bdfc;">
						<label for="staticEmail" class="col-sm-5 col-form-label" ><b>01.රාජකාරී තොරතුරු</b></label></br>
						<label for="staticEmail" class="col-sm-5 col-form-label" >1.1 නම(මුලකුරු සමඟ නම) :- </label>
						<input type="text" class="form-control" placeholder="මුලකුරු සමඟ නම" name="name" required>
						  
						<label for="staticEmail" class="col-sm-5 col-form-label">1.2 තනතුර :-</label>
						<input type="text" class="form-control" placeholder="තනතුර" name="position" required>
			 
						<label for="staticEmail" class="col-sm-5 col-form-label">1.3 සේවා ස්ථානය :- </label>
							<select class="form-control" placeholder="සේවා ස්ථානය" name="oaddress" required>
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
							</select>
						
						
						<!-- <input type="text" class="form-control" placeholder="සේවා ස්ථානය" name="oaddress" required> -->
						
						<label for="staticEmail" class="col-sm-5 col-form-label" style="text-align:left;">1.4 දුරකථන අංකය :-  </label>
						<input type="text" class="form-control" placeholder="දුරකථන අංකය" name="otpno" style="width:130px;" required>
			  
						<label for="staticEmail" class="col-sm-5 col-form-label">1.5 සේවය/පන්තිය/ශ්‍රේණිය :</label></br>
						
						<label for="staticEmail" class="col-sm-5 col-form-label">සේවය</label>
						<select name="service"  class="form-control" name="service" required>
									    <option value="" selected disabled>සේවය තෝරන්න</option>
										<option value="තොරතුරු තාක්ෂණ සේවය">තොරතුරු හා සංනිවේදන තාක්ෂණ සේවය</option>
										<option value="කළමනාකරණ සේවය">කළමනාකරණ සේවය</option>
										<option value="සංවර්ධන සේවය">සංවර්ධන නිලධාරී සේවය</option>
										<option value=" තාක්ෂණ සේවය"> තාක්ෂණ සේවය</option>
										<option value="පරිවර්තන සේවය">භාෂා පරිවර්තන සේවය</option>
										<option value="පුස්තකාල සේවය">පුස්තකාල  සේවය</option>
										<option value="රියදුරු සේවය">උපාධිධාරී අභ්‍යාසලාභී</option>
										<option value="කාර්යාල සේවක සේවය"/>කාර්යාල සේවක සේවය</option>
										<option value="රියදුරු සේවය">රියදුරු   සේවය</option>
										
						</select></br>
						
						<label for="staticEmail" class="col-sm-5 col-form-label">පන්තිය</label>
						
						<select  class="form-control" name="class" required> 
										<option value="" selected disabled>පන්තිය තෝරන්න</option>
										<option value="පළමු  පන්තිය">i පන්තිය</option>
										<option value="දෙවන පන්තිය">ii පන්තිය</option>
										<option value="තෙවන පන්තිය" >iii පන්තිය</option>
										<option value="හතරවන පන්තිය">නොමැත</option>
						</select></br>
									
						<label for="staticEmail" class="col-sm-5 col-form-label">ශ්‍රේණිය </label>
						
						<select  class="form-control" name="grade" required>
										<option value="" selected disabled>ශ්‍රේණිය තෝරන්න</option>
										<option value="පළමු ශ්‍රේණිය"/>i ශ්‍රේණිය</option>
										<option value="දෙවන ශ්‍රේණිය"/>ii ශ්‍රේණිය</option>
										<option value="තෙවන ශ්‍රේණිය"/>iii ශ්‍රේණිය</option>
										<option value="හතරවන ශ්‍රේණිය">නොමැත</option>
						</select></br>
			
						<label for="staticEmail" class="col-sm-5 col-form-label">1.6 රාජ්‍ය සේවයට බැඳුනු දිනය :- </label>
						<input type="date" class="form-control" name="jdate" style="width:200px" required>
			  
						 
						<label for="staticEmail" class="col-sm-5 col-form-label" >1.7සේවා කාලය (වසර):-  </label>
						<input type="text" class="form-control" placeholder="සේවා කාලය " name="year" style="width:130px;text-align:left;" required>
						

						<label for="staticEmail" class="col-sm-10 col-form-label" style="text-align:left;">1.8 ඔබට පැවරී ඇති විෂය පථයට අඳාළ රාජකාරී කෙටියෙන් විස්තර කරන්න.(ඉතා වැදගත්) :-</label>
						<textarea style=" height:100px;" class="form-control" placeholder="විෂය පථයට අඳාළ රාජකාරී  " name="discrip" required></textarea>
						
<!-----------------------------------------------------------------------persional Details table-------------------------------------------------------------------------->	
		
						<label for="staticEmail" class="col-sm-5 col-form-label"><b>02.පුද්ගලික තොරතුරු</b></label></br>
						
						<label for="staticEmail" class="col-sm-5 col-form-label"  style="text-align:left;"><b>ස්ත්‍රී / පුරුෂ භාවය :-</b> </label></br>
						
						  <div class="form-check form-check-inline">
							  <input class="form-check-input" type="radio" id="inlineCheckbox1" value="female" name="gender" required>
							  <label class="form-check-label" for="inlineCheckbox1" >ස්ත්‍රී </label>
						</div>
						
						<div class="form-check form-check-inline">
							  <input class="form-check-input" type="radio" id="inlineCheckbox2" value="male" name="gender" required>
							  <label class="form-check-label" for="inlineCheckbox2">පුරුෂ </label>
						</div></br>
			 
			 
						<label for="staticEmail" class="col-sm-5 col-form-label" style="text-align:left;"><b>ලිපිනය :-</b> </label>
						<input type="text" class="form-control" placeholder="ලිපිනය" name="paddress" required >
						  
						  
						<!--<label for="staticEmail" class="col-sm-5 col-form-label" style="text-align:left;"><b> ජංගම/නිවස  :- </b> </label>
						<input type="text" class="form-control" placeholder="ජංගම/නිවස " name="ptpno" style="width:130px;" required>-->
						
						
						<label for="staticEmail" class="col-sm-5 col-form-label" style="text-align:left;"><b> E - තැපැල්  ලිපිනය :- </b> </label>
						<input type="text" class="form-control" placeholder="E - තැපැල්  ලිපිනය" name="email" style="width:250px;"> 
			 
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
								
										<select name="course1"  class="form-control" required>
										
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
								
										<select name="course2"  class="form-control" required >
										
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
								
										<select name="course3"  class="form-control" required >
										
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
							
							<select name="comcourse[]"  class="form-control" required>
								
								<option  value="" selected disabled>පාඨමාලාව තෝරන්න</option>
							<?php 
							if($numrows_accna > 0)
							{
								while($row_accna=$accna_info->fetch_assoc()){?>
							
							<option  value="<?php echo $row_accna['course_code'];?>"><?php echo $row_accna['course_code'];?> . <?php echo $row_accna['course_name'];?></option>
							
							<?php }}?>
							</select>
					</div>
				
					
						<div class="col-md-4 mb-3">
						<label for="staticEmail"  style="text-align:left;">වර්ෂය </label>
								<select name="comyear[]" class="form-control"  required>
										<option value="" selected disabled>වර්ෂය</option>
										<option value="2000" >2000</option>
										<option value="2001" >2001</option>
										<option value="2002" >2002</option>
										<option value="2003" >2003</option>
										<option value="2004" >2004</option>
										<option value="2005" >2005</option>
										<option value="2006" >2006</option>
										<option value="2007" >2007</option>
										<option value="2008" >2008</option>
										<option value="2009" >2009</option>
										<option value="2010" >2010</option>
										<option value="2011" >2011</option>
										<option value="2012" >2012</option>
										<option value="2013" >2013</option>
										<option value="2014" >2014</option>
										<option value="2015" >2015</option>
										<option value="2016" >2016</option>
										<option value="2017" >2017</option>
										<option value="2018" >2018</option>
										<option value="2019" >2019</option>
										<option value="2020" >2020</option>
										<option value="නැත" >නැත</option>
										
								</select>
						</div>
					
							<div class="col-md-4 mb-3">
								<label for="staticEmail"  style="text-align:left;">පැවැත්වූ දිනය</label> <input type="date" name="comdate[]" class="form-control" >    
							</div>
							
					<div class="col-md-4 mb-3">
						 <!--<label type="hidden" for="staticEmail"  style="text-align:left;"><button class="button" style="border:none; background-color:#64bdfc; height:25px;"></button></label> -->
						<label for="staticEmail"  style="text-align:left;"></label><button class="add_field_button">+</button>
					</div>
					
				</div>
		</div>
											<!---------------end completed courses table--------------->
										

						<label for="staticEmail" class="col-sm-5 col-form-label" style="text-align:left;"> දිනය :- </label>
						</br><input type="date" class="form-control" name="applydate" style="width:200px;" required>

						</br><button type="submit" class="btn btn-outline-secondary" name="submit" onclick="myFunction()" style="width:100px;">Apply</button> 
			
				
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
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Our Social Networks</h4>
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
       MDTU
      </div>
    </div>
  </footer>
<!-- End Footer -->

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

	header("location:mdtu/index.php");

}
?>