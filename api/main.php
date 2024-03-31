<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require '../vendor/autoload.php';

$mail = new PHPMailer(true);

include_once('../config/database.php');

header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");
header("Access-Control-Allow-Methods: POST");
header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");


// Include PHPMailer's autoloader
require '../vendor/autoload.php';


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


    $photo = ''; // Default value is an empty string

    if (isset($_FILES["image"]) && $_FILES["image"]["error"] === UPLOAD_ERR_OK) {
        // File was uploaded successfully
        $photo = 'data:image/png;base64,' . base64_encode(file_get_contents($_FILES["image"]["tmp_name"]));
    }
        // Create the SQL query to insert the course data
        $sql = "INSERT INTO newapplications (full_name, dob, gender, nationality, address, contact, alt_contact, email, p_g_name, p_g_contact, pre_sch_name, pre_sch_address, class_last_attended, grade_for_apply, photo) 
        VALUES ('$full_name', '$dob', '$gender', '$nationality', '$address', '$contact', '$alt_contact', '$email', '$p_g_name', '$p_g_contact', '$pre_sch_name', '$pre_sch_address', '$class_last_attended', '$grade_for_apply', '$photo')";
        if ($conn->query($sql) === TRUE) {

            if (isset($email)) {
                try {
                    $mail->SMTPDebug = 0;
              $mail->isSMTP();
                    $mail->Host = 'smtp.hostinger.com'; // Specify main and backup SMTP servers
                    $mail->SMTPAuth = true; // Enable SMTP authentication
                    $mail->Username = 'info@thejaininternationalschool.in'; // SMTP username
                    $mail->Password = 'Pavan@5639'; // SMTP password
                    $mail->SMTPSecure = 'SSL'; // Enable TLS encryption, `ssl` also accepted
                    $mail->Port = 465; // TCP port to connect to
                    $mail->SMTPDebug = 0; // Set to 2 for detailed debug output
                    // Set email parameters

                    $mail->setFrom('info@thejaininternationalschool.in', 'TJIS-KGF'); // Sender's email address and name
                    $mail->addAddress($email ,  $full_name); // Recipient's email address and name
                    $mail->isHTML(true);
                    $mail->Subject = 'Test Email'; // Email subject
                    $mail->Body = 'This is a test email sent using PHPMailer.'; // Email body
                    $mail->send();
                } catch (Exception $e) {
                    
                }
            } 

          $data[] = array("statusCode" => 200, "message" => "Application Submited");

        } else {
            $data[] = array("statusCode" => 201);
            $data[] = array("message" => "Error in submiting try again");
        }


    echo json_encode($data);
}




}





?>