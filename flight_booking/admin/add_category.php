<?php 
session_start();
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
                            <div class="header-title mb-4 h3"><?php echo $_REQUEST['action']==''?'Add':$_REQUEST['action'] ?> Category:</div>
                            <hr>
                            <form method="post" action="back.php" enctype="multipart/form-data" id='divid'>
                              <div class="row1">
   <!-- =============================================================================================                              -->
                                <!-- start -->
   <!-- =============================================================================================  
                               -->
     <?php
     if(!empty($_REQUEST[id])){
        $id=$_REQUEST[id];
     $q=mysqli_query($con,"SELECT * FROM `job_category` where `id`='$id'");
     $a=mysqli_fetch_array($q);
     }
     ?>
<div class="form-group row">
    <label class="col-sm-2 "><b>Meta title:</b></label>
        <div class="col-sm-10">
         <input type="text" name="meta_title" id="meta_title" class="form-control   text-dark border-dark" autocomplete="off"  value="<?php echo $a[meta_title]?>">
        </div>
 </div>
 <div class="form-group row">
    <label class="col-sm-2 "><b>Meta keyword:</b></label>
        <div class="col-sm-10">
         <input type="text" name="meta_keyword" id="meta_keyword" class="form-control   text-dark border-dark" autocomplete="off"  value="<?php echo $a[meta_keyword]?>">
        </div>
 </div>
 <div class="form-group row">
    <label class="col-sm-2 "><b>Meta description:</b></label>
        <div class="col-sm-10">
            <input type="text" name="meta_description" id="meta_description" class="form-control   text-dark border-dark" autocomplete="off"  value="<?php echo $a[meta_description]?>">
            
        </div>
 </div>
 <div class="form-group row">
    <label class="col-sm-2 "><b>Category:<span class='text-danger'>*</span></b></label>
        <div class="col-sm-10">
         <input type="text" name="category" id="category" class="form-control   text-dark border-dark" autocomplete="off" required value="<?php echo $a[category]?>">
        </div>
 </div>
 <div class="form-group row">
    <label class="col-sm-2 "><b>Brief description:</b></label>
        <div class="col-sm-10">
            <textarea name="brief_description" id="brief_description" class="form-control   text-dark border-dark" autocomplete="off" ><?php echo $a[brief_description]?></textarea>
        </div>
 </div>
 <hr>

 <?php 
if($_REQUEST['action']=='View'){
    ?>
    <div class="col-sm-2 form-group">
    <button type="button" name="actionajax" value="" id="" class="btn btn-danger btn-sm  col form-group" onclick="window.history.back();" ><i class='fa fa-arrow-left'></i> Back</button>
</div>
    <?php
}
else if ( $_REQUEST['action']=='Edit') {
 ?>
 <input type="hidden" name="id" value="<?php echo $a[id]?>">
 <div class="row">
 <div class="col-sm-2 form-group">
    <button type="submit" name="actionajax" value="edit_catgory" id="save" class="btn btn-success btn-sm  col form-group" ><i class='fa fa-edit'></i> Update</button>
</div>
 <div class="col-sm-2 form-group">
    <button type="button" name="actionajax" value="" id="" class="btn btn-danger btn-sm  col form-group" onclick="window.history.back();" ><i class='fa fa-arrow-left'></i> Back</button>
</div>
</div>
<?php } 
else{
    ?>
     <div class="col-sm-2 form-group">
    <button type="submit" name="actionajax" value="save_catgory" id="save" class="btn btn-success btn-sm  col form-group" ><i class='fa fa-save'></i> Save</button>
</div>
    <?php
}
?>
   <!-- =============================================================================================                              -->
                                <!-- end -->
   <!-- =============================================================================================                              -->
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
<Script>
                  // --------------------
    CKEDITOR.replace( 'brief_description',{
        filebrowserUploadUrl:"upload.php"
    } );
</Script>
<?php 
include_once('footer.php');
?>