<?php 

session_start();

$db = mysqli_connect("localhost", "root", "","lab");

if(isset($_POST['register_btn'])) {
    $yourname = $_POST['yourname'];
    $email = $_POST['email'];
    $number = $_POST['number'];
    $password = $_POST['password'];
    $password2 = $_POST['password2'];

    if ($password == $password2) {
    	$password = md5($password);
    	$sql = "INSERT INTO users(yourname,email,number,password) VALUES('$yourname','$email','$number','$password')";
    	mysqli_query($db, $sql);
    	$_SESSION['message'] = "You are Logged in";
    	$_SESSION['yourname'] = $yourname;
    	header("location: home.php");
    }
    else{
          $_SESSION['message'] = "The tow password do not match";
    }
 
}
?>

<!DOCTYPE html>
<html>
<head>
<title>Registration Page</title>
<link rel="stylesheet" type="text/css" href="stylelogin.css">
<style>
</style>
</head>
<body>

<div class="wrap">
 <form class="form2" action="register.php" method="post">
 <h2>SignUp Free</h2>
 
 <input type="text" name="yourname" placeholder="Your Name">
 <input type="text" name="email" placeholder="Your Email">
 <input type="text" name="number" placeholder="Mobile Number">
 <input type="password" name="password" placeholder="Password">
 <input type="password" name="password2" placeholder="Conform Password">
 <br>
 <input type="submit" name="register_btn" value="Submit Now">
 <br>
 <form>
</div>

</body>
</html>