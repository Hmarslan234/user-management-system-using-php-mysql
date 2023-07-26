<?php 
 
 session_start();

 if (isset($_SESSION['id']) && ($_SESSION['email'])) {  ?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="style.css">
	<title>Home</title>
</head>
<body>

	<h1>Hello <?php echo $_SESSION['name']; ?> ! Welcome to Your Account <br><br>
		<a href="logout.php">Logout</a></h1>
		<a href="change-password.php">Change Password</a>
		

<style type="text/css">

		h1{
			text-align: center;
			color: #fff;
		}
		a{
			text-align: center;
	background: #555;
	padding: 10px 15px;
	color: #fff;
	border-radius: 5px;
	margin-right: 12px;
	margin-top: 20px;
	border: none;
	text-decoration: none;
		}
		a:hover{
			opacity: .7;
		}
	</style>


</body>
</html>

<?php 
}
else{
	header("Location: login.php");
}


 ?>