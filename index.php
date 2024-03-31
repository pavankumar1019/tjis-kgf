<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
session_start();

   include ("./model/includes/header.php");

   include("./model/dashboard.php");
   include ("./model/includes/footer.php");
?>

<?php
// echo "<pre>";
// print_r($_SERVER);
// echo "</pre>";
function base(){
    $url= str_replace("index.php","",$_SERVER['PHP_SELF']);

    return sprintf(
        "%s://%s%s",
        isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] != 'off' ? 'https' : 'http',
        $_SERVER['SERVER_NAME'],
      $url
      );
}
?>