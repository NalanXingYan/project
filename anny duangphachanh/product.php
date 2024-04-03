<!--index-->
<!DOCTYPE html>
<html>
<head>
<title>Products Info</title>
<link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
  <section>
  <nav>
    <ul>
      <li>
        
        <a href="#"class="logo">
          <img src="img/logo.png" alt="">
          <span class="nav_item">Anny</span>
        </a>
      </li>
      <li>
        <a href="home.html" class="home">
          <i class="fa-solid fa-house"></i>
          <span class="nav_item">HOME</span>
        </a>
      </li>
      <li>
        <a href="mange.html" class="mana">
          <i class="fa-solid fa-bars-progress"></i>
          <span class="nav_item">MANAGE</span>
        </a>
      </li>
      <li>
        <a href="user.php" class="user">
          <i class="fa-solid fa-user"></i>
          <span class="nav_item">USER</span>
        </a>
      </li>
      <li>
        <a href="contact.html" class="cont">
          <i class="fa-solid fa-phone"></i>
          <span class="nav_item">CONTACT</span>
        </a>
    
      </li>
      <li>
        <a href="logout.php" class="logout">
          <i class="fa-solid fa-right-from-bracket"></i>
          <span class="nav_item">LOG OUT</span>
        </a>
      </li>
    </ul>
  </nav><center>
	<br><br><div class="you">
	<a class="youin"href="pd_insert.php">Add New Product</a>
	<a class="youout" href="mange.html">Back</a>
</div>
<br><br>

	<div>
		<table>
			<thead>
			<th>ID</th>
			<th>Name</th>
				<th>Description</th>
				<th>price</th>
				<th>Quantity</th>
				<th>Brand</th>
				<th>Edit</th>
				<th>Delete</th>
			</thead>
			<tbody>
				<?php
					include ('conn.php');
					$query=mysqli_query($conn,"SELECT * from `product`");
					while($row=mysqli_fetch_array($query)){
						?>
						<tr>
						<td><?php echo $row['id']; ?></td>
						<td><?php echo $row['name']; ?></td>
						<td><?php echo $row['description']; ?></td>
						<td><?php echo $row['price']; ?></td>
						<td><?php echo $row['qty']; ?></td>
						<td><?php echo $row['brand']; ?></td>
							<td>
								<a class="youu" href="edit.php?id=<?php echo $row['id']; ?>">Edit</a>
							</td>
							<td><a class="youn" href="delete.php?id=<?php echo $row['id']; ?>">Delete</a></td>
						</tr>
						<?php
					}
				?>
			</tbody>
		</table>
	</div>
	</center></section>
</body>
</html>