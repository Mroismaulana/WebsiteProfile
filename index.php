<!DOCTYPE html>
<html>
<head>
	<title>LOGIN</title>
	<link rel="stylesheet" type="text/css" href="login.css">
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
		<button class="back" type="submit">Back</button>
     </form>
</body>
</html>