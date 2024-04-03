<!--add.php-->
<?php
	include('conn.php');
	$name=$_POST['name'];
	$password=$_POST['password'];
 
	mysqli_query($conn,"INSERT into `user` (name,password) values ('$name','$password')");
	header('location:user.php');
?>