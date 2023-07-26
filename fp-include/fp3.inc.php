<?php  
	session_start();
	session_regenerate_id();

	include("../db_connect.php");

	 if (isset($_SESSION['otp']) && ($_SESSION['email'])) { 

	 	$n_password = $_POST['n_password'];
	 	$c_password = $_POST['c_password'];

	 	$s_np = md5($n_password);

	 	if(empty($n_password)){
		header("Location: fp3.php?error=New Password is required");
		exit();
	}
	elseif($c_password !== $n_password ){
		header("Location: fp3.php?error=Confirm Password Must Match");
		exit();
	}
	else{

	 	$email = $_SESSION['email'];

		$sql = "UPDATE user SET password='$s_np' WHERE email='$email'";
		$result = mysqli_query($conn, $sql);
		if ($result) {
			header("Location: fp3.php?success=Password Updated Successfuly! You can login now.");
			exit();
		}
		else{
			header("Location: fp3.php?error=Error! Try Again");
			exit();
		}
	}

	 	}
else{
	header("Location: login.php");
}


?>