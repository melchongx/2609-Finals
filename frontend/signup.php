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
	<div class="signupContent">
        <div class="signupBox">
			<center><h1>Signup</h1></center>
            <form class="signup">
				<label for="userName">Username</label>
				<input type="text" id="userName" name="userName">
				<label for="email">Email</label>
				<input type="email" id="email" name="email">
				<label for="userName">Username</label>
				<input type="text" id="userName" name="userName">
				<label for="passWord">Password</label>
				<input type="password" id="passWord" name="passWord">
				<label for="passWord">Confirm Password</label>
				<input type="password" id="conPass" name="conPass">
				<input type="checkbox" id="seePass" onclick="showPassword()">
				<label for="seePass">See Password</label>
				<hr>
				<span>
					<center>
					<button type="submit">Submit</button> or 
					<button type="button" onclick="toLoginPage()">Login</button>
					</center>
				</span>
			</form>
        </div>
    </div>
	<?php include_once '..//backend//footer.php';  ?>
</body>

</html>
