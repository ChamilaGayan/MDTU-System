 <?php
session_start();
if(isset($_SESSION["username"]))
{
	
	$ssid=$_SESSION["username"];
	$stype=$_SESSION["usertype"];
	//$sname=$_SESSION["officename"];
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
 
  <link href="assets/css/style.css" rel="stylesheet">
  
  <!-- css/js for data table -->
	<link rel="bootstrap.css" rel="stylesheet">
	<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">-->
	<script language="JavaScript" src="https://code.jquery.com/jquery-1.11.1.min.js" type="text/javascript"></script>
	<!--<script language="JavaScript" src="https://cdn.datatables.net/1.10.4/js/jquery.dataTables.min.js" type="text/javascript"></script>
	--><script language="JavaScript" src="https://cdn.datatables.net/plug-ins/3cfcc339e89/integration/bootstrap/3/dataTables.bootstrap.js" type="text/javascript"></script>
	<link rel="stylesheet" type="text/css" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="http://cdn.datatables.net/plug-ins/3cfcc339e89/integration/bootstrap/3/dataTables.bootstrap.css">
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
  
$(document).ready(function() {
    $('#datatable').dataTable();
    
     $("[data-toggle=tooltip]").tooltip();
    
} );


<!--print-->
function printSection(el){
    var getFullContent = document.body.innerHTML;
    var printsection = document.getElementById(el).innerHTML;
    document.body.innerHTML = printsection;
    window.print();
    document.body.innerHTML = getFullContent;
    }
<!--end-->
</script>

<!--institute name-->
<?php include ("function.php"); ?>
	
</head>

<body>

<!-- ======= header section ======= -->
  <?php include ("header.php") ?>
<!-- end header -->

<main id="main">
  

    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
      <div class="container">



<div id="container">
<div class="section">

 <?php 
//echo "</br><h2>$sname</h2></br>";

//echo "<h1>$stype</h1>";

echo "<label style='color:red; font-size:30px; font-weight:bold;' >".$insname=myFunction($stype)."</label>" ;
?>


<!--institute-->
<p id="demo"></p>

 
<form action="catch.php" method="POST" autocomplete="off">
</br></br>
<div class="container" class="border:1px solid black;">
	<div class="row">
        <div class="col-md-10" >
            <table id="datatable" class="table table-striped table-bordered" cellspacing="0" style="font-size:17px;" border="1" >
    			<thead>
					<tr>
						<th>No</th>
						<th>NIC No</th>
						<th>Name</th>
						<th>Position</th>
						<th>Address</th>
						<th>TP No</th>
						<!--<th>Work Place</th>
						<th>Request courses</th>
						<!--<th>Request course02</th>
						<th>Request course03</th>-->
					</tr>
				</thead>
				<tfoot>
					<tr>
						<th>No</th>
						<th>NIC No</th>
						<th>Name</th>
						<th>Position</th>
						<th>Address</th>
						<th>TP No</th>
						<!--<th>Work Place</th>
						<th>Request courses</th>
						<!--<th>Request course02</th>
						<th>Request course03</th>-->
					</tr>
				</tfoot>
				<tbody>
					<tr>
<?php
						

					
//$sql1="select * from institute,trainee where instiute.t_id=trainee.t_id ";
//$result=mysqli_query($conn,$sql1);


							$sql_accna="select * from trainee,institute,user where trainee.t_id=user.user_name and institute.t_id=user.user_name and institute.location='$stype'";
							//$sql_accna="SELECT * FROM trainee,user,institute,courses,office where trainee.t_id=user.user_name and  trainee.t_id=institute.t_id  and office.office_no=institute.location  ";
							$accna_info=$conn->query($sql_accna)or die(mysqli_error($conn));
							$numrows_accna=mysqli_num_rows($accna_info);
							//echo "$sql_accna";
							$i = 0;
						?>	
						
						<?php 
							if($numrows_accna > 0)
							{
							while($row_accna=$accna_info->fetch_assoc()){?>
														
								<td id="tid"><?php echo ++$i;?></td>
								<td><a href="followcourse.php"><?php echo $row_accna['t_id'];?></a></td>
								<td><?php echo $row_accna['name'];?></td>
								<td><?php echo $row_accna['position'];?></td>
								<td><?php echo $row_accna['private_address'];?></td>
								<td><?php echo $row_accna['email_address'];?></td>
								<!--<td><?php //echo $row_accna['office_name'];?></td>
								<td><?php //echo $row_accna['course_code1'];?> . <?php //echo $row_accna['course_name'];?></td>-->
					</tr>
						<?php } }?>
				</tbody>
			</table></br>
		</div>
	</div>
</div>
</form>

</div>
</div>

<a onclick="printSection('container')">
<button type="button" class="btn btn-primary btn-lg">Print This Page</button>
</a>
 			
		
		   
<!--end-->	  

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

  	<script src="https://code.jquery.com/jquery-3.4.1.min.js" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    <script src="js/scripts.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
    <script src="assets/demo/chart-area-demo.js"></script>
    <script src="assets/demo/chart-bar-demo.js"></script>
    <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js" crossorigin="anonymous"></script>
    <script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js" crossorigin="anonymous"></script>
    <script src="assets/demo/datatables-demo.js"></script>
    <script type="text/javascript">
  
</body>
</html>

<?php
}
else
{

	header("location:mdtu/index.php");

}
?>