<?php
include('nav.php');

session_start();
include_once('admin/connect.php');
?>
<?php
if(isset($_POST[cust_login])){
    $email=$_POST['email'];
    $password=$_POST['password'];
    $q=mysqli_query($con,"SELECT * FROM `register` WHERE `email`='$email'and `password`='$password'");
    if(mysqli_num_rows($q)==0){
        echo "<script>alert('Email or Passward is invalid');</script>";
    }else{
    $a=mysqli_fetch_array($q);


    $_SESSION['id']=$a[id];


    echo '
<script>
        window.location.href="index.php";

</script>';


    }
}


?>


    <!-- Common Banner Area -->
    <section id="common_banner">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="common_bannner_text">
                        <h2>Login</h2>
                        <ul>
                            <li><a href="index.php">Home</a></li>
                            <li><span><i class="fas fa-circle"></i></span> Login</li>
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
                            <h3>Login your account</h3>
                            <h2>Logged in to stay in touch</h2>
                        </div>
                        <div class="common_author_form">
                            <form action="login.php" method="post" id="main_author_form">
                                <div class="form-group">
                                    <input type="email" class="form-control" placeholder="Enter user Email" name='email'/>
                                </div>
                                <div class="form-group">
                                    <input type="password" class="form-control" placeholder="Enter password" name='password'/>
                                    <a href="forgot-password.html">Forgot password?</a>
                                </div>
                                <div class="common_form_submit">
                                    <button type="submit" name="cust_login" value="cust_login" class="btn btn_theme btn_md">Log in</button>
                                </div>
                                <div class="have_acount_area">
                                    <p>Dont have an account? <a href="register.php">Register now</a></p>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <?php include_once('footer.php');?>
