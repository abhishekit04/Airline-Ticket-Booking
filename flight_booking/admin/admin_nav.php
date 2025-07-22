<?php
  session_start();
include_once('connect.php');
    if(empty($_SESSION['user_id'])){
    header('location:index.php');
    }
    $q1=mysqli_query($con,"SELECT * FROM `login` order by id asc limit 1");
$a1=mysqli_fetch_array($q1);
?>

<!doctype html>
<html lang="en">
<head>
        <meta charset="utf-8" />
        <title>Admin Panel</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="" name="description" />
        <meta content="" name="author" />
        <!-- App favicon -->
        <link rel="shortcut icon" href="image/logo/<?php echo $a1[admin_logo]?>">
        <!-- slick css -->
        <link href="assets/libs/slick-slider/slick/slick.css" rel="stylesheet" type="text/css" />
        <link href="assets/libs/slick-slider/slick/slick-theme.css" rel="stylesheet" type="text/css" />
        <!-- jvectormap -->
        <link href="assets/libs/jqvmap/jqvmap.min.css" rel="stylesheet" />
        <!-- Bootstrap Css -->
        <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <!-- Icons Css -->
        <link href="assets/css/icons.min.css" rel="stylesheet" type="text/css" />
        <!-- App Css-->
        <link href="assets/css/app.min.css" rel="stylesheet" type="text/css" />
        <script src="styles_multiselect/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
        <!-- <link href="assets/libs/summernote/summernote-bs4.css" rel="stylesheet" type="text/css" /> -->
        <script type="text/javascript" src="js/jquery.min.js"></script>
           <!-- header link -->
   <link href="assets/libs/datatables.net-bs4/css/dataTables.bootstrap4.min.css" rel="stylesheet" type="text/css" />
   <link href="assets/libs/datatables.net-buttons-bs4/css/buttons.bootstrap4.min.css" rel="stylesheet" type="text/css" />
            <script src="ckediter/ckeditor.js"></script>
                <!-- alertify -->
           <link rel="stylesheet" href="alertitfy/alertify.min.css"/>
    <link rel="stylesheet" href="alertitfy/bootstrap.min.css"/>
    </head>
    <body data-sidebar="dark">
        <!-- Begin page -->
        <div id="layout-wrapper">
            <header id="page-topbar">
                <div class="navbar-header">
                    <div class="d-flex">
                        <!-- LOGO -->
                        <div class="navbar-brand-box">
                            <a href="#" class="logo logo-dark">
                                <span class="logo-sm">
                                    <img src="image/logo-sm-dark.png" alt="" height="22">
                                </span>
                                <span class="logo-lg">
                                    <img src="image/logo-dark.png" alt="" height="20">
                                </span>
                            </a>
                            <a href="#" class="logo logo-light">
                                <span class="logo-sm">
                                    <img src="image/logo-sm-dark.png" alt="" height="16">
                                    <!-- <img src="image/logo-sm-dark.png" alt="" height="16"> -->
                                </span>
                                <span class="logo-lg">
                                    <!-- <img src="image/logo-dark.png" alt="" height="40"> -->
                                    <img src="image/logo/<?php echo $a1[admin_logo]?>" style="width:220px;height:83px;" alt="logo" >
                                   <!-- <span class="h3 text-light mt-2"><i class="fas fa-laugh-wink"></i> ADMIN</span> -->
                                </span>
                            </a>
                        </div>
                        <button type="button" class="btn btn-sm px-3 font-size-24 header-item waves-effect" id="vertical-menu-btn">
                            <i class="mdi mdi-backburger"></i>
                        </button>
                        <!-- App Search-->
                        <!-- <form class="app-search d-none d-lg-block">
                            <div class="position-relative">
                                <input type="text" class="form-control" placeholder="Search...">
                                <span class="mdi mdi-magnify"></span>
                            </div>
                        </form> -->
                    </div>
                    <div class="d-flex">
                        <div class="dropdown d-inline-block d-lg-none ml-2">
                            <button type="button" class="btn header-item noti-icon waves-effect" id="page-header-search-dropdown"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="mdi mdi-magnify"></i>
                            </button>
                            <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right p-0"
                                aria-labelledby="page-header-search-dropdown">
                                <form class="p-3">
                                    <div class="form-group m-0">
                                        <div class="input-group">
                                            <input type="text" class="form-control" placeholder="Search ..." aria-label="Recipient's username">
                                            <div class="input-group-append">
                                                <button class="btn btn-primary" type="submit"><i class="mdi mdi-magnify"></i></button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="dropdown d-inline-block">
                            <!-- <button type="button" class="btn header-item waves-effect" id="page-header-flag-dropdown"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <img class="" src="assets/images/flags/us.jpg" alt="Header Language" height="14">
                            </button> -->
                        </div>
                        <div class="dropdown d-none d-lg-inline-block ml-1">
                            <button type="button" class="btn header-item noti-icon waves-effect" data-toggle="fullscreen">
                                <i class="mdi mdi-fullscreen"></i>
                            </button>
                        </div>
                       <!--  -->
                      <!--  -->
                        <div class="dropdown d-inline-block">
                            <button type="button" class="btn header-item waves-effect" id="page-header-user-dropdown"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <img class="rounded-circle header-profile-user" src="assets/images/users/avatar-1.jpg"
                                    alt="Header Avatar">
                                <span class="d-none d-sm-inline-block ml-1">Setting</span>
                                <i class="mdi mdi-chevron-down d-none d-sm-inline-block"></i>
                            </button>
                            <div class="dropdown-menu dropdown-menu-right">
                                <!-- item-->
                                <!-- <a class="dropdown-item" href="profile.php"><i class="mdi mdi-face-profile font-size-16 align-middle mr-1"></i> Profile</a> -->
                                <a class="dropdown-item" href="change_password.php"><i class="mdi mdi-credit-card-outline font-size-16 align-middle mr-1"></i> Change Password</a>
                              <a class="dropdown-item" href="logo_img.php"><i class="fa fa-university font-size-16 align-middle mr-1"></i>Logo Setting</a>
                                <!--   <a class="dropdown-item" href="barcode_index.php"><i class="fa fa-barcode font-size-16 align-middle mr-1"></i>Create Barcode </a> -->
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="logout.php"><i class="mdi mdi-logout font-size-16 align-middle mr-1"></i> Logout</a>
                            </div>
                        </div>
                    </div>
                </div>
            </header>
            <!-- ========== Left Sidebar Start ========== -->
            <div class="vertical-menu">
                <div data-simplebar class="h-100">
                    <!--- Sidemenu -->
                    <div id="sidebar-menu">
                        <!-- Left Menu Start -->
                        <ul class="metismenu list-unstyled" id="side-menu">
                            <li class="menu-title border-top border-bottom">Menu</li>
                            <li>
                                <a href="admin_dashboard.php" class="waves-effect">
                                    <i class="mdi mdi-view-dashboard"></i><!-- <span class="badge badge-pill badge-success float-right">3</span> -->
                                    <span>Dashboard</span>
                                </a>
                            </li>
                            <li>
                                <a href="add-flight.php" class="has-arrow1 waves-effect">
                                    <i class="mdi mdi-calendar-month"></i>
                                    <span>Add Flights</span>
                                </a>

                            </li>
                            <li>
                                <a href="add-city.php" class="has-arrow1 waves-effect">
                                    <i class="mdi mdi-arrow-down-circle"></i>
                                    <span>Add Citys </span>
                                </a>

                            </li>
                             <li>
                                <a href="flight_details.php" class="has-arrow1 waves-effect">
                                    <i class="fas fa-book-reader"></i>
                                    <span>Flight Details </span>
                                </a>
                            </li>
                             <li>
                                <a href="list_flight.php" class="has-arrow1 waves-effect">
                                    <i class="fas fa-book-reader"></i>
                                    <span>Flight List </span>
                                </a>
                            </li>
                             <li>
                                <a href="today_flight.php" class="has-arrow1 waves-effect">
                                    <i class="fas fa-book-reader"></i>
                                    <span>Todays Flight  </span>
                                </a>
                            </li>
                             <li>
                                <a href="issues_flight.php" class="has-arrow1 waves-effect">
                                    <i class="fas fa-book-reader"></i>
                                    <span>Issue Flight  </span>
                                </a>
                            </li>
                             <li>
                                <a href="disparted_flight.php" class="has-arrow1 waves-effect">
                                    <i class="fas fa-book-reader"></i>
                                    <span>Departed Flight  </span>
                                </a>
                            </li>
                             <li>
                                <a href="arived_flight.php" class="has-arrow1 waves-effect">
                                    <i class="fas fa-book-reader"></i>
                                    <span>Arived Flight  </span>
                                </a>
                            </li>
                             <li>
                                <a href="add_food.php" class="has-arrow1 waves-effect">
                                    <i class="fas fa-book-reader"></i>
                                    <span>Food  </span>
                                </a>
                            </li>


                    </div>
                    <!-- Sidebar -->
                </div>
            </div>
            <!-- Left Sidebar End -->
            <style type="text/css">
                .table-striped tbody tr:nth-of-type(odd) {
    background-color: #e6e6e6;
}
            </style>
            <style type="text/css">
  .modal-backdrop {
    display: none;
  }
  .modal{
    top:center;
  }
</style>