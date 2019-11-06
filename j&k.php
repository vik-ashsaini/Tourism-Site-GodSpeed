<?php include('server.php'); ?>
<!DOCTYPE html>
<html>
<head>
	<title>Jammu and Kashmir</title>
	
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
			<a href="https://www.holidify.com/places/amarnath/"><img src="amarnath cave.jpg"></a>
		</div>

		<div class="textbox">
			<h3>Amarnath</h3>
			<p> Amarnath is one of the most important pilgrimage in India for the worshippers of Lord Shiva. The Amarnath cave is haven to an enshrined image of ice called the Shivaling formed naturally, which resembles Lord Shiva. The destination is visited by millions of tourists every year from all across the world in what is famously known as the 'Amarnath Yatra'.  </p>
		</div>
	</div>

	<div class="card">
		<div class="imagebox">
			<a href="https://www.holidify.com/places/gulmarg/"><img src="gulmarg.jpg"></a>
		</div>

		<div class="textbox">
			<h3>Gulmarg</h3>
			<p> Situated at an altitude of 2730 m above sea level, Gulmarg is a popular skiing destination located in Pir Panjal Range of Union territory of Jammu and Kashmir. Surrounded by snow-covered lofty Himalayas, meadows of flowers, deep ravines, evergreen forested valleys, Gulmarg also has the world's second-highest Gondola ride.</p>
		</div>
	</div>

	<div class="card">
		<div class="imagebox">
			<a href="https://www.holidify.com/places/ladakh/leh-palace-sightseeing-2577.html"><img src="leh palace.jpg"></a>
		</div>

		<div class="textbox">
			<h3>Leh Palace</h3>
			<p> The Leh Palace, also known as 'Lhachen Palkhar' is one of the most historically rich edifices that can be found in the country and is located in the breathtakingly beautiful Kashmir, in the town of Leh in India. This grand structure was built in the 17th century by King Sengge Namgyal as a royal palace, and the King and his family were the former residents of the majestic mansion.</p>
		</div>
	</div>

 	<div class="card">
		<div class="imagebox">
			<a href="https://www.holidify.com/places/srinagar/mughal-gardens-sightseeing-3653.html"><img src="mughal garden.jpg"></a>
		</div>

		<div class="textbox">
			<h3>Mughal Garden</h3>
			<p> Mughal Gardens which have truly changed the face of the Mughal Empire is one of the most popular and the most visited tourist attractions of Srinagar. During their rule, the Mughals began to build several types of gardens in Persian architecture, and the combination of these gardens is referred to as the Mughal Gardens. </p>
		</div>
	</div>
 
	<div class="card">
		<div class="imagebox">
			<a href="https://www.holidify.com/places/ladakh/pangong-lake-sightseeing-2583.html"><img src="pangong lake.jpg"></a>
		</div>

		<div class="textbox">
			<h3>Pangong Lake</h3>
			<p>The famous and sparkling blue Pangong lake is situated near Leh-Ladakh in the Himalayas, approximately at the height of 4350 meters. This endorheic lake is 12 kilometres long and extends from India to Tibet, with two-thirds of it lying in the latter. Owing to its altitude, the Pangong Lake temperature ranges from -5°C to 10°C as a result of which it freezes completely during winters in spite of its salinity.</p>
		</div>
	</div>

	<div class="card">
		<div class="imagebox">
			<a href="https://www.holidify.com/places/vaishno-devi/"><img src="vaishno devi.jpg"></a>
		</div>

		<div class="textbox">
			<h3>Vaishno Devi Yatra</h3>
			<p>Located in Trikuta hills,13 kms from Katra (in J&K); Vaishno Devi is a town that's home to the famous Vaishno Devi Mandir.This renowned shrine allures millions of devotees from all over the world.Popularly known as Mata Rani, Vaishnavi and Trikuta, Vaishno Devi is a manifestation of the Hindu Goddess Durga.It is believed that during the pooja and aarti, Goddesses arrive at the Holy cave to pay their respect to Mata Rani. </p>
		</div>
	</div>

	<div class="card">
		<div class="imagebox">
			<a href="https://www.holidify.com/places/srinagar/dal-lake-sightseeing-3648.html"><img src="dalalake.jpg"></a>
		</div>

		<div class="textbox">
			<h3>Dal Lake</h3>
			<p> Dal Lake is everything you could ask for in a hillside lake, and more. Considered the jewel of Srinagar, the beauty of this pristine lake, spread over 26 square kilometres, only grows around every corner. </p>
		</div>
	</div>


</div>

</body>
</html>