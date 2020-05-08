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
	 
?> 
<!DOCTYPE html>  
 <html>  
      <head>  
           <title>Car services</title>  
           <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
           <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
           <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  
		    <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
   <script src="https://code.jquery.com/jquery-2.2.0.min.js" type="text/javascript"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">
<style>
.btn {        
        font-size: 15px;
        font-weight: bold;
    }

button {
    background-color: gray;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: auto;
    opacity: 0.9;
}

button:hover {
    opacity:1;
}
</style>
  
      </head>  
      <body>  
	  <nav class="navbar navbar-default navbar-fixed-top">
  <div class="container-fluid">
    <div class="navbar-header">
	<a class="navbar-brand" href="#" target="_blank">SERVO</a>
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-left">
	  
       <li><a href="adminlogin.php">HOME</a></li>
		</ul>
		<ul class="nav navbar-nav navbar-right">
		<button onclick="window.location.href = 'adminlogout.php';" role="button" class="btn btn-outline-secondary" target="_blank">Logout</button>
    </div>
  </div>
</nav>
<br>
<br>
 <div style="clear:both"></div>  
                <br />  
                <div class="jumbotron">
				 <div class="container text-center">
                <h2>Modification Details</h2>
				</div></div>
                <div class="table-responsive">  
                     <table class="table table-bordered">  
                          <tr> 
							  
                               <th width="20%">User Name</th>     
                               <th width="15%">Car </th>  
                               <th width="5%">Modification Type</th> 
								<th width="20%">Other options</th>							   
							    <th width="5%">Colors</th> 
								<th width="5%">Other Colors</th> 
								<th width="5%">Other Requirements</th> 
								<th width="5%">Garage Name</th> 
                          </tr> 
						  <tr>
<?php				

$sql=mysqli_query($conn,"SELECT * from modification");
 while($row = mysqli_fetch_array($sql,MYSQLI_ASSOC)) 
{						
echo '<td>'.$row["user_name"].'</td>';
echo '<td>'.$row["current_car"].'</td>';
echo '<td>'.$row["Modification_type"].'</td>';
echo '<td>'.$row["other_options"].'</td>';
echo '<td>'.$row["color"].'</td>';
echo '<td>'.$row["other_colors"].'</td>';
echo '<td>'.$row["other_req"].'</td>';
echo '<td>'.$row["garage_name"].'</td>';?>
</tr>
<?php
}
?>
</table>
</div>
</div>

<ul align="center"> <button onclick="window.location.href = 'adminlogin.php';" role="button" class="btn btn-outline-secondary" target="_blank">Back</button></ul>
</body>
</html>
									