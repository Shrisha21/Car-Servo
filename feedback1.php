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
$s=$_POST['feedback'];
date_default_timezone_set('Asia/Kolkata');
$timezone = date_default_timezone_get();
$date = date('Y/m/d');
$sql = "INSERT INTO feedback(Full_Name,Feedback,Date) VALUES ('$su','$s','$date')";
if($conn->query($sql)===TRUE)
{
		header("location:feedback.php");
}	

mysqli_close($conn);
?>