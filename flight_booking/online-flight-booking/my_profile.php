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

    <!-- Dashboard Area -->
    <section id="dashboard_main_arae" class="section_padding">
        <div class="container">
            <div class="row">
            <?php include_once('admin_nav.php');?>
                <?php

                $q=mysqli_query($con,"SELECT * FROM `register` where `id`='$_SESSION[id]' ");
                    	$a=mysqli_fetch_array($q)
                ?>
                <div class="col-lg-8">
                    <div class="dashboard_common_table">
                        <h3>My Profile</h3>
                        <div class="profile_update_form">
                            <form action="back.php" method="post" id="profile_form_area">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label for="f-name">First name</label>
                                            <input type="text" class="form-control" id="f-name" name="first_name" placeholder="Your Name"
                                                value="<?php echo $a[first_name]?>">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label for="l-name">Last name</label>
                                            <input type="text" class="form-control" id="l-name" name="last_name" value="<?php echo $a[last_name]?>">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label for="mail-address">Email address</label>
                                            <input type="email" class="form-control" id="mail-address" name="email"
                                                value="<?php echo $a[email]?>">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label for="mobil-number">Mobile number</label>
                                            <input type="text" class="form-control" id="mobil-number" name="mobile"
                                                value="<?php echo $a[mobile]?>">
                                        </div>
                                    </div>
                                    <div class="col-sm-2">
                                        <button type="submit" class="btn btn_theme " name="actionajax" value="profile_update">Update</button>
                                    </div>
</form>
                                    <br>

                                    <br>
                                    <form action="back.php" method="post" id="profile_form_area">
                                    <div class="change_password_input_boxed">
                                        <h3>Change password</h3>
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <input type="password" class="form-control" name="old_password"
                                                        placeholder="Old Password">
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <input type="password" class="form-control" name="new_password"
                                                        placeholder="New Password" onkeyup="check_passward(this.value)">
                                                        <span id='passward_msg' class="text-danger"></span>
                                                </div>
                                            </div>
                                            <div class="col-sm-2">
                                        <button type="submit" class="btn btn_theme " id='profile_password' name="actionajax" value="profile_password">Update</button>
                                    </div>
                                        </div>
                                    </div>
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