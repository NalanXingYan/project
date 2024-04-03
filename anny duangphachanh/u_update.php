<?php
	include('conn.php');
	
	$id = $_GET['id']; 
	$name = $_POST['name'];
	$password = $_POST['password'];
	
	$query = "UPDATE user SET name='$name', password='$password'
	WHERE id='$id'";
	$result = mysqli_query($conn, $query);
	
	if ($result) {
		header('location:user.php');
		exit();
	} else {
		echo "Error updating record: " . mysqli_error($conn);
	}
?>