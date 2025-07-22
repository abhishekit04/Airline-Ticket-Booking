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
                        $other=json_decode($a[other],true);

                     
                        ?>
                        <!-- end page title -->
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="col-sm-12 pb-3">
                                            <h4 class="mb-0 font-size-18">Admin Setting</h4>
                                            <hr>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-12 ">
                                        <form method="post" action="back.php" enctype="multipart/form-data">
                                            <div class="form-group row">
                                                <label class="col-sm-2 "><b>Product:</b></label>
                                                    <div class="col-sm-1">
                                                     <input type="checkbox" name="product" id="product" class="form-control    border-primary" autocomplete="off" <?php echo $other[product]=="on"?"checked":""?>>
                                                    </div>
                                             </div>
                                             <div class="form-group row">
                                                <label class="col-sm-2 "><b>Service:</b></label>
                                                    <div class="col-sm-1">
                                                     <input type="checkbox" name="service" id="service" class="form-control  border-primary" autocomplete="off" <?php echo $other[service]=="on"?"checked":""?>>
                                                    </div>
                                             </div>
                                             <div class="form-group row">
                                                <label class="col-sm-2 "><b>Blog:</b></label>
                                                    <div class="col-sm-1">
                                                     <input type="checkbox" name="blog" id="blog" class="form-control  border-primary" autocomplete="off" <?php echo $other[blog]=="on"?"checked":""?> >
                                                    </div>
                                             </div>
                                            <hr class="bg-dark">
                                            <div class="row">
                                            <div class="col-sm-2 ">
                                                <button type="submit" name="actionajax"  class=" btn-success   form-group form-control form-control-sm" value="admin_setting"><span class='fa fa-edit'></span> Update</button>
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
 