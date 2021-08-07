<?php
error_reporting(0);
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "arm";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if (mysqli_connect_error()) {
  die('Connect Error ('.mysqli_connect_errno().')'.mysqli_connect_error());
}
if(isset($_POST['save'])){
$motor1= $_POST['m1'];
$motor2= $_POST['m2'];
$motor3= $_POST['m3'];
$motor4= $_POST['m4'];
$motor5= $_POST['m5'];
$motor6= $_POST['m6'];
}
$sql = "INSERT INTO motors (motor1, motor2, motor3, motor4, motor5, motor6)
VALUES ('$motor1', '$motor2', '$motor3', '$motor4', '$motor5', '$motor6')";

if ($conn->query($sql)) {
  echo "New arm position has been successfully created";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>