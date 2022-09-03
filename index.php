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
          <h2 class="animate__animated animate__fadeInDown" style="font-size:30px;">කළමනාකරණ පුහුණු මධ්‍යස්ථානය</span></h2>
          <p class="animate__animated fanimate__adeInUp"><img class="d-block w-100" src="image/1.jpg"></p>
          <a href="#about" class="btn-get-started animate__animated animate__fadeInUp scrollto">Read More</a>
        </div>
      </div>

    

      <!-- Slide 2 -->
      <div class="carousel-item"></br></br>
        <div class="carousel-container">
          <h2 class="animate__animated animate__fadeInDown" style="font-size:30px;">පරිගණක විද්‍යාගාරය</h2>
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
          <h4>අප ගැන</h4>
        </div>

        <div class="row content" data-aos="fade-up">
          <div class="col-lg-6">
            <p style="font-size:16px;">
				මාතලේ  දිස්ත්‍රික් රාජ්‍ය සේවයේ මාණ්ඩලික නොවන ශ්‍රේණිවල නිලධාරීන්ගේ පුහුණු අවශ්‍යතා සම්පාදනය කිරීම පිණිස ස්ථාපිත කරන ලද 
				දිස්ත්‍රික් කළමනාකරණ සංවර්ධන හා පුහුණු ඒකකය (MDTU) මාතලේ  මහ දිසාපතිතුමාගේ උපදෙස් සහ මගපෙන්වීම් හා එතුමාගේ අධීක්ෂණය යටතේ  ක්‍රියාත්මක වේ. 
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
          <div class="col-lg-6 pt-4 pt-lg-0">
		<p style="font-size:25px;">
		<!-- ව්‍යුහය හා කළමනාකරණය-->
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
                <textarea class="form-control" name="message" rows="5"c8�ñk��ϣ�����lR���*���9�o#����������������[߿�n�)>�����!��!�p4�Ñ<���L.�p!��p�t�[9yѧߗa�Zn�3�<|�.op��߻����pO]>���.��%�[��u4�����xW�P���h�=�TV�j!��c6{1��9x���u��%w��i"(��p��n�n�*�Kg�[񠙒X0�Xe,p�t���7��6BS�u�[&�l	��"h�S��=\Q��ΐ����͋��Z���*���E~����s��Pq�b�Wm��y��-TY�P��3�G���U/��=�X�D�E7�ozu����|f����bG�/'[�kP�o�D&����ݾV[ŏu5l�^�͒��J�U�q����H�ބ�x�+��"�ϓh�V9����r{FB)��ڔnͦ���n	��!`�,�u7��#,{QM��mt`��H\��t)拲������0�}��s�;�I���/D�r��#p�(��l����_�����F��@�J�YfJ]\1M��^Ά�e5��=�+}��W3*Մ'�ͩ���0��_��k���m!��q��S�rM?YnT��
�m��ÿFe��W#����9av�wT$D���`e���e�T�����'r����7�.QZ9o ��	b2���L �8un��p��U�պ7	ѷ��
;�!�jו��ˍ(L���{���)�!��ѥ"�J/#�ZU.��V�u���xp�������*bЎ��Gyu�H���i��H��`�p��v��\(3@��6�-Q~�Xl4ɏ�g ��qMMR��I_�9q0�6�}�7��1hU���U�!�kŊ26�}�uQ��Nd�Gnx�4\���e�{(��:�G��V��UB%����A��	�]8x7��w\� �,���睲]�ו,�1h����wlk�7���kӭ��h��$O���F�F�VJM�1��g�T���7����W���&o��M�؀�C�H�kM1]-♘��4��>���;4c �Q%n���J�Yq��#�ɫH~a��J餋.�/��P�}�+�6����*�<
�wle��P�P��4�7�&��r����1���]Aħ-�c-܌͠�%ԧ��Lf���F�%E�̩5��N�ǵ�y#%�{�n�G�g��d��=�"c��o� ���%-�=��o}��h!fs��W��� �"�9d�11�Z�'?w�C���ol��&����<�)���et��U��T}c�(����3��
���uQ�UE�+Bt���C�8I�?��B���b��-�L�/�b&D����W��J,���9����p]`�)ȁ�j�����P��"�<Q��$����=7U�aM�-p˷���^��j��Ψq�"��K�|;1��C�ʜ�