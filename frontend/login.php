<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial scale=1.0">
	<meta charset="UTF-8">
	<title>Tiger Journal</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<script src="script.js"></script>
</head>
<body>
	<?php include_once '..//backend//header.php';  ?>
	<div class="loginContent">
        <div class="loginBox">
            <form class="login">
				<label for="userName">Username</label>
				<input type="text" id="userName" name="userName"></br>
				<label for="passWord">Password</label>
				<input type="password" id="passWord" name="passWord">
				<hr>
				<span>
					<center>
					<button type="submit">Login</button> or 
					<a href="home.php"><button type="button">Sign Up</button></a>
					</center>
				</span>
			</form>
        </div>
    </div>
	<footer>
		<img src="../resources/email.png">
		<img src="../resources/linkedin.png">
		<img src="../resources/meta.png">
		<img src="../resources/twitter-sign.png">
	</footer>
</body>

</html>
