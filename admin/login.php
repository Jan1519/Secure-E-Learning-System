<?php
include('dbcon.php');
session_start();
$username = $_POST['username'];
$password = $_POST['password'];

$query = mysqli_query($con,"SELECT * FROM users WHERE username='$username' AND password='$password'")or die(mysqli_error($con));
$count = mysqli_num_rows($query);
$row = mysqli_fetch_array($query);


if ($count > 0){
		
$_SESSION['id']=$row['user_id'];
		
echo 'true';
		
mysqli_query($con,"insert into user_log (username,login_date,user_id)values('$username',NOW(),".$row['user_id'].")")or die(mysqli_error($con));
}else{ 
echo 'false';
}	
				
?>