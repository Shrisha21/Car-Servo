<?php
session_start();
if(!      isset($_SESSION['username'])       )
{
header('Location: car.php');
}
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
  input[type=text], select, textarea {
    width: 100%;
    padding: 12px;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
    margin-top: 6px;
    margin-bottom: 16px;
    resize: vertical;
}

input[type=submit] {
    background-color: gray;
    color: white;
    padding: 12px 20px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}

input[type=submit]:hover {
    background-color:gray;
}

.container4 {
    border-radius: 5px;
    background-color: #f2f2f2;
    padding: 20px;
}
  .dropbtn {
    background-color:gray;
    color: white;
    padding: 10px 24px;
    font-size: 15px;
    border: none;
    cursor: pointer;
}
.dropdown {
    position: relative;
    display: inline-block;
}

.dropdown-content {
    display: none;
    position: absolute;
    background-color: #f1f1f1;
    min-width: 160px;
    overflow: auto;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    z-index: 1;
}

.dropdown-content a {
    color: black;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
}
.show {display: block;}
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
  .slick-slide {
    margin: 0px 20px;
}

.slick-slide img {
    width: 100%;
}

.slick-slider
{
    position: relative;
    display: block;
    box-sizing: border-box;
    -webkit-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
            user-select: none;
    -webkit-touch-callout: none;
    -khtml-user-select: none;
    -ms-touch-action: pan-y;
        touch-action: pan-y;
    -webkit-tap-highlight-color: transparent;
}

.slick-list
{
    position: relative;
    display: block;
    overflow: hidden;
    margin: 0;
    padding: 0;
}
.slick-list:focus
{
    outline: none;
}
.slick-list.dragging
{
    cursor: pointer;
    cursor: hand;
}

.slick-slider .slick-track,
.slick-slider .slick-list
{
    -webkit-transform: translate3d(0, 0, 0);
       -moz-transform: translate3d(0, 0, 0);
        -ms-transform: translate3d(0, 0, 0);
         -o-transform: translate3d(0, 0, 0);
            transform: translate3d(0, 0, 0);
}

.slick-track
{
    position: relative;
    top: 0;
    left: 0;
    display: block;
}
.slick-track:before,
.slick-track:after
{
    display: table;
    content: '';
}
.slick-track:after
{
    clear: both;
}
.slick-loading .slick-track
{
    visibility: hidden;
}

.slick-slide
{
    display: none;
    float: left;
    height: 100%;
    min-height: 1px;
}
[dir='rtl'] .slick-slide
{
    float: right;
}
.slick-slide img
{
    display: block;
}
.slick-slide.slick-loading img
{
    display: none;
}
.slick-slide.dragging img
{
    pointer-events: none;
}
.slick-initialized .slick-slide
{
    display: block;
}
.slick-loading .slick-slide
{
    visibility: hidden;
}
.slick-vertical .slick-slide
{
    display: block;
    height: auto;
    border: 1px solid transparent;
}
.slick-arrow.slick-hidden {
    display: none;
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
    
  .carousel-inner img {
      width: 100%; /* Set width to 100% */
      margin: auto;
      min-height:200px;
  }

  @media (max-width: 600px) {
    .carousel-caption {
      display: none; 
    }
  }
  .modal-header, h4, .close {
      background-color: #5cb85c;
      color:white !important;
      text-align: center;
      font-size: 30px;
  }
  .modal-footer {
      background-color: #f9f9f9;
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
	  
        <li><a href="users.php">HOME</a></li>
        <li><a href="services.html">SERVICES</a></li>
        <li><a href="contact.php">CONTACT US</a></li>
		<li><a href="feedback.php">FEEDBACK</a></li>
		</ul>
		<ul class="nav navbar-nav navbar-right">
		<div class="dropdown">
<button onclick="myFunction()" class="dropbtn" >Manage Account</button>
  <div id="myDropdown" class="dropdown-content">
    <a href="chpswd.php">Change Password</a>
    <a href="chname.php">Change Username</a>
  </div>
</div>
		<button onclick="window.location.href = 'carlogout.php';" role="button" class="dropbtn" target="_blank">Logout</button>
    </div>	
  </div>
</nav>
<div class="jumbotron">
  <div class="container text-center">
  <h2>FEEDBACK FORM</h2>
</div>
</div>
<div style="width: 100%; overflow: hidden; padding:140px 40px 40px 120px;">
				
				<div style="width: 400px; float: left;"> 
				
						<form action="feedback1.php" method="POST">
						
								<textarea name="feedback" placeholder= "Enter feedback here..." rows="5" cols="35"></textarea>  
								
								<br />
								<br />
								<input type="submit" value="Post Feedback" />
						
						</form>
				
				</div>
				
				<div style="margin-left: 420px;"> 
				
				<?php
				$servername = "localhost";
				$username = "root";
				$password = "";
				$dbname = "car servo";

				// Create connection
				$conn = new mysqli($servername, $username, $password, $dbname);
				$x = $_SESSION['username'];
				
				$sql1 = "SELECT * FROM feedback where Full_Name='$x' ";
				$result1=mysqli_query($conn,$sql1);
				
		
							if(mysqli_num_rows($result1) == 0)
							{
									echo "No Feedback posted !!";
							}
							
							else
							{
									echo " <table align='left'>";
									echo "<tr> 
												<th width='1%' align='left'> </th>
												<th width='50%' align='left'> Feedback </th>
												<th width='40%' align='left'> Posted on </th>
												</tr>
									";
									$i = 1;
									while($row = mysqli_fetch_array($result1)) 
									{             
											echo "<tr>";
											echo "<td>" . $i . ".</td>"; 
											echo "<td>" . $row['Feedback'] . "</td>" ;
											echo "<td>" . $row['Date'] . "</td>" ;
											echo "</tr>";
											$i = $i +1;
									} 
									echo "</table>";
							}
							
					
					 
					
						?>
				
				</div>
				
		</div>
				<div class="jumbotron">
  <div class="container text-center">
  <h2>Other Users Feedback</h2>
</div>
</div>
		<div class="table-responsive">  
                     <table class="table table-bordered">  
                          <tr> 
							  
                               <th width="5%">User Name</th>  
                               <th width="5%">FEEDBACK</th>    
                               <th width="5%">Date Posted</th>
                          </tr> 
						  <tr>
<?php				

$sql=mysqli_query($conn,"SELECT * from feedback");
 while($row = mysqli_fetch_array($sql,MYSQLI_ASSOC)) 
{						
echo '<td>'.$row["Full_Name"].'</td>';
echo '<td>'.$row["Feedback"].'</td>';
echo '<td>'.$row["Date"].'</td>';
?>
</tr>
<?php
}
?>
</table>
</div>
</div>

<ul align="center"> <button onclick="window.location.href = 'users.php';" role="button" class="btn btn-outline-secondary" target="_blank">Home</button></ul>		
</body>
</html>
