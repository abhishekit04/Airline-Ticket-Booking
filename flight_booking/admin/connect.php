<?php
$con=mysqli_connect('localhost','root','','online_flight');
if(!$con){
	echo"<script> alert('Database is not connected'); </script>";
}
?>