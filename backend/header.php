    <header onmouseover="hoverOnHeader()" onmouseout="hoverOffHeader()">
		<h2><a href="home.php">Tiger Journal</a></h2>
		<nav>
			<ul>
				<a href="home.php"><li>Home</li></a>
				<a href="stories.php" onmouseover="hoverOnStories()" ><li>Stories</li></a>
				<?php
                    if (isset($_SESSION["useruid"])) {
                        echo '<a href="settings.php"><li>Settings</li></a>';
                    } else {
                        echo '<a href="login.php"><li>Login</li></a>';
                    }
                ?>
			</ul>
		</nav>
		<hr>
	</header>
	<hr class="headerLine" id="headerHrID">
	<div id="storiesSubULID" class="storiesSubUL" onmouseover="hoverOnStories()" onmouseout="hoverOffStories()"> <!-- sublist for stories -->
		<ul>
			<a class="subUL" href="stories.php"><li>News</li></a>
			<a class="subUL" href="stories.php"><li>Sports</li></a>
			<a class="subUL" href="stories.php"><li>Memos</li></a>
		</ul>
	</div>