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
	<header onmouseover="hoverOnHeader()" onmouseout="hoverOffHeader()">
		<h2><a href="home.php">Tiger Journal</a></h2>
		<nav>
			<ul>
				<a href="home.php"><li>Home</li></a>
				<a href="stories.php" onmouseover="hoverOnStories()" ><li>Stories</li></a>
				<a href="aboutus.php"><li>About Us</li></a>
				<a href="login.php"><li>Login</li></a>
			</ul>
		</nav>
		<hr>
	</header>
	<hr class="headerLine" id="headerHrID">
	<div id="storiesSubULID" class="storiesSubUL" onmouseover="hoverOnStories()" onmouseout="hoverOffStories()"> <!-- sublist for stories -->
		<ul>
			<a class="subUL" href="news.php"><li>News</li></a>
			<a class="subUL" href="sports.php"><li>Sports</li></a>
			<a class="subUL" href="memos.php"><li>Memos</li></a>
		</ul>
	</div>
	<div class="storiesContent">
		<a href=""><div class="card">
			<img src="../resources/news.jpg">
			<h4><b><center>NEWS</center></b></h4>
		</div></a>
        <a href=""><div class="card">
			<img src="../resources/sports.jpg">
			<h4><b><center>SPORTS</center></b></h4>
		</div></a>
		<a href=""><div class="card">
			<img src="../resources/memos.png">
			<h4><b><center>MEMOS</center></b></h4>
		</div></a>
    </div>
	<footer>
		<img src="../resources/email.png">
		<img src="../resources/linkedin.png">
		<img src="../resources/meta.png">
		<img src="../resources/twitter-sign.png">
	</footer>
</body>

</html>
