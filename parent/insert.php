<?php
$mysql_host="localhost";
$mysql_user="root";
$mysql_password="";
$conn=mysqli_connect($mysql_host,$mysql_user,$mysql_password,'portal');
$email=$_POST["email"];
$grievence=$_POST["grievence"];
if($conn->connect_error)
echo"connection error";
else
{
$sql1="INSERT INTO grievence(email,grievence) VALUES ('{$email}','{$grievence}')";
if(mysqli_query($conn,$sql1)===True)
{
    $message="Request sent successfully";
    echo "<script type='text/javascript'>alert('$message');</script>";
header("location:grievence.php");
    exit();
}
else
{
echo"Insert Error in sql1";
}
}
$conn->close();
?>