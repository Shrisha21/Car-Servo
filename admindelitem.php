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

 $u=$_POST['name']; 
$sql="DELETE from tbl_product WHERE name='$u'";
echo $sql;
if($conn->query($sql)===TRUE)
    {
		header("location: admindelpage.php");
    }
?>