<?php 

session_start();

$con = mysqli_connect('localhost', 'root', '');

mysqli_select_db($con, 'loginregister');
//register button
if (isset($_POST['register'])) {
	$username = $_POST['username'];
	$email = $_POST['email'];
	$password_1 = $_POST['password_1'];
	$password_2 = $_POST['password_2'];
	$uppercase = preg_match('@[A-Z]@',$password_2);
	$lowercase = preg_match('@[a-z]@', $password_2);
	$number    = preg_match('@[0-9]@', $password_2);
	$specialChars = preg_match('@[^\w]@', $password_2);



	if(!$uppercase || !$lowercase || !$number || !$specialChars || strlen($password_2) <= 8){
    					echo '<script>alert("Password should be at least 8 characters in length and should include at least one uppercase/lowercase letter, one number, and one special character.")</script>';
				}

	else{

	if($password_1==$password_2){
		$query = "INSERT INTO `users`(`username`, `email`, `password`, `cpassword`)VALUES ('$username', '$email', '$password_1','$password_2')";
		$query_run = mysqli_query($con, $query);

		if ($query_run) {
			echo "<script>
					alert('Register Successfully');
					window.location.href='index.php';
					</script>";
		}
		else{
			echo '<script type="text/javascript"> alert("Registration Failed")</script>';
		}
	}
		else{
		echo '<script type="text/javascript"> alert("Password and Confirm Password does not match")</script>';
		}
	}

}

?>


