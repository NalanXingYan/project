<?php
	include('conn.php');
	
	$id = $_GET['id'];
	$query = mysqli_query($conn, "SELECT * FROM brand WHERE id='$id'");
	$row = mysqli_fetch_array($query);
?>
<!DOCTYPE html>
<html>
<head>
	<title>Edit Brand Info</title>
	<link rel="stylesheet" href="css/inn.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>
<body>
<section>

	<div class="login-box">
		<form method="post" action="b_update.php?id=<?php echo $id; ?>">
	  <div class="input-box">
	  <h2>Edit Brand Info</h2>
		<label for="name"></label>
		<input type="text"  name="name" placeholder="Enter Brand" value="<?php echo $row['name']; ?>" name="name" required>
	 </div>
	 <div class="input-box">
	 <label for="type"></label>
	 <select type="text" name="type">
			<option value="">Select Type Of Products</option>
				<?php
				include("conn.php");
				$type=mysqli_query($conn,"SELECT*FROM type");
			while ($row=mysqli_fetch_array($type)){
				?>
				<option value="<?php echo $row['id']?>"><?php echo $row['name']?></option>
				<?php }?>
			</select> 
	 </div>
	 <div class="remember-forgot">
	 <button type="submit" value="">Save Edit</button>
	 <button><a class="la" href="brand.php">Back</a></button>
	
	  </div>
	</form>
	</div></section>
	<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
		<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
	
</body>
</html>