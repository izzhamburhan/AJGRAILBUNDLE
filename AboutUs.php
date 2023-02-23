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

<style>
    h1{
      margin-left: 20%;
      margin-bottom: -10px;
      border-bottom: 2px solid #ff523b;
    }
    h2{
      margin-left: 20%;
      margin-top: 10px;
    }
  </style>
  <h1>ABOUT US</h1>
  <h2>Our Team Member</h2>
  <br>
  <div class="testimonial">
    <div class="small-container">
      <div class="row">
	  
		<div class="col-3">
		<img src="images/zaf.png">
        <h3>Muhammad Zafri</h3>
		<h4> Web Developer </h4>
          <i class="fa quote">&#10077;</i>
          <p>"I'm not a great programmer; I'm just a good programmer with great habits." </p>
        
        </div>
	  
		<div class="col-3">
		<img src="images/zakwan.png">
        <h3>Muhammad Zakwan</h3>
		<h4> Mobile Developer </h4>
          <i class="fa quote">&#10077;</i>
          <p>“I do not fear computers. I fear lack of them.”</p>
        
        </div>
	  
        <div class="col-3">
          <img src="images/ray.png">
        <h3>Muhammad Syahril</h3>
		<h4> Mobile Designer </h4>
          <i class="fa quote">&#10077;</i>
          <p>"Any fool can write code that a computer can understand. Good programmers write code that humans can understand." </p>
          <br>
        </div>     
        
        <div class="col-3">
		<img src="images/zahid.png">
        <h3>Mohd Zahid Zikreey</h3>
		<h4> Web Designer </h4>
          <i class="fa quote">&#10077;</i>
          <p>“The computer was born to solve problems that did not exist before.”</p>
        
        </div>
      </div>
    </div>
  </div>
  <audio controls autoplay style="display:none">
  
  <source src="audio/Gamelan.mp3" type="audio/mpeg" >

</audio>

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