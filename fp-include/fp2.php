<?php 

session_start();
 if (isset($_SESSION['otp']) && ($_SESSION['email'])) {  

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link rel="stylesheet" type="text/css" href="../style.css">
	<title>Password Recover</title>
</head>
<body>

	<form method="post" action="fp2.inc.php">
		<h2>Recover Paassword</h2>
		<h3>Please enter the 6 digits OTP code sent to your email address.</h3>

		<?php if (isset($_GET['error'])) { ?>
			<p class="error"><?php echo $_GET['error']; ?></p>
		<?php } ?>
		
		<label>OTP: </label><input type="number" name="otp" value="<?php echo $_SESSION['otp']; ?>">

	
		<button type="submit" name="submit">Submit</button>

	<p>Don't have an account? <a href="../signup.php">Sign-up</a></p>

	</form>

	<style type="text/css">
		.forgot a{
			font-weight: bold;
			text-decoration: none;
			color: white;
		}
	
p{
	text-align: center;
	margin-top: 20px;
}
p a{
	text-decoration: none;
}
h3{
	text-align: center;
	margin-bottom:10px;
}
.error{
	background: #f2dede;
      color: black;
      width: 95%;

      padding: 10px;
      border-radius: 5px;
      margin: 10px auto;
}
i{
	cursor: pointer;
	color: #ff8c00;
}
button{
	cursor: pointer;
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