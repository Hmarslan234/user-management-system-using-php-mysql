<?php 
 
 session_start();
 if (isset($_SESSION['id']) && ($_SESSION['email'])) {  

include("db_connect.php");

if (isset($_POST['submit'])) {

	function validation($data){
		$data = trim($data);
		$data = stripcslashes($data);
		$data = htmlspecialchars($data);
		return $data;
	}

	$o_password = $_POST['o_password'];
	$n_password = $_POST['n_password'];
	$c_password = $_POST['c_password'];

	if (empty($o_password)) {
		header("Location: change-password.php?error=Old Password is required");
		exit();
	}
	elseif(empty($n_password)){
		header("Location: change-password.php?error=New Password is required");
		exit();
	}
	elseif($c_password !== $n_password ){
		header("Location: change-password.php?error=Confirm Password Must Match");
		exit();
	}
	else{

		$s_op = md5($o_password);
		$s_np = md5($n_password);
		$id = $_SESSION['id'];

		$sql = "SELECT password FROM user WHERE id='$id' AND password='$s_op'";

		$result = mysqli_query($conn, $sql);

		if (mysqli_num_rows($result) === 1) {
			$sql2 = "UPDATE user SET password='$s_np' WHERE id='$id'";
			$result2 = mysqli_query($conn, $sql2);
			if ($result2) {
				header("Location: change-password.php?success=Password Updated Successfuly");
			exit();
			}
		}
		else{
			header("Location: change-password.php?error=Old Password is incorrect");
			exit();
		}

		
	}


 	
}
else{
	header("Location: home.php");
	exit();
}
}
else{
	header("Location: home.php");
}


 ?>