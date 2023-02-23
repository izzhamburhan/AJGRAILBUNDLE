<?php
	require_once 'Connection.php';
	if(ISSET($_POST['edit_item'])){
		$item_name = $_POST['item_name'];
		$price = $_POST['price'];
		$photo = addslashes(file_get_contents($_FILES['photo']['tmp_name']));
		$photo_name = addslashes($_FILES['photo']['name']);
		$photo_size = getimagesize($_FILES['photo']['tmp_name']);
		move_uploaded_file($_FILES['photo']['tmp_name'],"photo/" . $_FILES['photo']['name']);
		$con->query("UPDATE `item` SET `item_name` = '$item_name', `price` = '$price', `photo` = '$photo_name' WHERE `item_id` = '$_REQUEST[item_id]'") or die(mysqli_error());
		header("location:item_edit.php");
	}
?>