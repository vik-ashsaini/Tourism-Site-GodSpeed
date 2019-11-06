<?php include('server.php'); ?>
<!DOCTYPE html>
<html>
<head>
	<title>RAJASTHAN</title>
	
	<link rel="stylesheet" type="text/css" href="rajasthan.css">
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
	

<div class="data">

	<div class="card">
		<div class="imagebox">
			<a href="https://www.holidify.com/places/jaipur/amer-fort-sightseeing-2124.html"><img src="amerfort.jpg"></a>
		</div>

		<div class="textbox">
			<h3>Amber (Amer) Fort and Palace</h3>
			<p> The Amber Fort, more generally known as the Amer Fort, is one of the most popular and is situated at a distance of 11 km from Jaipur, the capital city of Rajasthan. The Amber Fort and Palace are some of the most popular tourist places in Rajasthan and attract crowds by the score from both within and outside the country.</p>
		</div>
	</div>

	<div class="card">
		<div class="imagebox">
			<a href="https://www.holidify.com/places/jaipur/jaigarh-fort-sightseeing-2132.html"><img src="jaigarh.jpg"></a>
		</div>

		<div class="textbox">
			<h3>Jaigarh Fort</h3>
			<p> The majestic Jaigarh Fort is one of the best places to see in Rajasthan. It is strategically located on top of the ‘Cheel ka Teela’ hill, about 15 km away from the city center of Jaipur. Surrounded by verdant greenery, the fort is known as the Fort of Victory as it was never conquered by invaders.</p>
		</div>
	</div>

	<div class="card">
		<div class="imagebox">
			<a href="https://www.holidify.com/places/jaipur/jal-mahal-sightseeing-2133.html"><img src="Jal_Mahal.jpg"></a>
		</div>

		<div class="textbox">
			<h3>Jal Mahal</h3>
			<p> Jal Mahal calls to be one of the most serene and calm places to visit in Rajasthan situated in the midst of the chaotic city of Jaipur. Jal Mahal is asymmetric low rise stately mansion which was once a shooting toll house for the Maharajah. The illuminated sand merged with the stone walls of the beautiful architecture Jal Mahal portrays to be a clear-cut contrast to the azure blue waters of the inland lake.</p>
		</div>
	</div>

 	<div class="card">
		<div class="imagebox">
			<a href="https://www.holidify.com/places/udaipur/city-palace-sightseeing-3835.html"><img src="1472557789_1280px-Udaipur_City_Palace.jpg"></a>
		</div>

		<div class="textbox">
			<h3>CITY PALACE UDAIPUR</h3>
			<p> The City Palace is situated in Jaipur in the midst of the retrospective city wall. City Palace is one of the best Tourist Places In Rajasthan delineating marvellous sightseeing views.  A true heaven representing art and history, this place is a perfect destination to visit and take happy and memorable moments back home.</p>
		</div>
	</div>
 
	<div class="card">
		<div class="imagebox">
			<a href="holidify.com/places/jaipur/hawa-mahal-sightseeing-2131.html"><img src="hawamahal.jpg"></a>
		</div>

		<div class="textbox">
			<h3>Hawa Mahal</h3>
			<p> Hawa Mahal, the most distinguishing landmark of Jaipur is an exceptionally captivating destination spot, smeared with radiant hues of pink delineating delicate and honeycombed throng that is peaked at a great height.</p>
		</div>
	</div>
</div>

</body>
</html>