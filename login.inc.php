<?php 

session_start();

include("db_connect.php");

if (isset($_POST['submit'])) {

	function validation($data){
		$data = trim($data);
		$data = stripcslashes($data);
		$data = htmlspecialchars($data);
		return $data;
	}

	$email = $_POST['email'];
	$password = $_POST['password'];

	$secure_password = md5($password);

	

	if (empty($email)) {
		header("Location: login.php?error=A valid Email is required");
		exit();
	}
	elseif(empty($password)){
		header("Location: login.php?error=A valid Password is required");
		exit();
	}
	else{
		$sql = "SELECT * FROM user WHERE email= '$email' AND password='$secure_password'";

		$result = mysqli_query($conn, $sql);

		if (mysqli_num_rows($result) === 1) {
			$row = mysqli_fetch_assoc($result);

			if ($row['email'] === $email && $row['password'] === $secure_password) {
				$_SESSION['name'] = $row['name'];
				$_SESSION['email'] = $row['email'];
				$_SESSION['id'] = $row['id'];
				header("Location: home.php");

			}
			else{
				header("Location: login.php?error=Invalid Email or Password");
				exit();
			}
		}
		else{
			header("Location: login.php?error=Invalid Email or Password");
				exit();
		}
	}
}

 ?>