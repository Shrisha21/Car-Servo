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

<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

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
  
	  
	  
	  a[id='res']:hover{
			text-shadow:3px 2px 5px red;
			background-color: black;
	  }
		  
		  
		  
		  
<!--preetham-->

html,body,h1,h2,h3,h4 {font-family:"Lato", sans-serif}
.mySlides {display:none}
.w3-tag, .fa {cursor:pointer}
.w3-tag {height:15px;width:15px;padding:0;margin-top:6px}

/*<!--body,h1,h2,h3,h4,h5,h6 {font-family: "Lato", sans-serif;}
body, html {
  height: 100%;
  color: #777;
  line-height: 1.8;
}-->*/

/* Create a Parallax Effect */
.bgimg-1, .bgimg-2, .bgimg-3 {
  background-attachment: fixed;
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
}

/* First image (Logo. Full height) */
.bgimg-1 {
  background-image: url("images/bg_1.jpg");
  min-height: 100%;
}

/* Second image (Portfolio) */
.bgimg-2 {
  background-image: url("/w3images/parallax2.jpg");
  min-height: 400px;
}

/* Third image (Contact) */
.bgimg-3 {
  background-image: url("/w3images/parallax3.jpg");
  min-height: 300px;
}

.w3-wide {letter-spacing: 10px;}
.w3-hover-opacity {cursor: pointer;}

/* Turn off parallax scrolling for tablets and phones */
@media only screen and (max-device-width: 1600px) {
  .bgimg-1, .bgimg-2, .bgimg-3 {
    background-attachment: scroll;
    min-height: 400px;
  }
}
		  
		  
		  
  </style>
</head>
<body id="home">

<nav class="navbar navbar-default navbar-fixed-top" >
  <div class="container-fluid">
    <div class="navbar-header">
	<a class="navbar-brand"  target="_blank" id="res">SERVO</a>
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
    </div>
    <div class="collapse navbar-collapse" >
      <ul class="nav navbar-nav navbar-left">
	  
        <li><a href="#" >HOME</a></li>
        <li><a href="#j1">ABOUT</a></li>
        <li><a href="services.html">SERVICES</a></li>
        <li><a href="#">CONTACT US</a></li>
		</ul>
		<ul class="nav navbar-nav navbar-right">
		<button onclick="window.location.href = 'car login.html';" role="button" class="btn btn-outline-secondary" target="_blank">Log In</button>
		<button onclick="window.location.href = 'car signup.php';" type="button" class="btn btn-outline-secondary" target="_blank">Sign Up</button>
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
<div class="jumbotron" id="j1">
  <div class="container text-center">
    <h1>ABOUT US</h1>      
    <p><b>SERVO</b> Service includes Engine Oil Top-up, Brake Checkup, Car Exterior & Interior Cleaning, Air Filter Replacement, Brake Pad Cleaning, Engine Fine Tuning, etc.
	Additionally, we also offer a complimentary 60 point check up with every periodic service to ensure everything is in mint condition.</p>
  </div>
</div>
  <div class="container">    
  <div class="row">
    <div class="col-sm-4">
      <div class="panel panel-primary">
        <div class="panel-heading">CAR WASH</div>
        <div class="panel-body"><a href="car login.html"><img src="pics\cw.jpg" title="Login and get services" class="img-responsive" style="width:180%;height:100%" alt="Image"></a></div>
        <div class="panel-footer">Get first car wash for free.</div>
      </div>
    </div>
    <div class="col-sm-4"> 
      <div class="panel panel-primary">
        <div class="panel-heading">CAR SERVICING</div>
        <div class="panel-body"><a href="car login.html"><img src="pics\cs.jpg" title="Login and get services" class="img-responsive" style="width:91%;height:70%" alt="Image"></a></div>
        <div class="panel-footer">Get first 3 free services on sign up.</div>
      </div>
    </div>
    <div class="col-sm-4"> 
      <div class="panel panel-primary">
        <div class="panel-heading">CAR CHECKUP</div>
        <div class="panel-body"><a href="car login.html"><img src="pics\cc.jpg" title="Login and get services" class="img-responsive" style="width:88.5%" alt="Image"></a></div>
        <div class="panel-footer">Get 10% off for every 1000km.</div>
      </div>
    </div>
  </div>
</div><br>

<div class="container">    
  <div class="row">
    <div class="col-sm-4">
      <div class="panel panel-primary">
        <div class="panel-heading">WHEEL ALIGNMENT</div>
        <div class="panel-body"><a href="car login.html"><img src="pics\wa.jpg" title="Login and get services" class="img-responsive" style="width:99%;height:80%" alt="Image"></a></div>
        <div class="panel-footer">Get a free alignment within 1500km.</div>
      </div>
    </div>
    <div class="col-sm-4"> 
      <div class="panel panel-primary">
        <div class="panel-heading">BODY PAINTING</div>
        <div class="panel-body"><a href="car login.html"><img src="pics\bp.png" title="Login and get services" class="img-responsive" style="width:150%;height:80%" alt="Image"></a></div>
        <div class="panel-footer">Get coupons on first body paints.</div>
      </div>
    </div>
    <div class="col-sm-4"> 
      <div class="panel panel-primary">
        <div class="panel-heading">MODIFYING</div>
        <div class="panel-body"><a href="car login.html"><img src="pics\cm.png" title="Login and get services" class="img-responsive" style="width:97%;height:80%" alt="Image"></a></div>
        <div class="panel-footer">Get 50% off for Spoilers.</div>
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

<footer class="w3-center w3-black w3-padding-64 w3-opacity w3-hover-opacity-off">
  <a href="#home" class="w3-button w3-light-grey-grey"><i class="fa fa-arrow-up w3-margin-right"></i>To the top</a>
  
     <p>Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This webpage is made by <a href="https://www.facebook.com/ideal.shrisha.1" target="_blank">SHRI & YASH</a></p>
          </div>

</footer>

<script>
$(document).ready(function(){
    $('.customer-logos').slick({
        slidesToShow: 6,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 1000,
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
