

<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
session_start();

if (!isset($_SESSION['email_admin']) && !isset($_SESSION['id'])){
  ?>
  <script>
location.href = "<?= base()?>login.html";
  </script>
  <?php
}
else
{
   include ("./model/include/header.php");
   include("./model/dashboard.php");
   include ("./model/include/footer.php");
?>

<?php
//           echo "<pre>";
// print_r($_SERVER);
// echo "</pre>";





}




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



