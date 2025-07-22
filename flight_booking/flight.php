<?php include 'nav.php';
session_start();
include_once 'admin/connect.php';
?>
<script src="auto_input_text/jquery.min.js"></script>
<link rel="stylesheet" href="auto_input_text/jquery-ui.css" />
<script src="auto_input_text/jquery-ui.min.js"></script>
    <!-- Common Banner Area -->
    <section id="common_banner">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="common_bannner_text">
                        <h2>Flight search result</h2>
                        <ul>
                            <li><a href="index.php">Home</a></li>
                            <li><span><i class="fas fa-circle"></i></span> Flight search result</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Form Area -->
    <section id="theme_search_form_tour">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="theme_search_form_area">
                        <div class="theme_search_form_tabbtn">
                            <ul class="nav nav-tabs" role="tablist">
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link active" id="flights-tab" data-bs-toggle="tab"
                                        data-bs-target="#flights" type="button" role="tab" aria-controls="flights"
                                        aria-selected="true"><i class="fas fa-plane-departure"></i>Flights</button>
                                </li>


                            </ul>
                        </div>
                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active" id="flights" role="tabpanel"
                                aria-labelledby="flights-tab">
                                <div class="row">
                                <div class="col-lg-12">
                                        <div class="flight_categories_search">
                                            <ul class="nav nav-tabs" role="tablist">
                                                <li class="nav-item" role="presentation">
                                                    <button class="nav-link active" id="oneway-tab" data-bs-toggle="tab"
                                                        data-bs-target="#oneway_flight" type="button" role="tab"
                                                        aria-controls="oneway_flight" aria-selected="true" onclick="$('#return').hide()">One
                                                        Way</button>
                                                </li>
                                                <li class="nav-item" role="presentation">
                                                    <button class="nav-link" id="roundtrip-tab" data-bs-toggle="tab"
                                                        data-bs-target="#roundtrip" type="button" role="tab"
                                                        aria-controls="roundtrip"
                                                        aria-selected="false" onclick="$('#return').show()">Roundtrip</button>
                                                </li>

                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-content" id="myTabContent1">
                                    <div class="tab-pane fade show active" id="oneway_flight" role="tabpanel"
                                        aria-labelledby="oneway-tab">
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <div class="oneway_search_form">
                                                    <form  method="post">
                                                        <div class="row">
                                                            <div class="col-lg-3 col-md-6 col-sm-12 col-12">
                                                                <div class="flight_Search_boxed">
                                                                    <p>From</p>
                                                                    <input type="text" value="<?php echo $_POST[from_city]?>" name="from_city" id="from_city"  placeholder="Select" >
                                                                    <span>Enter a departure Place</span>
                                                                    <div class="plan_icon_posation">
                                                                        <i class="fas fa-plane-departure"></i>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="col-lg-3 col-md-6 col-sm-12 col-12">
                                                                <div class="flight_Search_boxed">
                                                                    <p>To</p>
                                                                    <input type="text"  name="to_city" id="to_city" placeholder="Select"  value="<?php echo $_POST[to_city]?>" >
                                                                    <span>Enter a Arrivel Place</span>
                                                                    <div class="plan_icon_posation">
                                                                        <i class="fas fa-plane-arrival"></i>
                                                                    </div>
                                                                    <div class="range_plan">
                                                                        <i class="fas fa-exchange-alt"></i>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-4 col-md-6 col-sm-12 col-12">
                                                                <div class="form_search_date">
                                                                    <div class="flight_Search_boxed date_flex_area">
                                                                        <div class="Journey_date">
                                                                            <p>Journey date</p>
                                                                            <input type="date" name="journey_date" id="journey_date"  placeholder="Enter Date" value="<?php echo $_POST[journey_date]?>" min="" />
                                                                            <span>Enter a Departure Date</span>
                                                                           
                                                                        </div>
                                                                        <div class="Journey_date" id='return' style="display:none">
                                                                            <p>Return date</p>
                                                                            <input type="date"  name="return_date" id="return_date" placeholder="Enter Date">
                                                                            <span>Enter a Return Date</span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <!-- java script  start -->
                                                            <Script>
                                                                const today= new Date().toISOString().split("T")[0];
                                                                document.getElementById("journey_date").setAttribute("min" , today);
                                                                </script>
                                                                 <!-- java script  end -->
                                                            <div class="col-lg-2 col-md-6 col-sm-12 col-12">
                                                                <div class="form_search_date">
                                                                    <div class="flight_Search_boxed date_flex_area">
                                                                        <div class="Journey_date">
                                                                            <p>Passenger,</p>
                                                                            <input type="text" name="pass_no" id="pass_no" placeholder=" Passenger" value="<?php echo $_REQUEST[pass_no]?>" >
                                                                            <span>Enter No. of Passenger</span>
                                                                        </div>

                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="top_form_search_button">
                                                                <button type="submit" name="search_flight" class="btn btn_theme btn_md">Search</button>
                                                            </div>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <script>
                                $('#from_city').autocomplete({
                                    // appendTo:'#myModal1', //enter modal id
                                    source:function(request,reponse){
                                        $.ajax({
                                            url:'back.php',
                                            type:'post',
                                            data:{
                                                value:request.term,
                                                actionajax:'find_place',
                                            },
                                            dataType:'json',
                                            success:function(data){
                                                reponse(data);
                                                return;
                                            }
                                        })
                                    },
                                    close:function(){
                                        //stock1();
                                    }
                                    });

                                    $('#to_city').autocomplete({
                                    // appendTo:'#myModal1', //enter modal id
                                    source:function(request,reponse){
                                        $.ajax({
                                            url:'back.php',
                                            type:'post',
                                            data:{
                                                value:request.term,
                                                actionajax:'find_place',
                                            },
                                            dataType:'json',
                                            success:function(data){
                                                reponse(data);
                                                return;
                                            }
                                        })
                                    },
                                    close:function(){
                                        //stock1();
                                    }
                                    });
                                    </script>
                                  

                                </div>
                            </div>



                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Flight Search Areas -->
    <section id="explore_area" class="section_padding">
        <div class="container">
            <!-- Section Heading -->
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                    <div class="section_heading_center">
                        <h2>Todays Flight List</h2>
                    </div>
                </div>
            </div>
            <div class="row">

                <div class="col-lg-12">
                    <div class="row">
                        <div class="col-sm-2"></div>
                        <div class="col-lg-9">
                        <?php
                        if(!isset($_POST['search_flight'])){
                            $f1=mysqli_query($con,"SELECT `id` as form_cityid FROM `citys` WHERE `city`='$_POST[from_city]'");
                            $f2=mysqli_query($con,"SELECT `id`as to_cityid FROM `citys` WHERE `city`='$_POST[to_city]'");
                            $f=mysqli_fetch_array($f1);
                            $t=mysqli_fetch_array($f2);

                            $q=mysqli_query($con,"SELECT flight.flight_name,flight_details.id,flight_details.arrivel,flight_details.time1,flight_details.form,flight_details.departure,flight_details.time2,flight_details.`to` as to1,flight_details.duration,flight_details.price FROM flight_details INNER JOIN flight ON flight_details.flight_name=flight.id  where flight_details.form='1' and flight_details.to='2' and flight_details.status='0' order by flight_details.time1 asc ");
                        }
                        else{
          $date=date('Y-m-d');

            $q=mysqli_query($con,"SELECT flight.flight_name,flight_details.id,flight_details.arrivel,flight_details.time1,flight_details.form,flight_details.departure,flight_details.time2,flight_details.`to` as to1,flight_details.duration,flight_details.price FROM flight_details INNER JOIN flight ON flight_details.flight_name=flight.id  where flight_details.departure='$date' and flight_details.status='0' order by flight_details.time1 asc ");
                        }
            while($a=mysqli_fetch_array($q)){

                $f1=mysqli_query($con,"SELECT `city`as form FROM `citys` WHERE `id`='$a[form]'");
                $f2=mysqli_query($con,"SELECT `city`as to_place FROM `citys` WHERE `id`='$a[to1]'");
                $f=mysqli_fetch_array($f1);
                $t=mysqli_fetch_array($f2);

                ?>
                            <!-- start -->
                            <div class="flight_search_result_wrapper">

                                <div class="flight_search_item_wrappper">
                                    <div class="flight_search_items">
                                        <div class="multi_city_flight_lists">
                                            <h5 class="airlineName fw-500">&nbsp &nbsp <?php echo $a[flight_name]?>
                                </h5>
                                            <div class="flight_multis_area_wrapper">
                                                <div class="flight_search_left">
                                                    <div class="flight_logo">
                                                        <!-- <img src="assets/img/common/biman_bangla.png" alt="img"> -->

                                                    </div>
                                                    <div class="flight_search_destination">
                                                        <p>From</p>
                                                        <h3><?php echo $f['form']?></h3>
                                                        <h6><?php echo date('d M Y h:i A',strtotime($a['departure'].$a[time1]));?>.</h6>
                                                    </div>
                                                </div>
                                                <div class="flight_search_middel">
                                                    <div class="flight_right_arrow">
                                                        <img src="assets/img/icon/right_arrow.png" alt="icon">
                                                        <h6>Non-stop</h6>
                                                        <p><?php echo $a['duration']?> </p>
                                                    </div>
                                                    <div class="flight_search_destination">
                                                        <p>To</p>
                                                        <h3><?php echo $t['to_place']?></h3>
                                                        <h6><?php echo date('d M Y h:i A',strtotime($a['arrivel'].$a[time2]));?>.</h6>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                        <div class="flight_search_right">

                                            <h2>₹ <?php echo $a[price] ?></h2>

                                              <?php if(isset($_POST['search_flight']) && !empty($_SESSION['id'])  ){ ?>
                                            <a href="flight_booking.php?id=<?php echo $a[id]?>&pass=<?php echo $_REQUEST[pass_no]?>" class="btn btn_theme btn_sm">Book
                                                now</a>
                                                <?php }

                                                if(empty($_SESSION['id'])){
                                                    ?>
                                                    <a href="login.php" class="btn btn_theme btn_sm">Login/Register</a>
                                                    <?php
                                                } ?>

                                            <!-- <p>*Discount applicable on some conditions</p> -->
                                            <p>Have a woonderful Journey</p>

                                        </div>
                                    </div>

                                </div>

                            </div>
                                    <!-- end -->
                                     <?php } ?>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


 <?php include_once 'footer.php';?>