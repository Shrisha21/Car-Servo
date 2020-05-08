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

$n = "SELECT stock,name from tbl_product";

$result = mysqli_query($conn, $n);
$result = mysqli_query($conn, $n);
while ($row = $result->fetch_assoc()) {
$s=$row["stock"];
echo $s;
}


?>