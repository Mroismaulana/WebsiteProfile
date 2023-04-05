<!DOCTYPE html>
<html>
<head>
	<title>Login Admin SMK Asyafi'iyah 01</title>
	<link rel="stylesheet" type="text/css" href="./../css/login.css">
	<link rel="shortcut icon" href="./../img/D2.jpg" type="image/x-icon">
</head>
<body>
     <form action="login.php" method="post">
     	<h2>LOGIN</h2>
     	<?php if (isset($_GET['error'])) { ?>
     		<p class="error"><?php echo $_GET['error']; ?></p>
     	<?php } ?>
     	<label><b>User Name</b></label>
     	<input type="text" name="uname" placeholder="User Name"><br>

     	<label><b>Password</b></label>
     	<input type="password" name="password" placeholder="Password"><br>

     	<button class="login"type="submit">Login</button>
		<button a href='Menu Home.php' class="back" type="submit">Back</button>
     </form>
</body>
</html>