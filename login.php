<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<script src="https://kit.fontawesome.com/095747ea97.js" crossorigin="anonymous"></script>
	<link rel="stylesheet" type="text/css" href="style.css">
	<title>Login</title>
</head>
<body>

	<form method="post" action="login.inc.php">
		<h2>Login</h2>

		<?php if (isset($_GET['error'])) { ?>
			<p class="error"><?php echo $_GET['error']; ?></p>
		<?php } ?>
		
		<label>Email: </label><input type="email" name="email">

		<label>Password</label><i class="fa-solid fa-eye" id="eye"></i><input type="password" name="password" id="toggle-password">
		<button type="submit" name="submit">Login</button>

		<p>Don't have an account? <a href="signup.php">Sign-up</a></p>
	</form>
	<p class="forgot"><a href="fp-include/fp1.php">Forgot Password</a></p>

	<style type="text/css">
		.forgot a{
			font-weight: bold;
		
			color: white;
		}
	
p{
	text-align: center;
	margin-top: 20px;
}
p a{
	text-decoration: none;
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
	<script type="text/javascript" src="toggle.js"></script>

</body>
</html>