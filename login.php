<?php
session_start();
?>
<!doctype html>
<html>
<head>
	<title> Log in </title>
	<link href="formstyle.css" rel="stylesheet">
</head>
<body>
	<div class="loginPage">
		<div class="login" id="login">
			<a href="index.php"><span id="login-close" class="login-close">&times;</span></a>
			<label class="title"> Club Metanoia</label>
			<?php
			require 'includes/succerrmess.php';
			?>
			<form class="loginForm" action="includes/login.incl.php" method="post"><br>
		  		<label for="email">Email:</label><br>
		  		<input type="email" required id=email name="email" placeholder="Email Address"><br><br>
		  		<label for="password">Password:</label><br>
		  		<input type="password" required id=password name="password" placeholder="Enter password"><br>
		  		<a href="" class="pwdRem">Forgotten password</a>
		  		<br>
				<br>
				<button type="submit" name="submit" value="submit" class="loginBtn"> Done </button>
			</form>
		</div>
	</div>
</body>
</html>