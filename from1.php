<?php
$servername = "localhost";
$username = "percentage";
$password = "regno";
$dbname = "student_marks";
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";
?> 


