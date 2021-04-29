<?php
 $servername = "localhost";
	 $usern = "root";
	 $password = "";
	 $dbname = "loginregister";
	 
	 // Create connection
	 $conn = new mysqli($servername, $usern, $password, $dbname);
	 // Check connection
	 if ($conn->connect_error) {
	   die("Connection failed: " . $conn->connect_error);
	 }
 $servername = "localhost";
	 $usern = "root";
	 $password = "";
	 $dbname = "loginregister";
	 
	 // Create connection
	 $conn = new mysqli($servername, $usern, $password, $dbname);
	 // Check connection
	 if ($conn->connect_error) {
	   die("Connection failed: " . $conn->connect_error);
	 }
if (isset($_POST['new'])) {
		date_default_timezone_set('Asia/Taipei');
        $time = date("h:i:s");
        $date = date('Y-m-d');
        $user_id = $_POST['username']??"EvangelistaClara";
		$message = "Change Password";
        $activitysql = "INSERT INTO `activity_log`(`activity`, `user_id`, `date`, `time`) VALUES ('$message','$user_id','$date','$time')";
        $result1 = mysqli_query($conn,$activitysql);
        $newpass = $_POST['newpass'];
        $updatesql = "UPDATE `users` SET `password`= '".$_POST['newpass']."', `cpassword` = '".$_POST['newpass']."' WHERE `username`='".$user_id."'";
        $result2 = mysqli_query($conn,$updatesql);
		echo "<script>
					alert('Change Password Successfully');
					window.location.href='index.php';
					</script>";

	}
?>	
<!DOCTYPE html>
<html>
<head>
	<title>Change Password Page</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Sofia">
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
	<div class="header">
		<h2>Change Password</h2 >
	</div>

	<form method="post">
		<div class="input-group">
			<label>New Password</label>
			<input type="text" name="newpass">
		</div>
		<div class="input-group">
		<button type="submit" name="new" class="btn button1">Change Password</button>
		</div>

</form>
</body>
</html>