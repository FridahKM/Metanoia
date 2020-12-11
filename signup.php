<?php
session_start();
?>
<!doctype html>
<html>
<head>
	<title> Sign Up</title>
	<link href="formstyle.css" rel="stylesheet">
</head>
<body>
<msin>
	<div class="signupPage">
		<div class="signup" id="signup">
			  <a href="index.php"><span id="signup-close" class="signup-close">&times;</span></a>
			  
			  <label class="title"> Club Metanoia</label>
			  <?php
				require 'includes/succerrmess.php';
				?>
			  <form class="signupForm" action="includes/signup.incl.php" method="post">
			      <label for="fname">Firstname:</label><br>
			      <input type="text" name="fname" placeholder="Firstname"><br><br>
			      <label for="email">Email:</label><br>
			      <input type="email" name="email" placeholder="Email Address"><br><br>
			      <label for="password">Password:</label><br>
			      <input type="password" name="password" placeholder="Enter password"><br><br>
			      <label for="confirm">Confirm Password:</label><br>
			      <input type="password" name="confirm" placeholder="Confirm password"><br><br>
			      <button type="submit" value="submit" name="submit" class="signupBtn"> Done </button>
			  </form>
		</div>
	</div>
</msin>
</body>
</html>