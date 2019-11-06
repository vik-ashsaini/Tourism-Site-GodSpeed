<?php include('server.php'); ?>
<!DOCTYPE html>
<html>
<head>
	<title>UTTAR PRADESH</title>
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
			<a href="https://www.holidify.com/places/agra/taj-mahal-sightseeing-1020.html"><img src="ss4.jpg"></a>
		</div>

		<div class="textbox">
			<h3>Taj Mahal</h3>
			<p> DescriptionThe Taj Mahal is an ivory-white marble mausoleum on the south bank of the Yamuna river in the Indian city of Agra. It was commissioned in 1632 by the Mughal emperor Shah Jahan to house the tomb of his favourite wife, Mumtaz Mahal; it also houses the tomb of Shah Jahan himself.</p>
		</div>
	</div>

	<div class="card">
		<div class="imagebox">
			<a href="https://www.holidify.com/places/varanasi/kashi-vishwanath-temple-sightseeing-3872.html"><img src="kashi-vishwanath.jpg"></a>
		</div>

		<div class="textbox">
			<h3>Kashi Vishwanath Temple</h3>
			<p> Situated on the western bank of holy River Ganga, Kashi Vishwanath Temple is regarded as one of the most popular Hindu temples dedicated to Lord Shiva. Located in the heart of Varanasi, the temple is a core of faith for millions of Hindus. As per the Shaiva philosophy, it is believed that the Kashi Vishwanath temple is the centre of the worship since a long time.</p>
		</div>
	</div>

	<div class="card">
		<div class="imagebox">
			<a href="https://www.holidify.com/places/agra/agra-fort-sightseeing-1013.html"><img src="agra fort.jpg"></a>
		</div>

		<div class="textbox">
			<h3>Agra Fort</h3>
			<p> An architectural masterpiece, The Red Fort of Agra or Agra Fort was built by Emperor Akbar in 1573. It is, in fact, a massive fortification located on the right bank of the River Yamuna in Agra, Uttar Pradesh and is made entirely of red sandstone. The fort was once the ersthwhile residence of the Mughals until the year 1638. </p>
		</div>
	</div>

 	<div class="card">
		<div class="imagebox">
			<a href="https://www.holidify.com/places/vrindavan/iskcon-temple-sightseeing-3922.html"><img src="isckon.jpg"></a>
		</div>

		<div class="textbox">
			<h3>ISKCON Vrindavan</h3>
			<p> Also known as Sri Sri Krishna Balaram Mandir, ISKCON Vrindavan is a dream fulfilled of Swami Prabhupada, who wished to build a temple for the brothers - Krishna and Balaram - in the same holy city where they played together several centuries ago. Located in the Raman Reti area of Vrindavan, ISKCON temple has become the major attraction in the city and is thronged by devotees from nearby Delhi and all over the world. </p>
		</div>
	</div>
 
	<div class="card">
		<div class="imagebox">
			<a href="https://www.holidify.com/places/agra/fatehpur-sikri-sightseeing-1015.html"><img src="fateh.jpg"></a>
		</div>

		<div class="textbox">
			<h3>Fatehpur Sikri</h3>
			<p>A city, predominantly made of red sandstone, Fatehpur Sikri was founded in 16th century by Mughal Emperor Akbar. It is essentially a fortified city built by the king and had been the capital of his Empire for fifteen years.  Fatehpur Sikri is home to Jodha Bai's palace, Jama Mosque, Buland Darwaza, and a Tomb of Salim Chisti among many other famous monuments, each of which, is an integral part of the Indian heritage. </p>
		</div>
	</div>
</div>

</body>
</html>