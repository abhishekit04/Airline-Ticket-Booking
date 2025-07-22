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
                        <h2>Food Section</h2>
                        <ul>
                            <li><a href="index.php">Home</a></li>
                            <li><span><i class="fas fa-circle"></i></span> Food Section</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Tour Guides Area -->
    <section id="tour_guides_area" class="section_padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                    <div class="section_heading_center">
                        <h2>All types of <?php echo ucwords($_REQUEST[section]); ?></h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="guide_heading_area">
                        <h3><?php echo ucwords($_REQUEST[section]); ?></h3>
                    </div>
                </div>
                <?php
                $q=mysqli_query($con,"SELECT * FROM `food` WHERE `section`='$_REQUEST[section]' AND`status`='0' order By id DESC");
                while($a=mysqli_fetch_array($q)){
                ?>

                <div class="col-lg-3 col-md-6 col-sm-12 col-12">
                    <div class="tour_guides_boxed">
                        <img src="admin/image/food/<?php echo $a[image]?>" alt="img">
                        <div class="tour_guide_content">

                            <h3><?php echo ucwords($a[name]);?></h3>
                            <p>₹ <?php echo ucwords($a[price]);?></p>
                        </div>
                    </div>
                </div>
                <?php } ?>


            </div>

        </div>
    </section>


<?php include_once('footer.php');?>