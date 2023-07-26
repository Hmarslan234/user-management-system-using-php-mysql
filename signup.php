<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="style.css">
	<script src="https://kit.fontawesome.com/095747ea97.js" crossorigin="anonymous"></script>
	<title>Signup</title>
</head>
<body>
	<form method="post" action="signup.inc.php">
		<h2>Signup</h2>

		<?php if (isset($_GET['success'])) { ?>
			<p class="success"> <?php echo $_GET['success']; ?> </p>
		<?php } ?>
		<?php if (isset($_GET['error4'])) { ?>
			<p class="error4"> <?php echo $_GET['error4']; ?> </p>
		<?php } ?><br>

		<label>Name: </label><input type="text" name="name"><?php if (isset($_GET['error'])) { ?>
			<p class="error"> <?php echo $_GET['error']; ?> </p>
		<?php } ?><br>
		
		<label>Email: </label><input type="email" name="email">
			<?php if (isset($_GET['error1'])) { ?>
				<p class="error"> <?php echo $_GET['error1']; ?> </p>
			<?php } ?>
		<br>
		<label>Password: </label><i class="fa-solid fa-eye" id="eye"></i><input type="password" name="password" id="toggle-password">
			
			<?php if (isset($_GET['error2'])) { ?>
				<p class="error"> <?php echo $_GET['error2']; ?> </p>
			<?php } ?>
		<br>
		<label>Repeat Password: </label><i class="fa-solid fa-eye" id="eye1"></i><input type="password" name="c_password" id="toggle-password1">
			<?php if (isset($_GET['error3'])) { ?>
				<p class="error"> <?php echo $_GET['error3']; ?> </p>
			<?php } ?>
		<br>

		<button type="submit" name="submit">Signup</button>
		<p>Already have an account? <a href="login.php">Login</a></p>
	</form>

	<style type="text/css">
		p{
	text-align: center;
	margin-top: 10px;
}
p a{
	text-decoration: none;
}
.error{
	color: red;

}
.success{
	background: lightgreen;
	color: black;
	padding: 8px 12px;
	width: 95%;
	margin: 10px auto;
	
	border-radius: 6px;
}
.error4{
	background: wheat;
	color: black;
	padding: 8px 12px;
	width: 95%;
	margin: 10px auto;
	
	border-radius: 6px;
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