<?php include('server.php'); ?>
<!DOCTYPE html>
<html>
<head>
	<title>Contact Us</title>
	<link rel="stylesheet" type="text/css" href="contactus.css">
</head>
<body>

<div class="maindiv"><!-- slider  -->

	<div class="toplabel">
		<!-- label content  -->
		<ul> 
			<li><a href="main.php">HOME</a>            <!-- label header -->
				<ul>
					<li><a href="aboutus.php"> About</a></li>
					<li><a href="contactus.php">Contact Us</a></li>
					        <!-- label heading content -->
				</ul>
			</li>

			<li><a href="">PLACES</a>
				<ul>
					<li><a href="rajasthan.php"> RAJASTHAN</a></li>
					<li><a href="j&k.php"> JAMMU & KASHMIR</a></li>
					<li><a href="himachal.php"> HIMACHAL PRADESH</a></li>
					<li><a href="up.php"> UTTTAR PRADESH</a></li>
				</ul>
			</li>

			<form method="post">
				<li><input type="text" name="search" placeholder="search your place"></li>
				<li ><input class="b1" type="submit" name="submit" value="search"></li>
			</form>

			<li id="welcome">Welcome <?php echo $_SESSION['username']; ?></li>
			
			<li><button style="color: black;"><a href="index.php?logout='1'">Logout</a></button></li>

		</ul>



		<?php if(isset($_SESSION['success'])):?>
			<div>
				<h3> 
					<?php 
						echo $_SESSION['success'];
						unset($_SESSION['success']);
					?>
				</h3>
			</div>
		<?php endif ?>
		<!-- // if the user logs in print information about him -->

		<?php if(isset($_SESSION['username'])) :?>
		<?php endif ?>

	</div>

<!-- </div> -->


<br><br><br><br><br><br>
	<div class="contact-title">
		<h1>GODSPEED</h1>

		<br>
		<h2>In case of any query and suggestion </h2>
		<h2> Give your Feedback</h2>
	</div>

	<div class="contact-form">

		<form id="contact-form" method="post" >
			<input type="text" name="name" class="form-control" placeholder="Name" required>
			<br>

			<input type="email" name="email" class="form-control" placeholder="Email" required><br>
			
			<textarea name="message" class="form-control" placeholder="Message/Feedback" rows="4" required></textarea><br>

			<input type="submit" value="Send" class="form-control" name="Send">

		</form>

	</div>
</div>

</body>
</html>