<?php
session_start();
include('admin/config/dbconn.php');

if(isset($_POST['submit']))
{
    $email= mysqli_real_escape_string($conn, $_POST['email']);
    $password= mysqli_real_escape_string($conn, $_POST['password']);
    $query = "SELECT * FROM users WHERE email = '$email' AND password = '$password' LIMIT 1";   //query to check if the user exists in the database
    $query_run = mysqli_query($conn, $query);

   
    if(mysqli_num_rows($query_run)>0)
    {
        foreach($query_run as $data)
        {
            $id = $data['id'];
            $username = $data['username'];
            $email = $data['email'];
         
            $role_as = $data['role_as'];
            $created_at = $data['created_at'];
        }
      $_SESSION['auth'] = true;
      $_SESSION['auth_role'] = $role_as;  // 1 for admin and 0 for user
      $_SESSION['auth_user'] = [
            'id' => $id,
            'username' => $username,
            'email' => $email,
            'role_as' => $role_as,
            'created_at' => $created_at,
         
      
        ];

        if($_SESSION['auth_role'] == 1) //adminj
       {
        $_SESSION['message'] = "Welcome Admin";
        header('location: admin/index.php');

       }
       elseif($_SESSION['auth_role'] == 0)
       {
        $_SESSION['message'] = "Welcome User";
        header('location: index.php');
       }
      
        


   
    }
    else
    {
        //invalid
        $_SESSION['message'] = "Invalid Username or Password";
        header('location: login.php');
    }



}
else
{
    $_SESSION['message'] = "you are not allowed to access this page";
    header('location: login.php');
    exit(0);


}
