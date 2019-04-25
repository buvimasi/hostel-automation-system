
<!doctype html>
<html lang="en" class="no-js">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
	<meta name="description" content="">
	<meta name="author" content="">
	<meta name="theme-color" content="#3e454c">
	<title>Requisition</title>
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
	<?php include('includes/header.php');?>
	<div class="ts-main-content">
		<?php include('includes/sidebar.php');?>
		<div class="content-wrapper">
			<div class="container-fluid">

				<div class="row">
					<div class="col-md-12">
					
						<h2 class="page-title">Requisition </h2>

						<div class="row">
							<div class="col-md-12">
								<div class="panel panel-primary">
									<div class="panel-heading">Fill all Info</div>
									<div class="panel-body">
                                        <?php
$conn = mysqli_connect("localhost", "root", "", "portal");

$UserID = $_POST['q'];

$sql = "SELECT * FROM student WHERE registerNumber='$UserID'";
$query = mysqli_query($conn, $sql);

if ($row = mysqli_fetch_assoc($query)) { 
    $registerNumber = $row['registerNumber'];
	$firstname = $row['firstname'];
    $branch = $row['branch'];
    $year = $row['year'];
   

}
                                        ?>
			<form method="post" action="insertion.php" name="registration" class="form-horizontal" onSubmit="return valid();">
											
										


<div class="form-group">
<label class="col-sm-2 control-label">firstname : </label>
<div class="col-sm-8">
    <input type="text"name="firstname" value="<?php echo $firstname; ?>"  class="form-control" required="required">
</div>
</div>



<div class="form-group">
<label class="col-sm-2 control-label">RegisterNumber : </label>
<div class="col-sm-8">
<input type="number"name="registerNumber" value="<?php echo $registerNumber; ?>"  class="form-control" required="required">
</div>
</div>

<div class="form-group">
<label class="col-sm-2 control-label">Room No: </label>
<div class="col-sm-8">
<input type="number" name="roomno" value="<?php echo $row["roomno"]; ?>"  class="form-control" required="required">
</div>
</div>

<div class="form-group">
<label class="col-sm-2 control-label">Branch: </label>
<div class="col-sm-8">
<input type="text"name="branch" value="<?php echo $branch; ?>" class="form-control" required="required">
</div>
</div>
                <div class="form-group">
<label class="col-sm-2 control-label">Year: </label>
<div class="col-sm-8">
<input type="text"name="year"  value="<?php echo $year; ?>"  class="form-control" required="required">
</div>
</div>
<div class="form-group">
<label class="col-sm-2 control-label">Place of visit: </label>
<div class="col-sm-8">
<input type="text" name="placeofvisit"   class="form-control" required="required">
</div>
</div>
<div class="form-group">
<label class="col-sm-2 control-label">Reason for visit : </label>
<div class="col-sm-8">
<input type="text" name="reasonforvisit"   class="form-control" required="required">
</div>
</div>


<div class="form-group">
<label class="col-sm-2 control-label">Departure Date: </label>
<div class="col-sm-8">
<input type="date" name="depature"   class="form-control"  required="required">
</div>
</div>
                <div class="form-group">
<label class="col-sm-2 control-label">Arrival Date: </label>
<div class="col-sm-8">
<input type="date" name="arrival"   class="form-control"  required="required">
</div>
</div>
	<div class="col-sm-6 col-sm-offset-4">
<button class="btn btn-default" type="submit">Reset</button>
<input type="submit" name="submit" Value="Submit" class="btn btn-primary">

</div>

</form>

									</div>
									</div>
								</div>
							</div>
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