<?php
	include('conn.php');
	$id = $_GET['id'];
	$query = mysqli_query($conn, "SELECT * FROM type WHERE id='$id'");
	$row = mysqli_fetch_array($query);
?>
<!DOCTYPE html>
<html>
<head>
	<title>Edit Type Of Product Info</title>
	<link rel="stylesheet" href="css/inn.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>
<body>
<section>
	
	<div class="login-box">
		
	<form method="post" action="t_update.php?id=<?php echo $id; ?>">
	  <div class="input-box">
	  <h2>Edit Type Of Product Info</h2>
		<label for="name"></label>
		<input type="text"  name="name" value="<?php echo $row['name']; ?>" placeholder="Enter Type Of Product" required>
	 </div>
	 <div class="remember-forgot">
	 <button type="submit" value="">Save Edit</button>
	 <button><a class="la" href="type.php">Back</a></button>
	</div>
	  </div>
	</form>
	</div></section>
	<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
		<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
	
</body>
</html>