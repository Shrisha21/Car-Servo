<!DOCTYPE html>
<html lang="en">
<head>
  <title>Car Service</title>
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
    margin: 5px 0 22px 0;
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
</style>
</head>
<body>
<div class="jumbotron">
  <div class="container text-center">
    <h2>Add an item to Spares hub</h2>      
 
  </div>
</div>
  <div class="login-form">
    <form action="adminadditem.php" method="POST"enctype="multipart/form-data">
        <h2 class="text-center">Enter the item details</h2>       
        <div class="form-group">
            <input type="text" class="form-control" placeholder="Item name" required="required" name="uname">
        </div>
        <div class="form-group">
             <input type="file" class="form-control" placeholder="Address of image" required="required" name="image">
        </div>
		 <div class="form-group">
            <input type="text" class="form-control" placeholder="Price" required="required" name="price">
        </div>
		<div class="form-group">
            <input type="text" class="form-control" placeholder="Stock" required="required" name="stock">
        </div>
		
        <div class="form-group">
            <button type="submit" class="btn btn-secondary btn-block">ADD</button>
        </div>     
     </form>
	 
 </div>	
 </body>
 </html>
 