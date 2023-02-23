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
	<div class="container">
		<div class="navbar">
		<div class="logo">
			<img src="images/logo1.png" width="125px">
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

<!--------single products details------->

	<div class="small-container single-product">
		<div class="row">
			<div class="col-2">
				<img src="images/egg.jpg" width="100%" id="ProductImg">
				
				<div class="small-img-row">
					<div class="small-img-col">
						<img src="images/egg.jpg" width="100%" class="small-img">
					</div>
					<div class="small-img-col">
						<img src="images/egg2.jpg" width="100%" class="small-img">
					</div>
					<div class="small-img-col">
						<img src="images/egg3.jpg" width="100%" class="small-img">
					</div>
					<div class="small-img-col">
						<img src="images/egg4.jpg" width="100%" class="small-img">
					</div>
				</div>
			
			</div>
			
			<form action="manage_cart.php" method="POST">
			<div class="col-2">
				<p>Home / Food & Beverages </p>
				<h1> ADUCKTIVE THE ORIGINAL SALTED EGG CORNFLAKES  </h1>
				<h4>RM 15.00</h4>
				
				
				<button type="submit" name="Add_To_Cart" class="btn">Add to Cart</button>
				<input type="hidden" name="Item_Name" value="ADUCKTIVE THE ORIGINAL SALTED EGG CORNFLAKES">
				<input type="hidden" name="Price" value="15">
				
				<h3>Product Details</h3>
				<br>
				<p>
				ADUCKTIVE THE ORIGINAL SALTED EGG CORNFLAKES!!!
				<br>
				LAZAT DAN RANGUP. READY TO EAT. SESUAI UNTUK DIMAKAN DI MANA SAHAJA. 
				<br>BERSAMA KELUARGA DAN RAKAN2.

				</p>
			</div>
			</form>
		</div>
	</div>
<!--------title------->
	<div class="small-container">
		<div class="row row-2">
			<h2>Related Products</h2>
			<p>View More</p>
		</div>
	</div>

<!--------products------->
	<div class="small-container">
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

<!--------js product gallery------->

	<script>
		var ProductImg = document.getElementById("ProductImg");
		var SmallImg = document.getElementsByClassName("small-img");
		
		SmallImg[0].onclick = function()
		{
			ProductImg.src = SmallImg[0].src;
		}
		SmallImg[1].onclick = function()
		{
			ProductImg.src = SmallImg[1].src;
		}
		SmallImg[2].onclick = function()
		{
			ProductImg.src = SmallImg[2].src;
		}
		SmallImg[3].onclick = function()
		{
			ProductImg.src = SmallImg[3].src;
		}
	</script>
	
</body>
</html>