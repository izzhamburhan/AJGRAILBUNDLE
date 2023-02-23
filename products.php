<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>PRODUCTS| SEA |Ecommerce Website Design</title>
	<meta name="viewport" content="width=device-width,initial-scale=1"></meta>
	<link rel="stylesheet" href="BuyBuy.css" >
	<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap"	rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	 <link rel="stylesheet" href="style.css">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" 
  rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.3/css/fontawesome.min.css">
</head>
<body>

	<div class="header">
	

	<div class="container">
		<div class="navbar">
		<div class="logo">
			<img src="images/logo1.png" width="300px">
		</div>
		<nav>
			<ul>
				<li><a href="home.php">Home</a></li>
				<li><a href="products.php">Products</a></li>
				<li><a href="AboutUs.php">About</a></li>
	
			</ul>
		</nav>

		<form class="form-inline my-2 my-lg-0">
      	<input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      	<button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    	</form>
    	
		<a href="mycart.php"><img src="images/cart.png" width="30px" height="30px"></a>
		 <div>
            <?php 
              $count=0;
              if(isset($_SESSION['cart']))
              {
                $count=count($_SESSION['cart']);
              }
            ?>
            <a href="mycart.php" class="btn btn-success">MY Cart (<?php echo $count; ?>)</a>
          </div>
	
	</div>
	</div>

<!-----------featured products---------->
	<div class="small-container">
		<h2 class="title">All Product<h2>
		<div class="row">
			
			<div class="col-4">		
				<a href="Product1.php" >
					<img src="images/nor.jpg"> 
				</a>
				<h4>Che'Nor Sambal Garing Ikan Biliss</h4>								
				<div class="rating">
					
					<i class="fa">&#x2605;</i>
					<i class="fa">&#x2605;</i>
					<i class="fa">&#x2605;</i>
					<i class="fa">&#x2605;</i>
				</div>
				
				<p>RM 20.00</p>
				    <button class="btn btn-default btn-xs pull-right" type="button"><i class="fa fa-cart-arrow-down"></i></button>
					<button class="btn btn-default btn-xs pull-right" type="button"><i class="fa fa-heart-o"></i></button>
					<button class="btn btn-default btn-xs pull-right" type="button"><i class="fa fa-eye"></i></button> 
			</div>
			
			<div class="col-4">
					<a href="Product2.php" >
						<img src="images/lokal.jpg" 
					</a>
				<h4>LOKAL MUNCHIES</h4>
				<div class="rating">
					 
					<i class="fa">&#x2605;</i>
					<i class="fa">&#x2605;</i>
					<i class="fa">&#x2605;</i>
				</div>
				<p>RM 15.00</p>
				    <button class="btn btn-default btn-xs pull-right" type="button"><i class="fa fa-cart-arrow-down"></i></button>
					<button class="btn btn-default btn-xs pull-right" type="button"><i class="fa fa-heart-o"></i></button>
					<button class="btn btn-default btn-xs pull-right" type="button"><i class="fa fa-eye"></i></button> 
			</div>
			
			<div class="col-4">
				<a href="Product3.php"> 
					<img src="images/cheese.jpg">
				</a>
				
				<h4>WONDER CHEESE</h4>
				<div class="rating">
				
					<i class="fa">&#x2605;</i>
					<i class="fa">&#x2605;</i>
					<i class="fa">&#x2605;</i>
					<i class="fa">&#x2605;</i>
					<i class="fa">&#x2605;</i>
				</div>
				<p>RM 25.00</p>
				    <button class="btn btn-default btn-xs pull-right" type="button"><i class="fa fa-cart-arrow-down"></i></button>
					<button class="btn btn-default btn-xs pull-right" type="button"><i class="fa fa-heart-o"></i></button>
					<button class="btn btn-default btn-xs pull-right" type="button"><i class="fa fa-eye"></i></button> 
			</div>
			
			<div class="col-4">
				<a href="Product4.php" >
					<img src="images/choco.jpg">
				</a>	
				<h4>Nims Crispy Choco Tub</h4>
				<div class="rating">
					
					<i class="fa">&#x2605;</i>
					<i class="fa">&#x2605;</i>
					<i class="fa">&#x2605;</i>
					<i class="fa">&#x2605;</i>
					<i class="fa">&#x2605;</i>
				</div>
				<p>RM 13.00</p>
				    <button class="btn btn-default btn-xs pull-right" type="button"><i class="fa fa-cart-arrow-down"></i></button>
					<button class="btn btn-default btn-xs pull-right" type="button"><i class="fa fa-heart-o"></i></button>
					<button class="btn btn-default btn-xs pull-right" type="button"><i class="fa fa-eye"></i></button> 
			</div>
			<div class="col-4">
				<a href="Product5.php" >
					<img src="images/brownie.jpg">
				</a>
				<h4>TFN BROWNIE</h4>
				<div class="rating">
					
					<i class="fa">&#x2605;</i>
					<i class="fa">&#x2605;</i>
					<i class="fa">&#x2605;</i>
					<i class="fa">&#x2605;</i>
				</div>
				<p>RM 10.00</p>
				    <button class="btn btn-default btn-xs pull-right" type="button"><i class="fa fa-cart-arrow-down"></i></button>
					<button class="btn btn-default btn-xs pull-right" type="button"><i class="fa fa-heart-o"></i></button>
					<button class="btn btn-default btn-xs pull-right" type="button"><i class="fa fa-eye"></i></button> 
			</div>
			
			<div class="col-4">
				<a href="Product6.php"> 
					<img src="images/mellow.jpg">
				</a>
				<h4>Mellow Crunch</h4>
				<div class="rating">
					
					<i class="fa">&#x2605;</i>
					<i class="fa">&#x2605;</i>
					<i class="fa">&#x2605;</i>
				</div>
				<p>RM 13.90</p>
				    <button class="btn btn-default btn-xs pull-right" type="button"><i class="fa fa-cart-arrow-down"></i></button>
					<button class="btn btn-default btn-xs pull-right" type="button"><i class="fa fa-heart-o"></i></button>
					<button class="btn btn-default btn-xs pull-right" type="button"><i class="fa fa-eye"></i></button> 
			</div>
			
			<div class="col-4">
				<a href="Product7.php" >
					<img src="images/pop.jpg">
				</a>
				<h4>ENG'S POPCORN VIRAL</h4>
				<div class="rating">
					
					<i class="fa">&#x2605;</i>
					<i class="fa">&#x2605;</i>
					<i class="fa">&#x2605;</i>
					<i class="fa">&#x2605;</i>
					<i class="fa">&#x2605;</i>
				</div>
				<p>RM 18.00</p>
				    <button class="btn btn-default btn-xs pull-right" type="button"><i class="fa fa-cart-arrow-down"></i></button>
					<button class="btn btn-default btn-xs pull-right" type="button"><i class="fa fa-heart-o"></i></button>
					<button class="btn btn-default btn-xs pull-right" type="button"><i class="fa fa-eye"></i></button> 
			</div>
			
			<div class="col-4">
				<a href="Product8.php" >
					<img src="images/egg.jpg">
				</a>
				<h4>ADUCKTIVE THE ORIGINAL SALTED EGG CORNFLAKES </h4>
				<div class="rating">
					
					<i class="fa">&#x2605;</i>
					<i class="fa">&#x2605;</i>
					<i class="fa">&#x2605;</i>
					<i class="fa">&#x2605;</i>
					<i class="fa">&#x2605;</i>
				</div>
				<p>RM 15.00</p>
				    <button class="btn btn-default btn-xs pull-right" type="button"><i class="fa fa-cart-arrow-down"></i></button>
					<button class="btn btn-default btn-xs pull-right" type="button"><i class="fa fa-heart-o"></i></button>
					<button class="btn btn-default btn-xs pull-right" type="button"><i class="fa fa-eye"></i></button> 
			</div>
			
			
			
	</div>
</div>
	
<!--------footer------->
<div class="footer">
	<div class="container">
		<div class="row">
			<div class="footer-col-1">
				<h3>Download Our App</h3>
				<p>Download App for Android and ios mobile.</p>
				 <div class="app-logo">
                    <img src="images/play-store.png">
                    <img src="images/app-store.png">
				</div>
			</div>
			<div class="footer-col-2">
				<img src="images/logo2.png">
				<p>Our purpose is To Sustainably Make the Pleasure and Benefits of Sports Accesible to the Many.</p>
			</div>
			<div class="footer-col-3">
				<h3>Useful Links</h3>
				<ul>
					<li>Coupons</li>
					<li>Blog Post</li>
					<li>Return Policy</li>
					<li>Join Affiliate</li>
				</ul>
			</div>
			<div class="footer-col-4">
				<h3>Follow us</h3>
				<ul>
					<li>Facebook</li>
					<li>Twitter</li>
					<li>Instagram</li>
					<li>Youtube</li>
				</ul>
			</div>
		</div>
		<hr>
		<p class="copyright">Copyright 2021</p>
	</div>
</div>
    

</body>
</html>