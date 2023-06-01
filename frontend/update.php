<!DOCTYPE html>
<?php
	session_start();
?>
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
			<center><h1>Update Info</h1></center>
            <form class="signup" action="../backend/update.php" method="POST">
				<label for="userName">Input your username</label>
				<input type="text" id="userName" name="userName">
				<label for="email">New Email</label>
				<input type="email" id="email" name="email">
				<label for="phone">New Phone</label>
				<input type="text" id="phone" name="phone">
				<label for="passWord">New Password</label>
				<input type="password" id="passWord" name="passWord">
				<label for="passWord">Confirm Password</label>
				<input type="password" id="conPass" name="conPass">
				<input type="checkbox" id="seePass" onclick="showPassword()">
				<label for="seePass">See Password</label>
				<hr>
				<span>
					<center>
					<button type="submit" name="Submit">Submit</button> or 
					<button type="button" onclick="toHomePage()">Cancel</button>
					</center>
				</span>
			</form>
        </div>
    </div>
	<?php include_once '..//backend//footer.php';  ?>
</body>

</html>
