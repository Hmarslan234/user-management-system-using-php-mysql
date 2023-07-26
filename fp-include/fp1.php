<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link rel="stylesheet" type="text/css" href="../style.css">
	<title>Password Recover</title>
</head>
<body>

	<form method="post" action="fp1.inc.php">
		<h2>Recover Paassword</h2>
		<h3>We will send you a verification OTP code through email.</h3>

		<?php if (isset($_GET['error'])) { ?>
			<p class="error"><?php echo $_GET['error']; ?></p>
		<?php } ?>
		
		<label>Email: </label><input type="email" name="email">

	
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