<?php 
 
 session_start();
 if (isset($_SESSION['id']) && ($_SESSION['email'])) {  ?>
 	





<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<script src="https://kit.fontawesome.com/095747ea97.js" crossorigin="anonymous"></script>
	<link rel="stylesheet" type="text/css" href="style.css">
	<title>Change Password</title>
</head>
<body>

	<form method="post" action="change-password.inc.php">
		<h2>Change Password</h2>

		<?php if (isset($_GET['error'])) { ?>
			<p class="error"><?php echo $_GET['error']; ?></p>
		<?php } ?>
		<?php if (isset($_GET['success'])) { ?>
			<p class="success"><?php echo $_GET['success']; ?></p>
		<?php } ?>
		
		<label>Old Password: </label><i class="fa-solid fa-eye" id="eye"></i><input type="password" name="o_password" id="toggle-password">

		<label>New Password</label><i class="fa-solid fa-eye" id="eye1"></i><input type="password" name="n_password" id="toggle-password1">
		<label>Cinfirm Password</label><i class="fa-solid fa-eye" id="eye2"></i><input type="password" name="c_password" id="toggle-password2">
		<button type="submit" name="submit">Change</button>

		<p>Go back to <a href="home.php">Home Page</a></p>
	</form>
		

<style type="text/css">
	p{
		text-align: center;
		margin-top: 20px;
	}

		h1{
			text-align: center;
			color: #fff;
		}
		
		.error{
	background: #f2dede;
      color: black;
      width: 95%;

      padding: 10px;
      border-radius: 5px;
      margin: 10px auto;
}
.success{
	background: lightgreen;
	color: black;
	padding: 8px 12px;
	width: 95%;
	margin: 10px auto;
	
	border-radius: 6px;
}
button{
	cursor: pointer;
}
i{
	cursor: pointer;
	color: #ff8c00;
}


	</style>

<script type="text/javascript" src="toggle.js"></script>

</body>
</html>

<?php 
}
else{
	header("Location: login.php");
}


 ?>