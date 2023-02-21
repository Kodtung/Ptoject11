<?php
$servername = "localhost";
$username = "WINY4N";
$password = "1234567890";
$dbname = "winy4n";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
?>

