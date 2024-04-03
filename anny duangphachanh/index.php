
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
<form action="login.php" method="post">
<h2>Login</h2>
  <div class="input-box">
    <span class="icon">
    <i class="fa-solid fa-user"></i>
    </span>
    <label for="name"></label>
    <input type="text" placeholder="Enter Username" name="name" required>
 </div>
 <div class="input-box">
    <span class="icon">
    <i class="fa-solid fa-lock"></i>
    </span>
    <label for="password"></label>
    <input type="password" placeholder="Enter Password" name="password" required>
</div>
<div class="remember-forgot">
    <label>
      <input type="checkbox" checked="checked" name="remember"> Remember me
    </label>
    
    <a href="#">Forgot password</a>
</div>
 <button type="submit">Login</button>

 <div class="register-link">
    <p>Don't have an accoout?</p>
    <a href="#">Register</a>
 </div>
  </div>
</form>
</div></section>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>

</html>