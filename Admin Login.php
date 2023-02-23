<?php require("Connection.php") ?>
<html lang="en">
<head>
	<title>Admin Login Panel</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="logss.css">
</head>
<body>

<div class="container">
	<div class="myform">
		<form method="POST" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>">
			<h2>ADMIN LOGIN</h2>
			<input type="text" placeholder="Admin Name" name="AdminName">
			<input type="password" placeholder="Password" name="AdminPass">
			<button type="submit" name="Login">LOGIN</button>
			<button> <a href="index.php" > MENU </a></button>
			
		</form>
	</div>
	<div class="image">
		<img src="images/nike.png" width="300px">
	</div>
</div>

<?php 

	function input_filter($data)
	{
		$data=trim($data);
		$data=stripslashes($data);
		$data=htmlspecialchars($data);
		return $data;
	}

	if(isset($_POST['Login']))
	{
		#filtering
		$AdminName=input_filter($_POST['AdminName']);
		$AdminPass=input_filter($_POST['AdminPass']);

		#escaping
		$AdminName=mysqli_real_escape_string($con,$AdminName);
		$AdminPass=mysqli_real_escape_string($con,$AdminPass);

		$query="SELECT * FROM `admin_login` WHERE `Admin_Name`=? AND `Admin_Password`=?";

		if($stmt=mysqli_prepare($con,$query))
		{
			mysqli_stmt_bind_param($stmt,"ss",$AdminName,$AdminPass);
			mysqli_stmt_execute($stmt);
			mysqli_stmt_store_result($stmt);
			if(mysqli_stmt_num_rows($stmt)==1)
			{
				session_start();
				$_SESSION['AdminLoginId']=$AdminName;
				header("location: Admin Panel.php");
			}
			else
			{
				echo"<script>alert('Invalid Admin Name or Password');</script>";
			}
			mysqli_stmt_close($stmt);
		}
		else
		{
			echo"<script>alert('SQL Query cannot be prepared');</script>";
		}
	}

?>

</body>
</html>