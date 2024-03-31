<?php
$request_uri = $_SERVER['REQUEST_URI'];

// Remove any query string, if present
$uri_parts = explode('?', $request_uri);
$path = trim($uri_parts[0], '/');

// Remove the "php/scientoworld/" prefix from the path
if (strpos($path, 'admin') === 0) {
    $path = substr($path, strlen('admin'));
}

// Split the path into segments
$URL = explode('/', $path);

// Remove empty elements and reindex the array
$URL = array_values(array_filter($URL));

// Set default value for $page
$page = isset($URL[0]) ? $URL[0] : 'home';

// Set default value for $title
$title = ucwords(str_replace("_", ' ', $page));

if (!file_exists('./model/pages/' . $page . ".php")) {
    echo '404 - Page not found <br>';
    var_dump($URL);

   

} else {
    include './model/pages/' . $page . '.php';
   
}
?>
