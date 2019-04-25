<?php
session_start();
include('includes/checklogin.php');
check_login();
$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "portal";

$conn=new mysqli($dbhost, $dbuser,$dbpass, $dbname);
if(!($conn))
{
	echo" Connection failure";
}

?>
<!doctype html>
<html lang="en" class="no-js">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
	<meta name="description" content="">
	<meta name="author" content="">
	<meta name="theme-color" content="#3e454c">
	<title>Approve Request</title>
     <link rel="shortcut icon" type="image/jpg" href="img/logogct.jpg"/>
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/dataTables.bootstrap.min.css">
	<link rel="stylesheet" href="css/bootstrap-social.css">
	<link rel="stylesheet" href="css/bootstrap-select.css">
	<link rel="stylesheet" href="css/fileinput.min.css">
	<link rel="stylesheet" href="css/awesome-bootstrap-checkbox.css">
	<link rel="stylesheet" href="css/style.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
</head>

<body>
	<?php include('includes/header.php');?>

	<div class="ts-main-content">
			<?php include('includes/sidebar.php');?>
		<div class="content-wrapper">
			<div class="container-fluid">
				<div class="row">
					<div class="col-md-12">
                        <br><br>
						<h2 class="page-title">Approve Request</h2>
						<div class="panel panel-default">
							<div class="panel-heading">Request Details</div>
							<div class="panel-body">
        <?php
$query = "SELECT * FROM card";
echo "<div align='center'>";
if($conn->query($query)==True)
{
	$res=mysqli_query($conn,$query);
//Build Result String
$display_string = '<table id="zctb" class="display table table-striped table-bordered table-hover" cellspacing="0" width="100%">';
$display_string .= '<tr style="border:1px solid black;">';
 $display_string .= '<th><input type="checkbox" name="checkbox[]" value="" ></th>';
    $display_string .= "<th>sno</th>";
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
  $display_string .= '<td><input type="checkbox" name="checkbox[]" value="" ></td>';
    $display_string .= "<td>$row[sno]</td>";
     $display_string .= "<td>$row[name]</td>";
   $display_string .= "<td>$row[registerNumber]</td>";
   $display_string .= "<td>$row[roomno]</td>";
   $display_string .= "<td>$row[branch]</td>";
   $display_string .= "<td>$row[year]</td>";
   $display_string .= "<td>$row[depature]</td>";
   $display_string .= "<td>$row[arrival]</td>";
   $display_string .= "<td>$row[placeofvisit]</td>";
 $display_string .= "<td>$row[reasonforvisit]</td>";
$display_string .= '<form action="mailsend.php" method ="POST" >';
  $display_string .= '<td><input type="submit" value="Approve" Onclick="change()" id="myButton1" ></td>';
$display_string .='</form>';
$display_string .= "</tr>";
}

echo "<br><br><br>";	
$display_string .= "</table>";

echo $display_string;
echo "</div>";
}
?>
<form action="mailsend.php" method ="POST" >
                                <input type="submit" name="submit" value="Approve" >
                                </form>
											
										
								

								
							</div>
						</div>

					
					</div>
				</div>

			

			</div>
		</div>
	</div>

<script>
function change() // no ';' here
{
  document.getElementById("myButton1").value = "Approved";
   document.getElementById("myButton1").disabled = "True";

}
</script>

   
	<!-- Loading Scripts -->
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

</html>
