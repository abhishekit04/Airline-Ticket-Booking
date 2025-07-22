<?php
$con=mysqli_connect('localhost','root','12345','online_flight');
if(!$con){
	echo"<script> alert('Database is not connected'); </script>";
}
?>