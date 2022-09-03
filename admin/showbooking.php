<?php
session_start();
if(isset($_SESSION["username"]))
{
	include("dbconnection.php");
	if (isset($_POST['delete'])) {
		//$sql_hallbooking="INSERT INTO hall_booking(hall_no, nic_no, tele_no, name, address, reason, in_date, out_date) VALUES ('".$_POST['hall_no']."','".$_POST['nic']."','".$_POST['tele_no']."','".$_POST['name']."','".$_POST['address']."','".$_POST['reason']."','".$_POST['in_date']."','".$_POST['out_date']."')";
		//echo "$sql_hallbooking";
		//if (mysqli_query($conn, $sql_hallbooking)) {
			//echo "booking_details delete no =".$_POST["no"];;
		//}

	$sql_delete="DELETE FROM booking_details WHERE booking_details.no =".$_POST["no"];}
		if (mysqli_query($conn, $sql_delete)) {
			//echo "booking_details delete no =".$_POST["no"];;
		}
		//}
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



SendSMS.send(
  {
    // Message body
    body: bodySMS,
    // Recipients Number
    recipients: [mobileNumber],
    // An array of types 
    // "completed" response when using android
    successTypes: ['sent', 'queued'],
  },
  (completed, cancelled, error) => {
    if (completed) {
      console.log('SMS Sent Completed');
    } else if (cancelled) {
      console.log('SMS Sent Cancelled');
    } else if (error) {
      console.log('Some error occured');
    }
  },
);








</script>

<title>mdtu-admin page</title>

</head>
<body>
 
 
<!--navbar-->
  <?php include ("navbar.php"); ?>
   
<!--leftslidebar-->   
  <?php include ("leftsliedbar.php"); ?>
	  
	  
<!-- wrapper  -->
<div class="dashboard-wrapper">
    <div class="dashboard-ecommerce">
		<div class="container-fluid dashboard-content ">
                   



<!--show data tabel-->		
</br>					
<div class="container">
	<div class="row">
        <div class="col-md-12">
			<!-- <form action="showbooking.php" method="POST"> -->
				<table id="example" class="display">
					<thead style="color:black;">
						<tr style="width:50px;">
							<th>No</th>
							<th>Name</th>
							<th>Tele:No</th>
							<th>Address</th>
							<th>No Of Tra</th>
							<th>Check In Date</th>
							<th>Check Out Date</th>
							<th>Hall No</th>
							<th>Confirm</th>
						</tr>
					</thead>
					<tfoot>
						<tr>
							<th>No</th>
							<th>Name</th>
							<th>Tele:No</th>
							<th>Address</th>
							<th>No Of Tra</th>
							<th>Check In Date</th>
							<th>Check Out Date</th>
							<th>Hall No</th>
							<th>Confirm</th>
						</tr>
					</tfoot>
					<tbody>
			
				
				
				
					<?php
					
						$sql_accna="SELECT * FROM booking_details order by no";
						$accna_info=$conn->query($sql_accna)or die(mysqli_error($conn));
						$numrows_accna=mysqli_num_rows($accna_info);
						$i = 0;
					?>
						
						
										
					<?php 
						if($numrows_accna > 0)
						{
						while($row_accna=$accna_info->fetch_assoc()){?>
							<tr>
								<form action="showbooking.php" method="POST">
							<td id="tid"><?php echo ++$i;?><input type="hidden" name="no" <?php echo "value='".$row_accna['no']."'" ?>></td>
													
							<td><?php echo $row_accna['name'];?><input type="hidden" name="name" <?php echo "value='".$row_accna['name']."'" ?><input type="hidden" name="nic_no" <?php echo "value='".$row_accna['nic_no']."'" ?></td>
							
							<td><?php echo $row_accna['tele_no'];?><input type="hidden" name="tele_no" <?php echo "value='".$row_accna['tele_no']."'" ?></td>
							
							<td><?php echo $row_accna['address'];?><input type="hidden" name="address" <?php echo "value='".$row_accna['address']."'" ?></td>
							
							<td><?php echo $row_accna['reason'];?><input type="hidden" name="reason" <?php echo "value='".$row_accna['reason']."'" ?></td>
							
							<td name="indate"><?php echo $row_accna['in_date'];?><input type="hidden" name="in_date" <?php echo "value='".$row_accna['in_date']."'" ?></td>
							
							<td name="outdate"><?php echo $row_accna['out_date'];?><input type="hidden" name="out_date" <?php echo "value='".$row_accna['out_date']."'" ?></td>
							
							<td name="hallno"><?php echo $row_accna['hall_no'];?><input type="hidden" name="hall_no" <?php echo "value='".$row_accna['hall_no']."'" ?></td>
							
							<td><input type="submit" class=" btn-success" name="delete" value="Confirm"></td>
							</form>
						</tr>
						
					<?php }}?>
	
					</tbody>
				</table>
			<!-- </form> -->
			</div>
		</div>
	</div>
</div>
<?php




?> 
               
</br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br>
</div>   
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