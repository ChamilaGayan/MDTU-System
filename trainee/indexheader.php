																		<?php 
// if(mysqli_num_rows($result1) > 0)   
//{
//	if ($stype == 'T'){
		
?>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top ">
    <div class="container d-flex align-items-center">
      <h1 class="logo mr-auto"><a href="index.php">MDTU</a></h1>

	<!-- nav-menu -->
      <nav class="nav-menu d-none d-lg-block">
        <ul>
          <li class="active"><a href="index.php">Home</a></li>
          <li><a href="#about">About</a></li>
          <li class="drop-down"><a href="">Application</a>
		  
		 
            <ul>
            <?php if ($stype=='T'){ 
			  
			  $sqlr="select * from trainee where t_id='$ssid'";
			  	
				$result=mysqli_query($conn,$sqlr);
				$rcount=mysqli_num_rows($result);				
				if ($rcount>0){
			?>
			   <li><a href="viewapp.php">View your Application</a></li>
			   <li><a href="followcourse.php">Followed Courses</a></li>
				<?php }else{ ?>
			  <li><a href="application.php">Apply as Trainer</a></li>
			   <li><a href="followcourse.php">Followed Courses</a></li>
			<?php	}?>
			  
			 
			<?php }
			 if ($stype=='R') { 
			 
			 $sqlt="select * from resourses where r_id='$ssid'";
			 
				$result1=mysqli_query($conn,$sqlt);
				$tcount=mysqli_num_rows($result1);				
				if ($tcount>0){
			?>
			 
			  <li><a href="../resourses/viewrapplication.php">View your Application</a></li>
			<?php }else{ ?>
			  <li><a href="../resourses/rapplication.php">Apply as Recourse Person</a></li>
			<?php  }}?>
			
			
			
			<?php if (is_numeric($stype)){ ?> 
			  
			  <li><a href="viewall.php">View all Application</a></li>
			  <li><a href="application.php">Add new trainer</a></li>
			 <?php }?>
			
            </ul>
		
		
		 <ul>
             <!-- <li><a href="application.php">Traineer Application</a></li>-->
            </ul>
		 
          </li>
          <li><a href="#contact">Contact</a></li>

        </ul>
      </nav>
	  <!--end nav-menu -->
	  
      <a href="./logout.php" class="get-started-btn scrollto">Logout</a>

    </div>
  </header><!-- End Header -->

<!-- ======= Header ======= ->
<header id="header" class="fixed-top ">
    <div class="container d-flex align-items-center">
      <h1 class="logo mr-auto"><a href="index.php">MDTU</a></h1>

	<!-- nav-menu ->
      <nav class="nav-menu d-none d-lg-block">
        <ul>
          <li class="active"><a href="index.php">Home</a></li>
          <li><a href="#about">About</a></li>
          <li class="drop-down"><a href="">Application</a>
		    
		
			<ul>
              <li><a href="application.php">view Resourser Application</a></li>
            </ul>
		
		 <ul>
              <li><a href="application.php">Resourser Application</a></li>
            </ul>
          </li>
          <li><a href="#contact">Contact</a></li>

        </ul>
      </nav>
	  <!--end nav-menu ->
	  
      <a href="./logout.php" class="get-started-btn scrollto">Logout</a>

    </div>
  </header><!-- End Header -->
