<?php include_once 'nav.php';
    session_start();
    include_once 'admin/connect.php';
?>

    <!-- Common Banner Area -->
    <section id="common_banner">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="common_bannner_text">
                        <h2>Register</h2>
                        <ul>
                            <li><a href="index.php">Home</a></li>
                            <li><span><i class="fas fa-circle"></i></span> Register</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--  Common Author Area -->
    <section id="common_author_area" class="section_padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <div class="common_author_boxed">
                        <div class="common_author_heading">
                            <h3>Register account</h3>
                            <h2>Register your account</h2>
                        </div>
                        <div class="common_author_form">
                            <form action="back.php" id="main_author_form" method="post" >
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Enter first name*"  name="first_name" required />
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Enter last name*" name="last_name" required />
                                </div>
                                <div class="form-group">
                                    <input type="email" class="form-control"
                                        placeholder="your email address *" name="email" required />
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Mobile number*" name="mobile" required />
                                </div>

                                <div class="form-group">
                                    <input type="password" class="form-control" placeholder="Password*"  name="password" required onkeyup="check_passward(this.value)"/>
                                    <span id="passward_msg" class="text-danger"></span>
                                </div>
                                <div class="common_form_submit">
                                    <button type="submit" name="actionajax" value="cust_register" id='button' class="btn btn_theme btn_md">Register</button>

                                </div>
                                <div class="have_acount_area">
                                    <p>Do have an account? <a href="login.php">Login Now</a></p>
                                </div>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>



    <!-- // password validation -->


    <script>
    function check_passward(val) {
    var decimal=  /^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[^a-zA-Z0-9])(?!.*\s).{8,15}$/; //add bar before d and s
    if(val.match(decimal)){
    	document.getElementById('passward_msg').innerHTML='';
    	document.getElementById('button').disabled=false;
    }
    else{
document.getElementById('passward_msg').innerHTML='8 to 15 characters which contain at least one lowercase letter, one uppercase letter, one numeric digit, and one special character';
	document.getElementById('button').disabled=true;
}
    }

// </script>

    <?php include_once 'footer.php'; ?>