<!--add.php-->
	<?php
	include('conn.php');
	$name=$_POST['name'];
	$description=$_POST['description'];
	$price=$_POST['price'];
	$qty=$_POST['qty'];
	$brand=$_POST['brand'];
 
	mysqli_query($conn,"INSERT into `product` (name,description,price,qty,brand) 
	values ('$name','$description','$price','$qty','$brand')");
	header('location:product.php');
?>