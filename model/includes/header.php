<?php
include('./config/database.php');
$request_uri = $_SERVER['REQUEST_URI'];

// Remove any query string, if present
$uri_parts = explode('?', $request_uri);
$path = trim($uri_parts[0], '/');

// Remove the "php/scientoworld/" prefix from the path
if (strpos($path, '/') === 0) {
    $path = substr($path, strlen('/'));
}

// Split the path into segments
$URL = explode('/', $path);

// Remove empty elements and reindex the array
$URL = array_values(array_filter($URL));

?>
<!DOCTYPE html>
<html lang="en">

<head>

	<!-- Meta -->
	<meta charset="utf-8">
  	<meta content="width=device-width, initial-scale=1.0" name="viewport">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="keywords" content="">
	<meta name="author" content="pkwebdev">
	<meta name="robots" content="">
	<meta name="description" content="">
	<meta name="format-detection" content="telephone=no">


  <title>THE JAIN INTERNATIONAL SCHOOL | KRISHNAPURAM, KGF - 563121</title>


  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">


  <link href="assets/css/style.css" rel="stylesheet">


<meta property="og:locale" content="en_US">
<meta property="og:type" content="article">
<meta property="og:title" content="The Jain International School - KGF">
<meta property="og:description" content=".">
<meta property="og:url" content="https://thejaininternationalschool.in/">
<meta property="og:site_name" content="Sciento World">
<meta property="article:published_time" content="2024-03-16T00:00:00+00:00">
<meta property="article:modified_time" content="2024-03-16T00:00:00+00:00">
<meta property="og:image" content="https://thejaininternationalschool.in/images/logo-meta_3.png">
<meta property="og:image:width" content="1024">
<meta property="og:image:height" content="536">
<meta property="og:image:type" content="image/jpeg">
<meta name="author" content="Sciento World">
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:label1" content="pkwebdev.com">
<meta name="twitter:data1" content="Sciento World">
<meta name="twitter:label2" content="Est. reading time">
<meta name="twitter:data2" content="3 minutes">



</head>

<body>

<i class="bi bi-list mobile-nav-toggle d-lg-none"></i>
  <!-- ======= Header ======= -->
  <header id="header" class="d-flex flex-column justify-content-center">

    <nav id="navbar" class="navbar nav-menu">
      <ul>
        <li><a href="#hero" class="nav-link scrollto active"><i class="bx bx-home"></i> <span>Home</span></a></li>
        <li><a href="#about" class="nav-link scrollto"><i class="bx bx-user"></i> <span>About</span></a></li>
        <li><a href="#resume" class="nav-link scrollto"><i class="bx bx-file-blank"></i> <span> Chairman's Desk</span></a></li>
        <li><a href="#portfolio" class="nav-link scrollto"><i class="bx bx-file-blank"></i> <span>Principal Desk</span></a></li>
        <li><a href="#services" class="nav-link scrollto"><i class="bx bx-server"></i> <span>Programs Offered</span></a></li>
        <li><a href="#contact" class="nav-link scrollto"><i class="bx bx-envelope"></i> <span>Contact</span></a></li>
      </ul>
    </nav><!-- .nav-menu -->

  </header><!-- End Header -->
