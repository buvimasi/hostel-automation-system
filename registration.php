<?php
session_start();
include('includes/config.php');
if(isset($_POST['submit']))
{
$firstname=$_POST['firstname'];
$lastname=$_POST['lastname'];
$rollno=$_POST['rollno'];
$branch=$_POST['branch'];
$year=$_POST['year'];
$roomno=$_POST['roomno'];
$contact=$_POST['contact'];
$emailid=$_POST['emailid'];
$password=$_POST['password'];
$photo=$_POST['photo'];
$query="INSERT INTO student(firstname,lastname,registerNumber,branch,year,roomno,contactno,email,password,photo) VALUES ('$firstname','$lastname','$rollno','$branch','$year','$roomno','$contact','$emailid','$password','$photo')";
if(mysqli_query($mysqli,$query))
{
    echo"<script>alert('Student Succssfully register')</script>";
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
	<title>Student Registration</title>
     <link rel="icon" href="img/logogct.jpg" type="image/png">
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
					
						<h2 class="page-title">Student Registration </h2>

						<div class="row">
							<div class="col-md-12">
								<div class="panel panel-primary">
									<div class="panel-heading">Fill all Info</div>
									<div class="panel-body">
			<form method="POST"  name="student" class="form-horizontal" onSubmit="return valid();">
											
										





<div class="form-group">
<label class="col-sm-2 control-label">First Name : </label>
<div class="col-sm-8">
<input type="text" name="firstname" id="firstname"  class="form-control" required="required" >
</div>
</div>


<div class="form-group">
<label class="col-sm-2 control-label">Last Name : </label>
<div class="col-sm-8">
<input type="text" name="lastname" id="lastname"  class="form-control" required="required">
</div>
</div>
                <div class="form-group">
    <label class="col-sm-2 control-label"> Registration No : </label>
<div class="col-sm-8">
<input type="text" name="rollno" id="rollno"  class="form-control" required="required" >
</div>
</div>
 <div class="form-group">
<label class="col-sm-2 control-label">Branch: </label>
<div class="col-sm-8">
<select name="branch" id="branch" class="form-control" required="required">
<option value="">Select branch</option>
<option value="CSE">CSE</option>
    <option value="CIVIL">Civil</option>
    <option value="ECE">ECE</option>
    <option value="EEE">EEE</option>
    <option value="EIE">EIE</option>
    <option value="PRODUCTION">Production</option>
    <option value="IT">IT</option>
    <option value="IBT">IBT</option>
    <option value="MECHANICAL">Mechanical</option>

</select>
</div>
</div>
                <div class="form-group">
<label class="col-sm-2 control-label">Year: </label>
<div class="col-sm-8">
<select name="year" id="year" class="form-control" required="required">
<option value="">Select Year</option>
<option value="first">first</option>
    <option value="second">second</option>
    <option value="third">third</option>
    <option value="fourth">fourth</option>
   
</select>
</div>
</div>
   <div class="form-group">
<label class="col-sm-2 control-label">Room No : </label>
<div class="col-sm-8">
<input type="text" name="roomno" id="roomno"  class="form-control">
</div>
</div>



<div class="form-group">
<label class="col-sm-2 control-label">Contact No : </label>
<div class="col-sm-8">
<input type="text" name="contact" id="contact"  class="form-control" required="required">
</div>
</div>
 


<div class="form-group">
<label class="col-sm-2 control-label">Email id: </label>
<div class="col-sm-8">
<input type="email" name="emailid" id="emailid"  class="form-control"  required="required">
<span id="user-availability-status" style="font-size:12px;"></span>
</div>
</div>

<div class="form-group">
<label class="col-sm-2 control-label">Password: </label>
<div class="col-sm-8">
<input type="password" name="password" id="password"  class="form-control" required="required">
</div>
</div>


<div class="form-group">
<label class="col-sm-2 control-label">Confirm Password : </label>
<div class="col-sm-8">
<input type="password" name="cpassword" id="cpassword"  class="form-control" required="required">
</div>
</div>
<div class="form-group">
<label class="col-sm-2 control-label">Upload Photo : </label>
<div class="col-sm-8">
<input type="file" name="photo" id="photo"  class="form-control" required="required">
</div>
</div>
						



<div class="col-sm-6 col-sm-offset-4">
<button class="btn btn-default" type="submit">Cancel</button>
<input type="submit" name="submit" Value="Register" class="btn btn-primary">
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