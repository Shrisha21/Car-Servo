<?php
session_start();
if(!      isset($_SESSION['username'])       )
{
header('Location: car.php');
}

	
$connect = new mysqli('localhost', 'root', '' ); 

mysqli_select_db($connect,"car servo");

    
 if(isset($_POST["add_to_cart"]))  
 {  
 
	  if(isset($_SESSION["shopping_cart"]))  
      {  
           $item_array_id = array_column($_SESSION["shopping_cart"], "item_id");  
           if(!in_array($_GET["id"], $item_array_id))  
           {  
                $count = count($_SESSION["shopping_cart"]);  
                $item_array = array(  
                     'item_id'               =>     $_GET["id"],  
                     'item_name'               =>     $_POST["hidden_name"],  
                     'item_price'          =>     $_POST["hidden_price"],  
                     'item_quantity'          =>     $_POST["quantity"]  
                );  
				
                $_SESSION["shopping_cart"][$count] = $item_array;  
           }  
          else  
           {  
               
                echo ('<script>window.location="accessories.php"</script>');  
           }  
	  }         
      else  
      {  
           $item_array = array(  
                'item_id'               =>     $_GET["id"],  
                'item_name'               =>     $_POST["hidden_name"],  
                'item_price'          =>     $_POST["hidden_price"],  
                'item_quantity'          =>     $_POST["quantity"]  
           );  
           $_SESSION["shopping_cart"][0] = $item_array;  
      } 
	  
	  $u=$_POST['name'];
      $n=$_POST["hidden_name"]; //accessories_name
	  $q=$_POST['quantity'];
      $p=$_POST["hidden_price"];
	  $u=$_SESSION['username'];
	  date_default_timezone_set('Asia/Kolkata');
	  $timezone = date_default_timezone_get();
	  $date = date('Y/m/d');
	  $query = mysqli_query($connect,"INSERT INTO cart (user_name,accessories_name,quantity,price,date) VALUES ('$u','$n',$q,$p,'$date')") or die("couldnot connect to db");
      
	  $sa= mysqli_query($connect,"SELECT stock FROM tbl_product where name='$n'");	
	  $row = $sa->fetch_assoc();
		$s11=$row['stock'];  
	  $rr=$s11-$q;
	  $sql="UPDATE tbl_product SET stock='$rr' WHERE name='$n'";
	  mysqli_query($connect,$sql);
 }
 
 
 if(isset($_GET["action"]))  
 {  
      if($_GET["action"] == "delete")  
      {  
			
           foreach($_SESSION["shopping_cart"] as $keys => $values)  
           {  
                if($values["item_id"] == $_GET["id"])  
                {  
                     unset($_SESSION["shopping_cart"][$keys]);  
					 
					 
					 
                     echo '<script>alert("Item Removed")</script>';  
                     echo '<script>window.location="accessories.php"</script>';  
                }  
           }  
      }  
 }  
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

.button {
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
           <br /> 
<br>
<br>		   
		    <div class="jumbotron">
  <div class="container text-center">
     <h2>Spares Hub</h2>   
    <p>Best Spares are available with us</p>
  </div>
</div>
		   
		   <div class="container" style="width:1000px; height:100px">
				
               
                <?php  
                $query = "SELECT * FROM tbl_product ORDER BY id ASC";  
                $result = mysqli_query($connect, $query);  
                if(mysqli_num_rows($result) > 0)  
                {  
                     while($row = mysqli_fetch_array($result))  
                     {  
                ?> 
					
					
				
                <div class="col-sm-6">  
				<br>
				
                     <form  action="accessories.php?action=add&id=<?php echo $row["id"]; ?>" method="post">  
                          <div style="border:1px; background-color:#f1f1f1; border-radius:5px; padding:16px;" align="center">  
                               <img src="<?php echo $row["image"]; ?>" height="100px" width="300px" class="img-responsive" /><br />  
                               <h4 class="text-info"><?php echo $row["name"]; ?></h4>  
                               <h4 class="text-danger">Rs <?php echo $row["price"]; ?></h4>  
                               <input type="number" name="quantity" class="form-control" min="1" max="<?php echo $row['stock'];?>"/>  
                               <input type="hidden" name="hidden_name" value="<?php echo $row["name"]; ?>" />  
                               <input type="hidden" name="hidden_price" value="<?php echo $row["price"]; ?>" /> 
								<p style='color:red'>Hurry up only <?php echo $row['stock'];?> left</p>
								<?php
								$ss=$row['stock'];
								if($ss!=0)
								{
									?>
									<input type="submit" name="add_to_cart" style="margin-top:5px;" class="button" value="Add to Cart" /> 
									
									
									<?php
								}
								else
								{
									
									?>
                               <input type="submit" name="add_to_cart" style="margin-top:5px;" class="button" value="OUT OF STOCK"disabled />  
							   <?php
								}
								?>
                          </div>  
                     </form>  
					 <hr>
					 </br>	
			</div>
                  
                <?php  
                     }  
                }  
                ?>  
                <div style="clear:both"></div>  
                <br />  
                <h3>Order Details</h3>  
                <div class="table-responsive">  
                     <table class="table table-bordered">  
                          <tr> 
							  
                               <th width="40%">Item Name</th>  
                               <th width="10%">Quantity</th>  
                               <th width="20%">Price</th>  
                               <th width="15%">Total</th>  
                               <th width="5%">Action</th>  
                          </tr> 
							<?php
                      							
								    $total = 0; 
									$uname=$_SESSION['username'];
                                    $query = mysqli_query($connect,"SELECT * from cart WHERE user_name='$uname'") or die("a");  
									  while($row = mysqli_fetch_array($query,MYSQLI_ASSOC)) 
									 {	 
								        ?> 
								        <tr>
                                        <?php										
										
										 echo '<td>'.$row["accessories_name"].'</td>';
										 echo '<td>'.$row["quantity"].'</td>';
										 echo '<td>'.$row["price"].'</td>';?>
										 <td>Rs <?php echo number_format($row["quantity"] * $row["price"], 2); ?></td> 	
										 <td><a href="remove.php"><span class="text-danger">Remove</span></a></td>
										 </tr>
										 <?php
										    $total = $total + ($row["quantity"] * $row["price"]);  
											
							 $_SESSION['accessories_name']=$row["accessories_name"];
							 $_SESSION['quantity']=$row["quantity"];
									 }					  
                         
                          if(!empty($_SESSION["shopping_cart"]))  
                          {  
                               
                               foreach($_SESSION["shopping_cart"] as $keys => $values)  
                               {  
							  if(($row["accessories_name"]==$values["item_name"]))  
							  { 
                          ?>  
                          <tr>  
                               <td><?php echo $values["item_name"]; ?></td>  
                               <td><?php echo $values["item_quantity"]; ?></td>  
                               <td>Rs <?php echo $values["item_price"]; ?></td>  
                               <td>Rs <?php echo number_format($values["item_quantity"] * $values["item_price"], 2); ?></td>  
                               <td><a href="accessories.php?action=delete&id=<?php echo $values["item_id"]; ?>"><span class="text-danger">Remove</span></a></td>  
                          </tr>  
                          <?php  
                                    $total = $total + ($values["item_quantity"] * $values["item_price"]);  
                                 
							   }
							  
							     
							
							   }
						  }
							   if($total>0)
							   {
                          ?>  
                          <tr>  
                               <td colspan="3" align="right">Grand 	Total</td>  
                               <td align="right">Rs <?php echo number_format($total, 2); ?></td>  
                               <td><a href="buy.php">Buy</td>  
                          </tr>  
                          <?php
							   } 						  
                             						  
                          ?>  
                     </table>  
                </div>  
           </div>  
           <br />  

      </body>  
 </html>