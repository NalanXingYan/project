<!--add.php-->
<?php
	include('conn.php');
	$name=$_POST['name'];
	$type=$_POST['type'];
 
	mysqli_query($conn,"INSERT into `brand` (name,type) values ('$name','$type')");
	header('location:brand.php');
?>