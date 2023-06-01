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
			<center><h1>Login</h1></center>
            <form class="login" action="../backend/login.php"method="POST">
				<label for="userName">Username</label>
				<input type="text" id="userName" name="userName">
				<label for="passWord">Password</label>
				<input type="password" id="passWord" name="passWord">
				<input type="checkbox" id="seePass" onclick="showPassword()">
				<label for="seePass">See Password</label>
				<hr>
				<span>
					<center>
					<button type="submit" name="submit">Submit</button> or 
					<button type="button" onclick="toSignupPage()">Sign Up</button>
					</center>
				</span>
			</form>
        </div>
    </div>
	<?php include_once '..//backend//footer.php';  ?>
</body>

</html>
