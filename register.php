<?php include('server.php') ?>

<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html"; charset="utf-8"/>
	
	<title>GODSPEED Signup</title>
	<link rel="stylesheet" type="text/css" href="register.css">
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Play">

</head>
<body>
	
	<h1 class="centered">GODSPEED</h1>

	<div class="signup">
			
		<form action="register.php" method="POST">

				<?php include('errors.php') ?>
				
				<h2 style="color:#fff;">Sign Up</h2>

				<input type="text" name="username" placeholder="User name" required><br><br>
				<input type="email" name="email" placeholder="Email address" required><br><br>
				<input type="password" name="pass" placeholder="password" required><br><br>
				<input type="password" name="cpass" placeholder="Confirm-password" required><br><br>
				<button type="submit" name="register_user">Sign UP</button><br><br>
				<br><br>
				Allready have an account?<a href="index.php">Sign In</a>

		</form>

	</div>
		
	<h3>GodSpeed</h3>
	
</body>
</html>

