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
.select-style {
    border: 1px solid #ccc;
    width: 220px;
    border-radius: 3px;
    overflow: hidden;
}

.select-style select {
    padding: 5px 8px;
    width: 130%;
    border: none;
    box-shadow: none;
    background: transparent;
    background-image: none;
    -webkit-appearance: none;
}

.select-style select:focus {
    outline: none;
}
.container2 {
    display: block;
    position: relative;
    padding-left: 35px;
    margin-bottom: 12px;
    cursor: pointer;
    font-size: 15px;
    -webkit-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    user-select: none;
}

/* Hide the browser's default radio button */
.container1 input {
    position: absolute;
    opacity: 0;
    cursor: pointer;
}

/* Create a custom radio button */
.checkmark {
    position: absolute;
    top: 0;
    left: 0;
    height: 20px;
    width: 20px;
    background-color: #eee;
    border-radius: 50%;
}

/* On mouse-over, add a grey background color */
.container1:hover input ~ .checkmark {
    background-color: #ccc;
}

/* When the radio button is checked, add a blue background */
.container1 input:checked ~ .checkmark {
    background-color: #2196F3;
}

/* Create the indicator (the dot/circle - hidden when not checked) */
.checkmark:after {
    content: "";
    position: absolute;
    display: none;
}

/* Show the indicator (dot/circle) when checked */
.container1 input:checked ~ .checkmark:after {
    display: block;
}

/* Style the indicator (dot/circle) */
.container1 .checkmark:after {
 	top: 9px;
	left: 9px;
	width: 8px;
	height: 8px;
	border-radius: 50%;
	background: white;
}
.select-style {
    border: 1px solid #ccc;
    width: 220px;
    border-radius: 3px;
    overflow: hidden;
}

.select-style select {
    padding: 5px 8px;
    width: 130%;
    border: none;
    box-shadow: none;
    background: transparent;
    background-image: none;
    -webkit-appearance: none;
}

.select-style select:focus {
    outline: none;
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
        <li><a href="#">ABOUT</a></li>
        <li><a href="services.html">SERVICES</a></li>
        <li><a href="contact.php">CONTACT US</a></li>
		</ul>
		<ul class="nav navbar-nav navbar-right">
		<button onclick="window.location.href = 'carlogout.php';" role="button" class="btn btn-outline-secondary" target="_blank">Logout</button>
    </div>	
  </div>
</nav>
 <div class="login-form">
      <form action="modch1.php" method="POST">
        <h2 class="text-center"></h2>       
        <h2>Change Customisation</h2>
		<div class="form-group">
            <input type="text" class="form-control" placeholder="Current car" name="Current_car">
        </div>
		<p>Modification type<p>
	     <label> <input type="checkbox"  name="mod[]" value="Stereo Systems"            style="margin-bottom:15px"> Stereo Systems</label><br/>
		 <label> <input type="checkbox"  name="mod[]" value="Car Graphics"              style="margin-bottom:15px"> Car Graphics (Stickers)</label><br/>
		 <label> <input type="checkbox"  name="mod[]" value="Sun Roof"  				style="margin-bottom:15px"> Sun Roof</label><br/>
		 <label> <input type="checkbox"  name="mod[]" value="Spoilers"  				style="margin-bottom:15px"> Spoilers</label><br/>
		<div class="form-group">
            <input type="text" class="form-control" placeholder="other options"  name="other_options">
        </div>
		<p style="font-size:15px"><b><i>Choose The color for body painting</b></i></p>
		<div class="select-style">
		  <select name="color">
		    <option value=" ">None</option>
			<option value="Silver">Silver</option>
			<option value="Blue">Blue</option>
			<option value="Black">Black</option>
			<option value="White">White</option>
			<option value="Maroon">Maroon</option>
		  </select>
		</div>
		<br>
        <div class="form-group">
            <input type="text" class="form-control" placeholder="Other Color"  name="modification_look">
        </div>
		<div class="form-group">
            <input type="text" class="form-control" placeholder="Other Requirements"  name="other_requirements">
        </div>
	
		 <p style="font-size:15px">Garrage Details<p>
		<div class="select-style">
		<select name="name">
		<option value="Century auto works">Century auto works</option>
		<option value="Sri Laxmi motors">Sri Laxmi motors</option>
		<option value="Auto Matrix">Auto Matrix</option>
		<option value="Govinda Auto works">Govinda Auto works<br></option>
		</select>
		</div>
		<br>
        <div class="form-group">
            <button type="submit" name="submit" value="submit" class="btn btn-secondary btn-block">Change</button>
        </div>   		
      </form>
	  </div>
	  </body>
	  </html>