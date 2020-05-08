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
$cname=$_POST['cname'];
$cno=$_POST['cno'];
$ct=$_POST['radio'];
$wt=$_POST['Wash'];
$dt=$_POST['dte'];
$gd=$_POST['Garrage'];
$uname=$_SESSION['username'];
date_default_timezone_set('Asia/Kolkata');
$timezone = date_default_timezone_get();
$date = date('m/d/Y');
$d=strtotime($dt);
$de=strtotime($date);
if($d>=$de)
{

$sql = "INSERT INTO wash_details(Full_Name,cname,cno,ctype,wtype,datew,gd) VALUES ('$uname','$cname','$cno','$ct','$wt','$dt','$gd')";
	if($conn->query($sql)===TRUE)
    {
		
		
		$_SESSION['cno']=$cno;
		
		header("location: wchange.php");
    }
    else 
	{
		echo "Error:" .$sql ."<br>" .$conn->error;
	}
}
else
{
	header("location: carwase1.php");
}
	
	mysqli_close($conn);
?>