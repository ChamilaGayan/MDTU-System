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
                   
                   
<!--form		 
<form action="catch.php" method="POST" autocomplete="off">

<!-- add course
	<div class="row">
		<div class="col-md-4 mb-3">
			<label for="exampleInputPassword1">Add Hall </label>
			<?php
			//$sql_accna="SELECT * FROM hall order by hall_no";
			//$accna_info=$conn->query($sql_accna)or die(mysqli_error($conn));
			//$numrows_accna=mysqli_num_rows($accna_info);
			?>
			
			
			<select name="bname[]"  class="custom-select custom-select-lg mb-3" required style="width:300px;">
										
			<option value=""  selected disabled>ශාලාව තෝරන්න</option>
			<?php 
					//if($numrows_accna > 0)
					//	{
					//while($row_accna=$accna_info->fetch_assoc()){?>
									
					<option value="<?php //echo $row_accna['hall_no'];?>"><?php// echo $row_accna['hall_no'];?> . <?php//echo $row_accna['hall_name'];?></option>
									
			<?php //}}?>
			</select>
			
		</div>
		<div class="col-md-3 mb-3">
			<label for="exampleInputPassword1">Add Date</label>
			<input type="date" class="form-control" id="exampleInputPassword1" placeholder="Type Course Duration" name="bdate[]" required >
		</div>
	</div>
		<div class="form-group form-check">
			<input type="checkbox" class="form-check-input" id="exampleCheck1" required>
			<label class="form-check-label" for="exampleCheck1">Confirm</label>
		</div>
	<button type="submit" class="btn btn-primary" name="addb">Add</button>
</form>
end-->	



<!--show data tabel-->	
<h4>Delete Programme Reservation </h4>	
</br>					
<div class="container">
	<div class="row">
	<div class="col-md-1"></div>
        <div class="col-md-10">
			<form action="booking.php" method="POST">
				<table id="example" class="display">
					<thead style="color:black;">
						<tr>
							<th>Hall Number</th>
							<th>Date</th>
							<th>Delete</th>
						</tr>
					</thead>
					<tfoot>
						<tr>
							<th>Hall Number</th>
							<th>Date</th>
							<th>Delete</th>
						</tr>
					</tfoot>
					<tbody>
			
				
				<tr>
				
					<?php
					
						$sql_accna="SELECT * FROM hall_booking order by hall_no";
						$accna_info=$conn->query($sql_accna)or die(mysqli_error($conn));
						$numrows_accna=mysqli_num_rows($accna_info);
					?>
						
						
										
					<?php 
						if($numrows_accna > 0)
						{
						while($row_accna=$accna_info->fetch_assoc()){?>
													
							<td><?php echo $row_accna['hall_no'];?></td>
							<td><?php echo $row_accna['booking_date'];?></td>
							<td><button type="Submit" class="fa fa-trash" style=" color:red; border:none;"   name="deleteh"  n></td>
				</tr>
						
					<?php }}?>
					 
					</tbody>
				</table>
			</form>
		</div>
		<div class="col-md-1"></div>
   </div>
   </div>
                     
<?php

/*delete a hall */
if(isset($_POST["deleteh"]))
		{
				$dlt='1';
				
					$sql = "DELETE from hall_booking  WHERE  hall_no='$dlt' ;";
		
				if(mysqli_query($conn,$sql))
					{
						//header("location:booking.php?msg=Delete A Record Successfully ");
		
						echo "</br><label style='color:red';>Record Deleted successfully</label>";
					} 
				else 
					{
						echo "Error: " /*. $sql . "<br>"*/ . mysqli_error($conn);
					}
		}
		
		
/*add a hall */
if(isset($_POST["addb"]))
		{
				
				$bname=$_POST["bname"];
				$bdate=$_POST["bdate"];
		 
				$course_length=count($bname);
						for($a=0;$a<=$course_length-1;$a++)
						{
						$bn=$bname[$a];
						$bd=$bdate[$a];
					
							
					$sql = "INSERT INTO hall_booking(hall_no,booking_date) 
							VALUES('$bn','$bd');";
						
						}
					
					
				if(mysqli_query($conn,$sql))
					{
						header("location:booking.php?msg=Add A Trainee Successfully ");
		
						/*echo "New record created successfully";*/
					} 
				else 
					{
						echo "Error: " /*. $sql . "<br>"*/ . mysqli_error($conn);
					}
		}
?>		
		
		
		
			
			
<!--end-->

<!--show data tabel		
</br>					
<div class="container">
	<div class="row">
        <div class="col-md-12">
            <table id="example" class="display">
    			<thead style="color:black;">
					<tr>
						<th>Course Code</th>
						<th>Course Name</th>
						<th>Course Duration</th>
						<th>Edit</th>
						<th>Delete</th>
					</tr>
				</thead>
				<tfoot>
					<tr>
						<th>Course Code</th>
						<th>Course Name</th>
						<th>Course Duration</th>
						<th>Edit</th>
                        <th>Delete</th>
					</tr>
				</tfoot>
				<tbody>
		
			
			<tr>
			
				<?php
				
				//	$sql_accna="SELECT * FROM courses order by course_code";
					//$accna_info=$conn->query($sql_accna)or die(mysqli_error($conn));
					//$numrows_accna=mysqli_num_rows($accna_info);
				?>
					
					
									
				<?php 
					//if($numrows_accna > 0)
					//{
					//while($row_accna=$accna_info->fetch_assoc()){?>
												
						<td><?php //echo $row_accna['course_code'];?></td>
						<td><?php //echo $row_accna['course_name'];?></td>
						<td><?php //echo $row_accna['duration'];?></td>
						<td><p data-placement="top" data-toggle="tooltip" title="Edit"><button class="fa fa-edit" style="color:blue; border:none;" data-title="Edit" data-toggle="modal" data-target="#edit" ><span class="glyphicon glyphicon-pencil"></span></button></p></td>
						<td><button class="fa fa-trash" style=" color:red; border:none;" data-title="Delete" data-toggle="modal" data-target="#delete" name="addcourse"></button></td>
			</tr>
					
				<?php //}}?>
				 
				</tbody>
			</table>

<!--end-->

 
</br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br>                
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


 
</html>
<?php
}
else
{

	header("location:mdtu/index.php");

}
?>