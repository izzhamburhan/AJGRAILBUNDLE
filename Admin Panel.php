<?php 
require("Connection.php");
session_start();
session_regenerate_id(true);
if(!isset($_SESSION['AdminLoginId'])){
	header("location: Admin Login.php");
}
?>
<html lang="en">
<head>
	<title>Admin Panel</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
	<style>
		body{
			margin: 0;
		}
		div.header{
			color: #f0f0f0;
			font-family: poppins;
			display: : flex;
			flex-direction: row;
			align-items: center;
			justify-content: space-between;
			padding: 0 60px;
			background-color: #ff523b;
		}
		div.header button{
			background-color: #f0f0f0;
			font-size: 16px;
			font-weight: 550;
			padding: 8px 12px;
			border: 2px solid black;
			border-radius: 5px;
			margin-left: 90%;
			margin-top: 0px;
		}
	</style>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
  <a class="navbar-brand" href="#">ADMIN PANEL - <?php echo $_SESSION['AdminLoginId'] ?></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
    </button>
   <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
         <a class="nav-link active" aria-current="page" href="Admin Panel.php">Panel</a>
        </li>
        <li class="nav-item active">
         <a class="nav-link active" aria-current="page" href="change_password.php">Change Password</a>
        </li>
      </ul>
    
     <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post">
			<button type="submit" name="Logout"> <a href="Admin Login.php"> LOG OUT </button> </a>
		</form>
    </div>
</nav>

<div class="container mt-5">
	<div class="row">
		<div class="col-lg-12">
			<table class="table text-center table-dark">
			  <thead>
			    <tr>
			      <th scope="col">Order ID</th>
			      <th scope="col">Customer Name</th>
			      <th scope="col">Phone No</th>
			      <th scope="col">Address</th>
			      <th scope="col">Pay Mode</th>
			      <th scope="col">Orders</th>
			      <th scope="col"></th>
			    </tr>
			  </thead>
			  <tbody>
			  	<?php
			  		$query="SELECT * FROM `order_manager`"; 
			  		$user_result=mysqli_query($con,$query);
			  		while($user_fetch=mysqli_fetch_assoc($user_result))
			  		{
			  			echo"
			  			<tr>
						    <td>$user_fetch[Order_Id]</td>
						   	<td>$user_fetch[Full_Name]</td>
						    <td>$user_fetch[Phone_No]</td>
						    <td>$user_fetch[Address]</td>
						    <td>$user_fetch[Pay_Mode]</td>
						    <td>
						   	<table class='table text-center table-dark'>
							  <thead>
							    <tr>
							      <th scope='col'>Item Name</th>
							      <th scope='col'>Price</th>
							      <th scope='col'>Quantity</th>
							    </tr>
							  </thead>
							  <tbody>
							  ";
							  $order_query="SELECT * FROM `user_orders` WHERE `Order_Id`='$user_fetch[Order_Id]'";
							  $order_result=mysqli_query($con,$order_query);
							  while($order_fetch=mysqli_fetch_assoc($order_result))
							  {
							  	echo"
							  		<tr>
								      <td>$order_fetch[Item_Name]</td>
								      <td>$order_fetch[Price]</td>
								      <td>$order_fetch[Quantity]</td>
								    </tr>
							  	";
							  }
							  echo"
							  </tbody>
							  </table>
						    </td>
						    <td>
							  	<form action='delete_order.php' method='POST'>
							  		<button name='Remove' class='btn btn-sm btn-outline-danger'>REMOVE</button>
							  		<input type='hidden' name='Order_Id' value='$user_fetch[Order_Id]'>
							  	</form>
							</td>
					    </tr>
			  			";
			  		}
			  	?>
			    
			  </tbody>
			</table>
		</div>
	</div>
</div>

<?php
	if(isset($_POST['Logout']))
	{
	header("location: Admin Login.php");
	}
?>

</body>
</html>