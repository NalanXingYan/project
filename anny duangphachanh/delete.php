<!--delete.php-->
<?php
	$id=$_GET['id'];
	include('conn.php');
	mysqli_query($conn,"DELETE from `product` where id='$id'");
	header('location:product.php');
?>