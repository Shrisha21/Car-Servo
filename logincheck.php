<?php

// Create connection
$conn = new mysqli('localhost', 'root', '' );

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
//echo "Connected successfully.";

mysqli_select_db($conn,"car servo");
//echo "DB selected Successfully.";

$myusername = mysqli_real_escape_string($conn,$_POST['uname']);
$mypassword = mysqli_real_escape_string($conn,$_POST['psw']); 
if($myusername=="admin" && $mypassword=="ysc")
{
	session_start();
	$_SESSION['username'] = $myusername;
	 header("location: adminlogin.php"); 
}
else
{
	
      
$sql = "SELECT * FROM user_details WHERE Full_Name = '$myusername' and Password = '$mypassword'";
$result = mysqli_query($conn,$sql) or die(mysql_error($conn));
$count=mysqli_num_rows($result);	  
if($count==1)
{
	session_start();
	$_SESSION['username'] = $myusername;
}
else
{
   header("location: loginfail.php"); 
}

if (isset($_SESSION['username']))
{
    $username = $_SESSION['username'];
	header("location: users.php");
}
}

mysqli_close($conn);

?>