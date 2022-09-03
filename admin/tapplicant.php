<?php
session_start();
if(isset($_SESSION["username"]))
{
	$ssid=$_SESSION["username"];
	
	
	include("dbconnection.php")	
?>

<!doctype html>
<html lang="en">
 
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="assets/vendor/bootstrap/css/bootstrap.min.css">
    <link href="assets/vendor/fonts/circular-std/style.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/libs/css/style.css">
    <link rel="stylesheet" href="assets/vendor/fonts/fontawesome/css/fontawesome-all.css">
    <link rel="stylesheet" href="assets/vendor/charts/chartist-bundle/chartist.css">
    <link rel="stylesheet" href="assets/vendor/charts/morris-bundle/morris.css">
    <link rel="stylesheet" href="assets/vendor/fonts/material-design-iconic-font/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="assets/vendor/charts/c3charts/c3.css">
    <link rel="stylesheet" href="assets/vendor/fonts/flag-icon-css/flag-icon.min.css">

	<!-- css/js for data table -->
	
	<script language="JavaScript" src="https://code.jquery.com/jquery-1.11.1.min.js" type="text/javascript"></script>
	<link rel="stylesheet" type="text/css" href="http://cdn.datatables.net/plug-ins/3cfcc339e89/integration/bootstrap/3/dataTables.bootstrap.css">


<script>
$(document).ready(function() {
    $('#datatable').dataTable();
    
     $("[data-toggle=tooltip]").tooltip();
    
} );
</script>

<title>mdtu-admin page</title>

</head>
<body>
  
 <!--navbar-->
  <?php include ("navbar.php") ?>
   
<!--leftslidebar-->   
  <?php include ("leftsliedbar.php") ?>
	  
	  
<!-- wrapper  -->
<div class="dashboard-wrapper">
    <div class="dashboard-ecommerce">
		<div class="container-fluid dashboard-content ">
                    
  
  
<!--form-->				 
<form action="catch.php" method="POST" autocomplete="off">
<div id="custom-search" class="col-md-4 mb-3" >
	<h2 style="color:#12225c"><u>Trainee Applicant Details</u></h2>
</div>
</br>
<div class="container">
	<div class="row">
        <div class="col-md-10">
            <table id="datatable" class="table table-striped table-bordered" cellspacing="0" style="font-size:17px;" >
    			<thead style="background:#a3a9ba;">
					<tr>
						<th>ID No</th>
						<th>Name</th>
						<th>Address</th>
						<th>TP No</th>
						<th>Work Place</th>
						<th>Request courses</th>
						<!--<th>Request course02</th>
						<th>Request course03</th>-->
					</tr>
				</thead>
				<tfoot>
					<tr>
						<th>ID No</th>
						<th>Name</th>
						<th>Address</th>
						<th>TP No</th>
						<th>Work Place</th>
						<th>Request courses</th>
						<!--<th>Request course02</th>
						<th>Request course03</th>-->
					</tr>
				</tfoot>
				<tbody>
					<tr>
						<?php
						
							$sql_accna="SELECT * FROM trainee,user,institute,request_courses,courses,office where trainee.t_id=user.user_name and  trainee.t_id=institute.t_id and trainee.t_id=request_courses.t_id and courses.course_code=request_courses.course_code1 and office.office_no=institute.location";
							$accna_info=$conn->query($sql_accna)or die(mysqli_error($conn));
							$numrows_accna=mysqli_num_rows($accna_info);
						?>	
						
						<?php 
							if($numrows_accna > 0)
							{
							while($row_accna=$accna_info->fetch_assoc()){?>
														
								<td id="tid"><a href="comcourse.php"><?php echo $row_accna['t_id'];?></a></td>
								<td><?php echo $row_accna['name'];?></td>
								<td><?php echo $row_accna['private_address'];?></td>
								<td><?php echo $row_accna['email_address'];?></td>
								<td><?php echo $row_accna['office_name'];?></td>
								<td><?php echo $row_accna['course_code1'];?> . <?php echo $row_accna['course_name'];?></td>
					</tr>
						<?php }}?>
				</tbody>
			</table>
</br><button  class="btn btn-primary" onclick="window.print()" >Print this page</button>
 			
		</div>
	</div>
</div>
</form>		   
<!--end-->
			
	</div>
</div>
</br></br>
							
				   
<!--fotter-->		   
<?php include ("fotter.php")?>		 
           				   
               
  
    <!-- Optional JavaScript -->
    <!-- jquery 3.3.1 -->
    <script src="assets/vendor/jquery/jquery-3.3.1.min.js"></script>
    <!-- bootstap bundle js -->
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.js"></script>
    <!-- slimscroll js -->
    <script src="assets/vendor/slimscroll/jquery.slimscroll.js"></script>
    <!-- main js -->
    <script src="assets/libs/js/main-js.js"></script>
    <!-- chart chartist js -->
    <script src="assets/vendor/charts/chartist-bundle/chartist.min.js"></script>
    <!-- sparkline js -->
    <script src="assets/vendor/charts/sparkline/jquery.sparkline.js"></script>
    <!-- morris js -->
    <script src="assets/vendor/charts/morris-bundle/raphael.min.js"></script>
    <script src="assets/vendor/charts/morris-bundle/morris.js"></script>
    <!-- chart c3 js -->
    <script src="assets/vendor/charts/c3charts/c3.min.js"></script>
    <script src="assets/vendor/charts/c3charts/d3-5.4.0.min.js"></script>
    <script src="assets/vendor/charts/c3charts/C3chartjs.js"></script>
    <script src="assets/libs/js/dashboard-ecommerce.js"></script>
	<script src="js/bootstrap.min.js"></script>
	
	<script src="https://code.jquery.com/jquery-3.4.1.min.js" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    <script src="js/scripts.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
    <script src="assets/demo/chart-area-demo.js"></script>
    <script src="assets/demo/chart-bar-demo.js"></script>
    <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js" crossorigin="anonymous"></script>
    <script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js" crossorigin="anonymous"></script>
    <script src="assets/demo/datatables-demo.js"></script>
    <script type="text/javascript"></script>
</body>
 
</html>
<?php
}
else
{

	header("location:mdtu/index.php");

}
?>