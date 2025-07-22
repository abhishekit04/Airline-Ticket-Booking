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
                            <div class="header-title mb-4 h3"><?php echo $_REQUEST['page']=='Edit'?'Edit':'Add' ?> Flight Details:</div>
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
     $q=mysqli_query($con,"SELECT * FROM `flight_details` where `id`='$id'");
     $a=mysqli_fetch_array($q);
     }
     ?>
<div class="form-group row">
    <label class="col-sm-2 "><b>Flight Name:<span class='text-danger'>*</span></b></label>
        <div class="col-sm-10">
            <select name="flight_name" id="flight_name" class="form-control   text-dark border-primary" autocomplete="off" required >
                <option value="">Select Flight</option>
                <?php
                $f=mysqli_query($con,"SELECT * FROM `flight`");
                while($f1=mysqli_fetch_array($f)){
                    ?>
                    <option value="<?php echo $f1[id]?>" <?php echo $f1[id]==$a[flight_name]?'Selected':'' ?>><?php echo $f1[flight_name]?></option>
                    <?php
                }
                ?>

            </select>

        </div>
 </div>
 <div class="form-group row">
    <label class="col-sm-2 "><b>Departure:<span class='text-danger'>*</span></b></label>
        <div class="col-sm-10">
         <input type="date" name="departure" id="departure" class="form-control   text-dark border-primary" autocomplete="off" required value="<?php echo $a['departure']?>">
        </div>
 </div>

 <div class="form-group row">
    <label class="col-sm-2 "><b>Time:<span class='text-danger'>*</span></b></label>
        <div class="col-sm-10">
         <input type="time" name="time2" id="time2" class="form-control   text-dark border-primary" autocomplete="off" required value="<?php echo $a['time2']?>">
        </div>
 </div>


 <div class="form-group row">
    <label class="col-sm-2 "><b>Form:<span class='text-danger'>*</span></b></label>
        <div class="col-sm-10">

            <select name="form" id="form" class="form-control   text-dark border-primary" autocomplete="off" required onchange ="check()">
                <option value="">Select City</option>
                <?php
                $f=mysqli_query($con,"SELECT * FROM `citys`");
                while($f1=mysqli_fetch_array($f)){
                    ?>
                    <option value="<?php echo $f1[id]?>" <?php echo $f1[id]==$a[form]?'Selected':'' ?>><?php echo $f1[city]?></option>
                    <?php
                }
                ?>

            </select>
        </div>
 </div>
 <div class="form-group row">
    <label class="col-sm-2 "><b>Arrivel:<span class='text-danger'>*</span></b></label>
        <div class="col-sm-10">

         <input type="date" name="arrivel" id="arrivel" class="form-control   text-dark border-primary" autocomplete="off" required value="<?php echo $a['arrivel']?>">
        </div>
 </div>

 <div class="form-group row">
    <label class="col-sm-2 "><b>Time:<span class='text-danger'>*</span></b></label>
        <div class="col-sm-10">
         <input type="time" name="time1" id="time1" class="form-control   text-dark border-primary" autocomplete="off" required value="<?php echo $a['time1']?>">
        </div>
 </div>


 <div class="form-group row">
    <label class="col-sm-2 "><b>To:<span class='text-danger'>*</span></b></label>
        <div class="col-sm-10">
           <select name="to" id="to" class="form-control   text-dark border-primary" autocomplete="off" required  onchange ="check()">
                <option value="">Select City</option>
                <?php
                $f=mysqli_query($con,"SELECT * FROM `citys`");
                while($f1=mysqli_fetch_array($f)){
                    ?>
                    <option value="<?php echo $f1[id]?>" <?php echo $f1[id]==$a[to]?'Selected':'' ?>><?php echo $f1[city]?></option>
                    <?php
                }
                ?>

            </select>
        </div>
 </div>

 <div class="form-group row">
    <label class="col-sm-2 "><b>Duration:<span class='text-danger'>*</span></b></label>
        <div class="col-sm-10">
         <input type="text" name="duration" id="duration" class="form-control   text-dark border-primary" autocomplete="off" required value="<?php echo $a['duration']?>">
        </div>
 </div>

 <div class="form-group row">
    <label class="col-sm-2 "><b>Price :<span class='text-danger'>*</span></b></label>
        <div class="col-sm-10">
         <input type="text" name="price" id="price" class="form-control   text-dark border-primary" autocomplete="off" required value="<?php echo $a['price']?>" >
        </div>
 </div>


 <hr>

 <?php
if ( $_REQUEST['page']=='Edit') {
 ?>
 <input type="hidden" name="id" value="<?php echo $a[id]?>">
 <div class="row">
 <div class="col-sm-2 form-group">
    <button type="submit" name="actionajax" value="edit_flight_details" id="save" class="btn btn-success btn-sm  col form-group" ><i class='fa fa-edit'></i> Update</button>
</div>
 <div class="col-sm-2 form-group">
    <button type="button" name="actionajax" value="" id="" class="btn btn-danger btn-sm  col form-group" onclick="window.history.back();" ><i class='fa fa-arrow-left'></i> Back</button>
</div>
</div>
<?php }
else{
    ?>
     <div class="col-sm-2 form-group">
    <button type="submit" name="actionajax" value="save_flight_details" id="save" class="btn btn-success btn-sm  col form-group" ><i class='fa fa-save'></i> Save</button>
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

function check(){
    if($('#form').val()==$('#to').val()){
        alert('Source and Destination are same');
        $('#form').val(null);
        $('#to').val(null);
    }

}




</Script>
<?php
include_once('footer.php');
?>