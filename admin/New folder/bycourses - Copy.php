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
	<link rel="stylesheet" href="https://cdn.datatables.net/1.10.23/css/jquery.dataTables.min.css">
	<link rel="stylesheet" href="https://cdn.datatables.net/buttons/1.6.5/css/buttons.dataTables.min.css">
	

<script>

<!--data table-->


$(document).ready(function() {
    $('#example').DataTable( {
        dom: 'Bfrtip',
        buttons: [
            'copy', 'csv', 'excel', 'pdf', 'print'
        ]
    } );
} );
<!--end-->




     
</script>

<title>mdtu-admin page</title>

</head>
<body>
 
 
<!--navbar-->
  <?php include ("navbar.php") ?>
   
<!--leftslidebar-->   
  <?php include ("leftsliedbar.php") ?>
	  
<?php include ("function.php"); ?>
	  
<!-- wrapper  -->
<div class="dashboard-wrapper">
    <div class="dashboard-ecommerce">
		<div class="container-fluid dashboard-content ">
                   
                   
<!--form-->				 
<form action="bycourses.php" method="POST" autocomplete="off">


			<?php
			$sql_accna="SELECT * FROM courses order by course_code";
			$accna_info=$conn->query($sql_accna)or die(mysqli_error($conn));
			$numrows_accna=mysqli_num_rows($accna_info);
			?>
			
			
			<select name="search"  class="custom-select custom-select-lg mb-3" required style="width:500px;">
										
			<option value="" selected disabled> ???????????????????????? ??????????????????</option>
			<?php 
					if($numrows_accna > 0)
						{
					while($row_accna=$accna_info->fetch_assoc()){?>
									
					<option value="<?php echo $row_accna['course_code'];?>"><?php echo $row_accna['course_code'];?> . <?php echo $row_accna['course_name'];?></option>
									
					<?php }}?>
			</select>

&nbsp &nbsp &nbsp 
			<input type="submit" class="btn btn-primary" name="find"></button></br></br>
			
			
			<!-- <input type="text" placeholder="Search.." name="search">-->
			
			

<div id="container">
<div class="section">	
<?php

if(isset($_POST["find"]))
{
	$course=$_POST["search"];
	$sql="select * from trainee,request_courses,user,institute,office where trainee.t_id=request_courses.t_id AND user.user_name=trainee.t_id AND trainee.t_id=institute.t_id AND office.office_no=institute.location AND course_code1='$course'";
	$i = 0;
	
	//echo"hi";
	
	$result=mysqli_query($conn,$sql);
	$rowcount=mysqli_num_rows($result);
	
	//echo"hi";
	
	if($rowcount > 0)
	{
		echo "<lable  style='font-size:28px; background:#f4efef; color:black;'><b>??????????????????????????? ??????  : </b> </lable>";
		echo "<label style='color:red; font-size:26px;' >".$insname=myFunction($course)."</label>"; 
		echo "</br></br>";
		echo "<table boder='1' class='table table-stripedl'><thead  style='font-size:20px; color:black; weight:bold;'><tr><th>NO</th><th style='width:20px;'>Name</th><th style='width:20px;'>Tele:No</th><th style='width:20px;'>Position</th><th style='width:20px;'>Work Place</th><th>Duty</th></thead></tr>";
		
	//echo"hi";
		
		while($row=mysqli_fetch_assoc($result))
		{
			echo "<tr><tbody style='font-size:19px; color:black;'><td>" .++$i. "</td><td>" . $row["name"]. "</td><td>" . $row["email_address"]."</td><td>" . $row["position"]."</td><td>" . $row["office_name"]."</td><td>" . $row["duty"]. "</td></tbody><tr>";
		}
			echo "</table>";
	}
	else
	{
		echo "No Candidates have applied for This Course";
	}
}

?>


<table id="example" class="display nowrap" style="width:100%">
        <thead>
            <tr>
                <th>Name</th>
                <th>Position</th>
                <th>Office</th>
                <th>Age</th>
                <th>Start date</th>
                <th>Salary</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>Tiger Nixon</td>
                <td>System Architect</td>
                <td>Edinburgh</td>
                <td>61</td>
                <td>2011/04/25</td>
                <td>$320,800</td>
            </tr>
		</tbody>
</table>
</form>
</div></div>

</br>
<a onclick="printSection('container')">
<button type="button" class="btn btn-primary btn-lg">Print This Page</button>
</a>






</br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></div></div>
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
	
	
	
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
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