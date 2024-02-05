<?php
session_start();
include "dbcon.php";
   
    $username = $_POST['username'];
    $password = $_POST['password'];
    
        $query1 = "SELECT * FROM `staff_users` WHERE `username`='$username' AND `password` = '$password'";

        $result1 = mysqli_query($con,$query1);


        if(mysqli_num_rows($result1)){
            $user = mysqli_fetch_assoc($result1);
            $_SESSION['user_name'] = $user['username'];
            // echo " <h1> Welcome ".$user['username'];
            header("location: home.php");   
            exit();

        }
        else{
            header("location: ../index.php?error=Incorrect Username or password");
            exit();
        }

?>