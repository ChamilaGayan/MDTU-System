<?php
session_start();
include("dbconnection.php");
if(isset($_SESSION["username"]))
{
  header("index.php");
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>mdtu-index-page</title>
  <meta content="" namWe="descriptison">
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

</head>

<body>

<!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex align-items-center  header-transparent ">
    <div class="container d-flex align-items-center">

      <div class="logo mr-auto">
        <h1 class="text-light"><a href="index.php">MDTU</a></h1>
      </div>

      <nav class="nav-menu d-none d-lg-block">
        <ul>
          <li class="active"><a href="http://apps.matale.dist.gov.lk/">Home</a></li>
          <li><a href="#about">About</a></li>
          <li><a href="#contact">Contact</a></li>
		  <li><a href="login.php">Login</a></li>
		  <li><a href="help.pdf">Help</a></li>
		  <li><a href="hall.php">Programme Reservation </a></li>
		  
        </ul>
      </nav>
    </div>
  </header>
<!-- End Header -->

  <!-- ======= Hero Section ======= -->
  	
  <section id="hero" class="d-flex flex-column justify-content-end align-items-center">
    <div id="heroCarousel" class="container carousel carousel-fade" data-ride="carousel">

      <!-- Slide 1 -->
      <div class="carousel-item active"></br></br>
        <div class="carousel-container">
          <h2 class="animate__animated animate__fadeInDown" style="font-size:30px;">‡∂ö‡∑Ö‡∂∏‡∂±‡∑è‡∂ö‡∂ª‡∂´ ‡∂¥‡∑î‡∑Ñ‡∑î‡∂´‡∑î ‡∂∏‡∂∞‡∑ä‚Äç‡∂∫‡∑É‡∑ä‡∂Æ‡∑è‡∂±‡∂∫</span></h2>
          <p class="animate__animated fanimate__adeInUp"><img class="d-block w-100" src="image/1.jpg"></p>
          <a href="#about" class="btn-get-started animate__animated animate__fadeInUp scrollto">Read More</a>
        </div>
      </div>

    

      <!-- Slide 2 -->
      <div class="carousel-item"></br></br>
        <div class="carousel-container">
          <h2 class="animate__animated animate__fadeInDown" style="font-size:30px;">‡∂¥‡∂ª‡∑í‡∂ú‡∂´‡∂ö ‡∑Ä‡∑í‡∂Ø‡∑ä‚Äç‡∂∫‡∑è‡∂ú‡∑è‡∂ª‡∂∫</h2>
          <p class="animate__animated animate__fadeInUp"><img class="d-block w-100" src="image/3.jpg" width="600px" height="250px" align="center"></p>
          <a href="#about" class="btn-get-started animate__animated animate__fadeInUp scrollto">Read More</a>
        </div>
      </div>

      <a class="carousel-control-prev" href="#heroCarousel" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon bx bx-chevron-left" aria-hidden="true"></span>
        <span class="sr-only" >Previous</span>
      </a>

      <a class="carousel-control-next" href="#heroCarousel" role="button" data-slide="next">
        <span class="carousel-control-next-icon bx bx-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>

    </div>

    <svg class="hero-waves" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 24 150 28 " preserveAspectRatio="none">
      <defs>
        <path id="wave-path" d="M-160 44c30 0 58-18 88-18s 58 18 88 18 58-18 88-18 58 18 88 18 v44h-352z">
      </defs>
      <g class="wave1">
        <use xlink:href="#wave-path" x="50" y="3" fill="rgba(255,255,255, .1)">
      </g>
      <g class="wave2">
        <use xlink:href="#wave-path" x="50" y="0" fill="rgba(255,255,255, .2)">
      </g>
      <g class="wave3">
        <use xlink:href="#wave-path" x="50" y="9" fill="#fff">
      </g>
    </svg>

  </section><!-- End Hero -->

  <main id="main">

<!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container">

        <div class="section-title" data-aos="zoom-out">
          <h2>About</h2>
          <h4>‡∂Ö‡∂¥ ‡∂ú‡∑ê‡∂±</h4>
        </div>

        <div class="row content" data-aos="fade-up">
          <div class="col-lg-6">
            <p style="font-size:16px;">
				‡∂∏‡∑è‡∂≠‡∂Ω‡∑ö  ‡∂Ø‡∑í‡∑É‡∑ä‡∂≠‡∑ä‚Äç‡∂ª‡∑í‡∂ö‡∑ä ‡∂ª‡∑è‡∂¢‡∑ä‚Äç‡∂∫ ‡∑É‡∑ö‡∑Ä‡∂∫‡∑ö ‡∂∏‡∑è‡∂´‡∑ä‡∂©‡∂Ω‡∑í‡∂ö ‡∂±‡∑ú‡∑Ä‡∂± ‡∑Å‡∑ä‚Äç‡∂ª‡∑ö‡∂´‡∑í‡∑Ä‡∂Ω ‡∂±‡∑í‡∂Ω‡∂∞‡∑è‡∂ª‡∑ì‡∂±‡∑ä‡∂ú‡∑ö ‡∂¥‡∑î‡∑Ñ‡∑î‡∂´‡∑î ‡∂Ö‡∑Ä‡∑Å‡∑ä‚Äç‡∂∫‡∂≠‡∑è ‡∑É‡∂∏‡∑ä‡∂¥‡∑è‡∂Ø‡∂±‡∂∫ ‡∂ö‡∑í‡∂ª‡∑ì‡∂∏ ‡∂¥‡∑í‡∂´‡∑í‡∑É ‡∑É‡∑ä‡∂Æ‡∑è‡∂¥‡∑í‡∂≠ ‡∂ö‡∂ª‡∂± ‡∂Ω‡∂Ø 
				‡∂Ø‡∑í‡∑É‡∑ä‡∂≠‡∑ä‚Äç‡∂ª‡∑í‡∂ö‡∑ä ‡∂ö‡∑Ö‡∂∏‡∂±‡∑è‡∂ö‡∂ª‡∂´ ‡∑É‡∂Ç‡∑Ä‡∂ª‡∑ä‡∂∞‡∂± ‡∑Ñ‡∑è ‡∂¥‡∑î‡∑Ñ‡∑î‡∂´‡∑î ‡∂í‡∂ö‡∂ö‡∂∫ (MDTU) ‡∂∏‡∑è‡∂≠‡∂Ω‡∑ö  ‡∂∏‡∑Ñ ‡∂Ø‡∑í‡∑É‡∑è‡∂¥‡∂≠‡∑í‡∂≠‡∑î‡∂∏‡∑è‡∂ú‡∑ö ‡∂ã‡∂¥‡∂Ø‡∑ô‡∑É‡∑ä ‡∑É‡∑Ñ ‡∂∏‡∂ú‡∂¥‡∑ô‡∂±‡∑ä‡∑Ä‡∑ì‡∂∏‡∑ä ‡∑Ñ‡∑è ‡∂ë‡∂≠‡∑î‡∂∏‡∑è‡∂ú‡∑ö ‡∂Ö‡∂∞‡∑ì‡∂ö‡∑ä‡∑Ç‡∂´‡∂∫ ‡∂∫‡∂ß‡∂≠‡∑ö  ‡∂ö‡∑ä‚Äç‡∂ª‡∑í‡∂∫‡∑è‡∂≠‡∑ä‡∂∏‡∂ö ‡∑Ä‡∑ö. 
            </p>
            <ul>
			<p style="font-size:16px;"><u><b>‡∂¥‡∑ä‚Äç‡∂ª‡∂∞‡∑è‡∂± ‡∂Ö‡∂ª‡∂∏‡∑î‡∂´</u></b></p>
              <li><i class="ri-check-double-line"></i><p style="font-size:15px;">‡∂∏‡∑è‡∂≠‡∂Ω‡∑ö ‡∂Ø‡∑í‡∑É‡∑ä‡∂≠‡∑ä‚Äç‡∂ª‡∑í‡∂ö‡∑ä‡∂ö‡∂∫‡∑ö ‡∑É‡∑í‡∂∫‡∑Ö‡∑î‡∂∏ ‡∂ª‡∑è‡∂¢‡∑ä‚Äç‡∂∫ ‡∂±‡∑í‡∂Ω‡∂∞‡∑è‡∂ª‡∑ì‡∂±‡∑ä‡∂ú‡∑ö (‡∂¥‡∑Ö‡∑è‡∂≠‡∑ä ‡∑É‡∂∑‡∑è ‡∂á‡∂≠‡∑î‡∑Ö‡∑î)‡∑Ñ‡∑ê‡∂ö‡∑í‡∂∫‡∑è‡∑Ä‡∂±‡∑ä  ‡∑Ä‡∂ª‡∑ä‡∂∞‡∂±‡∂∫ ‡∂ö‡∑í‡∂ª‡∑ì‡∂∏ ‡∂≠‡∑î‡∑Ö‡∑í‡∂±‡∑ä ‡∂∫‡∑Ñ‡∂¥‡∂≠‡∑ä ‡∂∏‡∑Ñ‡∂¢‡∂± ‡∑É‡∑ö‡∑Ä‡∑è‡∑Ä‡∂ö‡∑ä ‡∑É‡∑ä‡∂Æ‡∑è‡∂¥‡∑í‡∂≠ ‡∂ö‡∑í‡∂ª‡∑ì‡∂∏.</li></p></br>
			<p style="font-size:16px;"><u><b>‡∑É‡∑î‡∑Ä‡∑í‡∑Å‡∑ö‡∑Ç ‡∂Ö‡∂ª‡∂∏‡∑î‡∂´‡∑î</u></b></p>
              <li><i class="ri-check-double-line" ></i><p style="font-size:15px;">‡∂Ø‡∑í‡∑É‡∑ä‡∂≠‡∑ä‚Äç‡∂ª‡∑í‡∂ö‡∑ä‡∂ö‡∂∫‡∑ö ‡∑É‡∑í‡∂∫‡∑Ö‡∑î‡∂∏ ‡∂ª‡∑è‡∂¢‡∑ä‚Äç‡∂∫ ‡∂±‡∑í‡∂Ω‡∂∞‡∑è‡∂ª‡∑ì‡∂±‡∑ä‡∂ú‡∑ö (‡∂∏‡∑è‡∂´‡∑ä‡∂©‡∂Ω‡∑í‡∂ö ‡∂±‡∑ú‡∑Ä‡∂±) ‡∂Ø‡∑ê‡∂±‡∑î‡∂∏ , ‡∂Ü‡∂ö‡∂Ω‡∑ä‡∂¥ , ‡∂ö‡∑î‡∑É‡∂Ω‡∂≠‡∑è ‡∑Ä‡∂ª‡∑ä‡∂∞‡∂±‡∂∫ ‡∂ö‡∑í‡∂ª‡∑ì‡∂∏. </li></p>
			  <li><i class="ri-check-double-line"></i><p style="font-size:15px;">‡∂ª‡∑è‡∂¢‡∂ö‡∑è‡∂ª‡∑ì ‡∑Ñ‡∑ê‡∂ö‡∑í‡∂∫‡∑è‡∑Ä‡∂±‡∑ä ‡∑Ä‡∂ª‡∑ä‡∂∞‡∂±‡∂∫ ‡∂ö‡∑í‡∂ª‡∑ì‡∂∏ ‡∂≠‡∑î‡∑Ö‡∑í‡∂±‡∑ä ‡∂∏‡∑Ñ‡∂¢‡∂±‡∂≠‡∑è‡∑Ä‡∂ß  ‡∂ö‡∑è‡∂ª‡∑ä‡∂∫‡∂ö‡∑ä‡∑Ç‡∂∏ ‡∑É‡∑ö‡∑Ä‡∑è‡∑Ä‡∂ö‡∑ä ‡∑É‡∑ê‡∂¥‡∂∫‡∑ì‡∂∏. </li></p>
			  <li><i class="ri-check-double-line"></i><p style="font-size:15px;">‡∂Ø‡∑í‡∑É‡∑ä‡∂≠‡∑ä‚Äç‡∂ª‡∑í‡∂ö‡∑ä ‡∂ª‡∑è‡∂¢‡∑ä‚Äç‡∂∫ ‡∂±‡∑í‡∂Ω‡∂∞‡∑è‡∂ª‡∑ì‡∂±‡∑ä‡∂ú‡∑ö ‡∂¥‡∂ª‡∑í‡∂ú‡∂´‡∂ö ‡∂Ø‡∑ê‡∂±‡∑î‡∂∏ ‡∑Ä‡∑ê‡∂©‡∑í‡∂Ø‡∑í‡∂∫‡∑î‡∂´‡∑î ‡∂ö‡∑í‡∂ª‡∑ì‡∂∏. </li></p>
			  <li><i class="ri-check-double-line"></i><p style="font-size:15px;">‡∂ö‡∑ú‡∑Ö‡∂π ‡∑Ä‡∑ê‡∂±‡∑í ‡∂Ø‡∑î‡∂ª ‡∂∂‡∑ê‡∑Ñ‡∑ê‡∂ª ‡∂¥‡∑ä‚Äç‡∂ª‡∂Ø‡∑ö‡∑Å‡∂∫‡∂±‡∑ä‡∂ß ‡∂¥‡∑î‡∑Ñ‡∑î‡∂´‡∑î‡∑Ä ‡∑É‡∂≥‡∑Ñ‡∑è ‡∂∫‡∑ë‡∂∏‡∑ö‡∂Ø‡∑ì ‡∂∏‡∑î‡∑Ñ‡∑î‡∂´‡∂¥‡∑è‡∂± ‡∑Ä‡∑í‡∑Ä‡∑í‡∂∞ ‡∂ú‡∑ê‡∂ß‡∂Ω‡∑î ‡∂Ö‡∑Ä‡∂∏ ‡∂ö‡∑í‡∂ª‡∑ì‡∂∏. </li></p>
			  <li><i class="ri-check-double-line"></i><p style="font-size:15px;">‡∂Ø‡∑í‡∑É‡∑ä‡∂≠‡∑ä‚Äç‡∂ª‡∑í‡∂ö‡∑ä‡∂ö‡∂∫‡∑ö ‡∑É‡∑í‡∂∫‡∑Ö‡∑î‡∂∏ ‡∂ª‡∑è‡∂¢‡∑ä‚Äç‡∂∫ ‡∂±‡∑í‡∂Ω‡∂∞‡∑è‡∂ª‡∑ì‡∂±‡∑ä‡∂ß ‡∑Ä‡∑í‡∂∞‡∑í‡∂∏‡∂≠‡∑ä ‡∂¥‡∑î‡∑Ñ‡∑î‡∂´‡∑î‡∑Ä‡∂ö‡∑ä ‡∂Ω‡∂∂‡∑è‡∂Ø‡∑ì‡∂∏ ‡∂≠‡∑î‡∑Ö‡∑í‡∂±‡∑ä ‡∂î‡∑Ä‡∑î‡∂±‡∑ä‡∂ú‡∑ö ‡∂ª‡∑è‡∂¢‡∂ö‡∑è‡∂ª‡∑ì ‡∂ö‡∂ß‡∂∫‡∑î‡∂≠‡∑î ‡∂¥‡∑Ñ‡∑É‡∑î ‡∂ö‡∑í‡∂ª‡∑ì‡∂∏. </li></p>
			  <li><i class="ri-check-double-line"></i><p style="font-size:15px;">‡∂ª‡∑è‡∂¢‡∑ä‚Äç‡∂∫ ‡∂±‡∑í‡∂Ω‡∂∞‡∑è‡∂ª‡∑ì‡∂±‡∑ä ‡∂≠‡∑î‡∑Ö‡∑í‡∂±‡∑ä‡∂∏ ‡∂¥‡∑Ö‡∂¥‡∑î‡∂ª‡∑î‡∂Ø‡∑î ‡∑É‡∂∏‡∑ä‡∂¥‡∂≠‡∑ä‡∂Ø‡∑è‡∂∫‡∂ö‡∂∫‡∑í‡∂±‡∑ä ‡∂¥‡∑í‡∂ª‡∑í‡∑É‡∂ö‡∑ä ‡∂∂‡∑í‡∑Ñ‡∑í‡∂ö‡∑í‡∂ª‡∑ì‡∂∏. </li></p>
			  <li><i class="ri-check-double-line"></i><p style="font-size:15px;">‡∂Ø‡∑í‡∑É‡∑ä‡∂≠‡∑ä‚Äç‡∂ª‡∑í‡∂ö‡∑ä‡∂ö‡∂∫‡∑ö ‡∑É‡∑í‡∂∫‡∑Ö‡∑î‡∂∏ ‡∂ª‡∑è‡∂¢‡∑ä‚Äç‡∂∫ ‡∂Ü‡∂∫‡∂≠‡∂± ‡∂∏‡∂ú‡∑í‡∂±‡∑ä ‡∑É‡∑ê‡∂¥‡∂∫‡∑ô‡∂± ‡∑É‡∑ö‡∑Ä‡∑è‡∑Ä‡∂±‡∑ä ‡∂¥‡∑í‡∑Ö‡∑í‡∂∂‡∂≥ ‡∂Ö‡∂∑‡∑ä‚Äç‡∂∫‡∂±‡∑ä‡∂≠‡∂ª  ‡∑Ñ‡∑è ‡∂∂‡∑è‡∑Ñ‡∑í‡∂ª ‡∂¥‡∑è‡∂ª‡∑í‡∂∑‡∑ù‡∂ú‡∑í‡∂ö‡∂∫‡∂±‡∑ä‡∂ú‡∑ö ‡∂≠‡∑ò‡∂¥‡∑ä‡∂≠‡∑í‡∂∫ ‡∂ã‡∂¥‡∂ª‡∑í‡∂∏ ‡∑Ä‡∑Å‡∂∫‡∑ô‡∂±‡∑ä ‡∂Ω‡∂∂‡∑è ‡∂Ø‡∑ô‡∂∏‡∑í‡∂±‡∑ä ‡∂ë‡∂∏ ‡∂Ü‡∂∫‡∂≠‡∂±‡∑Ä‡∂Ω ‡∂¥‡∂ª‡∑í‡∂¥‡∑è‡∂Ω‡∂± ‡∂ö‡∂ß‡∂∫‡∑î‡∂≠‡∑î ‡∑É‡∑Ñ‡∂∫ ‡∑Ä‡∑ì‡∂∏. </li></p>
              <li><i class="ri-check-double-line"></i><p style="font-size:15px;">‡∂Ø‡∑í‡∑É‡∑ä‡∂≠‡∑ä‚Äç‡∂ª‡∑í‡∂ö‡∑ä‡∂ö‡∂∫‡∑ö ‡∂¥‡∑Ä‡∂≠‡∑ä‡∂±‡∑è ‡∑É‡∂∏‡∑ä‡∂¥‡∂≠‡∑ä ‡∑Ñ‡∂≥‡∑î‡∂±‡∑è‡∂ú‡∑ô‡∂± ‡∂¥‡∑ä‚Äç‡∂ª‡∂Ø‡∑ö‡∑Å‡∂∫‡∂ß ‡∂Ü‡∑Ä‡∑ö‡∂´‡∑í‡∂ö ‡∑Ä‡∑ä‚Äç‡∂∫‡∑è‡∂¥‡∑ò‡∂≠‡∑í ‡∑Ñ‡∂≥‡∑î‡∂±‡∑è ‡∂ú‡∂±‡∑í‡∂∏‡∑í‡∂±‡∑ä ‡∑É‡∂Ç‡∑Ä‡∂ª‡∑ä‡∂∞‡∂± ‡∂ö‡∂ß‡∂∫‡∑î‡∂≠‡∑î ‡∂ö‡∑ä‚Äç‡∂ª‡∑í‡∂∫‡∑è‡∂≠‡∑ä‡∂∏‡∂ö ‡∂ö‡∑í‡∂ª‡∑ì‡∂∏ ‡∂≠‡∑î‡∑Ö‡∑í‡∂±‡∑ä , ‡∂∏‡∑Ñ‡∂¢‡∂±‡∂∫‡∑è‡∂ú‡∑ö ‡∂Ü‡∂ª‡∑ä‡∂Æ‡∑í‡∂ö , ‡∑É‡∂∏‡∑è‡∂¢‡∑ì‡∂∫ , ‡∑É‡∂Ç‡∑É‡∑ä‡∂ö‡∑ò‡∂≠‡∑í‡∂ö ‡∂ö‡∂ß‡∂∫‡∑î‡∂≠‡∑î ‡∑É‡∂Ç‡∑Ä‡∂ª‡∑ä‡∂∞‡∂±‡∂∫ ‡∂ö‡∑í‡∂ª‡∑ì‡∂∏‡∂ß ‡∂Ö‡∑Ä‡∑Å‡∑ä‚Äç‡∂∫ ‡∂Ø‡∑ê‡∂±‡∑î‡∂∏ , ‡∂ö‡∑î‡∑É‡∂Ω‡∂≠‡∑è‡∑Ä‡∂∫‡∂±‡∑ä ‡∑Ñ‡∑è ‡∂Ü‡∂ö‡∂Ω‡∑ä‡∂¥ ‡∂Ω‡∂∂‡∑è‡∂Ø‡∑ì‡∂∏  . </li></p>
            </ul>
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0">
		<p style="font-size:25px;">
		<!-- ‡∑Ä‡∑ä‚Äç‡∂∫‡∑î‡∑Ñ‡∂∫ ‡∑Ñ‡∑è ‡∂ö‡∑Ö‡∂∏‡∂±‡∑è‡∂ö‡∂ª‡∂´‡∂∫-->
            </p>
          <!-- <a href="#" class="btn-learn-more">Learn More</a> -->
          </div>
        </div>

      </div>
    </section>
<!-- End About Section -->

 
<!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container">

        <div class="section-title" data-aos="zoom-out">
          <h2>Contact</h2>
          <h5>Contact Us</h5>
        </div>

        <div class="row mt-5">

          <div class="col-lg-4" data-aos="fade-right">
            <div class="info">
              <div class="address">
                <i class="icofont-google-map"></i>
                <h4>Location:</h4>
                <p>Management Development Training Unit , District Secratiate Office - Matale</p>
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

          <div class="col-lg-8 mt-5 mt-lg-0" data-aos="fade-left">

            <form action="forms/contact.php" method="post" role="form" class="php-email-form">
              <div class="form-row">
                <div class="col-md-6 form-group">
                  <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                  <div class="validate"></div>
                </div>
                <div class="col-md-6 form-group">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />
                  <div class="validate"></div>
                </div>
              </div>
              <div class="form-group">
                <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
                <div class="validate"></div>
              </div>
              <div class="form-group">
                <textarea class="form-control" name="message" rows="5"c8’√±kˆÍœ£€—¯«ËâlRˇâ’*õÊÂ9»o#∫˙›˙Ωˇ˚˜Ô÷Ôƒ˙˛›Í[ﬂøˇnÎ)>µàıù√!óá!Üp4»√ë<ú¡·L.‡p!ÔùÁp≤tá[9y—ßﬂóaÜZn©3ü<|ˇ.opˆæﬂª·˜˚ÉpO]>ç˙ª.ﬁ√%≤[ÎÌu4˙Ô÷Ô§‚ïxW∂Pü”€h‡=πTV“j!ﬂˆc6{1ƒÈ9xΩﬂÎuˆß%wøÿi"(†Çp‰ò¸n˝nŒ*ÔKg§[Ò†ôíX0üXe,pátá¶¡7Ì¶‡6BSŒuà[&çl	ÏÅ"hÎS‰À=\Q‚∫Œêæéê⁄Õã°ÏπZ¡¨ø*é´πE~∞ÆÄ‰sÉÅPq±bàWm∏•y±∏-TY·∂P±ë3†GÒˆîU/†¸=ÿX¸D»E7êozu≈˙´ú|f˝∫ÖÓbGá/'[àkPúoÄD&¥·Ê€›æV[≈èu5lè^ÍÕíÈ”JùUÓq∫˙Ã˙H‘ﬁÑÿxì+÷◊"õœìhÑV9·Öˆår{FB)≈ ⁄înÕ¶ÿ“n	»ı!`Ì,®u7˚Î#,{QMëËmt`í±H\œƒt)Êã≤€˘˙ëã»0¬}˙ÔãsÛ;ÙI˜È◊/DırÉŸ#pâ(¥ÃlΩîÈé÷_ÍÊÓ„ÚF∞ç@·JäYfJ]\1MÔÿ^ŒÜÖe5¢¶=Ò≥π+}…–W3*’Ñ'ÇÕ©ò£ó0Ûõ™_—‰kŸ˝ím!ˆîqı±S rM?YnTÜÌ
ëm∏Ê√øFeÄˇW#æ±¢£9av‘wT$Dô˜ˇ`e¿Ø¸e∆Tü±ç˚¶'rÖú£∑7Ì∂.QZ9o Ö…	b2˘ƒL Ñ8unˇÅpÅ’UÑ’∫7	—∑å≤
;‚á!∞j◊ïø‰ãÀç(LÜ∞Á{èø)Ÿ!œÔ—•"ˇJ/#–ZU.∆ÒVƒu˝˝ÒxpÄº‚óóßÏı*b–éËÀGyuåH≥ÿ‡iïÚHÄÔ`øpŒÔvÑ˚\(3@òˆ6‘-Q~èXl4…èàg ˇΩqMMRˇˆI_–9q0ˆ6°}°7Óêì1hU¸∏¶UŸ!Ïk≈ä26ƒ}ΩuQ≤ˇNd¥Gnxë4\ﬁ®úe◊{(ñÔ:ËG•°VÊ¿UB%∆‹¯úAÅø	∑]8x7ˇØw\≥ ’,ªè‡Áù≤]Âï◊ï,ˆ1hΩˇ¯Êwlkû7¨ì†k”≠áÔhÖ¥$OççÈFùF÷VJMÅ1ÙΩgÃTµ¡Ï7õæ™ûW—¸∏&oµMàÿÄÔπCúHÜkM1]-‚ôò«„4Ëà>Ô∂Å;4c ‚øQ%n¿ŒÎàJ˜Yq™è#å…´H~a¸œJÈ§ã.·/È•ˆP®}∏+‡6íΩö„*å<
ãwleÛ∞‹P©Pêª4ù7Ö&≠‚rº±ó£1üãŸ]Aƒß-Ëc-‹åÕ†¬%‘ßóüLf…‹èF†%E™Ã©5ë¨Nå«µëy#%ä{¡n≈G·èg¡¸d„’=á"c∞”oâ ∂†À%-√=¶„o}˚ıh!fs•ΩWù°´ ª"≠9dŒ11ˆZœ'?w≥Cπú÷ol„Óá&ÀÓ€≈<˘)ä« et¨´Uø¢T}c£(‹˜Ì∑À3´à
˘˝±uQëUEê+BtÁ˝ÜC¸8IÉ?ì˘Bù∞Ûbˆí-òLò/˘b&Dø·‰¯WÕÚJ,Æä—9Æ¯¿πp]`ˆ)»ÅßjÙ´ı˚‡∑Päº"º<Qñ˜$§Å˝†=7U„aMı-pÀ∑˘ñû^´’j∑ÌŒ®qµ"éıKÅ|;1éºCˆ úæ