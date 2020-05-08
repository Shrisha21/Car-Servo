<?php
session_start();

// Create connection
$conn = new mysqli('localhost', 'root', '' );

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
//echo "Connected successfully.";

mysqli_select_db($conn,"car servo");
//echo "DB selected Successfully.";
$usernames=$_SESSION['username'];
$nme = $_POST['nnme'];
$rme = $_POST['rnme'];
$psw = $_POST['pass'];

$query = mysqli_query($conn,"SELECT Password FROM user_details WHERE Full_Name='$usernames'");
$result = mysqli_fetch_row($query);
if(implode($result)==$psw)
{
	if($nme==$rme)
	{
		$sqlu="UPDATE user_details set Full_Name='$nme' where Full_Name='$usernames' AND Password='$psw'";
		$sqlc="UPDATE cart set user_name='$nme' where user_name='$usernames'";
		$sqlm="UPDATE modification set user_name='$nme' where user_name='$usernames'";
		$sqlf="UPDATE feedback set Full_Name='$nme' where Full_Name='$usernames'";
		$sqlw="UPDATE wash_details set Full_Name='$nme' where Full_Name='$usernames'";
		if($conn->query($sqlu)===TRUE)
		{
			if($conn->query($sqlc)===TRUE)
			{
				if($conn->query($sqlm)===TRUE)
				{
					if($conn->query($sqlf)===TRUE)
					{
						if($conn->query($sqlw)===TRUE)
						{
							header("location: chnamelog.php");
						}
					}
				}
			}				
		}
	}
	else
	{
		header("location: chnamefail.php");
	} 
}	
else
{
	header("location: chnamefail.php");
} 
?>