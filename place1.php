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
?>
 <!DOCTYPE html>
<html lang="en">
<head>
  <title>Car Services</title>
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
  <style type="text/css">
 .login-form {
		width: 340px;
    	margin: 50px auto;
	}
    .login-form form {
    	margin-bottom: 15px;
        background: #f7f7f7;
        box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
        padding: 30px;
    }
    .login-form h2 {
        margin: 0 0 15px;
    }
    .form-control, .btn {
        min-height: 38px;
        border-radius: 2px;
    }
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

.container {
    padding: 10px;
}

.modal {
    display: none;
    position: fixed; 
    z-index: 1; 
    left: 0;
    top: 0;
    width: 100%; 
    height: 100%; 
    overflow: auto;
    background-color: #474e5d;
    padding-top: 50px;
}

.modal-content {
    background-color: #fefefe;
    margin: 5% auto 15% auto; 
    border: 1px solid #888;
    width: 80%; /
}


hr {
    border: 1px solid #f1f1f1;
    margin-bottom: 25px;
}
 
.close {
    position: absolute;
    right: 35px;
    top: 15px;
    font-size: 40px;
    font-weight: bold;
    color: #f1f1f1;
}

.close:hover,
.close:focus {
    color: #f44336;
    cursor: pointer;
}

.clearfix::after {
    content: "";
    clear: both;
    display: table;
}

@media screen and (max-width: 300px) {
    .cancelbtn, .signupbtn {
       width: 100%;
    }
}
 
    .navbar {
      margin-bottom: 0;
      border-radius: 0;
	  background-color:rgb(232,232,232);
    }
    footer {
      background-color: #f2f2f2;
      padding: 25px;
    }
    
  
  </style>
</head>
<body>

<nav class="navbar navbar-default navbar-fixed-top">
  <div class="container-fluid">
    <div class="navbar-header">
	<a class="navbar-brand"  target="_blank">SERVO</a>
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-left">
	  
        <li><a href="car.php">HOME</a></li>
        <li><a href="#">ABOUT</a></li>
        <li><a href="#">INSPECTION</a></li>
        <li><a href="services.html">SERVICES</a></li>
        <li><a href="#">CONTACT US</a></li>
		</ul>
		<ul class="nav navbar-nav navbar-right">
		<button onclick="window.location.href = 'carlogout.php';" role="button" class="btn btn-outline-secondary" target="_blank">Logout</button>
    </div>	
  </div>
</nav>
<br>
<br>
 <body>
  <div style="clear:both"></div>  
                <br />  
 <h3>Order Details</h3>  
                <div class="table-responsive">  
                     <table class="table table-bordered">  
                          <tr>
                               <th width="20%">Item Name</th>  
                               <th width="10%">Quantity</th>  
                               <th width="15%">Price</th>  
                               <th width="15%">Total</th>
                          </tr> 
							
                      				<?php			
								    $total = 0; 
									$uname=$_SESSION['username'];
                                    $query = mysqli_query($conn,"SELECT * from cart WHERE user_name='$uname'") or die("a"); 
								
									  while($row = mysqli_fetch_array($query,MYSQLI_ASSOC)) 
									 {	 
								        ?> 
								        <tr>
                                        <?php										
										
										 echo '<td align="left">'.$row["accessories_name"].'</td>';
										 echo '<td>'.$row["quantity"].'</td>';
										 echo '<td>Rs '.$row["price"].'</td>';?>
										 <td>Rs <?php echo number_format($row["quantity"] * $row["price"], 2); ?></td> 	
										 </tr>
										 <?php
										    $total = $total + ($row["quantity"] * $row["price"]);  
									 
									 }					 
							   if($total>0)
							   {
                          ?>  
                          <tr>  
                               <td colspan="3" align="right">Grand Total</td>  
                               <td align="left">Rs <?php echo number_format($total, 2); ?></td> 
                          </tr> 
                          <?php
							   } 						  
                             						  
                          ?>  
                     </table>
					 <br>
					 <br>
					<h3> Address</h3>
					 <table class="table table-bordered">
					 <address>
					   <?php
					   $a=$_POST['address'];
					   echo $a;
					   ?>
					   </address>
					 </table>
					<ul align="center"> <button onclick="window.location.href = 'place.php';" role="button" class="btn btn-outline-secondary" target="_blank">OK</button></ul>
                </div>  
           </div>  
</body>
</html>