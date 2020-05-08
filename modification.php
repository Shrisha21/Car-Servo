<?php
session_start();
// Create connection
$conn = new mysqli('localhost', 'root', '' );

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
//echo "Connected successfully."."<br>";

mysqli_select_db($conn,"car servo");
$su=$_SESSION['username'];
$c=$_POST['Current_car'];
$o=$_POST['other_options'];
$m=$_POST['modification_look'];
$r=$_POST['other_requirements'];
$g=$_POST['name'];
$md=$_POST["mod"];
$mod=implode(',',$md);
$cl=$_POST["color"];

$sql = "INSERT INTO modification(user_name,current_car,Modification_type,other_options,color,other_colors,other_req,garage_name) VALUES ('$su','$c','$mod','$o','$cl','$m','$r','$g')";

if($conn->query($sql)===TRUE)
{
		header("location:modsubmit.php");
}	
		
mysqli_close($conn);
?>