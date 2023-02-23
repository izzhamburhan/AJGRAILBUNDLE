<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Change Password</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
</head>
<body>
<?php include_once('Connection.php');

if(isset($_POST['Submit'])){
	
	$AdminName = $_POST['AdminName'];
	$opwd = $_POST['opwd'];
	$npwd = $_POST['npwd'];
	$cpwd = $_POST['cpwd'];
	
	$query1 = mysqli_query($con,"SELECT `Admin_Name`, `Admin_Password` FROM `admin_login` WHERE `Admin_Name`='$AdminName' AND `Admin_Password` = '$opwd'");
	$num = mysqli_fetch_array($query1);

	if($num>0)
	{
	$query2 = mysqli_query($con,"UPDATE `admin_login` SET `Admin_Password`='$npwd' WHERE `Admin_Name`='$AdminName'");
	echo "Password Change Succes";
	}
	else{
	$_SESSION['msg2'] = "Password Change not Succes";	
	}
}


	

?>
	<style>
		div.container{
	padding: 0;
	margin: 0;
	box-sizing: border-box;
	font-family: poppins;

	position: absolute;
	top: 50%;
	left: 50%;
	transform: translate(-50%,-50%);
	
	display: flex;
	flex-direction: row;
	align-items: center;
	
	background-color: white;
	padding: 30px;
	box-shadow: 0 50px 50px -50px darkslategray;
}

div.container div.myform{
	padding: 0;
	margin: 0;
	box-sizing: border-box;
	font-family: poppins;
	width: 270px;
	margin-right: 30px;
}
	
div.container div.myform h2{
	padding: 0;
	margin: 0;
	box-sizing: border-box;
	font-family: poppins;
	color: #ff523b;
	margin-bottom: 20px;
}

div.container div.myform input{
	padding: 0;
	margin: 0;
	box-sizing: border-box;
	font-family: poppins;
	border: none;
	outline: none;
	border-radius: 0;
	width:100%;
	border-bottom: 2px solid #ff523b;
	margin-bottom: 25px;
	padding: 7px 0;
	font-size: 14px;
}
div.container div.myform button{
	padding: 0;
	margin: 0;
	box-sizing: border-box;
	font-family: poppins;
	color: white;
	background-color: #ff523b;
	border: none;
	outline: none;
	border-radius: 2px;
	font-size: 14px;
	padding: 5px 12px;
	font-weight: 500;
}
div.container div.myform img{
	padding: 0;
	margin: 0;
	box-sizing: border-box;
	font-family: poppins;
	width: 300px;
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
			<button type="submit" name="Logout">LOG OUT</button>
		</form>
    </div>
</nav>
<div class="container">
	<div class="myform">
		<form name="chngpwd" action="" method="post" onSubmit="return valid();">
			<table align="center">
				<tr height="50">
					<td>ADMIN ID :</td>
					<td><input type="text" name="AdminName" id="AdminName"></td>
				</tr>
				<tr height="50">
					<td>Old Password :</td>
					<td><input type="password" name="opwd" id="opwd"></td>
				</tr>
				<tr height="50">
					<td>New Password :</td>
					<td><input type="password" name="npwd" id="npwd"></td>
				</tr>
				<tr height="50">
					<td>Confirm Password :</td>
					<td><input type="password" name="cpwd" id="cpwd"></td>
				</tr>
				<td><input type="submit" name="Submit" value="Change Password"></td>
			</table>
		</form>
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
