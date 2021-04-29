<!DOCTYPE html>
<html>
<head>
  <title>Activity Log</title>
</head>
<body>
<style type="text/css">
table {
  border-collapse: collapse;
  width: 100%;
}

th, td {
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {background-color: #f2f2f2;}
</style>
</head>
<body>

<h2 style="text-align: center;">Activity Log</h2>

<table>
  <tr>
  <th>Username</th>
  <th>Activity</th>
  <th>Time</th>
  <th>Date</th>
  </tr>
 <?php
$conn = mysqli_connect("localhost", "root", "", "loginregister"); //Database name is ecommerce
    if ($conn-> connect_error){
        die("Connection failed:". $conn-> connect_error);
    }

$sql = "SELECT * FROM activity_log";
$result = $conn-> query($sql);

    if ($result-> num_rows > 0){
        while ($row = $result-> fetch_assoc()){

                 
                $username = $row['user_id'];
                $activity = $row['activity'];
                $time = $row['time'];
                $date = $row['date'];
          echo "<tr><td>{$username}</td>  
                <td>{$activity}</td>
                <td>{$time}</td> 
                <td>{$date}</td>
                </tr>";
        }
    }
    
    else {
        echo "0 result";
    }

    $conn-> close();

    ?>


</form>
</table>
<form method = "post" action="index.php">
<button type="submit" name="logout" class="btn button1">Logout</button>
</body>
</html>