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
//login button
if (isset($_POST['login'])) {
	$username = $_POST['username'];
	$password_1 = $_POST['password_1'];



	if ($username == "ADMIN" && $password_1 == "ADMIN123") {
		echo"<script>
					alert('WELCOME ADMIN');
					window.location.href='activitylog.php';
					</script>";
				}
	else{
		$query = "SELECT * FROM users WHERE username='$username' AND password='$password_1'";
		$query_run = mysqli_query($conn,$query);


	if (mysqli_fetch_array($query_run)>0) {
		header('location: authentication.php');
		}
	else{
		echo '<script type="text/javascript"> alert("User does not exist")</script>';
		}
	}

}

if (isset($_POST['forgot'])) {
	date_default_timezone_set('Asia/Taipei');
        $time = date("h:i:s");
        $date = date('Y-m-d');
        $user_id = $_POST['username']??"EvangelistaClara";
		$message = "Forgot Password";
        $activitysql = "INSERT INTO `activity_log`(`activity`, `user_id`, `date`, `time`) VALUES ('$message','$user_id','$date','$time')";
        $result1 = mysqli_query($conn,$activitysql);
        $newpass1 = uniqid();
        $newpassmessage = "Your new password is ".$newpass1;

        $updatesql = "UPDATE `users` SET `password`= '".$newpass1."', `cpassword` = '".$newpass1."' WHERE `username`='".$user_id."'";
        $result2 = mysqli_query($conn,$updatesql);

        echo "<script>
					alert('$newpassmessage');
					window.location.href='index.php';
					</script>";
		    	}



?>