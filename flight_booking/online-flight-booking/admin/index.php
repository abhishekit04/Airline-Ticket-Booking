<?php
include_once('connect.php');
      session_start();
// ================================================================================
?>
<?php
// check login
      if(isset($_POST['save1'])){
   $username=$_POST['username'];
   $userpassword=$_POST['userpassword'];
    $q=mysqli_query($con,"SELECT * FROM `login` WHERE `email`='$username' AND `password`='$userpassword'");
    if(mysqli_num_rows($q)>0){
      $a=mysqli_fetch_array($q);
    // include_once('backup.php');
    // include_once('Reminder_alert.php');
     $_SESSION['user_id']=$a['id'];
     $_SESSION['other']=$a['other'];
     // $_SESSION['user_status']=$a['status'];
      echo"<script>window.location.href='admin_dashboard.php';</script>";
      }
      else{
          echo "<script> alert('Please Check username and password');</script>";
      }
echo mysqli_error($con);
}
$q1=mysqli_query($con,"SELECT * FROM `login` order by id asc limit 1");
$a1=mysqli_fetch_array($q1);
?>
<!doctype html>
<html lang="en">
<head>
        <meta charset="utf-8" />
        <title>Login page</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
        <meta content="Themesdesign" name="author" />
        <!-- App favicon -->
        <link rel="shortcut icon" href="image/logo/<?php echo $a1[admin_logo]?>">
        <!-- Bootstrap Css -->
        <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <!-- Icons Css -->
        <link href="assets/css/icons.min.css" rel="stylesheet" type="text/css" />
        <!-- App Css-->
        <link href="assets/css/app.min.css" rel="stylesheet" type="text/css" />
    </head>
    <body class="bg-primary bg-pattern">
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
                <div class="row justify-content-center">
                    <div class="col-lg-5">
                        <div class="card">
                            <div class="card-body p-4">
                                <div class="p-2">
                                  <div class="col-sm-12 text-center">
                                  <a href="index.php" class="logo text-center" >
                                    <!-- <img src="image/logo-dark.png" height="30" alt="logo" > -->
                                    <img src="image/logo/<?php echo $a1[login_logo]?>" style="width:304px;height:83px;" alt="logo" >

                                </a>
                                    <!-- <h5 class="mb-5 text-center">Sign in to continue .</h5> -->
                                </div>
                                    <hr>
                                    <form method="post" class="form-horizontal" action="index.php" autocomplete="off">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group mb-4">
                                                    <label for="username">Email</label>
                                                    <input type="email" class="form-control" name="username" onfocus="" id="username" placeholder="Enter Email" autofocus="" value="admin@gmail.com">
                                                </div>
                                                <div class="form-group mb-4">
                                                    <label for="userpassword">Password</label>
                                                    <input type="password" class="form-control" name="userpassword" id="userpassword" placeholder="Enter password" value="admin">

                                                </div>
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="custom-control custom-checkbox">
                                                            <input type="checkbox" class="custom-control-input" id="customControlInline">
                                                            <label class="custom-control-label" for="customControlInline" onclick="showpassword();">Show Password</label>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="text-md-right mt-3 mt-md-0">
                                                            <a href="forgot_password.php?action=email" class="text-muted"><i class="mdi mdi-lock"></i> Forgot your password?</a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="mt-4">
                                                    <button class="btn btn-success btn-block waves-effect waves-light" type="submit" name="save1">Log In</button>
                                                </div>
                                                <div class="mt-4 text-center">
                                                    <!-- <a href="#" class=" text-dark pay_data" data-toggle="modal" data-target="#myModal"  id="" ><i class="mdi mdi-account-circle mr-1"></i>  Create an account</a> -->
                                                    <!-- <a href="auth-register.html" class="text-muted"><i class="mdi mdi-account-circle mr-1"></i></a> -->
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
<div id="myModal1" class="modal fade" role="dialog">
  <div class="modal-dialog modal-lg">
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header bg-dark">
                <h4 class="modal-title text-white ">Renew :</h4>
        <button type="button" class="close text-white" data-dismiss="modal" >&times;</button>
      </div>
      <div class="modal-body">
         <form method="post" autocomplete="off">
          <div class="row">
            <div class="col-sm-6 ">
  <label><b>Renew Date:</b></label>
 <input type="date" name="renew_date" id="renew_date" class="form-control form-control-sm" autocomplete="off">
</div>
       </div>
       <!--  -->
      </div>
      <div class="modal-footer " style="background: gray;">
         <button type="submit" name="edit" class="btn btn-success" >Update</button>
         <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
       </div>
    </div>
  </form>
</div>
 </div>
</div>
<?php
if(isset($_POST['edit']))
{
  $renew_date=$_POST['renew_date'];
  $q=mysqli_query($con,"UPDATE `expired_date` SET `expired_date`='$renew_date' WHERE `id`=1");
  if($q){
    echo"<script>
alert('successfully renewed');
    </script>";
  }
  else{
     echo mysqli_error($con);
  }
}
?>
<script type="text/javascript">
  function showpassword(){
    let password=document.getElementById('userpassword');
    if(password.type=="text"){
      password.type="password";
    }
    else{
      password.type="text";
    }
  }
</script>