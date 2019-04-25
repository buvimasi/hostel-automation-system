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
	<?php include('student/includes/header.php');?>
	<div class="ts-main-content">
		<?php include('student/includes/sidebar.php');?>
		<div class="content-wrapper">
			<div class="container-fluid">

				<div class="row">
					<div class="col-md-12">
					
						<h2 class="page-title">GRIEVANCES</h2>

						<div class="row">
					<div class="col-md-6 col-md-offset-3">
						<div class="well row pt-2x pb-3x bk-light">
							<div class="col-md-8 col-md-offset-2">

<form method="post" action="studentinsert.php" name="registration" class="form-horizontal" onSubmit="return valid();">
											
										


<div class="form-group">
	<label for="" class="text-uppercase text-sm">Email id</label>
									<input type="email" placeholder="emailid" name="email" class="form-control mb">
<label for="" class="text-uppercase text-sm">Grievances</label>
									<input type="text" placeholder="Enter Here.." name="grievence" class="form-control mb">
									
									

									<input type="submit" name="submit" class="btn btn-primary btn-block" value="Register" >
<button class="btn btn-primary btn-block" type="submit">Reset</button>

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