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
//echo "DB selected Successfully""."<br>";

 $u=$_SESSION['username'];
$sql="DELETE from cart WHERE user_name='$u'";
if($conn->query($sql)===TRUE)
    {
		header("location:userp.php");
    }
?>