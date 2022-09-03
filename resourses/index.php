 <?php
session_start();
include("../trainee/dbconnection.php");
if(isset($_SESSION["username"]))
{
	$ssid=$_SESSION["username"];
	$stype=$_SESSION["usertype"];
	
  //$sql123="SELECT t_id FROM request_courses,user WHERE request_courses.t_id = user.user_name and request_courses.t_id='$ssid'";
  //$result=mysqli_query($conn,$sql123);

//if(isset($_SESSION["usertype"]))
//{
//	$stype=$_SESSION["usertype"];
	
	
  //$sql1234="SELECT user_type FROM user WHERE user.user_type='$stype'";
 // $result1=mysqli_query($conn,$sql1234);

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>mdtu-traineer</title>
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
  <link href="assets/css/style.css" rel="stylesheet">
</head>

<body>

<?php include ("../trainee/indexheader.php") ?>

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center">

    <div class="container">
      <div class="row">
        <div class="col-lg-6 d-flex flex-column justify-content-center pt-4 pt-lg-0 order-2 order-lg-1" data-aos="fade-up" data-aos-delay="200">
          <h1>Management Development Training Unit </h1>
        </div>
        <div class="col-lg-6 order-1 order-lg-2 hero-img" data-aos="zoom-in" data-aos-delay="200">
          <img src="assets/img/hero-img.png" class="img-fluid animated" alt="">
        </div>
      </div>
    </div>

  </section><!-- End Hero -->

  <main id="main">

  
    <!-- ======= About Us Section ======= -->
    <section id="about" class="about">
      <div class="container" data-aos="fade-up">

      <div class="section-title">
          <h2>About Us</h2>
        </div>
 <?php echo $stype;?>
        <div class="row content">
          <div class="col-lg-6">
           <p style="font-size:16px;">
				මාතලේ  දිස්ත්‍රික් රාජ්‍ය සේවයේ මාණ්ඩලික නොවන ශ්‍රේණිවල නිලධාරීන්ගේ පුහුණු අවශ්‍යතා සම්පාදනය කිරීම පිණිස ස්ථාපිත කරන ලද 
				දිස්ත්‍රික් කළමනාකරණ සංවර්ධන හා පුහුණු ඒකකය (MDTU) මාතලේ  මහ දිසාපතිතුමාගේ උපදෙස් සහ මගපෙන්වීම් හා එතුමාගේ අධීක්ෂණය යටතේ  ක්‍රියාත්මක වේ. .
            </p>
            <ul>
			<p style="font-size:16px;"><u><b>ප්‍රධාන අරමුණ</u></b></p>
              <li><i class="ri-check-double-line"></i><p style="font-size:15px;">මාතලේ දිස්ත්‍රික්කයේ සියළුම රාජ්‍ය නිලධාරීන්ගේ (පළාත් සභා ඇතුළු)හැකියාවන්  වර්ධනය කිරීම තුළින් යහපත් මහජන සේවාවක් ස්ථාපිත කිරීම.</li></p></br>
			<p style="font-size:16px;"><u><b>සුවිශේෂ අරමුණු</u></b></p>
              <li><i class="ri-check-double-line" ></i><p style="font-size:15px;">දිස්ත්‍රික්කයේ සියළුම රාජ්‍ය නිලධාරීන්ගේ (මාණ්ඩලික නොවන) දැනුම , ආකල්ප , කුසලතා වර්ධනය කිරීම. </li></p>
			  <li><i class="ri-check-double-line"></i><p style="font-size:15px;">රාජකාරී හැකියාවන් වර්ධනය කිරීම තුළින් මහජනතාවට  කාර්යක්ෂම සේවාවක් සැපයීම. </li></p>
			  <li><i class="ri-check-double-line"></i><p style="font-size:15px;">දිස්ත්‍රික් රාජ්‍ය නිලධාරීන්ගේ පරිගණක දැනුම වැඩිදියුණු කිරීම. </li></p>
			  <li><i class="ri-check-double-line"></i><p style="font-size:15px;">කොළඹ වැනි දුර බැහැර ප්‍රදේශයන්ට පුහුණුව සඳහා යෑමේදී මුහුණපාන විවිධ ගැටලු අවම කිරීම. </li></p>
			  <li><i class="ri-check-double-line"></i><p style="font-size:15px;">දිස්ත්‍රික්කයේ සියළුම රාජ්‍ය නිලධාරීන්ට විධිමත් පුහුණුවක් ලබාදීම තුළින් ඔවුන්ගේ රාජකාරී කටයුතු පහසු කිරීම. </li></p>
			  <li><i class="ri-check-double-line"></i><p style="font-size:15px;">රාජ්‍ය නිලධාරීන් තුළින්ම පළපුරුදු සම්පත්දායකයින් පිරිසක් බිහිකිරීම. </li></p>
			  <li><i class="ri-check-double-line"></i><p style="font-size:15px;">දිස්ත්‍රික්කයේ සියළුම රාජ්‍ය ආයතන මගින් සැපයෙන සේවාවන් පිළිබඳ අභ්‍යන්තර  හා බාහිර පාරිභෝගිකයන්ගේ තෘප්තිය උපරිම වශයෙන් ලබා දෙමින් එම ආයතනවල පරිපාලන කටයුතු සහය වීම. </li></p>
              <li><i class="ri-check-double-line"></i><p style="font-size:15px;">දිස්ත්‍රික්කයේ පවත්නා සම්පත් හඳුනාගෙන ප්‍රදේශයට ආවේණික ව්‍යාපෘති හඳුනා ගනිමින් සංවර්ධන කටයුතු ක්‍රියාත්මක කිරීම තුළින් , මහජනයාගේ ආර්ථික , සමාජීය , සංස්කෘතික කටයුතු සංවර්ධනය කිරීමට අවශ්‍ය දැනුම , කුසලතාවයන් හා ආකල්ප ලබාදීම  . </li></p>
            </ul>
          </div>
          <!--<div class="col-lg-6 pt-4 pt-lg-0">
            <p>
            ව්‍යුහය හා කළමනාකරණය-->
            </p>
            <!--<a href="#" class="btn-learn-more">Learn More</a>
          </div>
        </div>

      </div>
    </section>
	 End About Us Section -->

  
    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Contact</h2>
          
        </div>

        <div class="row">

          <div class="col-lg-5 d-flex align-items-stretch">
            <div class="info">
              <div class="address">
                <i class="icofont-google-map"></i>
                <h4>Location:</h4>
                <p>Management Development Training Unit ,</br> District Secratiate Office </br> Matale</p>
              </div>

              <div class="email">
                <i class="icofont-envelope"></i>
                <h4>Email:</h4>
               <p>mdtu@matle.dist.gov.lk</p>
              </div>

              <div class="phone">
                <i class="icofont-phone"></i>
                <h4>Call:</h4>
				<p>066-2222235 | 071-3001096</p>
				
              </div>
            </div>

          </div>

          <div class="col-lg-7 mt-5 mt-lg-0 d-flex align-items-stretch">
            <form action="forms/contact.php" method="post" role="form" class="php-email-form">
              <div class="row">
                <div class="form-group col-md-6">
                  <label for="name">Your Name</label>
                  <input type="text" name="name" class="form-control" id="name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                  <div class="validate"></div>
                </div>
                <div class="form-group col-md-6">
                  <label for="name">Your Email</label>
                  <input type="email" class="form-control" name="email" id="email" data-rule="email" data-msg="Please enter a valid email" />
                  <div class="validate"></div>
                </div>
              </div>
              <div class="form-group">
                <label for="name">Subject</label>
                <input type="text" class="form-control" name="subject" id="subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
                <div class="validate"></div>
              </div>
              <div class="form-group">
                <label for="name">Message</label>
                <textarea class="form-control" name="message" rows="10" data-rule="required" data-msg="Please write something for us"></textarea>
                <div class="validate"></div>
              </div>
              <div class="mb-3">
                <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">Your message has been sent. Thank you!</div>
              </div>
              <div class="text-center"><button type="submit">Send Message</button></div>
            </form>
          </div>

        </div>

      </div>
    </section>
	<!-- End Contact Section -->
 
  </main>


<!-- ====== fotter section ====== -->
 <?php include ("fotter.php") ?>
<!-- end fotter-->
 
 
 
  <a href="#" class="back-to-top"><i class="ri-arrow-up-line"></i></a>
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
  
  <script src="assets/js/main.js"></script>

</body>

</html>
<?php 
}//}
else
{
header("location:../mdtu/index.php");
}
?>