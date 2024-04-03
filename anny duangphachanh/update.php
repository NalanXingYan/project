<?php
	include('conn.php');
	
	$id = $_GET['id']; 
	$name = $_POST['name'];
	$description = $_POST['description'];
	$price = $_POST['price'];
	$qty = $_POST['qty'];
	$brand = $_POST['brand'];

	
	$query = "UPDATE product SET name='$name', description='$description',price='$price',qty='$qty',brand='$brand'
	WHERE id='$id'";
	$result = mysqli_query($conn, $query);
	
	if ($result) {
		header('location:product.php');
		exit();
	} else {
		echo "Error updating record: " . mysqli_error($conn);
	}
?>