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
$r=$_SESSION['accessories_name'];

$s=mysqli_query($conn,"SELECT quantity from cart where accessories_name='$r'");
$q=$s->fetch_assoc();
$b=$q['quantity'];

 $u=$_SESSION['username'];
 	
$sa= mysqli_query($conn,"SELECT stock FROM tbl_product where name='$r'");	
$row = $sa->fetch_assoc();
$s11=$row['stock'];  
$rr=$s11+$b;
$sql="UPDATE tbl_product SET stock='$rr' WHERE name='$r'";
mysqli_query($conn,$sql);



$sql1="DELETE from cart WHERE user_name='$u' AND accessories_name='$r'";
if($conn->query($sql1)===TRUE)
    {
		header("location:accessories.php");
    }
?>
