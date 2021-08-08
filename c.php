<?php

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

$motor1= $_POST["data"];
$motor2= $_POST["data2"];
$motor3= $_POST["data3"];
$motor4= $_POST["data4"];
$motor5= $_POST["data5"];
$motor6= $_POST["data6"];

$sql = "INSERT INTO motors (motor1, motor2, motor3, motor4, motor5, motor6)
VALUES ('$motor1', '$motor2', '$motor3', '$motor4', '$motor5', '$motor6')";

if ($conn->query($sql)) {
  echo "Robot arm position has been saved successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
