<?php
    $q=mysqli_query($con,"SELECT * FROM `register` where `id`='$_SESSION[id]'");
    $a=mysqli_fetch_array($q);
    ?>

<div class="col-lg-4">
                    <div class="dashboard_sidebar">
                        <div class="dashboard_sidebar_user">
                            <img src="assets/img/common/dashboard-user.webp" alt="img">
                            <h3><?php echo $a[first_name]." ".$a[last_name]?></h3>
                            <p><a href="Javascript:void(0)"><?php echo $a[mobile]?></a></p>
                            <p><a href="Javascript:void(0)"><?php echo $a[email]?></a></p>
                        </div>
                        <div class="dashboard_menu_area">
                            <ul>
                                <li><a href="dashboard.php" class=""><i
                                            class="fas fa-tachometer-alt"></i>Dashboard</a></li>

                                <li><a href="admin_flight_booking.php"><i class="fas fa-paper-plane"></i>Flight
                                booking</a></li>
                                <li><a href="my_profile.php"><i class="fas fa-user-circle"></i>My profile</a></li>
                                <li><a href="reviews.php"><i class="fas fa-comments"></i>Review</a></li>

                                <li>
                                    <a href="logout.php" >
                                        <i class="fas fa-sign-out-alt"></i>Logout
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>