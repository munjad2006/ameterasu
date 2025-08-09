<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "ameterasu";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
else
{
	echo " Connected successfully";
}

$stmt = $conn->prepare("INSERT INTO Appointment (date,time,name,address,city,zipcode,email,phone,problem,other) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
$stmt->bind_param("ssssssssss",$date, $time, $name, $address, $city, $zipcode, $email, $phone, $problem, $other);
$date=$_POST['tdate'];
$time=$_POST['ttime'];
$name=$_POST['tname'];
$address=$_POST['taddress'];
$city=$_POST['tcity'];
$zipcode=$_POST['tzipcode'];
$email=$_POST['temail'];
$phone=$_POST['tphone'];
$iproblem=$_POST['tproblem'];
$other=$_POST['tother'];

if ($stmt->execute()) {
  echo "New record created successfully";
} else {
  echo "Error";
}

$conn->close();
?>