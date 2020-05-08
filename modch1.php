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
$su=$_SESSION['username'];
$c=$_POST['Current_car'];
$o=$_POST['other_options'];
$m=$_POST['modification_look'];
$t="SELECT max(id) from modification where user_name='$su'";
$rr=mysqli_query($conn,$t);
$s=mysqli_fetch_row($rr);
$co= implode(',', $s);
$r=$_POST['other_requirements'];
$g=$_POST['name'];
$md=$_POST["mod"];
$mod=implode(',',$md); 
$cl=$_POST["color"];
$sql = "UPDATE modification set current_car='$c',Modification_type='$mod',other_options='$o',color='$cl',other_colors='$m',other_req='$r',garage_name='$g' where user_name='$su' AND id='$co'";
if($conn->query($sql)===TRUE)
{
			header("location: modsubmit.php");
}
else
	echo "Error:" .$sql ."<br>" .$conn->error;
?>