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
                                   <!--   -->
                                </div>
                            </div>
                        </div>     
                        <?php
                        $q=mysqli_query($con,"SELECT * FROM `login` Where `id`='$_SESSION[user_id]'");
                        $a=mysqli_fetch_array($q);

                        ?>
                        <!-- end page title -->
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="col-sm-12 pb-3">
                                            <h4 class="mb-0 font-size-18">Logo Setting</h4>
                                            <hr>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-6 ">
                                      
                                        <form method="post" action="back.php" enctype="multipart/form-data">
                                            <div class="row" id="divid" >
                                              <div class="col-sm-12 form-group">
                                               <label><b>Login Image: <span class="text-danger">* <small>size: 448 X 107px</small></span></b></label>
                                                <input type="file" name="login_img" id="login_amg" class="form-control  text-dark border-dark" autocomplete="off" required>
                                                <input name="pre_img" type="hidden" value="<?php echo $a[login_logo]?>"> 

                                              </div>
                                              <div class="col-sm-12">
                                                <img src="image/logo/<?php echo $a[login_logo]?>" width="400" height="100" class="img-thumbnail">
                                              </div>
                                           
                                            </div>
                                            <hr class="bg-dark">
                                            <div class="row">
                                            <div class="col-sm-2 ">
                                                <button type="submit" name="actionajax"  class=" btn-success form-control form-control-sm form-group" value="login_img" ><span class='fa fa-edit'></span> Update</button>
                                        </div>
                                            <div class="col-sm-2 ">
                                                <button type="button" name="back"  class=" btn-primary form-control form-group form-control-sm" onclick="window.open('admin_dashboard.php','_self');"><span class='fa fa-arrow-circle-left'></span> Back</button>
                                        </div>
                                        </div>
                                        </form>
                                    </div>
                                    <div class="col-sm-6">
                                         <form method="post" action="back.php" enctype="multipart/form-data">
                                            <div class="row" id="divid" >
                                              <div class="col-sm-12 form-group">
                                               <label><b>Admin Logo: <span class="text-danger">* <small>size: 220 X 83px</small></span></span></b></label>
                                                <input type="file" name="admin_logo" id="admin_logo" class="form-control  text-dark border-dark" autocomplete="off" required>
                                                 <input name="pre_img" type="hidden" value="<?php echo $a[admin_logo]?>"> 
                                              </div>
                                                 <div class="col-sm-12">
                                                <img src="image/logo/<?php echo $a[admin_logo]?>" width="400" height="100" class="img-thumbnail">
                                              </div>
                                            
                                            </div>
                                            <hr class="bg-dark">
                                            <div class="row">
                                            <div class="col-sm-2 ">
                                                <button type="submit" name="actionajax"  class=" btn-success   form-group form-control form-control-sm" value="admin_logo"><span class='fa fa-edit'></span> Update</button>
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
 