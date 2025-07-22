<?php
session_start();
include_once('connect.php');

switch ($_REQUEST['actionajax']) {
	// ===========================================================================================================================
			// flight
	// ===========================================================================================================================
	case 'save_flight':
	$flight_no=ucfirst(mysqli_real_escape_string($con,$_POST['flight_no']));
	$flight_name=ucfirst(mysqli_real_escape_string($con,$_POST['flight_name']));
	$seats=mysqli_real_escape_string($con,$_POST['seats']);

	$q=mysqli_query($con,"INSERT INTO `flight`(`flight_name`,`seats`,`flight_no`) VALUES ('$flight_name','$seats','$flight_no')");
	echo mysqli_error($con);
	if($q){
	  $_SESSION["msg"]="Save Succesfully..!";
	  $_SESSION["alert"]="success";
	   header("location:add-flight.php");

}
    break;

// --------------------------------------------------------------------------------------------
    // update flight
    case 'update_flight':
    $flight_name=ucfirst(mysqli_real_escape_string($con,$_POST['flight_name']));
    $seats=mysqli_real_escape_string($con,$_POST['seats']);
    $flight_no=ucfirst(mysqli_real_escape_string($con,$_POST['flight_no']));
    $q=mysqli_query($con,"UPDATE `flight` SET `flight_name`='$flight_name',`seats`='$seats',`flight_no`='$flight_no' WHERE `id`='$_POST[id]' ");
    if($q){
      $_SESSION["msg"]="Update Succesfully..!";
      $_SESSION["alert"]="success";
       header("location:add-flight.php");

}
    break;
// --------------------------------------------------------------------------------------------------------
    case 'delete_flight':
     $id=$_REQUEST['id'];

    $q=mysqli_query($con,"DELETE FROM `flight` WHERE `id`='$id'");
    if($q){
      $_SESSION["msg"]="Deleted Succesfully..!";
      $_SESSION["alert"]="success";
      header("location:add-flight.php");

}
    break;

// ===========================================================================================================================
    				// citys
// ===========================================================================================================================
    // add city
    case 'save_city':
    $city=ucfirst(mysqli_real_escape_string($con,$_POST['city']));
    $q=mysqli_query($con,"INSERT INTO `citys`(`city`) VALUES ('$city')");
    if($q){
      $_SESSION["msg"]="Save Succesfully..!";
      $_SESSION["alert"]="success";
       header("location:add-city.php");

}
    break;
// ------------------------------------------------------------------------------------------------------------------
 // edit city
    case 'update_city':
    $city=ucfirst(mysqli_real_escape_string($con,$_POST['city']));
    $q=mysqli_query($con,"UPDATE `citys` SET `city`='$city' WHERE `id`='$_REQUEST[id]'");
    if($q){
      $_SESSION["msg"]="Updated Succesfully..!";
      $_SESSION["alert"]="success";
       header("location:add-city.php");

}
    break;
    // -------------------------------------------------------------------------
    // --------------------------------------------------------------------------------------------------------
    case 'delete_city':
     $id=$_REQUEST['id'];

    $q=mysqli_query($con,"DELETE FROM `citys` WHERE `id`='$id'");
    if($q){
      $_SESSION["msg"]="Deleted Succesfully..!";
      $_SESSION["alert"]="success";
      header("location:add-city.php");

}
    break;
// ===========================================================================================================================
                // flight details
// ===========================================================================================================================
// insert
case 'save_flight_details':
$flight_name=mysqli_real_escape_string($con,$_POST['flight_name']);
$arrivel=mysqli_real_escape_string($con,$_POST['arrivel']);
$time1=mysqli_real_escape_string($con,$_POST['time1']);
$form=mysqli_real_escape_string($con,$_POST['form']);
$departure=mysqli_real_escape_string($con,$_POST['departure']);
$time2=mysqli_real_escape_string($con,$_POST['time2']);
$to=mysqli_real_escape_string($con,$_POST['to']);
$duration=mysqli_real_escape_string($con,$_POST['duration']);
$price =mysqli_real_escape_string($con,$_POST['price']);
$actionajax=mysqli_real_escape_string($con,$_POST['actionajax']);



$q=mysqli_query($con,"INSERT INTO `flight_details`(`flight_name`,`arrivel`,`time1`,`form`,`departure`,`time2`,`to`,`duration`,`price`) VALUES ('$flight_name','$arrivel','$time1','$form','$departure','$time2','$to','$duration','$price ')");
if($q){
  $_SESSION["msg"]="Save Succesfully..!";
  $_SESSION["alert"]="success";
   header("location:flight_details.php");

}
    break;
// ---------------------------------------------------------------------------------------------------------
    // update

    case 'edit_flight_details':
    $flight_name=mysqli_real_escape_string($con,$_POST['flight_name']);
    $arrivel=mysqli_real_escape_string($con,$_POST['arrivel']);
    $time1=mysqli_real_escape_string($con,$_POST['time1']);
    $form=mysqli_real_escape_string($con,$_POST['form']);
    $departure=mysqli_real_escape_string($con,$_POST['departure']);
    $time2=mysqli_real_escape_string($con,$_POST['time2']);
    $to=mysqli_real_escape_string($con,$_POST['to']);
    $duration=mysqli_real_escape_string($con,$_POST['duration']);
    $price=mysqli_real_escape_string($con,$_POST['price']);


    $q=mysqli_query($con,"UPDATE `flight_details` SET `flight_name`='$flight_name',`arrivel`='$arrivel',`time1`='$time1',`form`='$form',`departure`='$departure',`time2`='$time2',`to`='$to',`duration`='$duration',`price`='$price' WHERE `id`='$_POST[id]' ");
    if($q){
      $_SESSION["msg"]="Update Succesfully..!";
      $_SESSION["alert"]="success";
       header("location:list_flight.php");

}
    break;

    // --------------------------------------------------------------------------------------------------------
    // delete
    case 'delete_flight_details':
     $id=$_REQUEST['id'];

    $q=mysqli_query($con,"DELETE FROM `flight_details` WHERE `id`='$id'");
    if($q){
      $_SESSION["msg"]="Deleted Succesfully..!";
      $_SESSION["alert"]="success";
      header("location:list_flight.php");

}
    break;
// ===========================================================================================================================
                        // issue flight
// ===========================================================================================================================
    case 'flight_issue':

     $form=date('H:i',strtotime($_POST[time1].'+'.$_POST[time].' minute'));
     $to=date('H:i',strtotime($_POST[time2].'+'.$_POST[time].' minute'));

    $q=mysqli_query($con,"UPDATE `flight_details` SET `time1`='$form',`time2`='$to',`status`='1'  WHERE `id`='$_POST[id]' ");
      if($q){
      $_SESSION["msg"]="Update Succesfully..!";
      $_SESSION["alert"]="success";
       header("location:today_flight.php");

}
    break;
    // -----------------------------------------------------------------------------------
        // departed
     case 'delete_flight_deported':
    $q=mysqli_query($con,"UPDATE `flight_details` SET `status`='2'  WHERE `id`='$_REQUEST[id]' ");
      if($q){
      $_SESSION["msg"]="Update Succesfully..!";
      $_SESSION["alert"]="success";
       header("location:today_flight.php");

}
    break;
     // -----------------------------------------------------------------------------------
        // departed
     case 'flight_solved':
    $q=mysqli_query($con,"UPDATE `flight_details` SET `status`='0'  WHERE `id`='$_REQUEST[id]' ");
      if($q){
      $_SESSION["msg"]="Update Succesfully..!";
      $_SESSION["alert"]="success";
       header("location:issues_flight.php");

}
    break;
    // -----------------------------------------------------------------------------------
        // arived
     case 'flight_arived':
    $q=mysqli_query($con,"UPDATE `flight_details` SET `status`='3'  WHERE `id`='$_REQUEST[id]' ");
      if($q){
      $_SESSION["msg"]="Update Succesfully..!";
      $_SESSION["alert"]="success";
       header("location:issues_flight.php");

}
    break;
// ===========================================================================================================================
        // food
// ===========================================================================================================================
case 'save_food':
    $section=mysqli_real_escape_string($con,$_POST['section']);
$images=date('dmyhis').$_FILES['images']['name'];
$images_tmp=$_FILES['images']['tmp_name'];
$name=mysqli_real_escape_string($con,$_POST['name']);
$price=mysqli_real_escape_string($con,$_POST['price']);




$q=mysqli_query($con,"INSERT INTO `food`(`section`,`image`,`name`,`price`) VALUES ('$section','$images','$name','$price')");
echo mysqli_error($con);
if($q){
move_uploaded_file($images_tmp,'image/food/'.$images);
  $_SESSION["msg"]="Save Succesfully..!";
  $_SESSION["alert"]="success";
   header("location:add_food.php");

}
 break;
// ============================================================
case 'update_food':

    if(!empty($_FILES['images']['name'])){
        $images=date('dmyhis').$_FILES['images']['name'];
        $images_tmp=$_FILES['images']['tmp_name'];
        move_uploaded_file($images_tmp,'image/food/'.$images);
        $imagedata=",`image`='$images'";

    }

    $section=mysqli_real_escape_string($con,$_POST['section']);
$name=mysqli_real_escape_string($con,$_POST['name']);
$price=mysqli_real_escape_string($con,$_POST['price']);
$id=mysqli_real_escape_string($con,$_POST['id']);




$q=mysqli_query($con,"UPDATE `food` SET `section`='$section',`name`='$name',`price`='$price' $imagedata WHERE `id`='$id'");
echo mysqli_error($con);
if($q){
  $_SESSION["msg"]="update Succesfully..!";
  $_SESSION["alert"]="success";
   header("location:add_food.php");

}
 break;
 // --------------------------------------------------------------------------------------------------------
    // delete
    case 'delete_food':
        $id=$_REQUEST['id'];

       $q=mysqli_query($con,"DELETE FROM `food` WHERE `id`='$id'");
       if($q){
         $_SESSION["msg"]="Deleted Succesfully..!";
         $_SESSION["alert"]="success";
         header("location:add_food.php");

   }
       break;
        // --------------------------------------------------------------------------------------------------------
              // arived
     case 'food_status':
        $q=mysqli_query($con,"UPDATE `food` SET `status`='$_REQUEST[status]'  WHERE `id`='$_REQUEST[id]' ");
          if($q){
          $_SESSION["msg"]="Update Succesfully..!";
          $_SESSION["alert"]="success";
           header("location:add_food.php");

    }
        break;
        // =======================================================================================
            // logo image
// =======================================================================================
case 'login_img':
    $img=date('dmyhis-').$_FILES['login_img']['name'];
    $img_tmp=$_FILES['login_img']['tmp_name'];
     $q=mysqli_query($con,"UPDATE `login` SET`login_logo`='$img' WHERE `id`='$_SESSION[user_id]'");
       if($q){
        move_uploaded_file($img_tmp, 'image/logo/'.$img);
        unlink('image/logo/'.$_REQUEST[pre_img]);
         $_SESSION["msg"]="Updated Succesfully..!";
         $_SESSION["alert"]="success";
          header("location:logo_img.php");
    }
    break;
    // ---------------------------------------------------------------------------
    case 'admin_logo':
    $img=date('dmyhis-').$_FILES['admin_logo']['name'];
    $img_tmp=$_FILES['admin_logo']['tmp_name'];
     $q=mysqli_query($con,"UPDATE `login` SET`admin_logo`='$img' WHERE `id`='$_SESSION[user_id]'");
       if($q){
        move_uploaded_file($img_tmp, 'image/logo/'.$img);
        unlink('image/logo/'.$_REQUEST[pre_img]);
         $_SESSION["msg"]="Updated Succesfully..!";
         $_SESSION["alert"]="success";
          header("location:logo_img.php");
    }
    break;

// ===========================================================================================================================
	default:
		echo "No Case Found";
		break;
}

?>