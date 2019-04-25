<?php
session_start();
include('includes/config.php');
if(isset($_POST['submit']))
{
$email=$_POST['email'];
$grievence=$_POST['grievence'];
$query="INSERT INTO grievence(email,grievence) VALUES ('$email,$grievence)";
if(mysqli_query($mysqli,$query))
{
    echo"<script>alert('Successfully submitted')</script>";
}
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
	<title>Gcthostel portal</title>
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
					
						<h2 class="page-title">GRIEVANCES</h2>

						<div class="row">
					<div class="col-md-6 col-md-offset-3">
						<div class="well row pt-2x pb-3x bk-light">
							<div class="col-md-8 col-md-offset-2">

<form method="post" action="insert.php" name="registration" class="form-horizontal" onSubmit="return valid();">
											
										


<div class="form-group">
<label class="col-sm-2 control-label">Emailid </label>
<div class="col-sm-8">
    <input type="email"name="email"  class="form-control" required="required">
</div>
</div>
<div class="form-group">
<label class="col-sm-2 control-label">grievance </label>
<div class="col-sm-8">
    <input type="grievence" name="grievence" size="50" class="form-control" required="required">
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