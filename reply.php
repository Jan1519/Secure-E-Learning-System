<?php
include('admin/dbcon.php');
include('session.php');
$sender_id = $_POST['sender_id'];
$content= $POST['content'];
$sender_name = $_POST['name_of_sender'];
$my_name = $_POST['my_name'];
$my_message = $_POST['my_message'];
$message_stutus = $POST['read'];

mysqli_query($con,"insert into message (reciever_id,content,date_sended,sender_id,reciever_name,sender_name) "
        . "values('$sender_id','$my_message',NOW(),'$session_id','$sender_name','$my_name')")or die(mysqli_error($con));
mysqli_query($con,"insert into message_sent (reciever_id,content,date_sended,sender_id,reciever_name,sender_name) "
        . "values('$sender_id','$my_message',NOW(),'$session_id','$sender_name','$my_name')")or die(mysqli_error($con));
?>