<?php
    $host = "localhost";  
    $un = "root";  
    $upw = '';  
    $db_name = "capstone";  
      
    $con = mysqli_connect($host, $un, $upw, $db_name);  
    if(mysqli_connect_errno()) {  
        die("Failed to connect with MySQL: ". mysqli_connect_error());  
    }
?>