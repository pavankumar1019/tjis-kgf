<?php
include('./database/gsc_db.php');


                $adminicon = file_get_contents('./txt/adminicon.txt');

// select admin user detailes 

$adminuser = 'SELECT * FROM admin_users WHERE email="'.$_SESSION['email_admin'].'" AND id="'.$_SESSION['id'].'"';
$adminuserresult = $conn->query($adminuser);

$products = 'SELECT * FROM newapplications ';
$resultproduct = $conn->query($products);

$resultcatproducts = 'SELECT * FROM category ';
$resultcat = $conn->query($resultcatproducts);

foreach($adminuserresult as $adminrow){
$name=$adminrow['name'];
$email=$adminrow['email'];
}
         
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <title>PKWEBDEV-ADMIN</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/dataTables.bootstrap4.min.css" />

    <link rel="stylesheet" href="<?=base()?>vendors/feather/feather.css" />
    <link rel="stylesheet" href="<?=base()?>vendors/mdi/css/materialdesignicons.min.css" />
    <link rel="stylesheet" href="<?=base()?>vendors/ti-icons/css/themify-icons.css" />
    <link rel="stylesheet" href="<?=base()?>vendors/typicons/typicons.css" />
    <link rel="stylesheet" href="<?=base()?>vendors/simple-line-icons/css/simple-line-icons.css" />
    <link rel="stylesheet" href="<?=base()?>vendors/css/vendor.bundle.base.css" />
    <!-- endinject -->


    <!-- End plugin css for this page -->
    <link href="<?=base()?>vendors/quill/quill.snow.css" rel="stylesheet">
    <!-- inject:css -->
    <link rel="stylesheet" href="<?=base()?>css/vertical-layout-light/style.css" />
    <!-- endinject -->
    <link rel="shortcut icon" href="<?=base()?>images/favicon/favicon.png" />
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="http://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/js/bootstrap-datepicker.js"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.8.0/css/bootstrap-datepicker.css"
        rel="stylesheet" />
<style>
      .resizable-textarea {
      resize: vertical; /* Enable resizing both vertically and horizontally */
      overflow: auto; /* Enable scrollbar when content overflows */
      height: 150px;
    }
</style>
</head>

<body>
    <div class="container-scroller">
        <!-- partial:partials/_navbar.html -->
        <nav class="navbar default-layout col-lg-12 col-12 p-0 fixed-top d-flex align-items-top flex-row">
            <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-start">

                <div>
                    <a class="navbar-brand brand-logo" href="<?=base()?>">
                        <img src="https://thejaininternationalschool.in/images/JGI_logo___Low.png" alt="logo" />
                    </a>
                    <a class="navbar-brand brand-logo-mini" href="<?=base()?>">
                        <img src="<?=base()?>images/favicon/favicon.png" alt="logo" />
                    </a>
                </div>
            </div>
            <div class="navbar-menu-wrapper d-flex align-items-top">
                <ul class="navbar-nav">
                    <li class="nav-item font-weight-semibold d-none d-lg-block ms-0">
                        <h1 class="welcome-text">
                            Hi!<span class="text-black fw-bold"><?=$name?></span>
                        </h1>

                    </li>
                </ul>
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item dropdown  d-lg-block user-dropdown">
                        <a class="nav-link" id="UserDropdown" href="#" data-bs-toggle="dropdown" aria-expanded="false">
                            <img class="img-xs rounded-circle" src="<?=$adminicon?>" alt="Profile image" />
                        </a>
                        <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="UserDropdown">
                            <div class="dropdown-header text-center">
                                <img class="img-md rounded-circle" src="<?=$adminicon?>" width="80px"
                                    alt="Profile image" />
                                <p class="mb-1 mt-3 font-weight-semibold"><?=$name?></p>
                                <p class="fw-light text-muted mb-0"><?=$_SESSION['email_admin']?></p>
                            </div>
                            <a class="dropdown-item" href="<?=base()?>profile/"><i
                                    class="dropdown-item-icon mdi mdi-account-outline text-primary me-2"></i>
                                My Profile
                                <span class="badge badge-pill badge-info">1</span></a>

                            <a class="dropdown-item" href="<?= base()?>php/logout.php"><i
                                    class="dropdown-item-icon mdi mdi-power text-primary me-2"></i>Sign Out</a>
                        </div>
                    </li>
                </ul>
                <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button"
                    data-bs-toggle="offcanvas">
                    <span class="mdi mdi-menu"></span>
                </button>
            </div>
        </nav>
        <div class="container-fluid page-body-wrapper">
            <!-- partial:partials/_settings-panel.html -->
            <div class="theme-setting-wrapper">
                <div id="settings-trigger"><i class="ti-settings"></i></div>
                <div id="theme-settings" class="settings-panel">
                    <i class="settings-close ti-close"></i>
                    <p class="settings-heading">SIDEBAR SKINS</p>
                    <div class="sidebar-bg-options selected" id="sidebar-light-theme">
                        <div class="img-ss rounded-circle bg-light border me-3"></div>
                        Light
                    </div>
                    <div class="sidebar-bg-options" id="sidebar-dark-theme">
                        <div class="img-ss rounded-circle bg-dark border me-3"></div>
                        Dark
                    </div>

                </div>
            </div>


            <!-- partial:partials/_sidebar.html -->
            <nav class="sidebar sidebar-offcanvas" id="sidebar">
                <ul class="nav">
                
                    <li class="nav-item">
                        <a class="nav-link" data-bs-toggle="collapse" href="#ui-basic" aria-expanded="false"
                            aria-controls="ui-basic">
                            <i class="menu-icon mdi  mdi-animation"></i>
                            <span class="menu-title">Admissions</span>
                            <i class="menu-arrow"></i>
                        </a>
                        <div class="collapse" id="ui-basic">
                            <ul class="nav flex-column sub-menu">
                                <li class="nav-item">
                                    <a class="nav-link" href="<?=base()?>courses/">New Admissions</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="<?=base()?>category/">Report</a>
                                </li>
                           

                            </ul>
                        </div>
                    </li>
                   

                

                    <li class="nav-item nav-category">help</li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">
                            <i class="menu-icon mdi mdi-file-document"></i>
                            <span class="menu-title">Documentation</span>
                        </a>
                    </li>


                </ul>
            </nav>
            <!-- partial http://bootstrapdash.com/demo/star-admin2-free/docs/documentation.html -->
            <div class="main-panel">