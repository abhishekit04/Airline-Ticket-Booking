<?php
include_once('nav.php');
include_once('connect.php');
session_start();
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
                                    <h4 class="mb-0 font-size-18">Dashboard</h4>
                                    <!-- <div class="page-title-right">
                                        <ol class="breadcrumb m-0">
                                            <li class="breadcrumb-item"><a href="javascript: void(0);">Apaxy</a></li>
                                            <li class="breadcrumb-item active">Dashboard</li>
                                        </ol>
                                    </div> -->
                                </div>
                            </div>
                        </div>
                        <!-- end page title -->
                        <div class="row">
                            <div class="col-sm-6 col-xl-4">
                                <div class="card" style="background: #0b83e9">
                                    <div class="card-body">
                                        <div class="media">
                                            <div class="media-body">
                                                <h5 class="font-size-14 text-light">Todays Flight</h5>
                                            </div>
                                            <div class="avatar-xs">
                                                <span class="avatar-title rounded-circle bg-primary">
                                                    <i class="fa fa-users"></i>
                                                </span>
                                            </div>
                                        </div>
                                        <?php
                                        $date=date('Y-m-d');
                                         $q=mysqli_query($con,"SELECT COUNT(*) AS enquiry FROM `flight_details` where `departure`='$date'");
                                                $a=mysqli_fetch_array($q);
                                        ?>
                                        <h4 class="m-0 align-self-center text-light"><?php echo $a['enquiry']; ?></h4>
                                        <p class="mb-0 mt-3 text-muted"><span class="text-success"><!-- <i class="mdi mdi-trending-up mr-1"></i></span> -->&nbsp </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-xl-4">
                                <div class="card" style="background: #ca1212">
                                    <div class="card-body">
                                        <div class="media">
                                            <div class="media-body">
                                                <h5 class="font-size-14 text-light">Departed Flight</h5>
                                            </div>
                                            <div class="avatar-xs">
                                                <span class="avatar-title rounded-circle bg-primary">
                                                    <i class="mdi mdi-account-multiple-plus-outline"></i>
                                                </span>
                                            </div>
                                        </div>
                                         <?php
                                          $date=date('Y-m-d');
                                         $q=mysqli_query($con,"SELECT COUNT(*) AS student FROM flight_details  where `departure`='$date' and `status`=2");
                                                $a=mysqli_fetch_array($q);
                                        ?>
                                        <h4 class="m-0 align-self-center text-light"><?php echo $a['student']; ?></h4>
                                        <p class="mb-0 mt-3 text-muted"><span class="text-success"><!-- <i class="mdi mdi-trending-up mr-1"></i></span> --> &nbsp </p>
                                    </div>
                                </div>
                            </div>
                        <div class="col-sm-6 col-xl-4">
                                <div class="card" style="background: #0cca3e">
                                    <div class="card-body">
                                        <div class="media">
                                            <div class="media-body">
                                                <h5 class="font-size-14 text-light">Flight Arivel</h5>
                                            </div>
                                            <div class="avatar-xs">
                                                <span class="avatar-title rounded-circle bg-primary">
                                                    <i class="mdi mdi-cowboy"></i>
                                                </span>
                                            </div>
                                        </div>
                                        <?php
                                       $date=date('Y-m-d');
                                       $q=mysqli_query($con,"SELECT COUNT(*) as staff FROM `flight_details` where `departure`='$date' and `status`=3 " );
                                                $a=mysqli_fetch_array($q);
                                       ?>
                                     <h4 class="m-0 align-self-center text-light"><?php echo $a['staff']; ?></h4>
                                        <p class="mb-0 mt-3 text-muted"><span class="text-danger"> </span> &nbsp</p>
                                    </div>
                                </div>
                            </div>
                           <!--  <div class="col-sm-6 col-xl-3">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="media">
                                            <div class="media-body">
                                                <h5 class="font-size-14">Reminder</h5>
                                            </div>
                                            <div class="avatar-xs">
                                                <span class="avatar-title rounded-circle bg-primary">
                                                    <i class="mdi mdi-message-text-clock-outline"></i>
                                                </span>
                                            </div>
                                        </div>
                                        <?php
                                        $date=date('Y-m-d');
                                         $q=mysqli_query($con,"SELECT COUNT(`id`) as num FROM `reminder` WHERE `date`<='$date' and `user_id`='$user_id'");
                                                $a=mysqli_fetch_array($q);
                                        ?>
                                        <h4 class="m-0 align-self-center"><?php echo $a['num']; ?></h4>
                                        <p class="mb-0 mt-3 text-muted"><span class="text-success"><i class="mdi mdi-trending-up mr-1"></i></span>&nbsp </p>
                                    </div>
                                </div>
                            </div> -->
                        </div>
                        <!-- end row -->
                        <center>
                        <img src="image/logo/<?php echo $a1[admin_logo]?>" class="img-thumbnail">
                    </center>
                        <!-- end row -->
                    </div> <!-- container-fluid -->
                </div>
                <!-- End Page-content -->
                <?php/*
                $date=date('Y-m-d');
                 $year=date('Y');
 $a1=$a2=$a3=$a4=$a5=$a6=$a7=$a8=$a9=$a10=$a11=$a12=0;
                $q=mysqli_query($con,"SELECT SUM(`paid`)AS paid,month(`date`) AS month FROM `student_fee` WHERE year('$date') GROUP BY month(`date`)");
                   while($a=mysqli_fetch_array($q)){
                                 $month="a".$a['month'];
                                $$month=$a['paid'];
                                }
               */ ?>
              <?php
              include_once('footer.php');
              ?>
          <script type="text/javascript">
              //----------add script-------
              $(document).ready(function(){
                  $('.search').on('keyup',function(){
                      var searchTerm = $(this).val().toLowerCase();
                      $('#table tbody tr').each(function(){
                          var lineStr = $(this).text().toLowerCase();
                          if(lineStr.indexOf(searchTerm) === -1){
                              $(this).hide();
                          }else{
                              $(this).show();
                          }
                      });
                  });
              });
              //----------end script--------
              // add in script
     if($("#coloum_chart").length){options={chart:{height:350,type:"bar",toolbar:{show:!1}},plotOptions:{bar:{dataLabels:{position:"top"}}},dataLabels:{enabled:!0,formatter:function(e){return e+" "},offsetY:-20,style:{fontSize:"12px",colors:["#304758"]}},series:[{name:"Fees",data:[<?php echo $a1.','.$a2.','.$a3.','.$a4.','.$a5.','.$a6.','.$a7.','.$a8.','.$a9.','.$a10.','.$a11.','.$a12;?>]}],colors:["#0b83e9"],grid:{borderColor:"#f1f1f1"},xaxis:{categories:["Jan","Feb","Mar","Apr","May","Jun","Jul","Aug","Sep","Oct","Nov","Dec"],position:"top",labels:{offsetY:-18},axisBorder:{show:!1},axisTicks:{show:!1},crosshairs:{fill:{type:"gradient",gradient:{colorFrom:"#D8E3F0",colorTo:"#BED1E6",stops:[0,100],opacityFrom:.4,opacityTo:.5}}},tooltip:{enabled:!0,offsetY:-35}},fill:{gradient:{shade:"light",type:"horizontal",shadeIntensity:.25,gradientToColors:void 0,inverseColors:!0,opacityFrom:1,opacityTo:1,stops:[50,0,100,100]}},yaxis:{axisBorder:{show:!1},axisTicks:{show:!1},labels:{show:!1,formatter:function(e){return e+""}}},title:{text:"Months Fees <?php echo $year?>",floating:!0,offsetY:320,align:"center",style:{color:"#444"}}};(chart=new ApexCharts(document.querySelector("#coloum_chart"),options)).render()}
     // end script
</script>