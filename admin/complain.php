<?php
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
	<title>Complaints Details</title>
     <link rel="shortcut icon" type="image/jpg" href="img/logogct.jpg"/>
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/dataTables.bootstrap.min.css">
	<link rel="stylesheet" href="css/bootstrap-social.css">
	<link rel="stylesheet" href="css/bootstrap-select.css">
	<link rel="stylesheet" href="css/fileinput.min.css">
	<link rel="stylesheet" href="css/awesome-bootstrap-checkbox.css">
	<link rel="stylesheet" href="css/style.css">
<script language="javascript" type="text/javascript">
var popUpWin=0;
function popUpWindow(URLStr, left, top, width, height)
{
 if(popUpWin)
{
if(!popUpWin.closed) popUpWin.close();
}
popUpWin = open(URLStr,'popUpWin', 'toolbar=no,location=no,directories=no,status=no,menubar=no,scrollbars=yes,resizable=no,copyhistory=yes,width='+510+',height='+430+',left='+left+', top='+top+',screenX='+left+',screenY='+top+'');
}
</script>

</head>

<body>
	<?php include('includes/header.php');?>

	<div class="ts-main-content">
			<?php include('includes/sidebar.php');?>
		<div class="content-wrapper">
			<div class="container-fluid">
				<div class="row">
					<div class="col-md-12"><br><br>
						<h2 class="page-title">Complaints Details</h2>
						<div class="panel panel-default">
							<div class="panel-heading">Complaints Details</div>
							<div class="panel-body">
							
                                        <?php
$query = "SELECT * FROM grievence";
echo "<div align='center'>";
if($conn->query($query)==True)
{
	$res=mysqli_query($conn,$query);
//Build Result String
$display_string = '<table id="zctb" class="display table table-striped table-bordered table-hover" cellspacing="0" width="100%">';
$display_string .= '<tr style="border:1px solid black;">';
    $display_string .= "<th>sno</th>";
$display_string .= "<th>emailid</th>";
$display_string .= "<th>grievances</th>";

$display_string .= "</tr>";
echo "<br><br>";	

// Insert a new row in the table for each person returned
while($row = mysqli_fetch_array($res)) {
   $display_string .= '<tr style="border:1px solid black;">';
     $display_string .= "<td>$row[sno]</td>";
   $display_string .= "<td>$row[email]</td>";
   $display_string .= "<td>$row[grievence]</td>";

$display_string .= "</tr>";
}

echo "<br><br><br>";	
$display_string .= "</table>";

echo $display_string;
echo "</div>";
}
?>

											
										
									</tbody>
								</table>

								
							</div>
						</div>

					
					</div>
				</div>

			

			</div>
		</div>
	</div>

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