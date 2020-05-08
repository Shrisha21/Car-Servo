<?php

// Create connection
$conn = new mysqli('localhost', 'root', '' );

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
//echo "Connected successfully."."<br>";
session_start();
mysqli_select_db($conn,"car servo");
$wt=$_POST['Wash'];
$dt=$_POST['dte'];
$gd=$_POST['Garrage'];
$u=$_SESSION['username'];
$t="SELECT max(id) from wash_details where Full_name='$u'";
$rr=mysqli_query($conn,$t);
$s=mysqli_fetch_row($rr);
$co= implode(',', $s);
$sql = "UPDATE wash_details set wtype='$wt',datew='$dt',gd='$gd' where Full_name='$u' AND id='$co'";
if($conn->query($sql)===TRUE)
{
			header("location: wchange.php");
}
else
	echo "Error:" .$sql ."<br>" .$conn->error;
?>