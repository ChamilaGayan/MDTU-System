 <?php
session_start();
if(isset($_SESSION["username"]))
{
?>
<?php include("../trainee/dbconnection.php")?>
 
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
// <!--add feiled button01-->
        $(document).ready(function() {
            var max_fields = 10; //maximum input boxes allowed
            var wrapper = $(".input_fields_wrap"); //Fields wrapper
            var add_button = $(".add_field_button"); //Add button ID

            var x = 1; //initlal text box count
            $(add_button).click(function(e) { //on add input button click
                e.preventDefault();
                if (x < max_fields) { //max input box allowed
                    x++; //text box increment
                    $(wrapper).append('<div id="row'+ x +'"><div class="row"><div class="col-md-5 mb-3"><input type="text" class="form-control" placeholder="????????????????????? ???????????????/???????????????/????????????????????????/??????????????? "   name="comcourse[]" required >	</div><div class="col-md-3 mb-3">	<input type="text" class="form-control" placeholder="??????????????? "   name="comyear[]" required ></div><div class="col-md-4 mb-3"> <input type="text" class="form-control" placeholder="??????????????? "   name="comdate[]" required ></div><div class="col-md-4 mb-3"><button class="remove_field" onclick="removeElement(&apos;row'+x+'&apos;);" >-</button></div></div></div>'); //add input box

                }
            });

        });
		function removeElement(elementId) {
			// Removes an element from the document
			var element = document.getElementById(elementId);
			element.parentNode.removeChild(element);
			}
			
			
// <!--add feiled button02-->			
$(document).ready(function() {
    var max_fields = 10;
    var wrapper = $(".container1");
    var add_button = $(".add_form_field");

    var x = 1;
    $(add_button).click(function(e) {
        e.preventDefault();
        if (x < max_fields) {
            x++;
            $(wrapper).append('<div class="input_fields_wrap1"><div class="row"><div class="col-md-5 mb-3"><input type="text" class="form-control" placeholder="??????????????? ?????? ??????????????? "   name="center[]" required ></div><div class="col-md-4 mb-3"><input type="text" class="form-control" placeholder="??????????????? "   name="post[]" required ></div><div class="col-md-3 mb-3"><input type="text" class="form-control" placeholder="???????????????????????? "   name="duration[]" required ></div> <a href="#" class="delete"><button class="add_form_field"><span style="font-size:16px; font-weight:bold;">-</span></button></a></div></div>'); //add input box
        } else {
            alert('You Reached the limits')
        }
    });

    $(wrapper).on("click", ".delete", function(e) {
        e.preventDefault();
        $(this).parent('div').remove();
        x--;
    })
});			
			

// <!--add feiled button03-->			
$(document).ready(function() {
    var max_fields = 10;
    var wrapper = $(".container2");
    var add_button = $(".add_form_field2");

    var x = 1;
    $(add_button).click(function(e) {
        e.preventDefault();
        if (x < max_fields) {
            x++;
            $(wrapper).append('<div class="row"><div class="col-md-6 mb-1"><?php $sql_accna="SELECT * FROM courses order by course_code"; $accna_info=$conn->query($sql_accna)or die(mysqli_error($conn)); $numrows_accna=mysqli_num_rows($accna_info); ?> <select class="form-control"  name="s[]" >  <option value="" selected disabled>?????????????????????????????????????????? ???????????? ???????????? ??????????????????</option> <?php  if($numrows_accna > 0) { while($row_accna=$accna_info->fetch_assoc()){?> <option value="<?php echo $row_accna['course_code'];?>"><?php echo $row_accna['course_code'];?> . <?php echo $row_accna['course_name'];?></option> <?php }}?> </select></div><div class="col-md-6 mb-1"><?php $sql_accna="SELECT * FROM rsupport_level order by level_no"; $accna_info=$conn->query($sql_accna)or die(mysqli_error($conn)); $numrows_accna=mysqli_num_rows($accna_info); ?>  <select class="form-control"  name="l[]"> <option value="" selected disabled> ?????????????????????????????????????????? ???????????? ???????????? ???????????????.</option>  	<?php if($numrows_accna > 0) { while($row_accna=$accna_info->fetch_assoc()){?> <option value="<?php echo $row_accna['level_no'];?>"><?php echo $row_accna['level_no'];?> . <?php echo $row_accna['level_name'];?></option> 	<?php }}?> </select></div><a href="#" class="delete"><button class="add_form_field1"><span style="font-size:16px; font-weight:bold;">-</span></button></a></div></div></div>'); //add input box
        } else {
            alert('You Reached the limits')
        }
    });

    $(wrapper).on("click", ".delete", function(e) {
        e.preventDefault();
        $(this).parent('div').remove();
        x--;
    })
});			
			

// <!--add feiled button04-->			
$(document).ready(function() {
    var max_fields = 10;
    var wrapper = $(".container3");
    var add_button = $(".add_form_field3");

    var x = 1;
    $(add_button).click(function(e) {
        e.preventDefault();
        if (x < max_fields) {
            x++;
            $(wrapper).append('<div class="input_fields_wrap1"><div class="row"><div class="col-md-6 mb-3"><input type="text" class="form-control" placeholder="????????????????????? ????????? ???????????? ??????????????? "   name="place[]" required ></div><div class="col-md-3 mb-3"><input type="text" class="form-control" placeholder="??????????????? "   name="tyear[]" required ></div><div class="col-md-3 mb-3"><input type="text" class="form-control" placeholder="????????? ????????? "   name="tdates[]" required ></div> <a href="#" class="delete"><button class="add_form_field"><span style="font-size:16px; font-weight:bold;">-</span></button></a></div></div>'); //add input box
        } else {
            alert('You Reached the limits')
        }
    });

    $(wrapper).on("click", ".delete", function(e) {
        e.preventDefault();
        $(this).parent('div').remove();
        x--;
    })
});						


// <!--add feiled button05-->			
$(document).ready(function() {
    var max_fields = 10;
    var wrapper = $(".container4");
    var add_button = $(".add_form_field4");

    var x = 1;
    $(add_button).click(function(e) {
        e.preventDefault();
        if (x < max_fields) {
            x++;
            $(wrapper).append('<div class="input_fields_wrap4"><div class="row"><div class="col-md-7 mb-3"><?php $sql_accna="SELECT * FROM courses order by course_code"; $accna_info=$conn->query($sql_accna)or die(mysqli_error($conn)); $numrows_accna=mysqli_num_rows($accna_info); ?> <select name="subject[]" class="form-control"   >  <option value="" selected disabled>?????????????????????????????????????????? ????????????????????? ??????????????? ?????????????????? ?????????????????????????????? ??????????????????</option> <?php  if($numrows_accna > 0) { while($row_accna=$accna_info->fetch_assoc()){?> <option value="<?php echo $row_accna['course_code'];?>"><?php echo $row_accna['course_code'];?> . <?php echo $row_accna['course_name'];?></option> <?php }}?> </select></div> <a href="#" class="delete"><button class="add_form_field"><span style="font-size:16px; font-weight:bold;">-</span></button></a></div></div>'); //add input box
        } else {
            alert('You Reached the limits')
        }
    });

    $(wrapper).on("click", ".delete", function(e) {
        e.preventDefault();
        $(this).parent('div').remove();
        x--;
    })
});						
// <!--radio button checked-->
function yesnoCheck() {
    if (document.getElementById('yesCheck').checked) {
        document.getElementById('ifYes').style.display = 'block';
    }
    else document.getElementById('ifYes').style.display = 'none';

}			
    </script>
	

	
<!--end js-->

</head>

<body>

<!-- ======= header section ======= -->
  <?php include ("header.php") ?>
<!-- end header -->

<main id="main">
  

    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
      <div class="container">


<!--application form-->	
<form action="catch.php" method="POST" >
</br></br>
		<div class="row" style="background-color:white;">
			<center><img src="assets/img/sllogo.png" width="100px" height="auto"></center>
			<center><label for="staticEmail" class="col-sm-8 col-form-label" style="font-size:20px;"><b>??????????????? ????????????????????????????????? ??????????????? ???????????????????????? </br> ???????????????????????? ????????????????????? ?????? ??????????????????  ???????????? (MDTU)</br> ?????????????????????????????? ?????????????????? ???????????? ??????????????????????????? ???????????? ?????????????????? ?????????????????? ?????????????????? - 2020/2021</b></label></br></center>
				<div class="col-2" ></div>
					<div class="col-8" style="background-color:#65d1e1;">
						<label for="staticEmail" class="col-sm-5 col-form-label" ><b>01. ??????(????????????????????? ????????? ??????) :- </b></label>
						<input type="text" class="form-control" placeholder="????????????????????? ????????? ??????" name="name" required>
						
						<label for="staticEmail" class="col-sm-5 col-form-label"><b>02.??????????????????????????? ?????????????????? :-</b></label>
						<input type="text" class="form-control" placeholder="??????????????????????????? ??????????????????" name="oaddress" required>
						  
						<label for="staticEmail" class="col-sm-5 col-form-label"><b>03.???????????????????????? ??????????????????:-</b></label>
						<input type="text" class="form-control" placeholder="???????????????????????? ??????????????????" name="paddress" required>
			 
						<label for="staticEmail" class="col-sm-5 col-form-label"><b>04.??????????????? / ??????????????? ????????? ???????????? ??????????????? :-</b> </label>
						<input type="text" class="form-control" placeholder="??????????????? / ??????????????? ????????? ???????????? ???????????????" name="position" required>
								
						<label for="staticEmail" class="col-sm-5 col-form-label" style="text-align:left;"><b>05.E - ??????????????????  ?????????????????? :- </b> </label>
						<input type="text" class="form-control" placeholder="E - ??????????????????  ??????????????????" name="email" style="width:300px;"> 
			
						<label for="staticEmail" class="col-sm-5 col-form-label"  style="text-align:left;"><b>06. ????????????????????? / ??????????????? ???????????? :-</b> </label></br>
						
						  <div class="form-check form-check-inline">
							  <input class="form-check-input" type="radio" id="inlineCheckbox1" value="f" name="gender" required>
							  <label class="form-check-label" for="inlineCheckbox1" >????????????????????? </label>
						</div>
						
						<div class="form-check form-check-inline">
							  <input class="form-check-input" type="radio" id="inlineCheckbox2" value="m" name="gender" required>
							  <label class="form-check-label" for="inlineCheckbox2">??????????????? </label>
						</div></br>
			 
						<label for="staticEmail" class="col-sm-5 col-form-label"  style="text-align:left;"><b>07. ?????????????????? / ????????????????????? ???????????? :-</b> </label></br>
						
						  <div class="form-check form-check-inline">
							  <input class="form-check-input" type="radio" id="inlineCheckbox1" value="m" name="status" required>
							  <label class="form-check-label" for="inlineCheckbox1">??????????????????  </label>
						</div>
						
						<div class="form-check form-check-inline">
							  <input class="form-check-input" type="radio" id="inlineCheckbox2" value="um" name="status" required>
							  <label class="form-check-label" for="inlineCheckbox2"> ?????????????????????  </label>
						</div></br>
			 
			 
						<label for="staticEmail" class="col-sm-5 col-form-label" style="text-align:left;"><b>08. ?????????  (2021/01/01 ????????????) :-</b> </label></br>
						<!--<label for="staticEmail" class="col-sm-5 col-form-label" style="text-align:left; color:red;">????????? :- ?????????????????????  xx, ?????????  xx, ?????????  xx </label>-->
						<input type="text" class="form-control" placeholder="?????????????????????  "  style="width:100px;" name="age" required >
					

											 <!--------------------end persional details--------------------->
											 
			
<!-----------------------------------------------------------------education courses table---------------------------------------------------------------------------------->
	

		<label for="staticEmail" class="col-sm-10 col-form-label" style="text-align:left;"><b>09. ?????????????????????????????? ???????????????????????????.</b></label></br>
		<div class="input_fields_wrap">
				<div class="row">
					<div class="col-md-5 mb-3">
						<label for="staticEmail"  style="text-align:left;">????????????????????? ??????????????? /???????????????/????????????????????????/???????????????</label>
						<input type="text" class="form-control" placeholder="????????????????????? ???????????????/???????????????/????????????????????????/??????????????? "   name="comcourse[]" required >	
					</div>
				
					
					<div class="col-md-3 mb-3">
						<label for="staticEmail"  style="text-align:left;">???????????????</label> 
						<input type="text" class="form-control" placeholder="??????????????? "   name="comyear[]" required >	
					</div>
					
					<div class="col-md-4 mb-3">
						<label for="staticEmail"  style="text-align:left;">???????????????</label> 
						<input type="text" class="form-control" placeholder="??????????????? "   name="comdate[]" required >			
					</div>
							
					<div class="col-md-4 mb-3">
						<label for="staticEmail"  style="text-align:left;"></label><button class="add_field_button">+</button>
					</div>
					
				</div>
		</div>
											<!---------------end qualification table--------------->
											
		<!-----------------------------------------------------------------service experiance courses table---------------------------------------------------------------------------------->										
		<label for="staticEmail" class="col-sm-10 col-form-label" style="text-align:left;"><b>10. ???????????? ???????????????????????????.</b></label></br>
			<div class="input_fields_wrap1">
				<div class="row">
					<div class="col-md-5 mb-3">
						<label for="staticEmail"  style="text-align:left;">??????????????? ?????? ???????????????</label>
						<input type="text" class="form-control" placeholder="??????????????? ?????? ??????????????? "   name="center[]" required >	
					</div>
				
					
					<div class="col-md-4 mb-3">
						<label for="staticEmail"  style="text-align:left;">???????????????</label> 
						<input type="text" class="form-control" placeholder="??????????????? "   name="post[]" required >	
					</div>
					
					<div class="col-md-3 mb-3">
						<label for="staticEmail"  style="text-align:left;">????????????????????????</label> 
						<input type="text" class="form-control" placeholder="???????????????????????? "   name="duration[]" required >			
					</div>
					
					
					<div class="container1">
						<button class="add_form_field"> <span style="font-size:16px; font-weight:bold;">+ </span></button>
					</div></br>							
				</div>
			</div>								
										<!---------------end experiance table--------------->
										
										
<!----------------------------------------------------------------education experiance courses table---------------------------------------------------------------------------------->										
		<label for="staticEmail" class="col-sm-10 col-form-label" style="text-align:left;"><b>11. ?????????????????????????????????????????? ?????????????????? ????????????????????????????????? ????????? ????????? ???????????????????????????.</b></label></br>										
		<label for="staticEmail" class="col-sm-10 col-form-label"  style="text-align:left;"><b> ?????? ????????????????????? ?????????????????????????????????????????? ????????? ?????????????????? ????????????????????? ? </b> </label></br>
						
						<div class="form-check form-check-inline">
							<input class="form-check-input" type="radio" onclick="javascript:yesnoCheck();" value="y" id="yesCheck" name="ok"  required >
							  <label class="form-check-label" for="inlineCheckbox1" >?????????</label>
							
							<div class="input_fields_wrap2">							
								<div class="group" id="ifYes" style="display:none">
									<div class="row">
										<div class="col-md-6 mb-1">
											<?php
												$sql_accna="SELECT * FROM courses order by course_code";
												$accna_info=$conn->query($sql_accna)or die(mysqli_error($conn));
												$numrows_accna=mysqli_num_rows($accna_info);
											?>
												
														<select  name="s[]"  class="form-control" >
														
														<option value="" selected disabled>?????????????????????????????????????????? ???????????? ???????????? ??????????????????</option>
												<?php 
													if($numrows_accna > 0)
													{
														while($row_accna=$accna_info->fetch_assoc()){?>
													
													<option value="<?php echo $row_accna['course_code'];?>"><?php echo $row_accna['course_code'];?> . <?php echo $row_accna['course_name'];?></option>
													
													<?php }}?>
														</select>
										</div>
										<div class="col-md-6 mb-1">
											<?php
												$sql_accna="SELECT * FROM rsupport_level order by level_no";
												$accna_info=$conn->query($sql_accna)or die(mysqli_error($conn));
												$numrows_accna=mysqli_num_rows($accna_info);
											?>
												
														<select name="l[]" class="form-control"     >
														
														<option value="" selected disabled> ?????????????????????????????????????????? ???????????? ???????????? ???????????????.</option>
												<?php 
													if($numrows_accna > 0)
													{
														while($row_accna=$accna_info->fetch_assoc()){?>
													
													<option value="<?php echo $row_accna['level_no'];?>"><?php echo $row_accna['level_no'];?> . <?php echo $row_accna['level_name'];?></option>
													
													<?php }}?>
														</select>			
										</div>
									
										<div class="container2">
											<button class="add_form_field2"> <span style="font-size:16px; font-weight:bold;">+ </span></button>
										</div>
										
									</div>
										
								</div>	
							</div>	
							
								<div class="form-check form-check-inline">
									  <input class="form-check-input" type="radio" id="inlineCheckbox2" value="n" name="ok" required>
									  <label class="form-check-label" for="inlineCheckbox2">????????? </label>
								</div>
				
						</div></br>
						
						
						
											<!---------------end education experiance table--------------->
											
											
<!-----------------------------------------------------------------tot table---------------------------------------------------------------------------------->										
		<label for="staticEmail" class="col-sm-10 col-form-label" style="text-align:left;"><b>12. ?????????????????? ???????????????????????? ????????? ????????? ????????? ?????????????????????.</b></label></br>
			<div class="input_fields_wrap3">
				<div class="row">
					<div class="col-md-6 mb-3"> 
						<label for="staticEmail"  style="text-align:left;">????????????????????? ????????? ???????????? ???????????????</label>
						<input type="text" class="form-control" placeholder="????????????????????? ????????? ???????????? ??????????????? "  name="place[]" required >	
					</div>
				
					
					<div class="col-md-3 mb-3">
						<label for="staticEmail"  style="text-align:left;">???????????????</label> 
						<input type="text" class="form-control" placeholder="??????????????? "  name="tyear[]" required >	
					</div>
					
					<div class="col-md-3 mb-3">
						<label for="staticEmail"  style="text-align:left;">????????? ?????????</label> 
						<input type="text" class="form-control" placeholder="????????? ????????? "   name="tdates[]" required >			
					</div>
					
					
					<div class="container3">
						<button class="add_form_field3"> <span style="font-size:16px; font-weight:bold;">+ </span></button>
					</div></br>							
				</div>
			</div>								
										<!---------------end experiance table--------------->											
											
											
											
											
											
<!-----------------------------------------------------------------like courses---------------------------------------------------------------------------------->										
						<label for="staticEmail" class="col-sm-10 col-form-label" style="text-align:left;"><b>13.?????????????????????????????????????????? ????????????????????? ??????????????? ?????????????????? ??????????????????????????????.</b></label></br>											
							<div class="input_fields_wrap2">							
								<div class="row">
									<div class="col-md-7 mb-1">
										<?php
											$sql_accna="SELECT * FROM courses order by course_code";
											$accna_info=$conn->query($sql_accna)or die(mysqli_error($conn));
											$numrows_accna=mysqli_num_rows($accna_info);
										?>
											
													<select  name="subject[]" class="form-control" required>
													
													<option value="" selected disabled>?????????????????????????????????????????? ????????????????????? ??????????????? ?????????????????? ?????????????????????????????? ??????????????????</option>
											<?php 
												if($numrows_accna > 0)
												{
													while($row_accna=$accna_info->fetch_assoc()){?>
												
												<option value="<?php echo $row_accna['course_code'];?>"><?php echo $row_accna['course_code'];?> . <?php echo $row_accna['course_name'];?></option>
												
											<?php }}?>
													</select>
									</div>
									
									
									<div class="container4">
										<button class="add_form_field4"> <span style="font-size:16px; font-weight:bold;">+ </span></button>
									</div></br>	
									
								</div>
							</div>

							
											
										<!---------------end like courses table--------------->		
										
							
										
										
										
<!-----------------------------------------------------------------like level---------------------------------------------------------------------------------->										
						<label for="staticEmail" class="col-sm-10 col-form-label" style="text-align:left;"><b>14.?????????????????????????????????????????? ????????????????????? ???????????????  ???????????? ??????????????????.</b></label></br>											
							<div class="input_fields_wrap2">							
								<div class="row">
									<div class="col-md-7 mb-1">
												<?php
													$sql_accna="SELECT * FROM rsupport_level order by level_no";
													$accna_info=$conn->query($sql_accna)or die(mysqli_error($conn));
													$numrows_accna=mysqli_num_rows($accna_info);
												?>
													
															<select  name="request[]"   class="form-control">
															
															<option value="" selected disabled> ??????????????????????????????????????????  ????????????????????? ???????????????  ???????????? ??????????????? ??????????????????.</option>
													<?php 
														if($numrows_accna > 0)
														{
															while($row_accna=$accna_info->fetch_assoc()){?>
														
														<option value="<?php echo $row_accna['level_no'];?>"><?php echo $row_accna['level_no'];?> . <?php echo $row_accna['level_name'];?></option>
														
														<?php }}?>
															</select>			
									</div>			
									
									<div class="col-md-7 mb-1">
												<?php
													$sql_accna="SELECT * FROM rsupport_level order by level_no";
													$accna_info=$conn->query($sql_accna)or die(mysqli_error($conn));
													$numrows_accna=mysqli_num_rows($accna_info);
												?>
													
															<select name="request[]"  class="form-control"   >
															
															<option value="" selected disabled> ??????????????????????????????????????????  ????????????????????? ???????????????  ???????????? ??????????????? ??????????????????.</option>
													<?php 
														if($numrows_accna > 0)
														{
															while($row_accna=$accna_info->fetch_assoc()){?>
														
														<option value="<?php echo $row_accna['level_no'];?>"><?php echo $row_accna['level_no'];?> . <?php echo $row_accna['level_name'];?></option>
														
														<?php }}?>
															</select>			
									</div>				
									
									<div class="col-md-7 mb-1">
												<?php
													$sql_accna="SELECT * FROM rsupport_level order by level_no";
													$accna_info=$conn->query($sql_accna)or die(mysqli_error($conn));
													$numrows_accna=mysqli_num_rows($accna_info);
												?>
													
															<select name="request[]"   class="form-control"   >
															
															<option value="" selected disabled> ??????????????????????????????????????????  ????????????????????? ???????????????  ???????????? ??????????????? ??????????????????.</option>
													<?php 
														if($numrows_accna > 0)
														{
															while($row_accna=$accna_info->fetch_assoc()){?>
														
														<option value="<?php echo $row_accna['level_no'];?>"><?php echo $row_accna['level_no'];?> . <?php echo $row_accna['level_name'];?></option>
														
														<?php }}?>
															</select>			
									</div>				
								</div>
							</div>	
											
											
											
										<!---------------end like level table--------------->													

																		
										

										
										
						<label for="staticEmail" class="col-sm-5 col-form-label" style="text-align:left;"> ???????????? :- </label>
						</br><input type="date" class="form-control" name="applydate" style="width:200px;" required>

						</br><button type="submit" class="btn btn-outline-secondary" name="submit"  style="width:100px;">Apply</button> 
			
				
						<div class="col-2">
						</div>
			
				</div>	
		</div>			
</form>
<!--end form-->		
		
		
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

	header("location:mdtu/index.php");

}
?>