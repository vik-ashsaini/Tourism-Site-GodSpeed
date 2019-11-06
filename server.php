<?php
session_start();

//initializing variables
$username="";
$email="";
$errors=array();

//connect to db
$db=mysqli_connect('localhost','root','','godspeed') or die("could not connect to database");


//register user
if(isset($_POST['register_user'])){
	
	//receive all inputs from the froms
	$username=mysqli_real_escape_string($db,$_POST['username']);
	$email=mysqli_real_escape_string($db,$_POST['email']);
	$pass=mysqli_real_escape_string($db,$_POST['pass']);
	$cpass=mysqli_real_escape_string($db,$_POST['cpass']);

//from validation

	if(empty($username)){array_push($errors, "Username is required");}
	if(empty($email)){array_push($errors, "Email is required");}
	if(empty($pass)){array_push($errors, "Password is required");}
	if($pass!=$cpass){
		array_push($errors, "Password do not match");
	}

//check db for existing user with same name
	$user_check_query="SELECT * from user where username='$username' or email='$email' LIMIT 1";
	$result=mysqli_query($db,$user_check_query);
	$user=mysqli_fetch_assoc($result);

	if($user)
	{
		//if user exists
		if($user['username']===$username){
			array_push($errors, "Username already exists");
		}
		if($user['email']===$email){
			array_push($errors, "Email already Registered");
		}

	}


// //Register the user if no error
	if(count($errors)==0){

		$pass=md5($pass);    //this will encrpt the password
// 		//print $pass;
		
		$query="INSERT INTO `user`( `username`, `email`, `password`) VALUES ('$username','$email','$pass') ";
		mysqli_query($db,$query);
		
		$_SESSION['username']=$username;
		$_SESSION['success']="You are now logged in";

		header('location:index.php');
	}
}

//Login user

if (isset($_POST['login_user'])) {
	# code...
	$username=mysqli_real_escape_string($db,$_POST['username']);
	$pass=mysqli_real_escape_string($db,$_POST['pass']);

	if (empty($username)) {
		# code...
		array_push($errors, "Username is required");
	}
	if (empty($pass)) {
		# code...
		array_push($errors, "Password is required");
	}

	if(count($errors)==0){

		$pass=md5($pass);

		$query="SELECT * FROM user WHERE username='$username' and password='$pass' ";
		$result=mysqli_query($db,$query);

		if(mysqli_num_rows[$result])
		{
			$_SESSION['username']=$username;
			$_SESSION['success']="Logged in successfully!";
			header('location:main.php');

		}
		else
		{
			array_push($errors, "Wrong Username/Password");
			header('location:index.php');
		}
	}
}

//logout
if(isset($_GET['logout'])){

	session_destroy();
	unset($_SESSION['username']);
	header("location:index.php");
}




if (isset($_POST["submit"])) {

	$con = new PDO("mysql:host=localhost;dbname=godspeed",'root','');


    $str = $_POST["search"];
    $sth = $con->prepare("SELECT * FROM `searchtable` WHERE Name = '$str'");
 
    $sth->setFetchMode(PDO :: FETCH_OBJ);
    $sth -> execute();
 
    if($row = $sth->fetch())
    {
        ?>
        <a style="z-index: 9;position: absolute;top: 50px; left: 500px; padding: 5px;margin:10px;" href="<?php echo $row->link;?>"><?php echo $row->link;?></a>
        <?php 
    }
    else
    {
        echo "Name Does not exist";
    }
}


if (isset($_POST["Send"])) {

	$name=mysqli_real_escape_string($db,$_POST['name']);
	$email=mysqli_real_escape_string($db,$_POST['email']);
	$message=mysqli_real_escape_string($db,$_POST['message']);
	

	$query="INSERT INTO `feedback`(`name`, `email`, `message`) VALUES ('$name','$email','$message') ";
	mysqli_query($db,$query);
	header('location:index.php');
}

?>