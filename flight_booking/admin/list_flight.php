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
                            <div class="header-title  h3 col-10"><?php echo $_REQUEST['action']==''?'Add':$_REQUEST['action'] ?> Flight List:</div>
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
                 <th>Flight Name</th>
                   <th>Arived</th>
                   <th>From</th>
                   <th>Departure</th>
                   <th>To</th>
                   <th>Action</th>
               </tr>
          </thead>
         <tbody class="text-dark">
            <?php

            $sno=1;
            $q=mysqli_query($con,"SELECT flight.flight_name,flight_details.id,flight_details.arrivel,flight_details.time1,flight_details.form,flight_details.departure,flight_details.time2,flight_details.`to` as to1,flight_details.duration,flight_details.price FROM flight_details INNER JOIN flight ON flight_details.flight_name=flight.id and flight_details.status=0 order by flight_details.id desc");
            while($a=mysqli_fetch_array($q)){

                $f1=mysqli_query($con,"SELECT `city`as form FROM `citys` WHERE `id`='$a[form]'");
                $f2=mysqli_query($con,"SELECT `city`as to_place FROM `citys` WHERE `id`='$a[to1]'");
                $f=mysqli_fetch_array($f1);
                $t=mysqli_fetch_array($f2);

                ?>
                <tr>
                <td><?php echo $sno++?></td>
                <td><?php echo $a['flight_name'] ?></td>
                <td><?php echo date('d-m-Y h:m:a',strtotime($a['arrivel'].$a[time1] ))?></td>
                <td><?php echo $f['form'] ?></td>
                <td><?php echo date('d-m-Y h:m:a',strtotime($a['departure'].$a[time2])) ?></td>
                <td><?php echo $t['to_place'] ?></td>
                <td><a href="flight_details.php?id=<?php echo $a[id]?>&page=Edit" id="<?php echo $a[city].'@@@'.$a[id]?>" class="fa fa-edit text-primary"   > Edit</a>
                    <a href="back.php?actionajax=delete_flight_details&id=<?php echo $a[id]?>" id="" class="fa fa-trash text-danger" onclick='return confirm("Are you sure ?");'> Delete </a>
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


<?php
include_once('footer.php');
?>