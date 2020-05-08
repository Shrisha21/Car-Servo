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

<div id="myCarousel" class="carousel slide" data-ride="carousel"data-interval="3000">
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
	  <li data-target="#myCarousel" data-slide-to="2"></li>
	  <li data-target="#myCarousel" data-slide-to="3"></li>
	  <li data-target="#myCarousel" data-slide-to="4"></li>
    </ol>
    <div class="carousel-inner">
      <div class="item active">
        <img src="pics\c1.jpg" alt="Image" class="img-responsive" style="height:400px">      
      </div>
      <div class="item">
        <img src="pics\c7.jpg" alt="Image" class="img-responsive" style="height:400px">      
      </div>
	  <div class="item">
        <img src="pics\c3.jpg" alt="Image" class="img-responsive" style="height:400px">
      </div>
	  <div class="item">
        <img src="pics\4.jpg" alt="Image" class="img-responsive" style="height:400px">
      </div>
	  <div class="item">
        <img src="pics\c5.jpg" alt="Image"class="img-responsive" style="height:400px">     
      </div>
    </div>
</div>
<div class="jumbotron">
  <div class="container text-center">
  <h2>Your Ordered Product will be delieverd within 1 week. You can track your order by calling us.</h2>
  <h2> Thanks for using our Services.</h2>
</div>
</div>
   <div class="container">    
  <div class="row">
    <div class="col-sm-4">
      <div class="panel panel-primary">
        <div class="panel-heading">CAR WASH</div>
        <div class="panel-body"><a href="carwase.php"><img src="pics\cw.jpg" title="Click here to get service" class="img-responsive" style="width:180%;height:100%" alt="Image"></a></div>
        
      </div>
    </div>
    <div class="col-sm-4"> 
      <div class="panel panel-primary">
        <div class="panel-heading">CAR SERVICING DETAILS</div>
        <div class="panel-body"><a href="details.pdf"><img src="pics\cs.jpg" title="Click here to get service" class="img-responsive" style="width:91%;height:70%" alt="Image"></a></div>

      </div>
    </div>
    <div class="col-sm-4"> 
      <div class="panel panel-primary">
        <div class="panel-heading">ACCESSORIES</div>
        <div class="panel-body"><a href="accessories.php"><img src="pics\cc.jpg" title="Click here to get service" class="img-responsive" style="width:88.5%" alt="Image"></a></div>
    
      </div>
    </div>
  </div>
</div><br>

<div class="container">    
  <div class="row">
    <div class="col-sm-4">
      <div class="panel panel-primary">
        <div class="panel-heading">WHEEL CHANGE</div>
        <div class="panel-body"><a href="accessories.php"><img src="pics\wa.jpg" title="Click here to get service" class="img-responsive" style="width:99%;height:80%" alt="Image"></a></div>
      
      </div>
    </div>
    <div class="col-sm-4"> 
      <div class="panel panel-primary">
        <div class="panel-heading">BODY PAINTING</div>
        <div class="panel-body"><a href="modification form.php"><img src="pics\bp.png" title="Click here to get service" class="img-responsive" style="width:150%;height:80%" alt="Image"></a></div>
  
      </div>
    </div>
    <div class="col-sm-4"> 
      <div class="panel panel-primary">
        <div class="panel-heading">MODIFICATION</div>
        <div class="panel-body"><a href="modification form.php"><img src="pics\cm.png" title="Click here to get service" class="img-responsive" style="width:97%;height:80%" alt="Image"></a></div>
       
      </div>
    </div>
  </div>
</div><br><br>
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
<script>
/* When the user clicks on the button, 
toggle between hiding and showing the dropdown content */
function myFunction() {
    document.getElementById("myDropdown").classList.toggle("show");
}

// Close the dropdown if the user clicks outside of it
window.onclick = function(event) {
  if (!event.target.matches('.dropbtn')) {

    var dropdowns = document.getElementsByClassName("dropdown-content");
    var i;
    for (i = 0; i < dropdowns.length; i++) {
      var openDropdown = dropdowns[i];
      if (openDropdown.classList.contains('show')) {
        openDropdown.classList.remove('show');
      }
    }
  }
}
</script>
</body>
</html>