<?php include('server.php'); ?>
<!DOCTYPE html>
<html>
<head>

	<meta http-equiv="Content-Type" content="text/html"; charset="utf-8"/>
	
	<title>GODSPEED HOMEPAGE</title>
	<link rel="stylesheet" type="text/css" href="index.css">
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Play">
</head>
<body>
	
	<h1 class="centered">GODSPEED</h1>
	
	<div class="signin">

		<form action="index.php" method="POST">

			<?php include('errors.php') ?>

			<h2 style="color:white;">Log In</h2>
			<input type="text" name="username" placeholder="User name" required><br><br>
			<input type="password" name="pass" placeholder="password" required><br><br>
			<button type="submit" name="login_user">Login</button><br><br>
			<br><br>
			Don't have account?<a href="register.php">Sign Up</a>
		
		</form>
	</div>

	<h3>GodSpeed</h3>

</body>
</html>