<?php
//creating connection to database
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "secure-elearning";
   
$con =  mysqli_connect($servername, $username, $password,$dbname);

if (!$con) {
        die("Connection failed: " . mysqli_connect_error());
      }

 //check whether submit button is pressed or not
if (isset($_POST['submit'])){
    
    //fetching and storing the form data in variables
    $name=$_POST['name'];
    $email=$_POST['email'];
    $message=$_POST['message'];
    }
    //query to insert the variable data into the database
        $sql= "INSERT INTO `accept_request`(`name`,`email`,`message`) VALUES ('$name','$email','$message')";
        if ($con->query($sql) === TRUE) {
         header('location:http://localhost:8080/SecureELearning/index_1.php');
         } else {
            echo "Error: " . $sql . "<br>" . $con->error;
        } 
    $con->close();
    ?>
    
