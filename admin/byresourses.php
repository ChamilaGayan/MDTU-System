<?php
session_start();
if(isset($_SESSION["username"]))
{
	include("dbconnection.php");	
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

<!--data table-->
$(document).ready(function() {
    $('#datatable').dataTable();
    
     $("[data-toggle=tooltip]").tooltip();
} );
<!--end-->


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

<title>mdtu-admin page</title>

</head>
<body>
 
 
<!--navbar-->
  <?php include ("navbar.php") ?>
   
<!--leftslidebar-->   
  <?php include ("leftsliedbar.php"); ?>
	  
<?php include ("function.php"); ?>
	  
<!-- wrapper  -->
<div class="dashboard-wrapper">
    <div class="dashboard-ecommerce">
		<div class="container-fluid dashboard-content ">
                   
                   
<!--form-->				 
<form action="byresourses.php" method="POST" autocomplete="off">


			<?php
			$sql_accna="SELECT * FROM courses order by course_code";
			$accna_info=$conn->query($sql_accna)or die(mysqli_error($conn));
			$numrows_accna=mysqli_num_rows($accna_info);
			?>
			
			
			<select name="search"  class="custom-select custom-select-lg mb-3" required style="width:500px;">
										
			<option value="" selected disabled> පාඨමාලාව තෝරන්න</option>
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
	
	
	$i = 0;
	$course=$_POST["search"];
	$us="select * from resourses ";
	$us_result = mysqli_query($conn, $us);
	$us=array();
	
	echo "<lable  style='font-size:28px; background:#f4efef; color:black;'><b>පාඨමාලාවේ නම  : </b> </lable>";
	echo "<label style='color:red; font-size:26px;' >".$insname=myFunction($course)."</label>"; 
	echo "</br></br>";
	echo "<table class='table table-stripedl'>
	<thead  style='font-size:17px; color:black; weight:bold;'>
	<tr>
	<th style='width:50px;'>NO</th>
	<th>Name Of the Applicant</th>
	<th>Telephone No</th>
	<th>Position</th>
	<th>Office Address</th>
	<th>Yes/No</th>
	<th>Qualifications</th>
	<th>Expireance</th>
	</thead>
	</tr>";
	if (mysqli_num_rows($us_result) > 0) {

		while($row = mysqli_fetch_assoc($us_result)) {
			$us[] = $row['r_id'];
	  	}
	}
	$cnt=count($us);
	$m=0;
	for ($x = 0; $x<$cnt;$x++)
	{
		$sql1="select * from resourses,rcourses,rqulifications,rexpireance,user where resourses.r_id=rcourses.r_id AND user.user_name=resourses.r_id AND resourses.r_id=rqulifications.r_id AND resourses.r_id=rexpireance.r_id AND rcourses.course_code='$course' and user.user_name='".$us[$x]."' ";

		$manage_result = mysqli_query($conn, $sql1);
		
			$rnme = array();
			$emil = array();
			$pstn = array();
			$padrs = array();
			$yn = array();
			$qulfctn = array();
			$pst = array();

		
		if (mysqli_num_rows($manage_result) > 0) 
		{
			while($row = mysqli_fetch_assoc($manage_result)) 
			{
				
				$rnme[] = $row['rname'];
				$emil[] = $row['email_address'];
				$pstn[] = $row['position'];
				$padrs[] = $row['office_address'];
				$yn[] = $row['yes_no'];
				$qulfctn[] = $row['qualification'];
				$pst[] = $row['post'];
				
		  	}
		  	$rnme = array_unique($rnme);
		  	$rnme =array_values($rnme);
			$emil = array_unique($emil);
			$emil =array_values($emil);
			$pstn = array_unique($pstn);
			$pstn =array_values($pstn);
			$padrs = array_unique($padrs);
			$padrs =array_values($padrs);
			$yn = array_unique($yn);
			$yn =array_values($yn);
			$qulfctn = array_unique($qulfctn);
			$qulfctn=array_values($qulfctn);
			$pst = array_unique($pst);
			$pst=array_values($pst);

			$qulfctn1="";
			$pst1="";

		  	foreach ($qulfctn as $key => $value){
		  			$qulfctn1=$qulfctn1.$value."<br>";
		  	}

		  	foreach ($pst as $key => $value){ 
		  		 	$pst1=$pst1.$value."<br>";
		  	}

		  	echo "<tr><tbody style='font-size:16px; color:black;'><td>" .++$i. "</td><td>" . $rnme[0]. "</td><td>" . $emil[0]."</td><td>" . $pstn[0] . "</td><td>" . $padrs[0]. "</td><td>" . $yn[0] . "</td><td>" . $qulfctn1 . "</td><td>" . $pst1. "</td></tbody><tr>";

		}
		else
		{
			
			/*if ($m<1) {
				echo "<tr>
			<tbody style='font-size:16px; '>
			<td colspan='8'>No Candidates have applied for This Course</td>
			</tbody>
			</tr>";
			
			//echo "$m";
			$m++;
			}*/
			
		}
		
		

	}
	echo "</table>";

	//$i = 0;
	
	/*$x=$row["qualification"];
	while($x <=5) {
	echo " $x <br>";
	$x++;
	}*/
	
	//echo"hi";
	
	//$result=mysqli_query($conn,$sql);
	//$rowcount=mysqli_num_rows($result);
	
	//echo"hi";
	
	//if($rowcount > 0)
	//{
		//echo "<lable  style='font-size:28px; background:#f4efef; color:black;'><b>පාඨමාලාවේ නම  : </b> </lable>";
		//echo "<label style='color:red; font-size:26px;'>".$insname=myFunction($course)."</label>"; 
		///echo "</br></br>";
		//echo "<table boder='1' class='table table-stripedl'><thead  style='font-size:17px; color:black; weight:bold;'><tr><th>NO</th><th>Name Of the Applicant</th><th>Telephone No</th><th>Position</th><th>Office Address</th><th>Yes/No</th><th>Qualifications</th><th>Expireance</th></thead></tr>";
		
	//echo"hi";
		
		//while($row=mysqli_fetch_assoc($result))
		//{
		//	echo "<tr><tbody style='font-size:16px; color:black;'><td>" .++$i. "</td><td>" . $rnme. "</td><td>" . $emil."</td><td>" . $pstn. "</td><td>" . $padrs. "</td><td>" . $yn. "</td><td>" . $qulfctn. "</td><td>" . $pst. "</td></tbody><tr>";
		//}
			//echo "</table>";
	//}
	//else
	//{
	//	echo "No Candidates have applied for This Course";
	//}
}

?>
</form>
</div></div>

</br>
<a onclick="printSection('container')">
<button type="button" class="btn btn-primary btn-lg">Print This Page</button>
</a>






</br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></div></div>
<!--fotter-->		   
<?php include ("fotter.php");?>		 
           
		   
	
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