<?php
session_start();
include_once('admin/connect.php');
include_once('nav.php');
?>
    <!-- Common Banner Area -->
    <section id="common_banner">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="common_bannner_text">
                        <h2>Booking Confirmation</h2>
                        <ul>
                            <li><a href="index.php">Home</a></li>
                            <li><span><i class="fas fa-circle"></i></span> Booking</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Tour Booking Submission Areas -->
    <section id="tour_booking_submission" class="section_padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="tou_booking_form_Wrapper">
                        <div class="tour_booking_form_box mb-4">
                            <div class="booking_success_arae">
                                <div class="booking_success_img">
                                    <img src="assets/img/icon/right.png" alt="img">
                                </div>
                                <div class="booking_success_text">
                                    <h3> Your order was submitted successfully!</h3>
                                    <h6>Your booking details has been sent to Email Id</h6>
                                </div>
                            </div>
                        </div>
                        <div class="booking_tour_form">
                            <h3 class="heading_theme">Your information</h3>
                            <?php
                            $q=mysqli_query($con,"SELECT * FROM `booking` where `order_no`='$_REQUEST[order_id]'");
                            $sno=1;$price=0;
                            while($a=mysqli_fetch_array($q)){
                            ?>
                            <div class="tour_booking_form_box">
                                <div class="your_info_arae">
                                    <h5>Passenger <?php echo $sno++; ?></h5>
                                    <hr>
                                    <ul>
                                        <li><span class="name_first">First name:</span> <span
                                                class="last_name"><?php echo $a['first_name'];?></span></li>
                                        <li><span class="name_first">Last name:</span> <span
                                                class="last_name"><?php echo $a['Last_name'];?></span></li>
                                        <li><span class="name_first">Mobile:</span> <span
                                                class="last_name"><?php echo $a['mobile'];?></span></li>
                                        <li><span class="name_first">Email address:</span> <span
                                                class="last_name"><?php echo $a['email'];?></span></li>
                                        <li><span class="name_first">Address:</span> <span class="last_name">1901
                                        <?php echo $a['address'];?></span></li>
                                        <li><span class="name_first">Passport:</span> <span
                                                class="last_name"><?php echo $a['passport'];?></span></li>
                                        <li><span class="name_first">Visa:</span> <span class="last_name"><?php echo $a['visa'];?></span>
                                        </li>

                                    </ul>
                                </div>
                            </div>
                            <br>
                            <?php
                        $date=$a[date];
                            $order_no=$a['order_id'];
                            $seat=$sno-1;
                            $price+=$a[price];
                        } ?>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="tour_details_right_sidebar_wrapper">
                        <div class="tour_detail_right_sidebar">
                            <div class="tour_details_right_boxed">
                                <div class="tour_details_right_box_heading">
                                    <h3>Booking details</h3>
                                </div>
                                <div class="tour_booking_amount_area">
                                    <ul>
                                        <li>Booking ID: <span><?php echo $_REQUEST[order_id]?></span></li>
                                        <li>Booking date: <span><?php echo date('d M Y,h:i A',strtotime($date))?></span></li>
                                        <!-- <li>Payment method: <span>Bank transfer</span></li> -->
                                        <li>Booking status: <span>Success</span></li>
                                    </ul>
                                    <ul>
                                        <li> Price x <?php echo $seat?> <span>₹ <?php echo $price?></span></li>
                                        <!-- <li class="remove_coupon_tour">Discount <span>10%</span></li>
                                        <li>Tax <span>5%</span></li> -->
                                    </ul>
                                    <!-- <div class="tour_bokking_subtotal_area">
                                        <h6 class="remove_coupon_tour">Subtotal <span>$38,000.00</span></h6>
                                    </div>
                                    <div class="coupon_add_area">
                                        <h6><span class="remove_coupon_tour">Remove</span> Coupon code (OFF 5000)
                                            <span>$5,000.00</span>
                                        </h6>
                                    </div> -->
                                    <div class="total_subtotal_booking">
                                        <h6 class="remove_coupon_tour">Total Amount <span>₹ <?php echo $price?></span> </h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Cta Area -->
    <section id="cta_area">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-7">
                    <div class="cta_left">
                        <div class="cta_icon">
                            <img src="assets/img/common/email.png" alt="icon">
                        </div>
                        <div class="cta_content">
                            <h4>Get the latest news and offers</h4>
                            <h2>Subscribe to our newsletter</h2>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="cat_form">
                        <form id="cta_form_wrappper">
                            <div class="input-group"><input type="text" class="form-control"
                                    placeholder="Enter your mail address"><button class="btn btn_theme btn_md"
                                    type="button">Subscribe</button></div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php include_once('footer.php');?>