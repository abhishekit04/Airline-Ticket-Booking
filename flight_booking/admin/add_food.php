<?php
    session_start();
    include_once 'connect.php';
    include 'nav.php';
    $user_id = $_SESSION['user_id'];
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
                            <div class="header-title  h3 col-10"><?php echo $_REQUEST['action'] == '' ? 'Add' : $_REQUEST['action'] ?> Food:</div>
                            <div class="col-sm-2"><a href="javascript:void(0)" class=" btn  btn-sm btn-primary" data-toggle="modal" data-target="#myModal"  id=""  onclick="addflight()" ><i class="fa fa-pen"> </i> Add Food</a></div>
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
                 <th>Section</th>
                 <th>Image</th>
                 <th>Name</th>
                 <th>Price</th>
                 <th>Status</th>
                   <th>Action</th>
               </tr>
          </thead>
         <tbody class="text-dark">
            <?php

                $sno = 1;
                $q   = mysqli_query($con, "SELECT * FROM `food`");
                while ($a = mysqli_fetch_array($q)) {
                ?>
                <tr>
                <td><?php echo $sno++ ?></td>
                <td><?php echo $a['section'] ?></td>
                <td><img src="image/food/<?php echo $a[image]?>" alt="" srcset="" width='50'> </td>
                <td><?php echo $a['name'] ?></td>
                <td><?php echo $a['price'] ?></td>
                <td><?php echo $a['status']=='0'?'<a href="back.php?actionajax=food_status&status=1&id='.$a[id].'" class="btn  badge badge-success text-light ">Active':'<a href="back.php?actionajax=food_status&status=0&id='.$a[id].'" class=" badge badge-danger text-light ">Inactive'; ?></a></td>
                <td><a href="javascript:void(0)" id="<?php echo $a[section] . '@@@' . $a[name] . '@@@' . $a[price] . '@@@' . $a[id] ?>" class="fa fa-edit text-primary"  data-toggle="modal" data-target="#myModal" onclick='editdata(this.id)'> Edit</a>
                    <a href="back.php?actionajax=delete_food&id=<?php echo $a[id] ?>" id="" class="fa fa-trash text-danger" onclick='return confirm("Are you sure ?");'> Delete </a>
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
  <div class="modal-dialog modal-md">
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header bg-primary">
                <h4 class="modal-title text-white ">Food :</h4>
        <button type="button" class="close text-white" data-dismiss="modal" >&times;</button>
      </div>
      <div class="modal-body">
         <form method="post" autocomplete="off" action="back.php" id='divid'  enctype="multipart/form-data"  >
          <div class="row">
            <div class="col-sm-12  form-group">
   <label><b>Section:<span class='text-danger'>*</span></b></label>
   <select  name="section" id="section" class="form-control   text-dark border-primary" autocomplete="off" required>
    <option value="">Select</option>
    <option value="Veg Food">Veg Food</option>
    <option value="Non Veg Food">Non Veg Food</option>
    <option value="Fruits">Fruits</option>

   </select>
</div>
            <div class="col-sm-12  form-group">
   <label><b>Image:<span class='text-danger'>*</span></b></label>
 <input type="file" name="images" id="images" class="form-control   text-dark border-primary" autocomplete="off" >
</div>

<div class="col-sm-12  form-group">
    <label><b>Name<span class='text-danger'>*</span></b></label>
   <input type="text" name="name" id="name" class="form-control   text-dark border-primary" autocomplete="off" required>
</div>

<div class="col-sm-12  form-group">
    <label><b>Price<span class='text-danger'>*</span></b></label>
   <input type="text" name="price" id="price" class="form-control   text-dark border-primary" autocomplete="off" required>
</div>

<div class="col-sm-12  form-group d-none">
    <label><b>Id:<span class='text-danger'>*</span></b></label>
  <input type="text" name="id" id="id" class="form-control   text-dark border-primary" autocomplete="off" >
</div>


       </div>
       <!--  -->
      <div class="modal-footer " style="background: gray;">
               <button type="submit" name="actionajax" value="save_food" id="save"  class="btn btn-info btn-sm" ><span class="fa fa-save"></span> Save </button>
         <button type="submit" name="actionajax" value="update_food" id="edit" class="btn btn-success btn-sm" ><span class="fa fa-edit"></span> Update</button>
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

    $('#section').val(data[0]);
    $('#name').val(data[1]);
    $('#price').val(data[2]);
    $('#id').val(data[3]);
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
include_once 'footer.php';
?>