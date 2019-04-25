<?php
$mysql_host="localhost";
$mysql_user="root";
$mysql_password="";
$conn=mysqli_connect($mysql_host,$mysql_user,$mysql_password,'portal');
$firstname=$_POST["firstname"];
$registerNumber=$_POST["registerNumber"];
$roomno=$_POST["roomno"];
$branch=$_POST["branch"];
$year=$_POST["year"];
$placeofvisit=$_POST["placeofvisit"];
$reasonforvisit=$_POST["reasonforvisit"];
$depature=$_POST["depature"];
$arrival=$_POST["arrival"];
if($conn->connect_error)
echo"connection error";
else
{
$sql1="INSERT INTO card(name,registerNumber,roomno,branch,year,placeofvisit,reasonforvisit,depature,arrival) VALUES ('{$firstname}','{$registerNumber}','{$roomno}','{$branch}','{$year}','{$placeofvisit}','{$reasonforvisit}','{$depature}','{$arrival}')";
if(mysqli_query($conn,$sql1)===True)
{
    $message="Request sent successfully";
    echo "<script type='text/javascript'>alert('$message');</script>";
header("location:leave.php");
    exit();
}
else
{
echo"Insert Error in sql1";
}
}
$conn->close();
?>