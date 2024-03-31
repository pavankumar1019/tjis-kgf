<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

if (session_status() === PHP_SESSION_NONE) {
  session_start();
}

require '../../vendor/autoload.php';

$mail = new PHPMailer(true);

include_once('../database/gsc_db.php');
$nodp = file_get_contents('../txt/nodp.txt');

header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");
header("Access-Control-Allow-Methods: POST");
header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");

// get request method
$method = $_SERVER['REQUEST_METHOD'];
if ($method == 'POST') {

  if ($_POST['type'] == "edit-course") {
    // Sanitize and escape user inputs
    $categories_id = mysqli_real_escape_string($conn, $_POST['categories_id']);
    $extended_title = mysqli_real_escape_string($conn, $_POST['extended_title']);
    $overview = mysqli_real_escape_string($conn, $_POST['overview']);
    $description = mysqli_real_escape_string($conn, $_POST['description']);

    $id = mysqli_real_escape_string($conn, $_POST["id"]);

    // Initialize an array to store the file data
    $fileData = array();
    if ($_FILES["og"]["tmp_name"] != '') {
        $fileData['og_image'] = 'data:image/png;base64,' . base64_encode(file_get_contents($_FILES["og"]["tmp_name"]));
    }
    // Check if image file was uploaded 
    if ($_FILES["image"]["tmp_name"] != '') {
        $fileData['image_1'] = 'data:image/png;base64,' . base64_encode(file_get_contents($_FILES["image"]["tmp_name"]));
    }

    // Check if badge icon file was uploaded  
    if ($_FILES["badge_icon"]["tmp_name"] != '') {
        $fileData['image_2'] = 'data:image/png;base64,' . base64_encode(file_get_contents($_FILES["badge_icon"]["tmp_name"]));
    }

    // Check if certificate file was uploaded 
    if ($_FILES["certificate"]["tmp_name"] != '') {
        $fileData['image_3'] = 'data:image/png;base64,' . base64_encode(file_get_contents($_FILES["certificate"]["tmp_name"]));
    }


    // Construct the SQL query to update the course details
    $query = "UPDATE items SET 
               category_id = '$categories_id',
               title = '$extended_title',
               short_description = '$overview',
               long_description = '$description' ";
    // Append file data to the query if any file was uploaded
    if (!empty($fileData)) {
        foreach ($fileData as $key => $value) {
            $query .= ", $key = '$value'";
        }
    }

    // Add WHERE clause to specify the course ID
    $query .= " WHERE id = '$id'";

    // Execute the update query
    if ($conn->query($query) === TRUE) {
        $data[] = array("statusCode" => 200, "message" => "Edit Success");
    } else {
        $data[] = array("statusCode" => 201, "message" => "Error");
    }

    // Output JSON response
    echo json_encode($data);
}

  if ($_POST['type'] == "delete-course") {
    // Sanitize and escape user inputs
    $item_id = mysqli_real_escape_string($conn, $_POST['id']);

    // Construct the SQL query to delete the item
    $sql = "DELETE FROM items WHERE id = '$item_id'";

    // Execute the SQL query
    if ($conn->query($sql) === TRUE) {
        // Deletion successful
        $data[] = array("statusCode" => 200, "message" => "Product deleted");
    } else {
        // Error occurred during deletion
        $data[] = array("statusCode" => 201, "message" => "Error deleting Product");
    }

    // Return JSON response
    echo json_encode($data);
}

  if ($_POST['type'] == "insert-course") {
    // Sanitize and escape user inputs
    $categories_id = mysqli_real_escape_string($conn, $_POST['categories_id']);
    $extended_title = mysqli_real_escape_string($conn, $_POST['extended_title']);
    $overview = mysqli_real_escape_string($conn, $_POST['overview']);
    $description = mysqli_real_escape_string($conn, $_POST['description']);

  

    // Check if files were uploaded
    if (isset($_FILES["image"]["tmp_name"]) || isset($_FILES["certificate"]["tmp_name"])) {
        // Read and encode uploaded image and certificate files
        $file = 'data:image/png;base64,' . base64_encode(file_get_contents($_FILES["image"]["tmp_name"]));
        $certificate = 'data:image/png;base64,' . base64_encode(file_get_contents($_FILES["certificate"]["tmp_name"]));
        $badge_icon = 'data:image/png;base64,' . base64_encode(file_get_contents($_FILES["badge_icon"]["tmp_name"]));
        $og = 'data:image/png;base64,' . base64_encode(file_get_contents($_FILES["og"]["tmp_name"]));

        // Create the SQL query to insert the course data
        $sql = "INSERT INTO items (category_id, title, short_description, long_description, image_1, image_2, image_3, og_image) 
                VALUES ('$categories_id', '$extended_title', '$overview', '$description',  '$certificate', '$file', '$badge_icon', ' $og')";

        if ($conn->query($sql) === TRUE) {
          $data[] = array("statusCode" => 200, "message" => "Product inserted");
        } else {
            $data[] = array("statusCode" => 201);
            $data[] = array("message" => "Error in Product insert");
        }
    } else {
        $data[] = array("statusCode" => 201);
        $data[] = array("message" => "Image or certificate file not uploaded");
    }

    echo json_encode($data);
}


if ($_POST['type'] == "add-cat") {
  // Sanitize and escape user inputs
  $extended_title = mysqli_real_escape_string($conn, $_POST['extended_title']);

  $sql = "INSERT INTO category (name) 
  VALUES ( '$extended_title')";

if ($conn->query($sql) === TRUE) {
$data[] = array("statusCode" => 200, "message" => "category inserted");
} else {
$data[] = array("statusCode" => 201);
$data[] = array("message" => "Error in category insert");
}

  echo json_encode($data);
}


if ($_POST['type'] == "delete-category") {
  // Sanitize and escape user inputs
  $category_id = mysqli_real_escape_string($conn, $_POST['id']);

  // Construct the SQL query to delete the category
  $sql = "DELETE FROM category WHERE id = '$category_id'";

  // Execute the delete query
  if ($conn->query($sql) === TRUE) {
      $data[] = array("statusCode" => 200, "message" => "Category deleted");
  } else {
      $data[] = array("statusCode" => 201, "message" => "Error deleting category");
  }

  // Output JSON response
  echo json_encode($data);
}

if ($_POST['type'] == "update-category") {
  // Sanitize and escape user inputs
  $category_id = mysqli_real_escape_string($conn, $_POST['id']);
  $new_extended_title = mysqli_real_escape_string($conn, $_POST['extended_title']);

  // Construct the SQL query to update the category
  $sql = "UPDATE category SET name = '$new_extended_title' WHERE id = '$category_id'";

  // Execute the update query
  if ($conn->query($sql) === TRUE) {
      $data[] = array("statusCode" => 200, "message" => "Category updated");
  } else {
      $data[] = array("statusCode" => 201, "message" => "Error updating category");
  }

  // Output JSON response
  echo json_encode($data);
}


}





?>