<?php
	include('conn.php');
	
	$id = $_GET['id']; 
	$name = $_POST['name'];
	$type = $_POST['type'];
	
	$query = "UPDATE brand SET name='$name', type='$type'
	WHERE id='$id'";
	$result = mysqli_query($conn, $query);
	
	if ($result) {
		header('location:brand.php');
		exit();
	} else {
		echo "Error updating record: " . mysqli_error($conn);
	}
?>