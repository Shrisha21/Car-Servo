<?php

// Create connection
$conn = new mysqli('localhost', 'root', '' );
session_start();
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
//echo "Connected successfully.";

mysqli_select_db($conn,"car servo");
//echo "DB selected Successfully.";
$name = $_POST['uname'];
$opsd = $_POST['opsw'];
$npsd = $_POST['npsw'];
$cpsd = $_POST['rpsw'];
$selps ="SELECT Password FROM user_details WHERE Full_Name='$_SESSION[username]'";
$rr=mysqli_query($conn,$selps);
$s=mysqli_fetch_row($rr);
//echo implode($s);
if(implode($s)==$opsd)
{
	if($npsd==$cpsd)
	{
		$sql="UPDATE user_details set Password='$npsd',psw_repeat='$npsd' where Full_Name='$name' AND Password='$opsd'";
		if($conn->query($sql)===TRUE)
		{
			header("location: chpsdlog.php");
		}
		else
		{
			header("location: chpsdfail.php");
		}
	}
	else
		{
			header("location: chpsdfail.php");
		}
}	
else
{
	header("location: chpsdfail.php");
} 
?>