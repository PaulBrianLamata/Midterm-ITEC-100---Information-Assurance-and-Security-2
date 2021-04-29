<?php include 'loginfunction.php'?>
<!DOCTYPE html>
<html>
<head>
	<title>Login Page</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Sofia">
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
	<div class="header">
		<h2>Login</h2 >
	</div>
	<form method="post">
		<div class="input-group">
			<label>Username</label>
			<input type="text" name="username" required>
		</div>
		<div class="input-group">
			<label>Password</label>
			<input type="password" name="password_1" required>
			
		</div>
		<div class="input-group">
		<button type="submit" name="login" class="btn button1">Login</button>
		<button type="submit" name="forgot" class="btn button1">Forgot Password</button>
		</div>
		<p style="font-size: 20px">You Don't Have An Account? <a href="register.php">Sign up</a></p>

</form>
</body>
</html>