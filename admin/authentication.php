<?php
session_start();
include('config/dbconn.php');

if(!isset($_SESSION['auth'])){

    $_SESSION['message'] = "login to access Dashboard";
    header('location: ../login.php');
    exit(0);
}
else
{
    if($_SESSION['auth_role'] != 1) //admin
    {
        $_SESSION['message'] = "You are not authorized as Admin";
        header('location: ../login.php');
        exit(0);
    
    }

}