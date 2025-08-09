<?php
class redirect{
  public function switch()
  {
    header("Location:  index.html");
  }
}


$servername = "localhost";
$username = "root";
$password = "";
$dbname = "Ameterasu";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// sql to create table
$sql = "CREATE TABLE Blog (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(50),
    email VARCHAR(50),
    msg varchar(400)
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