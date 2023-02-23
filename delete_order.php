<?php

session_start();
$con=mysqli_connect("localhost","root","","testing");

if(mysqli_connect_error()){
	echo "<script>
	alert('cannot connect to database');
	window.location.href='mycart.php';
	</script>";
	exit();
}

if($_SERVER["REQUEST_METHOD"]=="POST")
{
	if(isset($_POST['Remove']))
	{
		$Order_Id=$_POST['Order_Id'];
		$query1="DELETE FROM `order_manager` WHERE `Order_Id`=$Order_Id";
		$query2="DELETE FROM `user_orders` WHERE `Order_Id`=$Order_Id";
		if(mysqli_query($con,$query1))
		{
			if(mysqli_query($con,$query2))
			{
				echo "<script>
				alert('Item Removed');
				window.location.href='Admin Panel.php';
				</script>";
			}
		}
		else
		{
			echo"hmm";
		}

	}
}

?>