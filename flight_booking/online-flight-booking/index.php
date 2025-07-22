<?php include_once('nav.php');
session_start();
include_once('admin/connect.php');
?>


    <!-- Banner Area -->
    <section id="home_three_banner">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="banner_area_three">
                        <h3 class="top_banner_three_text">Welcome to Andtour</h3>
                        <h2>Experience the world together</h2>
                        <h3 class="bottom_banner_three_text">Find awesome flights for your Destination</h3>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- About area -->
    <section id="three_about_area" class="section_padding_top">
        <div class="container">
            <div class="row">
                <div class="col-lg-5">
                    <div class="three_about_left">
                        <img src="assets/img/common/travel-by-plane-woman-passenger.webp" alt="img">

                        <img src="assets/img/common/verified.png" class="verified_area" alt="img">
                    </div>
                </div>
                <div class="col-lg-5 offset-lg-1">
                    <div class="three_about_right">
                        <h4 class="three_heading_area">Trusted  Booking</h4>
                        <h2>Book Flights Fast & Easy – Anytime, Anywhere!</h2>
                        <p>
                        Discover the easiest way to book flights with unbeatable deals, real-time price alerts, and flexible options tailored to your schedule. Whether you're planning a last-minute getaway or a well-deserved vacation, our platform helps you compare, choose, and save on flights worldwide. No hidden fees, 24/7 support, and a smooth booking experience from start to finish. Fly smarter—start your journey with us today.


                        </p>
                        <p>
                        Let me know if you'd like a more casual, premium, or adventurous tone!
                        </p>

                        <!-- <div class="about_three_flex">
                            <div class="about_counter_item">
                                <h2>12K</h2>
                                <p>Local guides</p>
                            </div>
                            <div class="about_counter_item">
                                <h2>750+</h2>
                                <p>Destinations</p>
                            </div>
                            <div class="about_counter_item">
                                <h2>100%</h2>
                                <p>Happiness</p>
                            </div>
                        </div> -->
                    </div>
                </div>
            </div>
        </div>
    </section>

  <!-- Flight Search Areas -->
  <section id="explore_area" class="section_padding">
        <div class="container">
            <!-- Section Heading -->
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                    <div class="section_heading_center">
                        <h2>Todays Flight List</h2>
                    </div>
                </div>
            </div>
            <div class="row">

                <div class="col-lg-12">
                    <div class="row">
                        <div class="col-sm-1"></div>
                        <div class="col-lg-10">
                        <?php

          $date=date('Y-m-d');

            $q=mysqli_query($con,"SELECT flight.flight_name,flight_details.id,flight_details.arrivel,flight_details.time1,flight_details.form,flight_details.departure,flight_details.time2,flight_details.`to` as to1,flight_details.duration,flight_details.price FROM flight_details INNER JOIN flight ON flight_details.flight_name=flight.id  where  flight_details.status='0' order by flight_details.time1 desc limit 5 ");

            while($a=mysqli_fetch_array($q)){

                $f1=mysqli_query($con,"SELECT `city`as form FROM `citys` WHERE `id`='$a[form]'");
                $f2=mysqli_query($con,"SELECT `city`as to_place FROM `citys` WHERE `id`='$a[to1]'");
                $f=mysqli_fetch_array($f1);
                $t=mysqli_fetch_array($f2);

                ?>
                            <!-- start -->
                            <div class="flight_search_result_wrapper">

                                <div class="flight_search_item_wrappper">
                                    <div class="flight_search_items">
                                        <div class="multi_city_flight_lists">
                                            <h5 class="airlineName fw-500">&nbsp &nbsp <?php echo $a[flight_name]?>
                                </h5>
                                            <div class="flight_multis_area_wrapper">
                                                <div class="flight_search_left">
                                                    <div class="flight_logo">
                                                        <!-- <img src="assets/img/common/biman_bangla.png" alt="img"> -->

                                                    </div>
                                                    <div class="flight_search_destination">
                                                        <p>From</p>
                                                        <h3><?php echo $f['form']?></h3>
                                                        <h6><?php echo date('d M Y h:i A',strtotime($a['departure'].$a[time1]));?>.</h6>
                                                    </div>
                                                </div>
                                                <div class="flight_search_middel">
                                                    <div class="flight_right_arrow">
                                                        <img src="assets/img/icon/right_arrow.png" alt="icon">
                                                        <h6>Non-stop</h6>
                                                        <p><?php echo $a['duration']?> </p>
                                                    </div>
                                                    <div class="flight_search_destination">
                                                        <p>To</p>
                                                        <h3><?php echo $t['to_place']?></h3>
                                                        <h6><?php echo date('d M Y h:i A',strtotime($a['arrivel'].$a[time2]));?>.</h6>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                        <div class="flight_search_right">

                                            <h2>₹ <?php echo $a[price] ?></h2>

                                              <?php if( !empty($_SESSION['id'])  ){ ?>
                                            <a href="flight_booking.php?id=<?php echo $a[id]?>&pass=1" class="btn btn_theme btn_sm">Book
                                                now</a>
                                                <?php }

                                                if(empty($_SESSION['id'])){
                                                    ?>
                                                    <a href="login.php" class="btn btn_theme btn_sm">Login/Register</a>
                                                    <?php
                                                } ?>

                                            <!-- <p>*Discount applicable on some conditions</p> -->
                                            <p>Have a woonderful Journey</p>

                                        </div>
                                    </div>

                                </div>

                            </div>
                                    <!-- end -->
                                     <?php } ?>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>



    <section id="home_Three_client" class="section_padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-7">
                    <div class="home_client_wrpper">
                        <h4>Our testimonials</h4>
                        <h2>What our client say about us</h2>
                        <div class="home-two-quote">
                            <img src="assets/img/icon/quote.png" alt="img">
                            <h3>Awesome service</h3>
                        </div>
                        <div class="home_two_client_slider owl-theme owl-carousel owl-loaded owl-drag">
                        <style>
    .star-rating {
      direction: rtl;
      font-size: 2rem;
      unicode-bidi: bidi-override;
      display: inline-flex;
    }

    .star-rating input {
      display: none;
    }

    .star-rating label {
      /* color: #ccc; */
      cursor: pointer;
    }

    .star-rating input:checked ~ label,
    .star-rating label:hover,
    .star-rating label:hover ~ label {
      color: gold;
    }

    .checked {
        color: gold;
    }

  </style>

<?php
$q=mysqli_query($con,"SELECT  `review`,`first_name`,`last_name` FROM `register` order by id desc LIMIT 6  ");
while($a=mysqli_fetch_array($q)){
   $s=json_decode($a[review], true);

?>


                        <div class="owl-stage-outer"><div class="owl-stage" style="transform: translate3d(-2058px, 0px, 0px); transition: 1s; width: 5488px;">

                        <div class="owl-item cloned" style="width: 686px;"><div class="client_two_content">
                                <p>
                                    <?php echo $s[message]?>
                                </p>
                                <div class="client_two_author">
                                    <h5><?php echo $a['first_name'].' '.$a[last_name]; ?></h5>

                                    <div class="star-rating">
    <label for="star5" class="<?php echo $s[star]>=5? checked:''; ?>">★</label>
    <label for="star4" class="<?php echo $s[star]>=4? checked:''; ?>">★</label>
    <label for="star3" class="<?php echo $s[star]>=3? checked:''; ?>">★</label>
    <label for="star2" class="<?php echo $s[star]>=2? checked:''; ?>">★</label>
    <label for="star1" class="<?php echo $s[star]>=1? checked:''; ?>">★</label>
  </div>
                                </div>
                            </div>



                        </div>


                         </div>





                         </div>
                         <?php } ?>


                            <div class="owl-nav disabled">


                            <button type="button" role="presentation" class="owl-prev"><span aria-label="Previous">‹</span></button><button type="button" role="presentation" class="owl-next"><span aria-label="Next">›</span></button></div><div class="owl-dots"><button role="button" class="owl-dot"><span></span></button><button role="button" class="owl-dot active"><span></span></button><button role="button" class="owl-dot"><span></span></button><button role="button" class="owl-dot"><span></span></button></div></div>
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="home_three_client_right">
                        <img src="assets/img/icon/UAE-India-flights-Air-India-Expr.webp" alt="img" >
                    </div>
                </div>
            </div>
        </div>
    </section>





<?php include_once('footer.php');?>