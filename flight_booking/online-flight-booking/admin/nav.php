<?php
session_start();
include_once('admin_nav.php');
// if($_SESSION['user_status']=='0'){
// }

// else{
// 	 include_once('staff_nav.php');  
// }

?>
<style type="text/css">
	.table-box::-webkit-scrollbar{
	width: 5px;
background-color:lightgray; 
}
 .table-box::-webkit-scrollbar-thumb{
 width: 12px;
 background-color:gray; 
border-radius: 16px;
 }

 /*hide number scroller*/
 input::-webkit-outer-spin-button,
 input::-webkit-inner-spin-button{
 	-webkit-appearance:none;
 	margin: 0;
 }
 input[type=number]{
 	-moz-appearance:textfield;
 }
</style>