
<?php
include ('conn.php');
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Stock Manage system</title>
    <link rel="stylesheet" href="css/inn.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    <section>
<div class="login-box">

<form action="add.php" method="post" enctype="multipart/form-data">
  <div class="input-box">
<h2>Insert Product Info</h2>
<br><br>
    <label for="name"></label>
    <input type="text" placeholder="Enter Product Name" name="name" required>
 </div>
 <div class="input-box">

    <label for="description"></label>
    <input type="text" placeholder="Enter Product Description" name="description" required>
 </div>
 <div class="input-box">

    <label for="price"></label>
    <input type="text" placeholder="Enter Product Price" name="price" required>
 </div>
 <div class="input-box">

    <label for="qty"></label>
    <input type="text" placeholder="Enter Product Quantity" name="qty" required>
 </div>
 <div class="input-box">

    <label for="brand"></label>
	<select type="text" name="brand">
			<option value="">Select Brand Of Product</option>
				<?php
				include("conn.php");
				$brand=mysqli_query($conn,"SELECT*FROM brand");
			while ($row=mysqli_fetch_array($brand)){
				?>
				<option value="<?php echo $row['id']?>"><?php echo $row['name']?></option>
				<?php }?>
			</select> </div>
<div class="remember-forgot">

 <button type="submit">Add</button>
<button><a href="product.php">Back</a></button>

    
 
 </div>
 </div>
  </div>
</form>
</div></section>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>

</html>