<?php include 'loginfunction.php'?>
<!DOCTYPE html>
<html>
<head>
	<title>Authentication</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Sofia">
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
	<div class="header">
		<h2>Authentication</h2 >
	</div>
	<form method="post">
		<div class="input-group">
			<label>Code :</label>
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
        $code = rand(100000,999999);
        echo $code;
        $time = date("Y-m-d h:i:s");    
        $currentDate = strtotime($time);
        $futureDate = $currentDate+(10);                
        $formatDate = date("Y-m-d h:i:s", $futureDate);
        $user_id = $_POST['username']??"EvangelistaClara";
        $codeins = "INSERT INTO `authentication`(`user_id`,`code`, `created_at`, `expiration`) VALUES ('$user_id','$code','$time','$formatDate')";
        $result = mysqli_query($conn, $codeins);
        if(isset($_POST['enter'])){
                $code = $_POST['codename'];
		    	$select = "SELECT * FROM authentication where code = '$code'";
		    	$result = mysqli_query($conn, $select);
		    	$num = mysqli_num_rows($result);
                date_default_timezone_set('Asia/Taipei');
                $ctime = date("h:i:s");
                $cdate = date('Y-m-d');
                $user_id = $_POST['username']??"EvangelistaClara";
                $message = "Login";
                $activitysql = "INSERT INTO `activity_log`(`activity`, `user_id`, `date`, `time`) VALUES ('$message','$user_id','$cdate','$ctime')";
                $result1 = mysqli_query($conn,$activitysql);
		    	if($num>0){
            
		    		echo '<script>alert("Log in Successfully!")</script>';
		    		header("location: mainpage.php");
		    	}
		    	else{
		    		echo '<script>alert("Try Again!")</script>';
		    	}
     } 

        ?>        
			<br>Enter Code<input type="text" name='codename' >

		</div>
		</div>
		<div class="input-group">
		<button type="submit" name="enter" class="btn button1">Enter</button>
		</div>
</form>
</body>
</html>