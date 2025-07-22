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
                            <div class="row">
                            <div class="header-title  h3 col-10"><?php echo $_REQUEST['action']==''?'Todays':$_REQUEST['action'] ?> Flight List:</div>
                            <!-- <div class="col-sm-2"><a href="javascript:void(0)" class=" btn  btn-sm btn-primary" data-toggle="modal" data-target="#myModal"  id=""  onclick="addflight()" ><i class="fa fa-pen"> </i> Add Citys</a></div> -->
                            </div>
                            <hr>

                              <div class="row1">
   <!-- =============================================================================================                              -->
                                <!-- start -->
   <!-- =============================================================================================  -->

    <!-- start table -->
    <div class="table-reponsive">
        <table class="table pagi_table table-bordered table-striped table-condensed table-hover table-sm "id="" >
            <thead class="btn-primary">
                <tr>
                   <th>Sno</th>
                 <th>Full Name</th>
                 <th>Email</th>
                 <th>Mobile</th>
                 <th>Passport</th>
                 <th>Seat No</th>
                   <th>Price</th>
               </tr>
          </thead>
         <tbody class="text-dark">
            <?php
          $date=date('Y-m-d');
            $sno=1;
            $q=mysqli_query($con,"SELECT * FROM `booking` WHERE `flight_name`='$_REQUEST[fd]'");
            while($a=mysqli_fetch_array($q)){

                ?>
                <tr>
                <td><?php echo $sno++?></td>
                <td><?php echo $a['first_name'].' '.$a[last_name] ?></td>
                <td><?php echo $a[email] ?></td>
                <td><?php echo $a[mobile]?></td>
                <td><?php echo $a[passport] ?></td>
                <td><?php echo $a['seat_no'] ?></td>
                <td>₹ <?php echo $a['price'] ?></td>

            </td>
        </tr>
                <?php
            }
            ?>

         </tbody>

     </table>
 </div>
    <!-- end table -->
     <hr>
<button type="button" class=" btn-danger btn" onclick="window.history.back();"><i class="fa fa-left-arrow"></i> Back</button>
    <!--Table script-->
    <script type="text/javascript">$(document).ready(function() { $(".pagi_table").DataTable();} );</script>
   <!-- =============================================================================================                              -->
                                <!-- end -->
   <!-- =============================================================================================                              -->
                            </div>

                    </div>
                </div>
            </div>
        </div>
        <!-- end row -->
    </div> <!-- container-fluid -->
</div>
<!-- End Page-content -->

<!-- Start model -->
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog modal-md">
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header bg-primary">
                <h4 class="modal-title text-white ">Issue :</h4>
        <button type="button" class="close text-white" data-dismiss="modal" >&times;</button>
      </div>
      <div class="modal-body">
         <form method="post" autocomplete="off" action="back.php">
          <div class="row">
            <div class="col-sm-12  form-group">
   <label><b>Delay Time <small>:</small><span class='text-danger'>*</span></b></label>
    <input type="number" name="time" id="time" class="form-control   text-dark border-primary" autocomplete="off" required placeholder="Enter time in min">
</div>

<div class="col-sm-12  form-group d-none">
 <label><b>Id:<span class='text-danger'>*</span></b></label>
  <input type="text" name="id" id="id" class="form-control   text-dark border-dark" autocomplete="off" >
  <input type="text" name="time1" id="time1" class="form-control   text-dark border-dark" autocomplete="off" >
  <input type="text" name="time2" id="time2" class="form-control   text-dark border-dark" autocomplete="off" >
</div>


       </div>
       <!--  -->
      <div class="modal-footer " style="background: gray;">
               <button type="submit" name="actionajax" id="save" value="flight_issue"  class="btn btn-info btn-sm" ><span class="fa fa-save"></span> Save </button>
         <button type="button" class="btn btn-danger btn-sm" data-dismiss="modal"><span class="fa fa-times"></span> Close</button>
</div>
        </form>
      </div>

    </div>

</div>
 </div>
<!-- end model -->

<script type="text/javascript">
function issue(id){
    let s=id.split('@@@');
    $('#id').val(s[0]);
    $('#time1').val(s[1]);
    $('#time2').val(s[2]);
}
</script>

<?php
include_once('footer.php');
?>