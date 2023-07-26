<?php  

	session_start();
	session_regenerate_id();

	include("../db_connect.php");

	if (isset($_POST['submit'])) {
		$email = $_POST['email'];

		$id = $_SESSION['id'];
		$otp = rand(100000, 999999);

		$sql = "SELECT email FROM user WHERE email='$email'";
		$result = mysqli_query($conn, $sql);

		if (mysqli_num_rows($result) === 1) {

			$_SESSION['otp'] = $otp;
			$_SESSION['email'] = $email;

			/*$row = mysqli_fetch_assoc($result);
			$_SESSION['name'] = $row['name'];
			$name = $_SESSION['name'];
			$otp1 = $_SESSION['otp'];
			$email1 = $_SESSION['email'];

			$subject = "Password Reset OTP Code";
			$msg = "Dear " .$name. "\n\n".
			"Here's Your OTP Code for Password Reset \n". $otp1. "\n\n".
			"Thanks";
			$header = "From: Dynamic Developers <info@dynamicdevelopers.com.pk>";

			mail($email1, $subject, $msg, $header);*/

			
			header("Location: fp2.php");
			exit();
		}
		else{
			header("Location: fp1.php?error=Email Does not match");
			exit();
		}
	}
	else{
		header("Location: fp1.php");
		exit();
	}

?>