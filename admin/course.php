<?php
session_start();
if(isset($_SESSION["username"]))
{
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
                   
<!--form-->				 
<form action="catch.php" method="POST" autocomplete="off">

<!-- add course-->
	<div class="row">
		<div class="col-md-4 mb-3">
			<label for="exampleInputPassword1">Add Course </label>
			<input type="text" class="form-control" id="exampleInputPassword1" placeholder="Type Course Name " name="addcourse" required >
		</div>
		<div class="col-md-4 mb-3">
			<label for="exampleInputPassword1">Add Course Duration</label>
			<input type="text" class="form-control" id="exampleInputPassword1" placeholder="Type Course Duration" name="duration" required >
		</div>
	</div>
		<div class="form-group form-check">
			<input type="checkbox" class="form-check-input" id="exampleCheck1" required>
			<label class="form-check-label" for="exampleCheck1">Confirm</label>
		</div>
	<button type="submit" class="btn btn-primary" name="addc">Add</button>
</form>
<!--end-->	

<!--show data tabel-->		
</br>					
<div class="container">
	<div class="row">
        <div class="col-md-12">
            <table id="example" class="display">
    			<thead>
					<tr>
						<th>Course Code</th>
						<th>Course Name</th>
						<th>Course Duration</th>
						<th>Edit</th>
						
					</tr>
				</thead>
				<tfoot>
					<tr>
						<th>Course Code</th>
						<th>Course Name</th>
						<th>Course Duration</th>
						<th>Edit</th>
                     
					</tr>
				</tfoot>
				<tbody>
			
			<tr>
			
				<?php
				
					$sql_accna="SELECT * FROM courses order by course_code";
					$accna_info=$conn->query($sql_accna)or die(mysqli_error($conn));
					$numrows_accna=mysqli_num_rows($accna_info);
				?>
									
				<?php 
					if($numrows_accna > 0)
					{
					while($row_accna=$accna_info->fetch_assoc()){
							
					$id= $row_accna["course_code"];
						
						?>
						<td><?php echo $row_accna['course_code'];?></td>
						<td><?php echo $row_accna['course_name'];?></td>
						<td><?php echo $row_accna['duration'];?></td>
						<td><?php  echo	"<a href='update.php?id=$id' class='fa fa-edit'  data-target='#edit' ></a>"; ?></td>
						</tr>
					
				<?php }}?>
				 
				</tbody>
			</table>

<!--end-->

 <!--delete Row-->
 <form action="catch.php">
    <div class="modal fade" id="delete" tabindex="-1" role="dialog" aria-labelledby="edit" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<!--<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>-->
					<h4 class="modal-title custom_align" id="Heading" >Delete this Record</h4>
				</div>
				<div class="modal-body">
					<div class="alert alert-danger"><span class="glyphicon glyphicon-warning-sign"></span> Are you sure you want to delete this Record?</div>
				</div>
				<div class="modal-footer ">
					<button type="submit" class="btn btn-outline-success" name="delete"><!--<span class="glyphicon glyphicon-ok-sign"></span>-->Yes</button>
					<button type="button" class="btn btn-outline-danger" data-dismiss="modal" ><!--<span class="glyphicon glyphicon-remove"></span>-->No</button>
				</div>
			</div>
		</div>
    </div>
<!--end-->

<!--update row-->
	<div class="modal fade" id="edit" tabindex="-1" role="dialog" aria-labelledby="edit" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<!--<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>-->
					<h4 class="modal-title custom_align" id="Heading">Edit Your Detail</h4>
				</div>
				<div class="modal-body">
					<div class="form-group">
						<input class="form-control " type="text" placeholder="Course Code" <?php echo $row_accna['course_code'];?>>
					</div>
					<div class="form-group">
			
						<input class="form-control " type="text" placeholder="Course Name" <?php echo $row_accna['course_name'];?>>
					</div>
					<div class="form-group">
						<input class="form-control " type="text" placeholder="Course Duration" <?php echo $row_accna['course_name'];?>>
					</div>
				</div>
			  <div class="modal-footer ">
					<button type="button" class="btn btn-warning btn-lg" style="width: 100%;"><span class="glyphicon glyphicon-ok-sign"></span> Update</button>
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