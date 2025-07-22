<?php include 'nav.php';
session_start();
include_once 'admin/connect.php';
?>

    <!-- Common Banner Area -->
    <section id="common_banner">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="common_bannner_text">
                        <h2>My Profile</h2>
                        <ul>
                            <li><a href="index.html">Home</a></li>
                            <li><span><i class="fas fa-circle"></i></span><a href="dashboard.html">Customer
                                    dashboard</a></li>
                            <li><span><i class="fas fa-circle"></i></span>My Profile</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

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
      color: #ccc;
      cursor: pointer;
    }

    .star-rating input:checked ~ label,
    .star-rating label:hover,
    .star-rating label:hover ~ label {
      color: gold;
    }
    textarea {

    height: 150px !important;

}
  </style>

    <!-- Dashboard Area -->
    <section id="dashboard_main_arae" class="section_padding">
        <div class="container">
            <div class="row">
            <?php include_once('admin_nav.php');?>
                <?php

                $q=mysqli_query($con,"SELECT review FROM `register` where `id`='$_SESSION[id]' ");
                    	$a=mysqli_fetch_array($q);
                        $r=json_decode($a[review],true);

                ?>
                <div class="col-lg-8">
                    <div class="dashboard_common_table">
                        <h3>My Reviews</h3>
                        <div class="profile_update_form">
                            <form action="back.php" method="post" id="profile_form_area">
                                <div class="row">
                                    <div class="col-lg-12">


  <div class="star-rating">
    <input type="radio" name="star" id="star5" value="5" <?php echo $r[star]==5?'checked':''; ?>><label for="star5">★</label>
    <input type="radio" name="star" id="star4" value="4" <?php echo $r[star]==4?'checked':''; ?>><label for="star4">★</label>
    <input type="radio" name="star" id="star3" value="3" <?php echo $r[star]==3?'checked':''; ?>><label for="star3">★</label>
    <input type="radio" name="star" id="star2" value="2" <?php echo $r[star]==2?'checked':''; ?>><label for="star2">★</label>
    <input type="radio" name="star" id="star1" value="1" <?php echo $r[star]==1?'checked':''; ?>><label for="star1">★</label>
  </div>


                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                        <label for="f-name">Message</label>
                                            <textarea name="message" id="message"  class="form-control"  ><?php echo $r[message]?></textarea>

                                        </div>
                                    </div>

                                    <div class="col-sm-2">
                                        <button type="submit" class="btn btn_theme " name="actionajax" value="review">Update</button>
                                    </div>
</form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <?php include_once('footer.php');?>


    <script>
    function check_passward(val) {
    var decimal=  /^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[^a-zA-Z0-9])(?!.*\s).{8,15}$/; //add bar before d and s
    if(val.match(decimal)){
    	document.getElementById('passward_msg').innerHTML='';
    	document.getElementById('profile_password').disabled=false;
    }
    else{
document.getElementById('passward_msg').innerHTML='8 to 15 characters which contain at least one lowercase letter, one uppercase letter, one numeric digit, and one special character';
	document.getElementById('profile_password').disabled=true;
}
    }
</script>