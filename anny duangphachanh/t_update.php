<?php
	include('conn.php');
	
	$id = $_GET['id']; 
	$name = $_POST['name'];
	
	$query = "UPDATE type SET name='$name'
	WHERE id='$id'";
	$result = mysqli_query($conn, $query);
	
	if ($result) {
		header('location:type.php');
		exit();
	} else {
		echo "Error updating record: " . mysqli_error($conn);
	}
?>