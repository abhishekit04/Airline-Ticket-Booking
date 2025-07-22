<?php 
  include_once('connect.php');
include('nav.php');
   $user_id=$_SESSION['user_id'];
 ?>
            <!-- ============================================================== -->
            <!-- Start right Content here -->
            <!-- ============================================================== -->
            <div class="main-content">
                <div class="page-content">
                    <div class="container-fluid">
                        <!-- start page title -->
                        <div class="row">
                            <div class="col-12">
                                <div class="page-title-box d-flex align-items-center justify-content-between">
                                   <!--   --><h4 class="mb-0 font-size-18">Change Password</h4>
                                </div>
                            </div>
                        </div>     
                        <!-- end page title -->
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-sm-6 ">
                                        <h4 class="header-title mb-4">Change Email:</h4>
                                        <hr>
                                        <form method="post" action="profile_back.php" enctype="multipart/form-data">
                                            <div class="row" id="divid" >
                                              <div class="col-sm-12 form-group">
                                               <label><b>Old Email:</b></label>
                                                <input type="text" name="old_username" id="old_username" class="form-control  text-dark border-dark" autocomplete="off">
                                              </div>
                                              <div class="col-sm-12 form-group">
                                                <label><b>New Email:</b></label>
                                                <input type="text" name="new_username" id="new_username" class="form-control   text-dark border-dark" autocomplete="off">
                                              </div>
                                              <div class="col-sm-12 form-group">
                                                <label><b> Password:</b></label>
                                                <input type="password" name="password" id="password" class="form-control   text-dark border-dark" autocomplete="off">
                                              </div>
                                            </div>
                                            <hr class="bg-dark">
                                            <div class="row">
                                            <div class="col-sm-2 ">
                                                <button type="submit" name="changeusername"  class=" btn-success form-control form-control-sm form-group" ><span class='fa fa-edit'></span> Update</button>
                                        </div>
                                            <div class="col-sm-2 ">
                                                <button type="button" name="back"  class=" btn-primary form-control form-group form-control-sm" onclick="window.open('admin_dashboard.php','_self');"><span class='fa fa-arrow-circle-left'></span> Back</button>
                                        </div>
                                        </div>
                                        </form>
                                    </div>
                                    <div class="col-sm-6">
                                        <h4 class="header-title mb-4">Change Password:</h4>
                                        <hr>
                                         <form method="post" action="profile_back.php" enctype="multipart/form-data">
                                            <div class="row" id="divid" >
                                              <div class="col-sm-12 form-group">
                                               <label><b>Old password:</b></label>
                                                <input type="password" name="old_password" id="old_password" class="form-control  text-dark border-dark" autocomplete="off">
                                              </div>
                                              <div class="col-sm-12 form-group">
                                                <label><b>New password:</b></label>
                                                <input type="password" name="new_password" id="new_password" class="form-control   text-dark border-dark" autocomplete="off">
                                              </div>
                                              <div class="col-sm-12 form-group">
                                                <label><b>Confirm password:</b></label>
                                                <input type="password" name="confirm_password" id="confirm_password" class="form-control   text-dark border-dark" autocomplete="off">
                                              </div>
                                            </div>
                                            <hr class="bg-dark">
                                            <div class="row">
                                            <div class="col-sm-2 ">
                                                <button type="submit" name="changepassword"  class=" btn-success   form-group form-control form-control-sm" ><span class='fa fa-edit'></span> Update</button>
                                        </div>
                                            <div class="col-sm-2 ">
                                                <button type="button" name="back"  class=" btn-primary  form-group form-control form-control-sm" onclick="window.open('admin_dashboard.php','_self');"><span class='fa fa-arrow-circle-left'></span> Back</button>
                                        </div>
                                        </div>
                                        </form>
                                        </div>
                                    </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end row -->
                    </div> <!-- container-fluid -->
                </div>
                <!-- End Page-content -->
<?php 
    include_once('footer.php');
    ?>
 