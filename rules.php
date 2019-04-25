<?php
session_start();
include('includes/config.php');
if(isset($_POST['login']))
{
$email=$_POST['email'];
$password=$_POST['password'];
$stmt=$mysqli->prepare("SELECT email,password,id FROM userregistration WHERE email=? and password=? ");
				$stmt->bind_param('ss',$email,$password);
				$stmt->execute();
				$stmt -> bind_result($email,$password,$id);
				$rs=$stmt->fetch();
				$stmt->close();
				$_SESSION['id']=$id;
				$_SESSION['login']=$email;
				$uip=$_SERVER['REMOTE_ADDR'];
				$ldate=date('d/m/Y h:i:s', time());
				if($rs)
				{
             $uid=$_SESSION['id'];
             $uemail=$_SESSION['login'];
$ip=$_SERVER['REMOTE_ADDR'];
$geopluginURL='http://www.geoplugin.net/php.gp?ip='.$ip;
$addrDetailsArr = unserialize(file_get_contents($geopluginURL));
$city = $addrDetailsArr['geoplugin_city'];
$country = $addrDetailsArr['geoplugin_countryName'];
$log="insert into userLog(userId,userEmail,userIp,city,country) values('$uid','$uemail','$ip','$city','$country')";
$mysqli->query($log);
if($log)
{
header("location:dashboard.php");
				}
}
				else
				{
					echo "<script>alert('Invalid Username/Email or password');</script>";
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
	<title>Hostel Rules</title>
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
					
						<h2 class="page-title"> <img src="img/gctl.jpg" class="ts-avatar hidden-side" alt="" height="70" width="70">     <b>Hostel Rules</b> </h2>
                          
						
                                <p style= font-size:20px; align:left; font-family:verdana;>1.Inmates will be allowed to go home once in a month only if parents give written requisitions
stating the reson, duration of stay etc. they will be permitted to go home only for valid
reasons.The parents should apply to the deputy warden directly for permission to send the
daughter home.<br>2. The girl students are not permitted to go to guardian’s house for overnight stay,
unless there is a specic written requisition from parents.<br>
3.Only 3 authorised visitors (including parents) are permitted. They should have the visitors
cards with photo afixed (and signed by the associate warden) when they call on their wards.
Viisitors are requested to visit their wards only during visiting hours.<br>
4.Students should return to the hostel before 6.30 p.m.<br>
5.Roll call will be taken at 6.30 p.m.<br>
6.Students are advised not to wear costly jewellery items.<br>
7.Students are permitted to go out during holidays for a maximum duration of 4 hours<br>
8.After signing in the register kept for the purpose. They have to get prior permission from the
deputy warden, if they want to go out a duration exceeding four hours but limited to 6 hours.
                        <h3><b>MESS TIMINGS:</b></h3>
                       <p style=font-size:20px;> <br>
Breakfast :  7.30 a.m. to 9.00 p.m.<br>
Lunch&emsp;:      12.45 p.m. to 2.15 p.m. <br> 
Dinner &emsp;:    7.00 p.m. to 8.30 p.m. <br> 
                        </p>
                        <h3><b>Girls Hostel Incharge:</b></h3>
                    <p style=font-size:20px;>
Three separate hostel blocks are available for Girls. The hostel is managed by a hostel committee including
members from students and faculty. The Hostel is run on no loss no gain basis. The mess bill is based on a
dividing system among the hostelers.<br>

<b>Warden :</b> Dr. P. Thamarai, Principal<br>
<b>Associate Warden :</b> Dr. M.Nataraj, PME<br>
<b>Amaravathi -Deputy Warden:</b> Dr.J.C.Miraclin Joyce Pamila, AP CSE
Ph. no: 9843886035<br>


<b>Kothaiyaru- Deputy Warden:</b> Prof.K.Rekha, AP Civil
Ph. no: 9944780773<br>
<b>Manimutharu- Deputy Warden:</b> Dr.S.Chitra, AP EEE
Ph. no: 9943694610<br>
                        </p>
</p>
							
								
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