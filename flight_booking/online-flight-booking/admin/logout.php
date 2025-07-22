<?php
session_start();
session_destroy();
include_once('backup.php');
header('location:index.php');
?>