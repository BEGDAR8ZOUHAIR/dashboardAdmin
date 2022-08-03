<?php 
session_start();
include('admin/config/dbconn.php');
if(isset($_POST['submit'])){
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $confirm_password = $_POST['cpassword'];

    if($password == $confirm_password){

        // check email
        $check_email = "SELECT * FROM users WHERE email = '$email'";
        $check_email_run = mysqli_query($conn, $check_email);
        if(mysqli_num_rows($check_email_run) > 0){
            $_SESSION['message'] = "Email already exists";
            header('location: regester.php');
            exit(0);
        }else{

            $user_query = "INSERT INTO users (username, email, password) VALUES ('$username', '$email', '$password')";
            $user_query_run = mysqli_query($conn, $user_query);
            if($user_query_run){
                $_SESSION['message'] = "User registered successfully";
                header('location: login.php');
                exit(0);
            }else{
                $_SESSION['message'] = "User registration failed";
                header('location: regester.php');
                exit(0);
            }

        }


         

    }
    else{
        $_SESSION['message'] = "Password and Confirm Password not match";
        header('location: regester.php');
        exit(0);
    }
    
 
   
   
}