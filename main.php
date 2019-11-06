<?php include('server.php'); ?>
<!DOCTYPE html>
<html>
<head>
	
	<title>Home page</title>
	<link rel="stylesheet" type="text/css" href="main.css">
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Play">
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

</div>
	
	
<!-- image maping sort -->
<div class="destinations">	 	
	
	<div class="row">

	  <div class="column">
	  	<P class="tooltiptext"> himachal pradesh</P>
	    <a href="himachal.php"><img src="himachal.jpg" alt="himachal" style="width:100%"></a>
	  </div>

	  <div class="column">
	  	<P class="tooltiptext"> rajasthan</P>
	    <a href="rajasthan.php"><img src="rajasthan.jpg" alt="rajasthan" style="width:100%"></a>
	  </div>

	  <div class="column">
	  	<P class="tooltiptext"> jammu and kashmir</P>
	   <a href="j&k.php"> <img src="j&k.jpg" alt="jammu" style="width:100%"></a>
	  </div>

	  <div class="column">
	  	<P class="tooltiptext"> uttar pradesh</P>
	    <a href="up.php"><img src="uttar.jpg" alt="uttar" style="width:100%"></a>
	  </div>

	</div> 

</div>

	
</body>
</html>