<?php include('server.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	
  <title>Our Team Section</title>
	<link rel="stylesheet" type="text/css" href="aboutus.css">
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

<div class="wrapper">
  
  <h1>Our Team</h1>
  
  <div class="team">
  
    <div class="team_member">
  
      <div class="team_img">
        <img src="vk.jpg" alt="Team_image">
      </div>
  
      <h3>Vikash</h3>
      <p class="role">Backend developer</p>
      <p>3<sup>rd</sup> Year B.Tech,IT Student</p>

    </div>

    <div class="team_member">
      <div class="team_img">
        <img src="keshav.jpg" alt="Team_image">
      </div>
      <h3>Keshav Gupta</h3>
      <p class="role">Frontend Developer</p>
      <p>3<sup>rd</sup> Year B.Tech,IT Student</p>
    </div>

    <div class="team_member">
      <div class="team_img">
        <img src="imagelink.png" alt="Team_image">
      </div>
      <h3>Umesh Godhwani</h3>
      <p class="role">Support Lead</p>
      <p>3<sup>rd</sup> Year B.Tech,IT Student</p>
    </div>

  </div>
  
</div>	

</body>
</html>