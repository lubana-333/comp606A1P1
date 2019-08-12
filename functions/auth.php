<?php
	
	include '../config/connection.php';

	session_start(); 

	if(isset($_POST['login'])){

		$email      = $_POST['email'];
		$password 	= $_POST['password'];

		$login_user = mysqli_query($con, "SELECT * FROM users WHERE email='$email' and password='$password'");

		$row 		= mysqli_fetch_array($login_user);

		if($login_user->num_rows>0){
			$_SESSION['user'] = $row['email'];
			header("location:../dashboard.php");
			die;
		}else{
			$msg = base64_encode('Your credentails are not match to our record!');
			header("location:../auth-signin.php?token-msg=".$msg);
			die;
		}
	
	}

	if(isset($_POST['signup'])){
		$username 	= $_POST['username'];
		$email      = $_POST['email'];
		$password 	= $_POST['password'];

		$login_user = mysqli_query($con, "SELECT * FROM users WHERE email='$email'");
		$result 	= mysqli_num_rows($login_user);

		if($result > 0){
			$msg = base64_encode('This email is already exist!');
			header("location:../auth-signup.php?token-msg=".$msg);
			die;
		}else{
			mysqli_query($con, "INSERT INTO users (username,email,password) VALUES ('$username','$email','$password')");
			$msg = base64_encode('User is Succesfully Registered!');
			header("location:../auth-signin.php?token-msg=".$msg);
			die;
		}
	}

	if(isset($_POST['change_password'])){
		session_destroy();
		$new_password = $_POST['new_password'];
		mysqli_query($con, "UPDATE users SET password = '$new_password' WHERE email='".$_SESSION['user']."' ");
		$msg = base64_encode('Your Password Is Succesfully Changed!');
		header("location:../auth-signin.php?token-msg=".$msg);
		die;
	}

	if(isset($_GET['logout'])){
		session_destroy();
		header("location:../auth-signin.php");
		die;
	}
?>

