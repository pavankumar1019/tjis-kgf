<?php
$servername = "localhost";
$username = "u736026977_tjis";
$password = "Tjiskgf@5639";
$dbname = "u736026977_tjis";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
$connect = new PDO("mysql:host=localhost; dbname=u769900516_sciento", "u769900516_pavan", "Kumar@5639");


// https://auth-db1112.hstgr.io/
?>