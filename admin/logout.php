<?php
include('dbcon.php');
include('session.php');
mysqli_query($con,"update user_log set logout_Date = NOW() where user_id = '$session_id' ")or die(mysqli_error($con));

session_destroy();
header('location:index.php'); 
?>