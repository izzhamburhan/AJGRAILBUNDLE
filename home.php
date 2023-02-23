<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>SEA |Ecommerce Website Design</title>
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
			<a href="index.php">
				<img src="images/logo1.png" width="300px">
			</a>
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
		<div class="row">
		<div class="col-2">
			<h1>Give Your Shopping Adventure<br>A New Experience!</h1>
			<p>Success isn't always about greatness. It's about
			consistency. Consistent<br>hard work gains success. Greatness
			will come</p>
			<a href="#1" class="btn">Explore Now &#8594;</a>
		</div>
		<div class="col-2">
			<img src="images/nike.png">
			
		</div>
	</div>
	</div>
	</div>
	
<!-----------featured categories---------->
<div class="categories">
	<div class="small-container">
		<div class="row">
			<div class="col-3">
				<img src="images/category-1.jpg">
			</div>
			<div class="col-3">
				<img src="images/category-2.jpg">
			</div>
			<div class="col-3">
				<img src="images/category-3.jpg">
			</div>
		</div>
	</div>
</div>
<!-----------featured products---------->
	<div class="small-container">
		<h2 id="1" class="title">Featured Products</h2>
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
					<i class="fa">&#x2605;</i>
				</div>
				<p>RM 20.00</p>
			</div>
			<div class="col-4">
				<a href="Product2.php" >
					<img src="images/lokal.jpg"> 
				</a>
				<h4>Lokal Munchiess</h4>
				<div class="rating">
					
					<i class="fa">&#x2605;</i>
					<i class="fa">&#x2605;</i>
					<i class="fa">&#x2605;</i>
					<i class="fa">&#x2605;</i>
				</div>
				<p>RM 15.00</p>
			</div>
			<div class="col-4">
				<a href="Product3.php" >
					<img src="images/cheese.jpg"> 
				</a>
				<h4>WONDER CHEESE</h4>
				<div class="rating">
					
					<i class="fa">&#x2605;</i>
					<i class="fa">&#x2605;</i>
					<i class="fa">&#x2605;</i>
					<i class="fa">&#x2605;</i>
				</div>
				<p>RM 25.00</p>
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
				</div>
				<p>RM 13.00</p>
			</div>
		</div>
			<h2 class="title">Latest Products</h2>
			<div class="row">
			<div class="col-4">
					<a href="Product5.php" >
					<img src="images/brownie2.jpg"> 
				</a>
				<h4>TFN BROWNIE</h4>
				<div class="rating">
					
					<i class="fa">&#x2605;</i>
					<i class="fa">&#x2605;</i>
					<i class="fa">&#x2605;</i>
				</div>
				<p>RM 10.00</p>
			</div>
			<div class="col-4">
				<a href="Product6.php" >
					<img src="images/mellow2.jpg">
				</a>
				<h4>Mellow Crunch</h4>
				<div class="rating">
					
					<i class="fa">&#x2605;</i>
					<i class="fa">&#x2605;</i>
					<i class="fa">&#x2605;</i>
					<i class="fa">&#x2605;</i>
					<i class="fa">&#x2605;</i>
				</div>
				<p>RM 13.90</p>
			</div>
			<div class="col-4">
				<a href="Product7.php" >
					 <img src="images/pop2.jpg"> </a>
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
			</div>
			<div class="col-4">
				<a href="Product8.php">
					 <img src="images/egg2.jpg"> </a>
				</a>
				<h4>ADUCKTIVE THE ORIGINAL SALTED EGG CORNFLAKES</h4>
				<div class="rating">
					
					<i class="fa">&#x2605;</i>
					<i class="fa">&#x2605;</i>
					<i class="fa">&#x2605;</i>
					<i class="fa">&#x2605;</i>
					<i class="fa">&#x2605;</i>
				</div>
				<p>RM 15.00</p>
			</div>
			</div>
			<div class="row">
			<div class="col-4">
				<a href="Product1.php" >
					<img src="images/nor2.jpg">
				</a>
				<h4>Che'Nor Sambal Garing Ikan Biliss</h4>
				<div class="rating">
					
					<i class="fa">&#x2605;</i>
					<i class="fa">&#x2605;</i>
					<i class="fa">&#x2605;</i>
					<i class="fa">&#x2605;</i>
					<i class="fa">&#x2605;</i>
				</div>
				<p>RM 20.00</p>
			</div>
			<div class="col-4">
				<a href="Product2.php" >
					<img src="images/lokal2.jpg"> 
				</a>
				<h4>Lokal Munchiess</h4>
				<div class="rating">
					
					<i class="fa">&#x2605;</i>
					<i class="fa">&#x2605;</i>
					<i class="fa">&#x2605;</i>
					<i class="fa">&#x2605;</i>
				</div>
				<p>RM 15.00</p>
			</div>
			<div class="col-4">
				<a href="Product3.php" >
					<img src="images/cheese2.jpg"> 
				</a>
				<h4>WONDER CHEESE</h4>
				<div class="rating">
					
					<i class="fa">&#x2605;</i>
					<i class="fa">&#x2605;</i>
					<i class="fa">&#x2605;</i>
					<i class="fa">&#x2605;</i>
				</div>
				<p>RM 25.00</p>
			</div>
			<div class="col-4">
				<a href="Product4.php" >
					<img src="images/choco2.jpg"> 
				</a>
				<h4>Nims Crispy Choco Tub</h4>
				<div class="rating">
					
					<i class="fa">&#x2605;</i>
					<i class="fa">&#x2605;</i>
					<i class="fa">&#x2605;</i>
					<i class="fa">&#x2605;</i>
				</div>
				<p>RM 13.00</p>
			</div>
			</div>
	</div>
<!-----------OFFER---------->
	<div class="offer">
		<div class="small-container">
			<div class="row">
				<div class="col-2">
					<img src="images/exclusive.png" class="offer-img">
				</div>
				<div class="col-2">
					<p>Exclusive Available on Student Entrepenuer</p>
					<h1>Smart Band 4</h1>
					<small>The Mi Band 4 features a 39.9% larger(than Mi Band 3) AMOLED color full-touch
					display with adjustable brightness, so everything is clear as can be.</small>
					<a href="" class="btn">Buy Now &#8594;</a>
				</div>
			</div>
		</div>
	</div>

<!-----------testimonial---------->	
	<div class="testimonial">
		<div class="small-container">
			<div class="row">
				<div class="col-3">
					<i class="fa quote">&#10077;</i>
					<p>“Our online ordering has increased about 4x in the past 3–4 years and ChowNow 
					has made it easier and more efficient to get orders through. It fits right into
					the operational flow.”</p>
					<div class="rating">
						<i class="fa">&#x2605;</i>
						<i class="fa">&#x2605;</i>
						<i class="fa">&#x2605;</i>
						<i class="fa">&#x2605;</i>
						<i class="fa">&#x2605;</i>
					</div>
				<img src="images/user-1.png">
				<h3>Sean Parker</h3>
				</div>
				<div class="col-3">
					<i class="fa quote">&#10077;</i>
					<p>“Our online ordering has increased about 4x in the past 3–4 years and ChowNow 
					has made it easier and more efficient to get orders through. It fits right into
					the operational flow.”</p>
					<div class="rating">
						<i class="fa">&#x2605;</i>
						<i class="fa">&#x2605;</i>
						<i class="fa">&#x2605;</i>
						<i class="fa">&#x2605;</i>
						<i class="fa">&#x2605;</i>
					</div>
				<img src="images/user-2.png">
				<h3>Gowther</h3>
				</div>
				<div class="col-3">
					<i class="fa quote">&#10077;</i>
					<p>“Our online ordering has increased about 4x in the past 3–4 years and ChowNow 
					has made it easier and more efficient to get orders through. It fits right into
					the operational flow.”</p>
					<div class="rating">
						<i class="fa">&#x2605;</i>
						<i class="fa">&#x2605;</i>
						<i class="fa">&#x2605;</i>
						<i class="fa">&#x2605;</i>
						<i class="fa">&#x2605;</i>
					</div>
				<img src="images/user-3.png">
				<h3>Elizabeth</h3>
				</div>
			</div>
		</div>
	</div>
	
<!-----------brands---------->	
	<div class="brands">
		<div class="small-container">
			<div class="row">
				<div class="col-5">
					<img src="images/logo-samsung.png">
				</div>
				<div class="col-5">
					<img src="images/logo-oppo.png">
				</div>
				<div class="col-5">
					<img src="images/logo-coca-cola.png">
				</div>
				<div class="col-5">
					<img src="images/logo-paypal.png">
				</div>
				<div class="col-5">
					<img src="images/logo-philips.png">
				</div>
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