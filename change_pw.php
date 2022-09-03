
<?php session_start();
require_once('dbconnection.php');
// error_reporting(0);
//Code for Registration 


// Code for login 
if(isset($_POST['submit']))
{ 
        $nic=($_POST["nic"]);

        
       
        $q = $conn->query("SELECT * FROM user WHERE user_name='$nic'");
        if($q !== false && $q->num_rows > 0){
        while($row=$q->fetch_assoc()){



        $new_nic=$row['user_name'];


        $pword=$_POST["pword"];
       
        
        $sql1 = "update user set pass_word='$pword' WHERE user_name='$new_nic'";
        $insert = $conn->query($sql1);

        echo "<script>alert('Password Change Successfully!');</script>";
        echo '<script type="text/javascript">location.href = "login.php";</script>';
}
}
        
else
{
    echo "<script>alert('Please Try Again!');</script>";
    echo '<script type="text/javascript">location.href = "change_pw.php";</script>';
}
}          
            
      

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>mdtu-login-page</title>
  <meta content="" name="descriptison">
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
  
  <link href="css/bootstrap.css" rel="stylesheet"/>
  <link href="css/mystyle.css" rel="stylesheet"/>
  <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
  <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
  <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex align-items-center ">
    <div class="container d-flex align-items-center">

      <div class="logo mr-auto">
        <h1 class="text-light"><a href="index.php">MDTU</a></h1>
      </div>

	<!--nav-menu -->
      <nav class="nav-menu d-none d-lg-block">
        <ul>
          <li class="active"><a href="index.php">Home</a></li>
            <li><a href="about.php">About</a></li>
         <li><a href="contact.php">Contact</a></li>
        </ul>
      </nav>
	  <!-- end nav-menu -->

    </div>
  </header><!-- End Header -->

  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section class="breadcrumbs">
        </div> 
    </section>
	<!-- End Breadcrumbs -->

    <section class="inner-page">
      <div class="container">
      </div>
    </section>

  </main>
  <!-- End #main -->
  
  <center><h3>Change Your Password</h3></center>
  
  
   <div class="wrapper fadeInDown" >
  <div id="formContent" > 
    
  <form id="example-form" method="post" name="myForm" enctype="multipart/form-data" class="form-horizontal">
      </br>
	 
	  <input type="text" id="login" class="fadeIn second" name="nic" placeholder="Your ID NO" required  >
      <input type="text" id="password" class="fadeIn third" name="pword" placeholder="Password"  required style="-webkit-text-security: disc;">
      <input type="submit" class="fadeIn fourth" value="Change" name="submit"></br></br>
	  <b>Are You A Member ?</b> &nbsp <a href="login.php" class="underlineHover"> Login</a></button>
    </form>

    <!-- Remind Passowrd -->
    

  </div>
</div>
  
  
  
  
  
  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="container">
      <h3>MDTU</h3>
      <p>Management Development Training Unit</p>
      <div class="social-links">
        <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
        <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
        <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
        <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
        <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
      </div>
      <div class="copyright">
       <!--  &copy; Copyright <strong><span>Selecao</span></strong>. All Rights Reserved -->
      </div>
      <div class="credits">
      </div>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top"><i class="ri-arrow-up-line"></i></a>

  <!--JS Files -->
  <script src="assets/vendor/jquery/jquery.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/jquery.easing/jquery.easing.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/venobox/venobox.min.js"></script>
  <script src="assets/vendor/owl.carousel/owl.carousel.min.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/js/main.js"></script>

</body>

</html>
	
	
	
	
	
	
	
	

		
		
		
		