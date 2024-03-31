<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

if (session_status() === PHP_SESSION_NONE) {
  session_start();
}

include_once('../config/database.php');


header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");
header("Access-Control-Allow-Methods: POST");
header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");

// get request method
$method = $_SERVER['REQUEST_METHOD'];
if ($method == 'POST') {


  if ($_POST['type'] == "insert-course") {
    // Sanitize and escape user inputs
    $categories_id = mysqli_real_escape_string($conn, $_POST['categories_id']);
    $extended_title = mysqli_real_escape_string($conn, $_POST['extended_title']);
    $overview = mysqli_real_escape_string($conn, $_POST['overview']);
    $description = mysqli_real_escape_string($conn, $_POST['description']);

    // Check if files were uploaded
    if (isset($_FILES["image"]["tmp_name"])) {
        // Read and encode uploaded image and certificate files
        $file = 'data:image/png;base64,' . base64_encode(file_get_contents($_FILES["image"]["tmp_name"]));
        // Create the SQL query to insert the course data
        $sql = "INSERT INTO newapplications (category_id, title, short_description, long_description, image_1, image_2, image_3, og_image) 
                VALUES ('$categories_id', '$extended_title', '$overview', '$description',  '$certificate', '$file', '$badge_icon', ' $og')";

        if ($conn->query($sql) === TRUE) {
          $data[] = array("statusCode" => 200, "message" => "Application Submited");
        } else {
            $data[] = array("statusCode" => 201);
            $data[] = array("message" => "Error in submiting try again");
        }
    } 

    echo json_encode($data);
}




}





?>