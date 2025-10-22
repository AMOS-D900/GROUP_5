<?php
$servername = "localhost";
$username = "root";
$password = "root"; // default for MAMP
$dbname = "university_db";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
?>