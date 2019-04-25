<?php
$mysql_host="localhost";
$mysql_user="root";
$mysql_password="";
$conn=mysqli_connect($mysql_host,$mysql_user,$mysql_password,'portal');
$email=$_POST["email"];
$password=$_POST["password"];
if($conn->connect_error)
echo"connection error";
else
{
$sql1="select email,password from userregistration where email='$email' and password='$password'";
$result=mysqli_query($conn,$sql1);
$row = mysqli_fetch_array($result,MYSQLI_ASSOC);
 
      $count = mysqli_num_rows($result);
      
      // If result matched $myusername and $mypassword, table row must be 1 row
		
      if($count == 1) {
         
         echo"<a href='otp.php'>Successfully loggedin</a>";
         
      }else {
         echo "Your Login Name or Password is invalid";
      }
}
$conn->close();
?>
