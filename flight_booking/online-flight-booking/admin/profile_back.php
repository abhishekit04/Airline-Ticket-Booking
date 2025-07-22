<?php
// profile_back.php
session_start();
  $user_id=$_SESSION['user_id'];
include_once('connect.php');
// ===========================================================================================
// ===========================================================================================
 // change pasword
    if(isset($_POST['changepassword'])){
   $old_password=$_POST['old_password'];
      $new_password=$_POST['new_password'];
      $confirm_password=$_POST['confirm_password'];
      if($new_password==$confirm_password){
         $q1=mysqli_query($con,"SELECT * FROM `login` WHERE `password`='$old_password' and `id`='$user_id'");
         if(mysqli_num_rows($q1)>0){
          $q=mysqli_query($con,"UPDATE `login` SET `password`='$new_password' WHERE `id`='$user_id'");
           if($q){
      $_SESSION["msg"]="Update Succesfully..!";
      $_SESSION["alert"]="success";
       header("location:change_password.php");
     }
      }
     else{
       $_SESSION["msg"]="check old password....";
      $_SESSION["alert"]="danger";
       header("location:change_password.php");
     }
      }
      else{
          $_SESSION["msg"]="password is not Matched...";
      $_SESSION["alert"]="info";
       header("location:change_password.php");
      }
     }
 // change username
    if(isset($_POST['changeusername'])){
   $old_username=$_POST['old_username'];
      $password=$_POST['password'];
      $new_username=$_POST['new_username'];
         $q1=mysqli_query($con,"SELECT * FROM `login` WHERE `password`='$password' and `id`='$user_id' and `email`='$old_username'");
         if(mysqli_num_rows($q1)>0){
          $q=mysqli_query($con,"UPDATE `login` SET `email`='$new_username' WHERE `id`='$user_id'");
           if($q){
      $_SESSION["msg"]="Update Succesfully..!";
      $_SESSION["alert"]="success";
       header("location:change_password.php");
     }
      }
     else{
       $_SESSION["msg"]="check old Username or Password....";
      $_SESSION["alert"]="danger";
       header("location:change_password.php");
     }
     }
      // save profile`

     if(isset($_POST[save_profile])){

      $array=array('address_unit1'=>$_REQUEST[address_unit1],'address_unit2'=>$_REQUEST[address_unit2],'address_unit3'=>$_REQUEST[address_unit3],'mobile1'=>$_REQUEST[mobile1],'mobile2'=>$_REQUEST[mobile2],'mobile3'=>$_REQUEST[mobile3],'email_id1'=>$_REQUEST[email_id1],'email_id2'=>$_REQUEST[email_id2],'email_id3'=>$_REQUEST[email_id3],'map'=>$_REQUEST[map],'facebook'=>$_REQUEST[facebook],'twitter'=>$_REQUEST[twitter],'instgram'=>$_REQUEST[instgram],'linkdin'=>$_REQUEST[linkdin]);
     $data=json_encode($array);
     $q=mysqli_query($con,"UPDATE `login` SET `company_details`='$data' WHERE `id`='$user_id'");
     if($q){
      $_SESSION["msg"]="Update Succesfully..!";
      $_SESSION["alert"]="success";
       header("location:profile.php");
     }
     }

?>