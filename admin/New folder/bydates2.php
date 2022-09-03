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

<!-- add course-->
	<div class="row" >
		
		<div class="col-md-4 mb-2">
		<label for="exampleInputPassword1"><b> ඇතුලත් කරන පාඨමාලාව තෝරන්න </b></label>
				<?php
					$sql_accna="SELECT * FROM courses order by course_code";
					$accna_info=$conn->query($sql_accna)or die(mysqli_error($conn));
					$numrows_accna=mysqli_num_rows($accna_info);
				?>
											
					<select  name="cou[]" class="form-control" required style="font-size:18px;">
					
					<option value="" selected disabled>ඇතුලත් කරන පාඨමාලාව තෝරන්න </option>
				<?php 
					if($numrows_accna > 0)
					{
					while($row_accna=$accna_info->fetch_assoc()){?>
												
					<option value="<?php echo $row_accna['course_code'];?>"><?php echo $row_accna['course_code'];?> . <?php echo $row_accna['course_name'];?></option>
												
				<?php }}?>
					</select>
		</div>
		<div class="col-md-2 mb-2">
			<label for="exampleInputPassword1"><b>පැවැත්වීමට නියමිත  දිනය</b></label>
			<input type="date" class="form-control" id="exampleInputPassword1" placeholder=" " name="dt[]" required >
		</div>
	</div>
	
		<div class="form-group form-check">
			<input type="checkbox" class="form-check-input" id="exampleCheck1" required>
			<label class="form-check-label" for="exampleCheck1">Confirm</label>
		</div>
	<button type="submit" class="btn btn-primary" name="divid">Add</button></br></br>
</form>


<form action="bydates.php" method="POST" autocomplete="off">
<input type="date" class="form-control " id="exampleInputPassword1" placeholder=" " name="search" style="width:160px;" required ></br>
<input type="submit" class="btn btn-primary" name="find"></button></br></br>


<div id="container">
<div class="section">	
<?php

if(isset($_POST["find"]))
{
	$course=$_POST["search"];
	$sql="select * from trainee,divided_course,user,institute,office where trainee.t_id=divided_course.t_id AND user.user_name=trainee.t_id AND trainee.t_id=institute.t_id AND office.office_no=institute.location AND date='$course'";
	$i = 0;
	
	//echo"hi";
	
	$result=mysqli_query($conn,$sql);
	$rowcount=mysqli_num_rows($result);
	
	//echo"hi";
	
	if($rowcount > 0)
	{
		echo "<lable  style='font-size:28px; background:#f4efef; color:black;'><b>පාඨමාලාවේ නම  : </b> </lable>";
		echo "<label style='color:red; font-size:26px;' >".$insname=myFunction($course)."</label>"; 
		echo "</br></br>";
		echo "<table boder='1' class='table table-stripedl'><thead  style='font-size:17px; color:black; weight:bold;'><tr><th>NO</th><th style='width:20px;'>Name</th><th style='width:20px;'>Tele:No</th><th style='width:20px;'>Position</th><th style='width:20px;'>Work Place</th><th>Duty</th></thead></tr>";
		
	//echo"hi";
		
		while($row=mysqli_fetch_assoc($result))
		{
			echo "<tr><tbody style='font-size:16px; color:black;'><td>" .++$i. "</td><td>" . $row["name"]. "</td><td>" . $row["email_address"]."</td><td>" . $row["position"]."</td><td>" . $row["office_name"]."</td><td>" . $row["duty"]. "</td></tbody><tr>";
		}
			echo "</table>";
	}
	else
	{
		echo "No Candidates have applied for This Course";
	}
}

?>
</form>
</div></div>

</br>
<a onclick="printSection('container')">
<button type="button" class="btn btn-primary btn-lg">Print This Page</button>
</a>


</form>
 
<!--end-->	


<!--show data tabel		
</br></br></br>						
<div class="container">
	<div class="row">
        <div class="col-md-10">
            <table id="datatable" class="table table-striped table-bordered" cellspacing="0" style="font-size:16px; color:black;">
    			<thead>
					<tr>
						<th>NIC NO</th>
						<th>Completed Course Name</th>
						<th>Completed Year</th>
						<th>Completed Date</th>
					</tr>
				</thead>
				<tfoot>
					<tr>
						<th>NIC NO</th>
						<th>Completed Course Name</th>
						<th>Completed Date</th>
						<th>Completed Year</th>
					</tr>
				</tfoot>
				<tbody>
		
			
			<tr>
			
				<?php
				
					//$sql_accna="SELECT * FROM completed_course,courses where  completed_course.course_code=courses.course_code";
					//$accna_info=$conn->query($sql_accna)or die(mysqli_error($conn));
					//$numrows_accna=mysqli_num_rows($accna_info);
				?>
					
					
									
				<?php 
					//if($numrows_accna > 0)
					//{
					//while($row_accna=$accna_info->fetch_assoc()){?>
												
						<td><?php //echo $row_accna['t_id'];?></td>
						<td><?php //echo $row_accna['course_name'];?></td>
						<td><?php //echo $row_accna['completed_date'];?></td>
						<td><?php //echo $row_accna['completed_year'];?></td>
			</tr>
					
				<?php //}}?>
				 
				</tbody>
			</table>

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