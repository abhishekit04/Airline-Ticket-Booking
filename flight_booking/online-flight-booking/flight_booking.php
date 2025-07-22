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
                        <h2>Flight Booking</h2>
                        <ul>
                            <li><a href="index.php">Home</a></li>
                            <li><span><i class="fas fa-circle"></i></span><a href="flight-search-result.html">Flight
                                    search </a></li>
                            <li><span><i class="fas fa-circle"></i></span> Flight booking</li>
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
                    <form action="back.php" id="tour_bookking_form_item" method='post'>
                    <div class="tou_booking_form_Wrapper">
                        <div class="booking_tour_form">
                            <h3 class="heading_theme">Passenger information</h3>
                            <div class="tour_booking_form_box">
                                <input type="hidden" name="flight_id" value="<?php echo $_REQUEST[id]?>">
                                <input type="hidden" name="pass" value="<?php echo $_REQUEST[pass]?>">
                                <input type="hidden" name="price" id='price'>
                                    <?php
                                    for($i=1; $i<=$_REQUEST['pass']; $i++){
                                    ?>
                                    <h4>Passenger <?php echo $i?></h4>
                                    <hr>
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <input type="text" class="form-control bg_input"
                                                    placeholder="First name*" name="first_name<?php echo $i?>" requied>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <input type="text" class="form-control bg_input"
                                                    placeholder="Last name*" name="last_name<?php echo $i?>" requied>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <input type="text" class="form-control bg_input"
                                                    placeholder="Email address (Optional)" name="email<?php echo $i?>" >
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <input type="text" class="form-control bg_input"
                                                    placeholder="Mobile number*" name="mobile<?php echo $i?>" requied>
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="form-group">
                                                <input type="text" class="form-control bg_input"
                                                    placeholder="Street address" name="address<?php echo $i?>" requied>
                                            </div>
                                        </div>


                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <input type="text" class="form-control bg_input"
                                                    placeholder="Passport no.*" name="passport<?php echo $i?>" requied>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <input type="text" class="form-control bg_input" placeholder="Visa no." name="visa<?php echo $i?>" >
                                            </div>
                                        </div>
                                    </div>
                                    <?php } ?>

                            </div>
                        </div>
                        <div class="booking_tour_form">
                            <h3 class="heading_theme">Payment method</h3>
                            <div class="tour_booking_form_box">
                                <div class="booking_payment_boxed">

                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="flexRadioDefault"
                                                id="flexRadioDefault1" value="red">
                                            <label class="form-check-label" for="flexRadioDefault1">
                                                Payment by card
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="flexRadioDefault"
                                                id="flexRadioDefault2" value="green">
                                            <label class="form-check-label" for="flexRadioDefault2">
                                                Paypal
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="flexRadioDefault"
                                                id="flexRadioDefault3" value="black">
                                            <label class="form-check-label" for="flexRadioDefault3">
                                                Payoneer
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="flexRadioDefault"
                                                id="flexRadioDefault4" value="white">
                                            <label class="form-check-label" for="flexRadioDefault4">
                                                Cash on delivery
                                            </label>
                                        </div>
                                        <div class="payment_filed_wrapper">
                                            <div class="payment_card payment_toggle red">
                                                <div class="row">
                                                    <div class="col-lg-6">
                                                        <div class="form-group">
                                                            <input type="text" class="form-control bg_input"
                                                                placeholder="Card number">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <div class="form-group">
                                                            <input type="text" class="form-control bg_input"
                                                                placeholder="Cardholder name">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <div class="form-group">
                                                            <input type="text" class="form-control bg_input"
                                                                placeholder="Date of expiry">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <div class="form-group">
                                                            <input type="text" class="form-control bg_input"
                                                                placeholder="Security code">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="paypal_payment payment_toggle green">
                                                <div class="row">
                                                    <div class="col-lg-6">
                                                        <div class="form-group">
                                                            <input type="text" class="form-control bg_input"
                                                                placeholder="Email Address">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="payoneer_payment payment_toggle black">
                                                <div class="row">
                                                    <div class="col-lg-6">
                                                        <div class="form-group">
                                                            <input type="text" class="form-control bg_input"
                                                                placeholder="Email Address">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                </div>
                            </div>
                        </div>
                        <div class="booking_tour_form_submit">
                            <div class="form-check write_spical_check">
                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefaultf1">
                                <label class="form-check-label" for="flexCheckDefaultf1">
                                    I read and accept all <a href="terms-service.html">Terms and conditios</a>

                                </label>
                            </div>
                            <button type="submit" name="actionajax" value='booking_conf' class="btn btn_theme btn_md">Pay Now</button>
                            <!-- <a href="booking-confirmation.html" class="btn btn_theme btn_md">Pay now</a> -->
                        </form>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="tour_details_right_sidebar_wrapper">
                        <div class="tour_detail_right_sidebar">
                            <div class="tour_details_right_boxed">
                                <div class="tour_details_right_box_heading">
                                    <h3>Flights</h3>
                                </div>
                                <?php


                                    $q=mysqli_query($con,"SELECT flight.flight_name,flight_details.id,flight_details.arrivel,flight_details.time1,flight_details.form,flight_details.departure,flight_details.time2,flight_details.`to` as to1,flight_details.duration,flight_details.price FROM flight_details INNER JOIN flight ON flight_details.flight_name=flight.id  where flight_details.id='$_REQUEST[id]' and flight_details.status='0' order by flight_details.time1 asc  ");
                              $a=mysqli_fetch_array($q);

                                        $f1=mysqli_query($con,"SELECT `city`as form FROM `citys` WHERE `id`='$a[form]'");
                                        $f2=mysqli_query($con,"SELECT `city`as to_place FROM `citys` WHERE `id`='$a[to1]'");
                                        $f=mysqli_fetch_array($f1);
                                        $t=mysqli_fetch_array($f2);
                                ?>
                                <div class="flight_sidebar_right">
                                    <div class="flight_search_left_sidebar">
                                        <div class="flight_search_destination_sidebar">
                                            <p>From</p>
                                            <h3><?php echo $f['form']?></h3>
                                            <h6><?php echo date('d M Y h:i A',strtotime($a['departure'].$a[time1]));?>.</h6>
                                        </div>
                                    </div>
                                    <div class="flight_search_middel_sidebar">
                                        <div class="flight_right_arrow_sidebar">
                                            <img src="assets/img/icon/right_arrow.png" alt="icon">
                                            <h6>Non-stop</h6>
                                            <p><?php echo $a['duration']?></p>
                                        </div>
                                        <div class="flight_search_destination_sidebar">
                                            <p>To</p>
                                            <h3><?php echo $t['to_place']?> </h3>
                                            <h6><?php echo date('d M Y h:i A',strtotime($a['arrivel'].$a[time2]));?>. </h6>
                                        </div>
                                    </div>
                                </div>
                                <div class="tour_package_details_bar_list">
                                    <h5>Package rules</h5>
                                    <ul>
                                        <li><i class="fas fa-circle"></i>Buffet breakfast as per the Itinerary</li>
                                        <li><i class="fas fa-circle"></i>Visit eight villages showcasing Polynesian
                                            culture
                                        </li>
                                        <li><i class="fas fa-circle"></i>Complimentary Camel safari, Bonfire,</li>
                                        <li><i class="fas fa-circle"></i>All toll tax, parking, fuel, and driver
                                            allowances
                                        </li>
                                        <li><i class="fas fa-circle"></i>Comfortable and hygienic vehicle</li>
                                    </ul>
                                </div>
                                <div class="tour_package_details_bar_price">
                                    <h5>Price</h5>
                                    <div class="tour_package_bar_price">
                                        <!-- <h6>₹ <?php echo $a[price] ?>/ Per Passenger </h6> -->
                                        <h3 >₹ <?php echo $a[price] ?>/ Passenger  </h3>
                                        <script>document.getElementById('price').value='<?php echo $a[price] ?>';</script>
                                    </div>
                                    <br>

                                </div>
                            </div>
                        </div>

                        <!-- <div class="tour_detail_right_sidebar">
                            <div class="tour_details_right_boxed">
                                <div class="tour_details_right_box_heading">
                                    <h3>Coupon code</h3>
                                </div>
                                <div class="coupon_code_area_booking">
                                    <form action="#!">
                                        <div class="form-group">
                                            <input type="text" class="form-control bg_input"
                                                placeholder="Enter coupon code">
                                        </div>
                                        <div class="coupon_code_submit">
                                            <button class="btn btn_theme btn_md">Apply voucher</button>
                                        </div>
                                    </form>
                                </div>

                            </div>
                        </div> -->
                        <div class="tour_detail_right_sidebar">
                            <div class="tour_details_right_boxed">
                                <div class="tour_details_right_box_heading">
                                    <h3>Booking amount</h3>
                                </div>

                                <div class="tour_booking_amount_area">
                                    <ul>
                                        <li> Price x <?php echo $_REQUEST[pass]?> <span>₹ <?php echo round($a[price]*$_REQUEST['pass'],2) ?></span></li>

                                    </ul>
                                    <!-- <div class="tour_bokking_subtotal_area">
                                        <h6>Subtotal <span>$38,000.00</span></h6>
                                    </div> -->
                                    <!-- <div class="coupon_add_area">
                                        <h6><span class="remove_coupon_tour">Remove</span> Coupon code (OFF 5000)
                                            <span>$5,000.00</span>
                                        </h6>
                                    </div> -->
                                    <div class="total_subtotal_booking">
                                        <h6>Total Amount <span>₹ <?php echo round($a[price]*$_REQUEST['pass'],2) ?></span> </h6>
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
    <?php include_once('footer.php'); ?>
    <script src="assets/js/payment-form.js"></script>