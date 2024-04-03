<!--add.php-->
<?php
	include('conn.php');
	$name=$_POST['name'];
 
	mysqli_query($conn,"INSERT into `type` (name) values ('$name')");
	header('location:type.php');
?>