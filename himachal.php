<?php include('server.php'); ?>
<!DOCTYPE html>
<html>
<head>
	
	<title>Himachal Pradesh</title>
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
			<a href="https://www.holidify.com/places/nalagarh/"><img src="nalagarh.jpg"></a>
		</div>

		<div class="textbox">
			<h3>Nalagarh</h3>
			<p>  Nalagarh is known for its abundant greenery, serenity and the amazing view of the Shivalik hills past the Sirsa river.The Mughals and the Britishers during their rule cherished the beauty of this place and regarded it as a princely state and till date the royal touch is still alive and unscathed. Nalagarh's main attraction is the Nalagarh Fort which has now been converted into a heritage hotel that attracts tourists from all over the country. </p>
		</div>
	</div>

	<div class="card">
		<div class="imagebox">
			<a href="https://www.holidify.com/places/dalhousie/"><img src="dalhousie.jpg"></a>
		</div>

		<div class="textbox">
			<h3>Dalhousie</h3>
			<p> The tiny tinsel town Dalhousie tucked away in the lap of Himachal Pradesh is a piece of paradise for all the travellers. It boasts of old world charm, mesmerising natural landscape, pine-clad valleys, flower bedecked meadows, fast flowing rivers, magnificent misty mountains and some of the most spectacular views in the world. </p>
		</div>
	</div>

	<div class="card">
		<div class="imagebox">
			<a href="https://www.holidify.com/places/kasol/"><img src="kasol.jpg"></a>
		</div>

		<div class="textbox">
			<h3>Kasol</h3>
			<p>A small village in Himachal situated along the banks of the river Parvati, Kasol is a tourist attraction that is rapidly gaining fame as a very popular hub for trekkers, backpackers, and nature lovers. Commonly known as the Amsterdam of India, this quaint little village is resplendent in natural scenic beauty, and is one of the few places in the country that is yet to be ruined by urbanization and commercialization. </p>
		</div>
	</div>

 	<div class="card">
		<div class="imagebox">
			<a href="https://www.holidify.com/places/spiti/chandratal-lake-sightseeing-3601.html"><img src="chandratal.jpg"></a>
		</div>

		<div class="textbox">
			<h3>Chandratal Lake</h3>
			<p>A camper and trekker's paradise, Chandratal Lake is often referred to as one of the most beautiful lakes located at an altitude of about 4300 m in the mighty Himalayas. The stunning lake is situated on the Samudra Tapu plateau which overlooks the Chandra River. The name "Chandra Taal" (Lake of the Moon) comes from its crescent shape.</p>
		</div>
	</div>
 
	<div class="card">
		<div class="imagebox">
			<a href="https://www.holidify.com/places/spiti/key-monastery-sightseeing-3607.html"><img src="Key_Monastery,_Spiti_Valley_20180227120856.jpg"></a>
		</div>

		<div class="textbox">
			<h3>Key Monastery</h3>
			<p> The Key Monastery is a famous Tibetan Buddhist monastery in the Lahaul and Spiti District of India. Located at an altitude of 4,166 metres above the sea level, the monastery is very close to the Spiti River in the Spiti Valley of Himachal Pradesh in India. Also known as the Kye Monastery and Ki Monastery, it is believed to have been founded by Dromton, who was a student of the famous teacher Atisha in the 11th century. </p>
		</div>
	</div>
</div>

</body>
</html>