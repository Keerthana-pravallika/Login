<?php

	session_start();

	
	
?>


<!DOCTYPE html>
<html>
<head>
	<title>Login Page</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<div>
	<h4>Welcome <?php echo $_SESSION['username']; ?></h4>
</div>

</body>
</html>