<?php
$servername = "203.194.114.92";
$username = "root";
$password = "root";
$dbname = "iwi";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}