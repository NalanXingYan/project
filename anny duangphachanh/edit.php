<?php
	include('conn.php');
	
	$id = $_GET['id'];
	$query = mysqli_query($conn, "SELECT * FROM product WHERE id='$id'");
	$row = mysqli_fetch_array($query);
?>
<!DOCTYPE html>
<html>
<head>
	<title>Edit Product Info</title>
	<link rel="stylesheet" href="css/inn.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>
<body>
	<section>
	<div class="login-box">
		
	<form method="POST" action="update.php?id=<?php echo $id; ?>">
	
		<h2>Edit Product Info</h2>	
		<div class="input-box">
		<input type="text" name="name" value="<?php echo $row['name']; ?>" placeholder="Enter Product Name"></div>
		<div class="input-box">
		<input type="text" name="description" value="<?php echo $row['description']; ?>" placeholder="Enter Product Description"></div>
		<div class="input-box">
		<input type="text" name="price" value="<?php echo $row['price']; ?>" placeholder="Enter Price"></div>
		<div class="input-box">
		<input type="text" name="qty" value="<?php echo $row['qty']; ?>" placeholder="Enter Quantity"></div>
		<div class="input-box">
		<select type="text" name="brand" >
			<option value="">Select Brand Of Product</option>
				<?php
				include("conn.php");
				$brands=mysqli_query($conn,"SELECT*FROM brand");
			while ($row=mysqli_fetch_array($brands)){
				?>
				<option value="<?php echo $row['id']?>"><?php echo $row['name']?></option>
				<?php }?>
			</select>	</div>
			<div class="remember-forgot">
		<button type="submit">Save Edit</button>
		<button><a href="product.php">Back</a></button>
			</div>
		</div>
	</form>
	</section>
</body>
</html>