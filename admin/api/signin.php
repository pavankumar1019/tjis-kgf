<?php
session_start();
include('../database/gsc_db.php');
header('Content-Type: application/json');

if ($_SERVER["REQUEST_METHOD"] == "POST" && $_POST['type'] == "signin") {
    // Retrieve username and password from the form
    $email = $_POST['email'];
    $password = md5($_POST['password']);

    // SQL query to select user from the database
    $sql = "SELECT * FROM admin_users WHERE email = '$email' AND password = '$password'";
    $result = $conn->query($sql);

    if ($result->num_rows == 1) {
        // Authentication successful
        $row = $result->fetch_assoc();
        $_SESSION['email_admin'] = $email;
        $_SESSION['id'] = $row['id']; // Assuming username is the email
        echo json_encode(array("statusCode" => 200, "message" => "Login successful. Redirecting..."));
    } else {
        // Authentication failed
        echo json_encode(array("statusCode" => 201, "message" => "Invalid username or password. Please try again."));
    }
} else {
    // Handle invalid request method or type
    echo json_encode(array("statusCode" => 400, "message" => "Invalid request method or type."));
}


?>
