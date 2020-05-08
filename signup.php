 <?php

// Create connection
$conn = new mysqli('localhost', 'root', '' );

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
//echo "Connected successfully."."<br>";

mysqli_select_db($conn,"car servo");
//echo "DB selected Successfully""."<br>";

//Email validation
$Email=$_POST['Email'];
$Password=$_POST['Password'];
$psw_repeat=$_POST['psw_repeat'];

$sql = "SELECT * FROM user_details WHERE Email = '$Email'";

$selectresult = mysqli_query($conn,$sql);
if(mysqli_num_rows($selectresult)>0)
{
	die(header("location: signup1 failure.php"));
	
}
	
//Password Validation
	

if($Password==$psw_repeat)
{	
	$sql = "INSERT INTO user_details(Full_Name,Email,Password,psw_repeat,Car_name) 
	VALUES ('$_POST[Full_Name]','$Email','$Password','$psw_repeat','$_POST[Car_name]')";

    if($conn->query($sql)===TRUE)
    {
		header("location: signupsucess.php");
    }
    else 
	{
		echo "Error:" .$sql ."<br>" .$conn->error;
	}
}
else
{
	header("location: signup failure.php");
}

mysqli_close($conn);
?>