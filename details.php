
<!doctype html>
<html lang="en" class="no-js">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
	<meta name="description" content="">
	<meta name="author" content="">
	<meta name="theme-color" content="#3e454c">
	<title>leave details</title>
 <link rel="shortcut icon" type="image/jpg" href="img/logogct.jpg"/>
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/dataTables.bootstrap.min.css">>
	<link rel="stylesheet" href="css/bootstrap-social.css">
	<link rel="stylesheet" href="css/bootstrap-select.css">
	<link rel="stylesheet" href="css/fileinput.min.css">
	<link rel="stylesheet" href="css/awesome-bootstrap-checkbox.css">
	<link rel="stylesheet" href="css/style.css">
<script type="text/javascript" src="js/jquery-1.11.3-jquery.min.js"></script>
<script type="text/javascript" src="js/validation.min.js"></script>
<script type="text/javascript" src="http://code.jquery.com/jquery.min.js"></script>
<script type="text/javascript">
function valid()
{
if(document.registration.password.value!= document.registration.cpassword.value)
{
alert("Password and Re-Type Password Field do not match  !!");
document.registration.cpassword.focus();
return false;
}
return true;
}
</script>
</head>
<body>
	<?php include('student/includes/header.php');?>
	<div class="ts-main-content">
		<?php include('student/includes/sidebar.php');?>
		<div class="content-wrapper">
			<div class="container-fluid">

				<div class="row">
					<div class="col-md-12">
					
						<h2 class="page-title"> Leave Details</h2>

						<div class="row">
							<div class="col-md-12">
								<div class="panel panel-primary">
									<div class="panel-heading">Leave Details</div>
									<div class="panel-body">
                                        <?php
$conn = mysqli_connect("localhost", "root", "", "portal");

$UserID = $_POST['rollno'];

$query = "SELECT * FROM card WHERE registerNumber='$UserID'";

   echo "<div align='center'>";
if($conn->query($query)==True)
{
	$res=mysqli_query($conn,$query);
//Build Result String
$display_string = '<table id="zctb" class="display table table-striped table-bordered table-hover" cellspacing="0" width="100%">';
$display_string .= '<tr style="border:1px solid black;">';
$display_string .= "<th>name</th>";
$display_string .= "<th>registerno</th>";
$display_string .= "<th>roomno</th>";
$display_string .= "<th>branch</th>";
$display_string .= "<th>year</th>";
$display_string .= "<th>departure</th>";
$display_string .= "<th>arrival</th>";
    $display_string .= "<th>placeofvisit</th>";
    $display_string .= "<th>reasonforvisit</th>";


$display_string .= "</tr>";
echo "<br><br>";	

// Insert a new row in the table for each person returned
while($row = mysqli_fetch_array($res)) {
   $display_string .= '<tr style="border:1px solid black;">';
     $display_string .= "<td>$row[name]</td>";
   $display_string .= "<td>$row[registerNumber]</td>";
   $display_string .= "<td>$row[roomno]</td>";
   $display_string .= "<td>$row[branch]</td>";
   $display_string .= "<td>$row[year]</td>";
   $display_string .= "<td>$row[depature]</td>";
   $display_string .= "<td>$row[arrival]</td>";
   $display_string .= "<td>$row[placeofvisit]</td>";
 $display_string .= "<td>$row[reasonforvisit]</td>";
$display_string .= "</tr>";
}

echo "<br><br><br>";	
$display_string .= "</table>";

echo $display_string;
echo "</div>";
}
?>
				

								
							</div>
						</div>

					
					</div>
				</div>

			

			</div>
			
	
	<script src="js/jquery.min.js"></script>
	<script src="js/bootstrap-select.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/jquery.dataTables.min.js"></script>
	<script src="js/dataTables.bootstrap.min.js"></script>
	<script src="js/Chart.min.js"></script>
	<script src="js/fileinput.js"></script>
	<script src="js/chartData.js"></script>
	<script src="js/main.js"></script>
</body>