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
 $h=$_POST['quantity'];
 $dd=$_POST['price'];
$sql="UPDATE tbl_product SET stock='$h',price='$dd' WHERE name='$u'";
echo $sql;
if($conn->query($sql)===TRUE)
    {
		header("location: adminaccessories.php");
    }
?>