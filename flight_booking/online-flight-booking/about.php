<?php include_once('nav.php');
session_start();
include_once('admin/connect.php');
?>
    <!-- Common Banner Area -->
    <section id="common_banner">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="common_bannner_text">
                        <h2>About us</h2>
                        <ul>
                            <li><a href="index.php">Home</a></li>
                            <li><span><i class="fas fa-circle"></i></span> About</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- About Us -->
    <section id="about_us_top" class="section_padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="about_us_left">
                        <h5>About us</h5>
                        <h2>Book Flights in Minutes, Travel the World with Confidence</h2>
                        <p>Say goodbye to endless tabs and overpriced tickets. With our seamless flight booking service, you get access to the best fares from top airlines — all in one place. Whether you’re planning a last-minute business trip or a dream vacation, we make it easy to compare prices, choose flexible dates, and lock in exclusive deals with just a few clicks. </p>
                        <p>Our platform is designed with travelers in mind: fast, secure, and mobile-friendly. Enjoy real-time fare alerts, 24/7 customer support, and personalized recommendations based on your preferences and travel history.</p>

<p>From budget-friendly getaways to luxury escapes, we’ve got flights for every journey and every budget. No hidden fees, no surprises — just smooth booking and clear choices.</p>
                        <a href="contact.php" class="btn btn_theme btn_md">Contact Now</a>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="about_us_right">
                        <img src="assets/img/common/photo-1542296332-2e4473faf563.webp" alt="img">
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
                        <img src="assets/img/icon/UAE-India-flights-Air-India-Expr.webp" alt="img">
                    </div>
                </div>
            </div>
        </div>
    </section>






    <?php include_once('footer.php');?>