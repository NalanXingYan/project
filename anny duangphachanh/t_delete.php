<!--delete.php-->
<?php
	$id=$_GET['id'];
	include('conn.php');
	mysqli_query($conn,"DELETE from `type` where id='$id'");
	header('location:type.php');
?>