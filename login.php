<?php

	session_start();

	//connecting to the database

	$db = mysqli_connect("localhost","root","","login");
    


	if(isset($_POST['btn']))
	{
		$username = $_POST['username'];
		$password = $_POST['password'];

		 $password = md5($password); // hash password before storing for security purpose

		$sql = "INSERT INTO users(username,password) VALUES('$username','$password')";

		mysqli_query($db, $sql);

		$_SESSION['message'] = "You are now logged in";
		$_SESSION['username'] = $username;
		header("location: process.php"); 
	}

?>


<!DOCTYPE html>
<html>
<head>
	<title>Login Page</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div id="frm">
	<form action="login.php" method="POST">
		<p>
			<label>Username : </label>
			<input type="text" name="username" id="username">
		</p>
		<p>
			<label>Password : </label>
			<input type="password" name="password" id="password">
		</p>
		<p>
			<input type="submit" value="Login" id="btn" name="btn">
		</p>
	</form>
	</div>

</body>
</html>