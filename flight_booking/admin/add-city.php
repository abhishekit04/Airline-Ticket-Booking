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
                            <div class="header-title  h3 col-10"><?php echo $_REQUEST['action']==''?'Add':$_REQUEST['action'] ?> Citys:</div>
                            <div class="col-sm-2"><a href="javascript:void(0)" class=" btn  btn-sm btn-primary" data-toggle="modal" data-target="#myModal"  id=""  onclick="addflight()" ><i class="fa fa-pen"> </i> Add Citys</a></div>
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
                 <th>City Name</th>
                   <th>Action</th>
               </tr>
          </thead>
         <tbody class="text-dark">
            <?php
          
            $sno=1;
            $q=mysqli_query($con,"SELECT * FROM `citys`");
            while($a=mysqli_fetch_array($q)){
                ?>
                <tr>
                <td><?php echo $sno++?></td>
                <td><?php echo $a['city'] ?></td>
                <td><a href="javascript:void(0)" id="<?php echo $a[city].'@@@'.$a[id]?>" class="fa fa-edit text-primary"  data-toggle="modal" data-target="#myModal" onclick='editdata(this.id)'> Edit</a>
                    <a href="back.php?actionajax=delete_city&id=<?php echo $a[id]?>" id="" class="fa fa-trash text-danger" onclick='return confirm("Are you sure ?");'> Delete </a>
            </td>
        </tr>
                <?php
            }
            ?>
              
         </tbody>
        
     </table>
 </div>
    <!-- end table -->

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
  <div class="modal-dialog modal-lg">
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header bg-primary">
                <h4 class="modal-title text-white ">City :</h4>
        <button type="button" class="close text-white" data-dismiss="modal" >&times;</button>
      </div>
      <div class="modal-body">
         <form method="post" autocomplete="off" action="back.php" id='divid'>
          <div class="row">
            <div class="col-sm-12  form-group">
   <label><b>City Name:<span class='text-danger'>*</span></b></label>
 <input type="text" name="city" id="city" class="form-control   text-dark border-primary" autocomplete="off" required>
</div>


<div class="col-sm-12  form-group d-none">
    <label><b>Id:<span class='text-danger'>*</span></b></label>
  <input type="text" name="id" id="id" class="form-control   text-dark border-primary" autocomplete="off" >
</div>


       </div>
       <!--  -->
      <div class="modal-footer " style="background: gray;">
               <button type="submit" name="actionajax" value="save_city" id="save"  class="btn btn-info btn-sm" ><span class="fa fa-save"></span> Save </button>
         <button type="submit" name="actionajax" value="update_city" id="edit" class="btn btn-success btn-sm" ><span class="fa fa-edit"></span> Update</button>
         <button type="button" class="btn btn-danger btn-sm" data-dismiss="modal"><span class="fa fa-times"></span> Close</button>
</div>
         </form>
      </div>

    </div>

</div>
 </div>
<!-- end model -->

<script type="text/javascript">
function editdata(id){
    var data=id.split('@@@');

    $('#city').val(data[0]);
 
    $('#id').val(data[1]);
    $('#edit').show();
    $('#save').hide();
}
function addflight(){
    $('#divid')[0].reset();
    $('#edit').hide();
    $('#save').show();
}
</script>
<?php 
include_once('footer.php');
?>