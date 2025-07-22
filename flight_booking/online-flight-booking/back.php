<?php
session_start();
include_once 'admin/connect.php';

switch ($_REQUEST['actionajax']) {
    // ===============================================================================================
    case 'find_place':
        $data = [];
        //  $product=trim($_POST["value"]);
        $product = "b";

        $sql = mysqli_query($con, "SELECT `id`, `city` FROM `citys` where  (`city` like '$product%' or `city` like '%$product%') order by `city` asc ");
        echo mysqli_error($con);
        while ($q = mysqli_fetch_array($sql)) {
            $data[] = $q['city'];
        }
        echo json_encode($data);

        break;
// ===============================================================================================
    // customer details
    // ===============================================================================================
    case 'cust_register':
        $first_name = $_POST['first_name'];
        $last_name  = $_POST['last_name'];
        $email      = $_POST['email'];
        $mobile     = $_POST['mobile'];
        $password   = $_POST['password'];

        $q = mysqli_query($con, "SELECT * FROM `register` WHERE `email`='$email'");
        if (mysqli_num_rows($q) > 0) {
            echo "<script>alert('This email is alread Registerd'); window.location.href='register.php';</script>";
        } else {
            $q = mysqli_query($con, "INSERT INTO `register`( `first_name`, `last_name`, `email`, `mobile`, `password`) VALUES ('$first_name','$last_name','$email','$mobile','$password')");
            if ($q) {
                echo "<script>alert('Register is successfully.'); window.location.href='login.php';</script>";
            }
        }

        break;
    // ---------------------------------------------------------------------------------------------
    // login
    case 'booking_conf':

        $flight_id = $_POST['flight_id'];
        $pass      = $_POST['pass'];
        $price      = $_POST['price'];

        $s1 = mysqli_query($con, "SELECT flight.seats FROM flight_details INNER JOIN flight ON flight_details.flight_name=flight.id WHERE flight_details.id='$flight_id'");
        $a1= mysqli_fetch_array($s1);
        $s2 = mysqli_query($con, "SELECT COUNT(*)as count_seat FROM `booking` WHERE `flight_name`='$flight_id'");
        $a2= mysqli_fetch_array($s2);
        echo $a2['count_seat'].'<br>';
        echo $a1['seats'].'<br>';
        echo $pass.'<br>';
        if($a1['seats']>($a2['count_seat']+$pass)){

        for ($i = 1; $i <= $pass; $i++) {
            $first_name = $_POST['first_name'.$i];
            $last_name  = $_POST['last_name'.$i];
            $email      = $_POST['email'.$i];
            $mobile     = $_POST['mobile'.$i];
            $address    = $_POST['address'.$i];
            $passport   = $_POST['passport'.$i];
            $visa       = $_POST['visa'.$i];



            $s= mysqli_query($con, "SELECT `seat_no` FROM `booking` WHERE `flight_name`='$flight_id' ORDER by id DESC");

            $s5= mysqli_query($con, "SELECT `order_no` FROM `booking`   ORDER by id DESC limit 1");
            $d=mysqli_fetch_array($s5);
            if(empty($order_no)){
                $last_code=$d["order_no"];
                if(empty($last_code)){
                      $order_no="Bid-0000001";
                }
                else{
                      $idd=str_replace("Bid-","",$last_code);
                      $id1=str_pad($idd + 1,7,0,STR_PAD_LEFT);
                      $order_no="Bid-".$id1;
                }
            }

            if ( mysqli_num_rows($s)> 0) {
                $a3=mysqli_fetch_array($s);
                $seat_no=$a3['seat_no']+1;

            } else {
                $seat_no=1;

            }
            $insert=mysqli_query($con,"INSERT INTO `booking`(  `flight_name`, `order_no`, `first_name`, `Last_name`, `email`, `mobile`, `address`, `passport`, `visa`, `seat_no`,`price`,`cust_id`) VALUES ('$flight_id','$order_no','$first_name','$last_name','$email','$mobile','$address','$passport','$visa','$seat_no','$price','$_SESSION[id]')");

        }
        if($insert){
            ?>
            <script> alert('Flight is Booked Successfully');  window.location.href="booking_confirmation.php?order_id=<?php echo $order_no ?>";</script>
            <?php
        }
    }
        else{
            echo "<script> alert('No Seat Avaiable'); window.open('flight.php','_self');</script>";

        }

        break;
// ===============================================================================================
// profile update
// ===============================================================================================
case 'profile_update':
    $first_name=$_POST['first_name'];
    $last_name=$_POST['last_name'];
    $email=$_POST['email'];
    $mobile=$_POST['mobile'];
  $q=mysqli_query($con,"UPDATE `register` SET `first_name`='$first_name',`last_name`='$last_name',`email`='$email',`mobile`='$mobile' Where `id`='$_SESSION[id]'");
  if($q){
    echo"<script>
    alert('Saved Successfully');
    window.location.href='my_profile.php';
</script>";
  }
    break;
    // ---------------------------------------------------------------
case 'profile_password':
    $old_password=$_POST['old_password'];
    $new_password=$_POST['new_password'];

  $q=mysqli_query($con,"SELECT * FROM `register` WHERE `password`='$old_password' and `id`='$_SESSION[id]'");
  if(mysqli_num_rows($q)>0){
    $q1=mysqli_query($con,"UPDATE `register` SET `password`='$new_password' WHERE`id`='$_SESSION[id]'");

  if($q1){
    echo"<script>
    alert('Saved Successfully');
    window.location.href='my_profile.php';
</script>";
  }
}else{
    echo"<script>
    alert('Old Password Not match');
    window.location.href='my_profile.php';
</script>";
}
    break;
// ===============================================================================================
// ticket data

case 'ticketdata':
    $q=mysqli_query($con,"SELECT booking.order_no,booking.first_name,booking.Last_name,booking.seat_no,flight_details.departure,flight_details.time2,flight_details.`to`,flight.flight_no,flight.flight_name,flight_details.form FROM booking INNER JOIN flight_details ON booking.flight_name=flight_details.id INNER JOIN flight ON flight_details.flight_name=flight.id WHERE booking.id='$_REQUEST[id]'");

    $a=mysqli_fetch_array($q);

    $f1=mysqli_query($con,"SELECT `city`as form FROM `citys` WHERE `id`='$a[form]'");
    $f2=mysqli_query($con,"SELECT `city`as to_place FROM `citys` WHERE `id`='$a[to]'");
    $a1=mysqli_fetch_array($f1);
    $a2=mysqli_fetch_array($f2);
   $boading=date('H:i',strtotime($a[time2].'-30 minute'));
    $arrayName = array('name'=>$a[first_name].' '.$a[Last_name],'flight_no'=>$a[flight_no],'date'=>date('d M Y',strtotime($a[departure])),'form'=>$a1[form],'to'=>$a2[to_place],'seat'=>$a[seat_no],'time'=>$a[time2],'boading'=>$boading);
    echo json_encode($arrayName);
    break;
// ===============================================================================================
//cancel booking

case 'cancelbooking':
    $id=$_REQUEST[id];
    $q=mysqli_query($con,"UPDATE `booking` SET `status`='1' WHERE `id`='$id'");
    if($q){
        echo"<script>
        alert('Canceled Successfully');
        window.history.back();
    </script>";
    }
    break;
// ===============================================================================================
// review

case 'review':
    $date=date('Y-m-d');
$arrayName = array('star'=>$_REQUEST[star],'message'=>$_REQUEST[message],'date'=>'$date');
$review=json_encode($arrayName);
$q=mysqli_query($con,"UPDATE `register` SET `review`='$review' WHERE `id`='$_SESSION[id]'");
if($q){
    echo"<script>
    alert('Update Successfully');
    window.location.href='reviews.php';
</script>";
}
    break;
// ===============================================================================================
    default:
        echo 'No case Found';
        break;
}
?>
