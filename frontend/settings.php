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
	<div class="settingsContent">
        <div class="settingsBox">
			<center><h1>Account Settings</h1></center>
            <center><span>
				<a href="update.php"><button>Update Info</button></a>
				<a href="../backend/logout.php"><button>Logout</button></a>
			</span></center>
        </div>
    </div>
	<?php include_once '..//backend//footer.php';  ?>
</body>

</html>
