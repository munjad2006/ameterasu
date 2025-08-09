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

$stmt = $conn->prepare("INSERT INTO Blog (name,email,msg) VALUES (?, ?, ?)");
$stmt->bind_param("sss",$name, $email, $msg);
$name=$_POST['tname'];
$email=$_POST['temail'];
$msg=$_POST['tmsg'];

if ($stmt->execute()) {
  echo "New record created successfully";
} else {
  echo "Error";
}

$conn->close();
?>