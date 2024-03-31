<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

include_once('../config/database.php');

header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");
header("Access-Control-Allow-Methods: POST");
header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");

// get request method
$method = $_SERVER['REQUEST_METHOD'];
if ($method == 'POST') {


  if ($_POST['type'] == "submit_application") {
    // Sanitize and escape user inputs
    $full_name = mysqli_real_escape_string($conn, $_POST['full_name']);
    $dob = mysqli_real_escape_string($conn, $_POST['dob']);
    $gender = mysqli_real_escape_string($conn, $_POST['gender']);
    $nationality = mysqli_real_escape_string($conn, $_POST['nationality']);
    $address = mysqli_real_escape_string($conn, $_POST['address']);
    $contact = mysqli_real_escape_string($conn, $_POST['contact']);
    $alt_contact = mysqli_real_escape_string($conn, $_POST['alt_contact']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $p_g_name = mysqli_real_escape_string($conn, $_POST['p_g_name']);
    $p_g_contact = mysqli_real_escape_string($conn, $_POST['p_g_contact']);
    $pre_sch_name = mysqli_real_escape_string($conn, $_POST['pre_sch_name']);
    $pre_sch_address = mysqli_real_escape_string($conn, $_POST['pre_sch_address']);
    $class_last_attended = mysqli_real_escape_string($conn, $_POST['class_last_attended']);
    $grade_for_apply = mysqli_real_escape_string($conn, $_POST['grade_for_apply']);


        // Read and encode uploaded image and certificate files
        $photo = 'data:image/png;base64,' . base64_encode(file_get_contents($_FILES["image"]["tmp_name"]));
        // Create the SQL query to insert the course data
        $sql = "INSERT INTO newapplications (full_name, dob, gender, nationality, address, contact, alt_contact, email, p_g_name, p_g_contact, pre_sch_name, pre_sch_address, class_last_attended, grade_for_apply, photo) 
        VALUES ('$full_name', '$dob', '$gender', '$nationality', '$address', '$contact', '$alt_contact', '$email', '$p_g_name', '$p_g_contact', '$pre_sch_name', '$pre_sch_address', '$class_last_attended', '$grade_for_apply', '$photo')";
        if ($conn->query($sql) === TRUE) {
          $data[] = array("statusCode" => 200, "message" => "Application Submited");
        } else {
            $data[] = array("statusCode" => 201);
            $data[] = array("message" => "Error in submiting try again");
        }


    echo json_encode($data);
}




}





?>