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

	$date = new DateTime();
        $timestamp = $date->getTimestamp();
		
		$target_dir = "pics/"; /* uploads is the folder where the selected file will be stored in server*/
		$target_file = $target_dir . $timestamp . basename($_FILES["image"]["name"]); 


		$name=$timestamp . basename( $_FILES["image"]["name"]); /* File name that is being uploaded*/
		$file_size = $_FILES['image']['size'];
		$file_tmp = $_FILES['image']['tmp_name'];
		$file_type = $_FILES['image']['type'];

	$sql = "INSERT INTO tbl_product(name,image,price,stock) VALUES ('$_POST[uname]','$target_file','$_POST[price]','$_POST[stock]')";
	move_uploaded_file($_FILES["image"]["tmp_name"], $target_file) ;
    if($conn->query($sql)===TRUE)
    {
		header("location:adminaccessories.php");
    }

else
{
	
	header("location: adminadditem.php");
}

mysqli_close($conn);
?>