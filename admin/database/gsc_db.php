<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
$protocol = isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? 'https://' : 'http://';

// Get the domain (HTTP_HOST) from the server variables
$domain = $_SERVER['HTTP_HOST'];

// Combine the protocol and domain to form the base URL
$base_url = $protocol . $domain;

if ($_SERVER['HTTP_HOST'] == 'localhost') {
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "sciento";
} else {
    $servername = "localhost";
    $username = "u769900516_pavan";
    $password = "Kumar@5639";
    $dbname = "u769900516_sciento";
}


// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
    $data[] = array('database_connection' => 'Connection failed');
} else {
    $data[] = array('database_connection' => 'Conneted Successfully');
    // echo json_encode(array("statusCode"=>200, "message"=>"Conneted Successfully"));
}

?>