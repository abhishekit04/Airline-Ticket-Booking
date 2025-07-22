<?php session_start();?>
<!DOCTYPE html>
<html >


<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Title -->
    <title>Home - Andtourtravel </title>
    <!-- Bootstrap css -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <!-- animate css -->
    <link rel="stylesheet" href="assets/css/animate.min.css">
    <!-- Fontawesome css -->
    <link rel="stylesheet" href="assets/css/fontawesome.all.min.css" >
    <link rel="stylesheet" href="../../../../../cdn.jsdelivr.net/npm/bootstrap-icons%401.8.2/font/bootstrap-icons.css">
    <!-- popup css -->
    <link rel="stylesheet" href="assets/css/popup.css">
    <!-- owl.carousel css -->
    <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
    <!-- owl.theme.default css -->
    <link rel="stylesheet" href="assets/css/owl.theme.default.min.css">
    <!-- navber css -->
    <link rel="stylesheet" href="assets/css/navber.css">
    <!-- meanmenu css -->
    <link rel="stylesheet" href="assets/css/meanmenu.css">
    <!-- Style css -->
    <link rel="stylesheet" href="assets/css/style.css">
    <!-- Responsive css -->
    <link rel="stylesheet" href="assets/css/responsive.css">
    <!-- Favicon -->
    <link rel="icon" type="image/png" href="assets/img/favicon.png">
</head>

<body>
    <!-- preloader Area -->
    <div class="preloader">
        <div class="d-table">
            <div class="d-table-cell">
                <div class="lds-spinner">
                    <div></div>
                    <div></div>
                    <div></div>
                    <div></div>
                    <div></div>
                    <div></div>
                    <div></div>
                    <div></div>
                    <div></div>
                    <div></div>
                    <div></div>
                    <div></div>
                </div>
            </div>
        </div>
    </div>

    <!-- Header Area -->
    <header class="main_header_arae">
        <!-- Top Bar -->
        <div class="topbar-area">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6 col-md-6">
                        <ul class="topbar-list">
                            <li>
                                <a href="#!"><i class="fab fa-facebook"></i></a>
                                <a href="#!"><i class="fab fa-twitter-square"></i></a>
                                <a href="#!"><i class="fab fa-instagram"></i></a>
                                <a href="#!"><i class="fab fa-linkedin"></i></a>
                            </li>
                            <li><a href="#!"><span>+011 234 567 89</span></a></li>
                            <li><a href="#!"><span>contact@domain.com</span></a></li>
                        </ul>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <ul class="topbar-others-options">
                            <?php if(empty($_SESSION['id'])){ ?>
                            <li><a href="login.php">Login</a></li>
                            <li><a href="register.php">Sign up</a></li>
                            <?php } else{?>
                                <li><a href="logout.php">logout</a></li>
                            <?php } ?>

                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- Navbar Bar -->
        <div class="navbar-area">
            <div class="main-responsive-nav">
                <div class="container">
                    <div class="main-responsive-menu">
                        <div class="logo">
                            <a href="index.php">
                                <img src="assets/img/logo.png" alt="logo">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="main-navbar">
                <div class="container">
                    <nav class="navbar navbar-expand-md navbar-light">
                        <a class="navbar-brand" href="index.php">

                        <?php
                        include_once('admin/connect.php');
                        $q=mysqli_query($con,"SELECT `login_logo` FROM `login`");
                        $a=mysqli_fetch_array($q);
                        ?>
                            <img src="admin/image/logo/<?php echo $a['login_logo']?>" alt="logo" width="200">
                            <!-- <img src="assets/img/logo_black.png" alt="logo"> -->
                        </a>
                        <div class="collapse navbar-collapse mean-menu" id="navbarSupportedContent">
                            <ul class="navbar-nav">
                                <li class="nav-item">
                                    <a href="index.php" class="nav-link ">
                                        Home

                                    </a>

                                </li>
                                <li class="nav-item">
                                    <a href="about.php" class="nav-link">
                                        About Us

                                    </a>

                                </li>
                                <li class="nav-item">
                                    <a href="flight.php" class="nav-link">
                                        Search Flight

                                    </a>

                                </li>
                                <li class="nav-item">
                                    <a href="#" class="nav-link">
                                        Food Sections
                                        <i class="fas fa-angle-down"></i>
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li class="nav-item">
                                            <a href="food.php?section=Veg Food" class="nav-link">Veg Food</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="food.php?section=Non Veg Food" class="nav-link">Non Veg Food</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="food.php?section=Fruits" class="nav-link">Fruits</a>
                                        </li>



                                    </ul>
                                </li>


                                <li class="nav-item">
                                    <a href="contact.php" class="nav-link">Contact Us</a>

                                </li>
                            </ul>
                            <div class="others-options d-flex align-items-center">
                                <div class="option-item">
                                    <a href="#" class="search-box">
                                        <i class="bi bi-search"></i>
                                    </a>
                                </div>
                                <?php if(!empty($_SESSION['id'])){ ?>
                                <div class="option-item">
                                    <a href="dashboard.php" class="btn  btn_navber">User Dashboard</a>
                                </div>
                                <?php } ?>
                            </div>
                        </div>
                    </nav>
                </div>
            </div>
            <div class="others-option-for-responsive">
                <div class="container">
                    <div class="dot-menu">
                        <div class="inner">
                            <div class="circle circle-one"></div>
                            <div class="circle circle-two"></div>
                            <div class="circle circle-three"></div>
                        </div>
                    </div>
                    <div class="container">
                        <div class="option-inner">
                            <div class="others-options d-flex align-items-center">
                                <div class="option-item">
                                    <a href="#" class="search-box"><i class="fas fa-search"></i></a>
                                </div>
                                <div class="option-item">
                                    <a href="contact.php" class="btn  btn_navber">Get free quote</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
