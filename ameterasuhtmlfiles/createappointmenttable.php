<?php
class redirect{
  public function switch()
  {
    header("Location:  createfeedbacktable.php");
  }
}


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

// sql to create table
$sql = "CREATE TABLE Appointment (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    date VARCHAR(11),
    time VARCHAR(9),
    name VARCHAR(50),
    address VARCHAR(150),
    city VARCHAR(20),
    zipcode VARCHAR(7),
    email VARCHAR (30),
    phone VARCHAR(20),
    problem VARCHAR(400),
    other varchar(400)
    )";

if ($conn->query($sql) === TRUE) {
  echo "Table Created Successfully";
  $obj = new redirect();
  $obj->switch();
} else {
  echo "Error creating table: " . $conn->error;
  $obj = new redirect();
  $obj->switch();
}

$conn->close();
?>