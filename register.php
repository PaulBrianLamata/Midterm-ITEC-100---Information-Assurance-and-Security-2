<!DOCTYPE html>
<html>
<head>
	<title>Register Page</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Sofia">
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
</head>
<body>
	<div class="header">
		<h2>Register</h2 >
	</div>

	<form method="post">
		<div class="input-group">
			<label>Username</label>
			<input type="text" name="username" required>
		</div>
		<div class="input-group">
			<label>Email</label>
			<input type="email" name="email"required>
		</div>
		<div class="input-group">
			<label>Password</label>
			<input type="password" name="password_1"required>
		</div>
		<div class="input-group">
			<label>Confirm Password</label>
			<input type="password" name="password_2"required>
		</div>
		<div class="input-group">
			<button type="submit" name="register" class="btn button1">Register</button>	
		</div>
		<p style="font-size: 20px">Already Have Account? <a href="login.php">Sign in</a></p>
	</form>
</body>
</html>