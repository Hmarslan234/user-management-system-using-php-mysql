<?php  

include("db_connect.php");

 if (isset($_POST['submit'])) {
 	$name = $_POST['name'];
 	$email = $_POST['email'];
 	$password = $_POST['password'];
 	$c_password = $_POST['c_password'];

$secure_password = md5($password);

/*$sql = "INSERT INTO `user`( `name`, `email`, `password`, `c_password`) VALUES ('$name','$email','$secure_password','

	$secure_password1')";

if ( mysqli_query($conn, $sql)){
	echo "Sigup Success";
}*/

$validation1 = empty($name);

 if ($validation1) {
  	//echo "Name is required<br>";
  	header("Location: signup.php?error=Name is Required");
  	exit();
  } 


//Validating Conditions
  $validation2 = filter_var($email, FILTER_VALIDATE_EMAIL);
 if ( ! $validation2) {
  	//echo "invalid email<br>";
  	header("Location: signup.php?error1=A valid Email is required");
  	exit();
  } 

  $validation3 = strlen($password) < 8;

  if ($validation3) {
  	//echo "Password must contain at least 8 charachters<br>";
  	header("Location: signup.php?error2=Password must contain at least 8 charachters");
  	exit();
  }

$validation4 = preg_match("/[a-z]/", $password);
  if ( ! $validation4) {
  	//echo "Password must contain at least 1 charachter<br>";
  	header("Location: signup.php?error2=Password must contain at least 1 small charachter");
  	exit();
  }

  $validation5 = preg_match("/[A-Z]/", $password);
  if ( ! $validation5) {
  	//echo "Password must contain at least 1 capital letter<br>";
  	header("Location: signup.php?error2=Password must contain at least 1 capital charachter");
  	exit();
  }

  $validation6 = preg_match("/[0-9]/", $password);
   if ( ! $validation6) {
  	//echo "Password must contain at least 1 digit/number<br>";
  	header("Location: signup.php?error2=Password must contain at least 1 digit/number");
  	exit();
  }

  $validation7 = preg_match("/\W/", $password);
  if ( ! $validation7) {
  	//echo "Password must contain at least 1 special charachter<br>";
  	header("Location: signup.php?error2=Password must contain at least 1 special charachter");
  	exit();
  }

  $validation8 = preg_match("/\s/", $password);
  if ( $validation8 ) {
  	//echo "Avoid space in password<br>";
  	header("Location: signup.php?error2=Avoid spaces in password");
  	exit();
  }

$validation9 = $password !== $c_password;
  if ($validation9) {
  	//echo "Password must match<br>";
  	header("Location: signup.php?error3=Repeat Password Must Match");
  	exit();
  }


$sql1 = "SELECT * FROM user WHERE email='$email'";
$result1 = mysqli_query($conn, $sql1);
  if (mysqli_num_rows($result1) > 0) {
    $row = mysqli_fetch_assoc($result1);
    if ($row['email'] === $email) {
      header("Location: signup.php?error4=Email Already Registered, Try Another..");
    exit();
    }
    
  }
  else{
        $sql = "INSERT INTO `user`( `name`, `email`, `password`) VALUES ('$name','$email','$secure_password')";

if ( mysqli_query($conn, $sql)){
  //echo "Sigup Success";
  header("Location: signup.php?success=Singup Success");
    exit();

  }
    }

     





 }

?>