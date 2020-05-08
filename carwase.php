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
 input[type=text], input[type=password] {
    width: 80%;
    padding: 15px;
    margin: 5px 0 10px 0;
    display: inline-block;
    border: none;
    background: white;
}

input[type=text]:focus, input[type=password]:focus {
    background-color:F7EEEE;
    outline: none;
}

button {
    background-color: gray;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 60%;
    opacity: 0.9;
}

button:hover {
    opacity:1;
}

.cancelbtn {
    padding: 14px 20px;
    background-color: #f44336;
	width:50%;
}

.cancelbtn, .signupbtn {
  float: left;
  width: 50%;
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
    width: 60%;
    opacity: 0.9;
}

button:hover {
    opacity:1;
}

.cancelbtn {
    padding: 14px 20px;
    background-color: #f44336;
	width:50%;
}

.cancelbtn, .signupbtn {
  float: left;
  width: 50%;
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
	  .container1 {
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
		<li>
		<button onclick="window.location.href = 'carlogout.php';" role="button" class="btn btn-outline-secondary" target="_blank">Logout</button>
		</li>
    </div>	
  </div>
</nav>
<div class="jumbotron">
  <div class="container text-center">
    <h2>Water Wash</h2>      
    <p>Fill out the form and get the perfect service.</p>
  </div>
</div>
<div class="login-form">
      <form action="mg.php" method="POST">
        <h2 class="text-center">Fill Out This Form</h2>       
        
		<div class="form-group">
            <input type="text" class="form-control" placeholder="Car Name" required="required" name="cname">
        </div>
		<div class="form-group">
            <input type="text" class="form-control" placeholder="Car Number" required="required" name="cno">
        </div>
        <p style="font-size:20px">Car Type<p>
		<label class="container1">HatchBack
		<input type="radio" checked="checked" name="radio" value="hatch">
		<span class="checkmark"></span>
		</label>
		<label class="container1">Sedan Class /SUV
		<input type="radio" name="radio" value="sedan">
		<span class="checkmark"></span>
		</label>
		 <p style="font-size:20px">Wash Type<p>
		<div class="select-style">
		  <select name="Wash">
			<option value="interior">Interior</option>
			<option value="exterior">Exterior</option>
			<option value="complete">Complete</option>
		  </select>
		</div>
		<br>
		<p style="font-size:20px">Date of Wash<p>
		<div class="form-group">
            <input type="date" class="form-control" required="required" name="dte">
        </div>
		 <p style="font-size:20px">Garrage Details<p>
		<div class="select-style">
		  <select name="Garrage">
			<option value="bosch">Bosch Service Station</option>
			<option value="nexa">NEXA Service Station</option>
			<option value="nissan">Nissan Service Station</option>
			<option value="supreme">Supreme Car Service Station</option>
			<option value="dc">DC Service Station</option>
		  </select>
		</div>
		<br>
        <div class="form-group">
            <button type="submit" class="btn btn-secondary btn-block">BOOK</button>
        </div>     
      </form>
	  </div>
<div class="container">
  <h2>Brand we service</h2>
   <section class="customer-logos slider">
      <div class="slide"><img src="http://www.carlogos.org/logo/Volkswagen-logo-2015-1920x1080.png"></div>
      <div class="slide"><img src="http://sikkatv.info/wp-content/uploads/2015/03/nissanlogo1.jpg"></div>
      <div class="slide"><img src="http://www.carlogos.org/logo/Ford-logo.png"></div>
      <div class="slide"><img src="http://www.carlogos.org/logo/Toyota-logo.png"></div>
      <div class="slide"><img src="http://www.carlogos.org/logo/Chevrolet-logo.png"></div>
      <div class="slide"><img src="http://www.carlogos.org/logo/Honda-logo.png"></div>
      <div class="slide"><img src="http://www.carlogos.org/logo/Hyundai-logo.png"></div>
      <div class="slide"><img src="http://www.carlogos.org/logo/Mercedes-Benz-logo.png"></div>
   </section>
</div>
<script>
$(document).ready(function(){
    $('.customer-logos').slick({
        slidesToShow: 6,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 1500,
        arrows: false,
        dots: false,
        pauseOnHover: false,
        responsive: [{
            breakpoint: 768,
            settings: {
                slidesToShow: 4
            }
        }, {
            breakpoint: 520,
            settings: {
                slidesToShow: 3
            }
        }]
    });
});
</script>
</body>
</html>