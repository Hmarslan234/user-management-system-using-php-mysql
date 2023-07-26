<?php  

	session_start();
	session_regenerate_id();

	include("../db_connect.php");
	
	 if (isset($_SESSION['otp']) && ($_SESSION['email'])) {  

	if (isset($_POST['submit'])) {
		$otp = $_POST['otp'];

		if ($_SESSION['otp'] == $otp) {
			header("Location: fp3.php");
			exit();
		}
		else{
			header("Location: fp2.php?error=Invalid OTP Code");
			exit();
		}
	}
	else{
		header("Location: fp2.php");
		exit();
	}

}
else{
	header("Location: login.php");
}


 ?>