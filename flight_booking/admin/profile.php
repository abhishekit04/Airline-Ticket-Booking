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
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="header-title mb-4">Profile Details:</h4>
                                        <hr>
                                          <?php
                                                  $q=mysqli_query($con,"SELECT `company_details` FROM `login` WHERE `id`='$user_id'");
                                                  $a1=mysqli_fetch_array($q);
                                                  $a=json_decode($a1[company_details],true);
                                                  ?>
                                        <form method="post" action="profile_back.php" enctype="multipart/form-data" id='divid'>
                                          <div class="h6 text-primary">Company Details</div>
                                          <hr>
                                          <div class="form-group row">
                                                <label class="col-sm-2 "><b>Head Office, Manufacturing Unit-1:<span class='text-danger'>*</span></b></label>
                                                  <div class="col-sm-10">
                                                     <textarea name="address_unit1" id="address_unit1" class="form-control   text-dark border-primary" autocomplete="off" required><?php echo $a[address_unit1]?></textarea>
                                                </div>
                                         </div>
                                          <div class="form-group row">
                                                <label class="col-sm-2 "><b>Manufacturing unit-2:<span class='text-danger'>*</span></b></label>
                                                  <div class="col-sm-10">
                                                     <textarea name="address_unit2" id="address_unit2" class="form-control   text-dark border-primary" autocomplete="off" required><?php echo $a[address_unit2]?></textarea>
                                                </div>
                                         </div>
                                          <div class="form-group row">
                                                <label class="col-sm-2 "><b>Branch Office:<span class='text-danger'>*</span></b></label>
                                                  <div class="col-sm-10">
                                                     <textarea name="address_unit3" id="address_unit3" class="form-control   text-dark border-primary" autocomplete="off" required><?php echo $a[address_unit3]?></textarea>
                                                </div>
                                         </div>
                                          <div class="form-group row">
                                                <label class="col-sm-2 "><b> Primary Mobile 1:<span class='text-danger'>*</span></b></label>
                                                  <div class="col-sm-10">
                                                     <input type="text" name="mobile1" id="mobile1" class="form-control   text-dark border-primary" autocomplete="off" value='<?php echo $a[mobile1];?>'required>
                                                </div>
                                         </div>
                                          <div class="form-group row">
                                                <label class="col-sm-2 "><b>Mobile 2:</b></label>
                                                  <div class="col-sm-10">
                                                     <input type="text" name="mobile2" id="mobile2" class="form-control   text-dark border-primary" autocomplete="off" value='<?php echo $a[mobile2];?>'>
                                                </div>
                                         </div>
                                          <div class="form-group row">
                                                <label class="col-sm-2 "><b>Mobile 3:</b></label>
                                                  <div class="col-sm-10">
                                                     <input type="text" name="mobile3" id="mobile3" class="form-control   text-dark border-primary" autocomplete="off" value='<?php echo $a[mobile3];?>'>
                                                </div>
                                         </div>
                                          <div class="form-group row">
                                                <label class="col-sm-2 "><b> Primary Email id 1:<span class='text-danger'>*</span></b></label>
                                                  <div class="col-sm-10">
                                                     <input type="email" name="email_id1" id="email_id1" class="form-control   text-dark border-primary" autocomplete="off" value='<?php echo $a[email_id1];?>'required>
                                                </div>
                                         </div>
                                          <div class="form-group row">
                                                <label class="col-sm-2 "><b>Email id 2:</b></label>
                                                  <div class="col-sm-10">
                                                     <input type="email" name="email_id2" id="email_id2" class="form-control   text-dark border-primary" autocomplete="off" value='<?php echo $a[email_id2];?>'>
                                                </div>
                                         </div>
                                          <div class="form-group row">
                                                <label class="col-sm-2 "><b>Email id 3:</b></label>
                                                  <div class="col-sm-10">
                                                     <input type="email" name="email_id3" id="email_id3" class="form-control   text-dark border-primary" autocomplete="off" value='<?php echo $a[email_id3];?>'>
                                                </div>
                                         </div>
                                         <div class="form-group row">
                                                <label class="col-sm-2 "><b>Map:</b></label>
                                                  <div class="col-sm-10">
                                                     <input type="text" name="map" id="map" class="form-control   text-dark border-primary" autocomplete="off" value='<?php echo $a[map];?>'>
                                                </div>
                                         </div>
                                         <hr>
                                         <div class="h6 text-primary">Social Media</div>
                                         <hr>
                                          <div class="form-group row">
                                                <label class="col-sm-2 "><b>Facebook:<span class='text-danger'>*</span></b></label>
                                                  <div class="col-sm-10">
                                                     <input type="text" name="facebook" id="facebook" class="form-control   text-dark border-primary" autocomplete="off" value='<?php echo $a[facebook];?>'required>
                                                </div>
                                         </div>
                                          <div class="form-group row">
                                                <label class="col-sm-2 "><b>Twitter:<span class='text-danger'>*</span></b></label>
                                                  <div class="col-sm-10">
                                                     <input type="text" name="twitter" id="twitter" class="form-control   text-dark border-primary" autocomplete="off" value='<?php echo $a[twitter];?>'required>
                                                </div>
                                         </div>
                                          <div class="form-group row">
                                                <label class="col-sm-2 "><b>Instgram:<span class='text-danger'>*</span></b></label>
                                                  <div class="col-sm-10">
                                                     <input type="text" name="instgram" id="instgram" class="form-control   text-dark border-primary" autocomplete="off" value='<?php echo $a[instgram];?>'required>
                                                </div>
                                         </div>
                                          <div class="form-group row">
                                                <label class="col-sm-2 "><b>Linkdin:<span class='text-danger'>*</span></b></label>
                                                  <div class="col-sm-10">
                                                     <input type="text" name="linkdin" id="linkdin" class="form-control   text-dark border-primary" autocomplete="off" value='<?php echo $a[linkdin];?>'required>
                                                </div>
                                         </div>
                                          </div>
                                            <hr class="bg-dark">
                                            <div class="row">
                                            <div class="col-sm-2 ">
                                                <button type="submit" name="save_profile"   class="btn btn-success btn-sm col form-group" ><i class="fa fa-save"></i> Save</button>
                                            </div>
                                            <div class="col-sm-2 ">
                                                <button type="button" name="back"  class="btn btn-danger btn-sm col form-group" onclick="window.location.href='admin_dashboard.php'"><i class="fa fa-arrow-circle-left"></i> Back</button>
                                            </div>
                                            </div>
                                        </form>
                                </div>
                                </div>
                            </div>
                        </div>
                        <!-- end row -->
                    </div> <!-- container-fluid -->
                </div>
                <!-- End Page-content -->
                <script type="text/javascript">
                  $(function(){
              $('#section').multiselect({
          buttonClass: 'border-primary form-control',
           buttonWidth: '100%',
           includeSelectAllOption: true
              });
               var abc1=document.getElementById('abc').value;
        var abc =abc1.split(',');
$('#section').val(abc);
$('#section').multiselect('refresh');
               });
                </script>
<?php
    include_once('footer.php');
    ?>