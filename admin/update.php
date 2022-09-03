<?php
session_start();
if(isset($_SESSION["username"]))
{
	include("dbconnection.php");
	
	$id = $_GET['id'];

	if(isset($_POST['add']))
	{ 
	}

if(isset($_POST['update']))
{ 
$cn=$_POST['course_name'];
$du=$_POST['duration'];

$sqla = "update courses set course_name='$cn',duration='$du' WHERE course_code='$id'";
$insert = $conn->query($sqla);

}

if(isset($_POST['delete']))
{
	$sqld = "DELETE FROM courses WHERE course_code='$id'";
	$insert = $conn->query($sqld);

	echo '<script type="text/javascript">location.href = "course.php";</script>';
}
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

	<script language="JavaScript" src="https://code.jquery.com/jquery-1.11.1.min.js" type="text/javascript"></script>
	<link rel="stylesheet" type="text/css" href="http://cdn.datatables.net/plug-ins/3cfcc339e89/integration/bootstrap/3/dataTables.bootstrap.css">

<!--css-->
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.23/css/jquery.dataTables.min.css">
<link rel="stylesheet" href="https://cdn.datatables.net/buttons/1.6.5/css/buttons.dataTables.min.css">

<script>
$(document).ready(function() {
    $('#example').DataTable( {
        dom: 'Bfrtip',
        buttons: [
            'copy', 'csv', 'excel', 'pdf', 'print'
        ]
    } );
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
		<div id="container">
<div class="section">
<!--show data tabel-->		
</br>
<div class="container">
	<div class="row">
        <div class="col-md-12">
            
		<a href='course.php' class="btn btn-primary" style="float:right">Go Back</a>

 <!--delete Row-->
<form id="example-form" method="post" name="myForm1" enctype="multipart/form-data" class="form-horizontal">
<?php

$id = $_GET['id'];

$query = $conn->query("SELECT * FROM courses WHERE course_code=$id");
if($query->num_rows>0)
{
while($row=$query->fetch_assoc()){

	$course_code= $row["course_code"];
	$course_name= $row["course_name"];
	$duration= $row["duration"];
            
}
}
?>
<!--update row-->
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<!--<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>-->
					<h4 class="modal-title custom_align" id="Heading">Edit Your Detail</h4>
				</div>
				<div class="modal-body">
					<div class="form-group">
						<input class="form-control " disabled  type="text" placeholder="Course Code" value="<?php echo $course_code;?>">
					</div>
					<div class="form-group">
			        
					<input class="form-control " name="course_name" type="text" placeholder="Course Name" value="<?php echo $course_name;?>">
					</div>
					<div class="form-group">
					<input class="form-control " name="duration" type="text" placeholder="Course Duration" value="<?php echo $duration;?>">
					</div>
				</div>
			  <div class="modal-footer">

			 <center><button type="submit" name="update" id="update" class="btn btn-warning btn-lg">Update</button></center> 
			  <button type="submit" name="delete" id="delete" style=" color:black; border:none;" class="btn btn-danger btn-lg" class="fa fa-trash" onClick="return confirm('Are you sure you want to delete this record?')"> Delete</button>

					<!-- <button type="button" class="btn btn-warning btn-lg" name="update" style="width: 100%;"><span class="glyphicon glyphicon-ok-sign"></span> Update</button> -->
				</div>
			</div>
		</div>
	</div>
</form>

<!--end-->
			</div>
		</div>
	</div>
</div>
</div>                     
               
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
	
	<!--data table-->
	<script src="https://cdn.datatables.net/1.10.23/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.6.5/js/dataTables.buttons.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.6.5/js/buttons.flash.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
<script src="https://cdn.datatables.net/buttons/1.6.5/js/buttons.html5.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.6.5/js/buttons.print.min.js"></script>
</body>

</body>
 
</html>
<?php
}
else
{

	header("location:mdtu/index.php");

}
?>