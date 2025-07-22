<?php include 'nav.php';
session_start();
include_once 'admin/connect.php';
?>

    <!-- Common Banner Area -->
    <section id="common_banner">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="common_bannner_text">
                        <h2>Customer dashboard</h2>
                        <ul>
                            <li><a href="index.php">Home</a></li>
                            <li><span><i class="fas fa-circle"></i></span>Customer dashboard</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- Dashboard Area -->
    <section id="dashboard_main_arae" class="section_padding">
        <div class="container">
            <div class="row">
                <?php include_once('admin_nav.php');?>
                <div class="col-lg-8">
                    <div class="dashboard_main_top">
                        <div class="row">
                            <div class="col-lg-6">
                            <?php
    $q=mysqli_query($con,"SELECT COUNT(booking.order_no) AS total FROM booking WHERE booking.cust_id='$_SESSION[id]' ");
    // $q=mysqli_query($con,"SELECT COUNT(booking.order_no) AS total FROM booking WHERE booking.cust_id='$_SESSION[id]' AND booking.`status`=3");
$a=mysqli_fetch_array($q);

    ?>
                                <div class="dashboard_top_boxed">
                                    <div class="dashboard_top_icon">
                                        <i class="fas fa-shopping-bag"></i>
                                    </div>
                                    <div class="dashboard_top_text">
                                        <h3>Total bookings</h3>
                                        <h1><?php echo $a['total']?></h1>
                                    </div>
                                </div>
                            </div>
                            <?php
    $q=mysqli_query($con,"SELECT COUNT(booking.order_no) AS total FROM booking WHERE booking.cust_id='$_SESSION[id]' AND booking.`status`=0");
$a=mysqli_fetch_array($q);
?>
                            <div class="col-lg-6">
                                <div class="dashboard_top_boxed">
                                    <div class="dashboard_top_icon">
                                        <i class="fas fa-sync"></i>
                                    </div>
                                    <div class="dashboard_top_text">
                                        <h3>Recent bookings</h3>
                                        <h1><?php echo $a['total']?></h1>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="dashboard_common_table">
                        <h3>My bookings</h3>
                        <div class="table-responsive-lg table_common_area">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>Sl no.</th>
                                        <th>Date</th>
                                        <th>Booking ID</th>
                                        <th>Flight</th>
                                        <th>Booking amount</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $sno=1;
                                      $q=mysqli_query($con,"SELECT
booking.date,booking.id,booking.order_no,flight.flight_name,booking.price,booking.`status` FROM booking INNER JOIN flight_details ON booking.flight_name=flight_details.id INNER JOIN flight ON flight_details.flight_name=flight.id WHERE booking.cust_id='$_SESSION[id]' order by id desc limit 5");
                                     while($a=mysqli_fetch_array($q)){
                                    ?>
                                    <tr>
                                        <td><?php echo $sno++?></td>
                                        <td><?php echo date('d M y',strtotime($a['date']));?></td>
                                        <td><?php echo $a['order_no']?></td>
                                        <td><?php echo $a['flight_name']?></td>
                                        <td >₹<?php echo $a['price']?></td>
                                        <td ><?php echo $a['status']!=0?'<b class="text-danger">Canceled </b>':'<b class="text-success">Complited</b>'; ?></td>

                                        <td><?php if($a['status']==0){ ?><a href="javascript:void(0)" class="  text-primary pay_data" id="<?php echo $a[id]?>" onclick='ticket(this.id);' title="Click for Ticket"> <i class="fa fa-ticket-alt">&#xf145; </i> </a> |
                                        <a href="back.php?actionajax=cancelbooking&id=<?php echo $a[id]?>" class="  text-danger pay_data" title="Cancel Booking" id="<?php echo $a[id]?>" onclick="return confirm('Are you sure?');"> <i class="fa fa-close ">&#xf00d</i> </a><?php } ?>

                                    </td>
                                    </tr>
                                     <?php } ?>

                                </tbody>
                            </table>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <script>
        function ticket(id){
            $.post('back.php','actionajax=ticketdata&id='+id,function(data){
                var r=JSON.parse(data);

                $('#pass_name1').html(r['name']);
                $('#flight1').html(r['flight_no']);
                $('#date1').html(r['date']);
                $('#form1').html(r['form']);
                $('#to1').html(r['to']);
                $('#time1').html(r['time']);
                $('#boading1').html(r['boading']);

                $('#pass_name2').html(r['name']);
                $('#flight2').html(r['flight_no']);
                $('#date2').html(r['date']);
                $('#form2').html(r['form']);
                $('#to2').html(r['to']);
                $('#time2').html(r['time']);
                $('#boading2').html(r['boading']);
                printDiv();
            })
          }
    </script>


    <div  class="container" id="printableArea" style="display:none ">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
   <link rel="stylesheet" href="assets/css/style.css">
   <link rel="stylesheet" href="assets/css/fontawesome.all.min.css" >
    <!-- Responsive css -->
    <link rel="stylesheet" href="assets/css/responsive.css">
    <div class="row">
        <div class="col-sm-8 border" >
            <div class="row">

                <div class="col-sm-4 bg-primary text-light pb-2"><i class="fas fa-plane-departure"></i> Flight</div>
                <div class="col-sm-4 bg-primary text-light pb-2">AIR TICKET</div>
                <div class="col-sm-4 bg-primary text-light pb-2">BOARDING PASS</div>
                <hr class="pb-2">
                <div class="col-sm-6"><h5> Name of the Passenger:</h5></div>
                <div class="col-sm-2"><h5> Flight No:</h5></div>
                <div class="col-sm-2"><h5> Date:</h5></div>
                <div class="col-sm-2"><h5> Zone:</h5></div>

                <div class="col-sm-6"><h5><b id='pass_name1'>Sachin Gantennavar</b></h5><br></div>
                <div class="col-sm-2"><p id='flight_no1'>#13245</p></div>
                <div class="col-sm-2"><p id='date1'>2025</p></div>
                <div class="col-sm-2"><p>A123</p></div>
                <div class="col-sm-12 pb-2"></div>

                <div class="col-sm-6"><h5>From:<b id='form1'>sasa</b></h5></div>
                <div class="col-sm-2"><h5>Gate:</h5></div>
                <div class="col-sm-2"><h5> Seat:</h5></div>
                <div class="col-sm-2"><h5> Time:</h5></div>

                <div class="col-sm-6 "><h5>To:<b id='to1'>sasa</b></h5></div>
                <div class="col-sm-2"><p>Aa125</p></div>
                <div class="col-sm-2"><p id='seat1'> 12</p></div>
                <div class="col-sm-2"><p id='time1'> 1012</p> <br></div>

                <div class="col-sm-6 pb-3 "><h5>Boarding Time: <b id='boading1'>sasa</b></h5><br><br><br></div>
                <div class="col-sm-4 "></div>
                <div class="col-sm-2 alight-right "><i class="fas fa-plane-departure fa-lg"></i></div>

                <div class="col-sm-12 pb-2 bg-primary"><br></div>


            </div>

        </div>
        <div class="col-sm-4 border">
       <div class="row">
        <div class="col-sm-12 bg-primary text-light pb-2 text-center">BOARDING PASS</div>
        <hr class="pb-2">
        <div class="col-sm-12"><h5> Name of the Passenger:</h5></div>
        <div class="col-sm-12 pb-3"><h5><b id='pass_name2'>Sachin Gantennavar </b></h5></div>
        <div class="col-sm-12"><h5>From:<b id='form2'>sasa</b></h5></div>
        <div class="col-sm-12 "><h5>To:<b id='to2'>sasa</b></h5></div>
        <div class="col-sm-3 "></div>
        <div class="col-sm-3 "><h5>Gate:</h5></div>
        <div class="col-sm-3 "><h5>Seat:</h5></div>
        <div class="col-sm-3 "><h5>Time:</h5></div>
        <div class="col-sm-3 "></div>
        <div class="col-sm-3 "><p>Aa125</p></div>
        <div class="col-sm-3 "><p id='seat2'>12313</p></div>
        <div class="col-sm-3"><p id='time2'>10:12</p></div>

        <div class="col-sm-3  pb-0"><i class="fas fa-plane-departure fa-lg"></i></div>
        <div class="col-sm-3 pb-0  text-primary"><h5>Date:</h5></div>
        <div class="col-sm-6  pb-0 text-primary"><h5>Boarding Time:</h5></div>
        <div class="col-sm-3 "></div>
        <div class="col-sm-3  text-primary "><h5 id='date2'>12/01/24</h5></div>
        <div class="col-sm-3  text-primary text-right pb-2"><h5 id='boading2'>10:12</h5><br></div>

        <div class="col-sm-12 pb-2 bg-primary"><br></div>
       </div>
        </div>
    </div>

</div>





    <script>
    function printDiv(divName) {
     var DocumentContainer = document.getElementById('printableArea');

            var WindowObject = window.open('', 'Completed Registration Form', 'width=7500,height=6500,top=50,left=50,toolbars=no,scrollbars=yes,status=no,resizable=yes');

      		 WindowObject.document.writeln(DocumentContainer.innerHTML);
            WindowObject.document.close();
            WindowObject.focus();
            WindowObject.print();
           WindowObject.close();

}</script>



    <?php include_once 'footer.php';?>