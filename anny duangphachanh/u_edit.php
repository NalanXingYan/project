<?php
	include('conn.php');
	
	$id = $_GET['id'];
	$query = mysqli_query($conn, "SELECT * FROM user WHERE id='$id'");
	$row = mysqli_fetch_array($query);
?>
<!DOCTYPE html>
<html>
<head>
	<title>Edit User Info</title>
	<link rel="stylesheet" href="css/inn.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>
<body>
<section>
	
	<div class="login-box">
		
	<form method="post" action="u_update.php?id=<?php echo $id; ?>">
	  <div class="input-box">
	  <h2>Edit User Info</h2>
		<span class="icon">
		<i class="fa-solid fa-user"></i>
		</span>
		<label for="name"></label>
		<input type="text" placeholder="Enter Username" name="name" value="<?php echo $row['name']; ?>" name="name" required>
	 </div>
	 <div class="input-box">
		<span class="icon">
		<i class="fa-solid fa-lock"></i>
		</span>
		<label for="password"></label>
		<input type="password" placeholder="Enter Password" name="password" value="<?php echo $row['password']; ?>" name="password" required>
	</div>
	<div class="remember-forgot">
	 <button type="submit" value="">Save Edit</button>
	 <button><a class="la" href="user.php">Back</a></button>
	</div>
	  </div>
	</form>
	</div></section>
	<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
		<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
	</body>
</body>
</html>