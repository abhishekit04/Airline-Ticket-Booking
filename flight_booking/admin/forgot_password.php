<?php
include_once('connect.php');
session_start();
// ================================================================================
  // email
if(isset($_POST['save1'])){
    $a=mysqli_query($con,"SELECT * FROM `login` WHERE `email`='$_REQUEST[email]'");
    if(mysqli_num_rows($a)>0){
        $q=mysqli_fetch_array($a);
        $message_mail=rand(100000,1000000);
        $to=$sqlm['email'];
        $subject="Forget Password";
        $message="OTP Number is :".$message_mail;
        $header="Forget Password";
   $_SESSION['message_mail']=$message_mail;
   $_SESSION['sender_email']=$_REQUEST['email'];
       if( mail($to,$subject,$message,$header)){
        echo"<script> window.open('forgot_password.php?action=OTP','_self')</script>";
      // header('location:');
}
    }
    else{
        echo"<script> alert('Enter the Valid Email id'); </script>";
    }
}
// otp
if(isset($_POST['save2'])){
    if($_SESSION['message_mail']==$_REQUEST['otp']){
      header('location:forgot_password.php?action=new_password');
    }
    else{
        echo"<script> alert('Enter the Valid OTP'); </script>";
    }
}
// new_password
if(isset($_REQUEST['save3'])){
    if($_REQUEST['new_password']===$_REQUEST['confirm_password']){
       $email=$_SESSION['sender_email'];
        $q=mysqli_query($con,"UPDATE `login` SET `password`='$_REQUEST[new_password]' WHERE `email`='$email'");
        if($q){
            echo "<script> alert('Password Changed successfully'); window.open('index.php','_self');</script>";
        }
    }
    else{
        echo"<script>alert('Password is not Matched');</script>";
    }
}
$q1=mysqli_query($con,"SELECT * FROM `login` order by id asc limit 1");
$a1=mysqli_fetch_array($q1);
?>
<!doctype html>
<html lang="en">
<head>
        <meta charset="utf-8" />
        <title>Forgot password</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
        <meta content="Themesdesign" name="author" />
        <!-- App favicon -->
        <!-- <link rel="shortcut icon" href="image/icon.png"> -->
        <!-- Bootstrap Css -->
        <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <!-- Icons Css -->
        <link href="assets/css/icons.min.css" rel="stylesheet" type="text/css" />
        <!-- App Css-->
        <link href="assets/css/app.min.css" rel="stylesheet" type="text/css" />
    </head>
    <body class="bg-primary bg-pattern ">
      <style type="text/css">
        .bg-primary {
     background-color: #3f51b5!important;
}
      </style>
        <div class="account-pages my-5 pt-5">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="text-center mb-5">
                            <!-- <a href="index.php" class="logo"><img src="image/logo.png" height="80" alt="logo"></a> -->
                            <!-- <h5 class="font-size-16 text-white-50 mb-4">Login Page</h5> -->
                        </div>
                    </div>
                </div>
                <!-- end row -->
                <?php if($_REQUEST['action']=="email"){ ?>
                <div class="row justify-content-center">
                    <div class="col-lg-5">
                        <div class="card">
                            <div class="card-body p-4">
                                <div class="p-2">
                                  <div class="col-sm-12 text-center">
                                  <a href="index.php" class="logo text-center" >
                                   <img src="image/logo/<?php echo $a1[login_logo]?>" style="width:304px;height:83px;" alt="logo" >
                                </a>
                                    <h5 class="mb-5 text-center">Enter Email .</h5>
                                </div>
                                    <form method="post" class="form-horizontal" action="" autocomplete="off">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group mb-4">
                                                    <label for="username">Email</label>
                                                    <input type="email" class="form-control" name="email" onfocus="" id="username" placeholder="Enter Email" autofocus="">
                                                </div>
                                                <div class="mt-4">
                                                    <div class="row">
                                                        <div class="col-sm-6">
                                                    <button class="btn btn-success btn-block waves-effect waves-light" type="submit" name="save1">Next</button>
                                                        </div>
                                                        <div class="col-sm-6">
                                                            <a href="index.php" class="btn btn-danger btn-block waves-effect waves-light">Back</a>
                                                        </div>
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
              <?php } 
               if($_REQUEST['action']=="OTP"){ 
                // $a=mysqli_query($con,"SELECT * FROM `login` WHERE `email`='$_POST[email]'");
                ?>
                <!-- end row -->
                <div class="row justify-content-center">
                    <div class="col-lg-5">
                        <div class="card">
                            <div class="card-body p-4">
                                <div class="p-2">
                                  <div class="col-sm-12 text-center">
                                  <a href="index.php" class="logo text-center" >
                                    <!-- <img src="image/logo-dark.png" height="80" alt="logo" > -->
                                    <img src="image/logo/<?php echo $a1[login_logo]?>" style="width:304px;height:83px;" alt="logo" >
                                </a>
                                    <h5 class="mb-5 text-center">Enter OTP .</h5>
                                    <i class="text-success">Please check The Email Id</i></div>
                                    <form method="post" class="form-horizontal" action="" autocomplete="off">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group mb-4">
                                                    <label for="username">OTP <?php echo $_SESSION['message_mail']?> </label>
                                                    <input type="text" class="form-control" name="otp" onfocus="" id="otp" placeholder="Enter OTP" autofocus="">
                                                </div>
                                                <div class="mt-4">
                                                    <button class="btn btn-success btn-block waves-effect waves-light" type="submit" name="save2">Next</button>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
              <?php }
              if($_REQUEST['action']=="new_password"){ ?>
                <!-- end row -->
                <div class="row justify-content-center">
                    <div class="col-lg-5">
                        <div class="card">
                            <div class="card-body p-4">
                                <div class="p-2">
                                  <div class="col-sm-12 text-center">
                                  <a href="index.php" class="logo text-center" >
                                    <!-- <img src="image/logo-dark.png" height="80" alt="logo" > -->
                                    <img src="image/logo/<?php echo $a1[login_logo]?>" style="width:304px;height:83px;" alt="logo" >
                                </a>
                                    <h5 class="mb-5 text-center">Change Password .</h5></div>
                                    <form method="post" class="form-horizontal" action="" autocomplete="off">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group mb-4">
                                                    <label for="username">New Passward</label>
                                                    <input type="text" class="form-control" name="new_password" onfocus="" id="username" placeholder="Enter New Passward" autofocus="">
                                                </div> 
                                                <div class="form-group mb-4">
                                                    <label for="username">Confirm Passward</label>
                                                    <input type="text" class="form-control" name="confirm_password" onfocus="" id="username" placeholder="Enter New Passward" autofocus="">
                                                </div>
                                                <div class="mt-4">
                                                    <button class="btn btn-success btn-block waves-effect waves-light" type="submit" name="save3">save</button>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end row -->
              <?php } ?>
            </div>
        </div>
        <!-- end Account pages -->
        <!-- JAVASCRIPT -->
        <script src="assets/libs/jquery/jquery.min.js"></script>
        <script src="assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="assets/libs/metismenu/metisMenu.min.js"></script>
        <script src="assets/libs/simplebar/simplebar.min.js"></script>
        <script src="assets/libs/node-waves/waves.min.js"></script>
        <script src="assets/js/app.js"></script>
    </body>
</html>
