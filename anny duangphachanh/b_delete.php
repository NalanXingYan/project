<!--delete.php-->
<?php
	$id=$_GET['id'];
	include('conn.php');
	mysqli_query($conn,"DELETE from `brand` where id='$id'");
	header('location:brand.php');
?>