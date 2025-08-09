<?php
class redirect{
  public function switch()
  {
    header("Location:  createappointmenttable.php");
  }
}

$servername = "localhost";
$username = "root";
$password = "";

// Create connection
$conn = new mysqli($servername, $username, $password);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// Create database
$sql = "CREATE DATABASE Ameterasu";
if ($conn->query($sql) === TRUE) {
  echo "Database created successfully";
  $obj = new redirect();
  $obj->switch();
} else {
  echo "Error creating database: " . $conn->error;
  $obj = new redirect();
  $obj->switch();
}

$conn->close();

?> 
<script type="text/javascript">
window.open(href = 'ameterasuhtmlfiles/createappointmenttable.php');
</script>