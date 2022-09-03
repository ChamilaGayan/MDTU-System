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
<!-- add institute-->
	<div class="row">
		<div class="col-md-4 mb-3">
			<label for="exampleInputPassword1">Add Institute </label>
			<input type="text" class="form-control" id="exampleInputPassword1" placeholder="Add Institute " name="addinstitute" required >
		</div>
	</div>
		<div class="form-group form-check">
			<input type="checkbox" class="form-check-input" id="exampleCheck1" required>
			<label class="form-check-label" for="exampleCheck1">Confirm</label>
		</div>
	<button type="submit" class="btn btn-primary" name="addi">Add</button>
</form>
<!--end-->	

				
<!--show data tabel-->		
</br></br></br>						
<div class="container">
	<div class="row">
        <div class="col-md-10">
            <table id="datatable" class="table table-striped table-bordered" cellspacing="0" style="font-size:16px;">
    			<thead>
					<tr>
						<th>Institute No</th>
						<th>Institute Name</th>
						<th>Delete</th>
					</tr>
				</thead>
				<tfoot>
					<tr>
						<th>Institute No</th>
						<th>Institute Name</th>
						<th>Delete</th>
					</tr>
				</tfoot>
				<tbody>
		
			
			<tr>
			
				<?php
				
					$sql_accna="SELECT * FROM office order by office_no";
					$accna_info=$conn->query($sql_accna)or die(mysqli_error($conn));
					$numrows_accna=mysqli_num_rows($accna_info);
				?>
					
					
									
				<?php 
					if($numrows_accna > 0)
					{
					while($row_accna=$accna_info->fetch_assoc()){?>
												
						<td><?php echo $row_accna['office_no'];?></td>
						<td><?php echo $row_accna['office_name'];?></td>
						<td><button class="fa fa-trash" style=" color:red; border:none;" data-title="Delete" data-toggle="modal" data-target="#delete" name="addcourse"></button></td>
			</tr>
					
				<?php }}?>
				 
				</tbody>
			</table>

<!--end-->


<?php


/*add a institute */
		if(isset($_POST["add"]))
		{
				$addinstitute=$_POST["addinstitute"];
				
				
					$sql = "INSERT INTO office(office_name) 
						VALUES('$addinstitute');";
		
					
					
				if(mysqli_query($conn,$sql))
					{
						header("location:institute.php?msg=Add A New Course Successfully ");
		
						/*echo "New record created successfully";*/
					} 
				else 
					{
						echo "Error: " /*. $sql . "<br>"*/ . mysqli_error($conn);
					}
		}



?>

 <!--delete Row-->
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