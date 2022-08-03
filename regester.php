<?php
session_start();

if(isset($_SESSION['auth'])){
  
    $_SESSION['message'] = "You are already logged in";
    header('location: index.php');
    exit(0);
}

include('./include/header.php');
include('./include/nav.php');
?>

<div class="py-5">

    <div class="container">
        <div class="row justify-content-center">
        <div class="col-md-5">

 <?php include('message.php') ?>


            <div class="card">

            
                <div class="card-body">
                    <h5 class="card-title text-center ">Regester</h5>
                    <form action="regestercode.php" method="post">
                    <div class="form-group mb-3">
                            <label for="exampleInputEmail1">username</label>
                            <input required type="text" name="username" class="form-control"  placeholder="Enter username">
                            
                        </div>
                        <div class="form-group mb-3">
                            <label for="exampleInputEmail1">Email address</label>
                            <input required type="email" name="email" class="form-control"  placeholder="Enter email">
                           
                        </div>
                        <div class="form-group mb-3">
                            <label for="exampleInputPassword1">Password</label>
                            <input required type="password" name="password" class="form-control"  placeholder="Password">
                        </div>
                        <div class="form-group mb-3">
                            <label for="exampleInputPassword1">Confirm Password</label>
                            <input required type="password" name="cpassword" class="form-control"  placeholder="confirm Password">
                        </div>
                       <div class="form-group mb-3">
                            <button type="submit" name="submit" class="btn btn-primary">Regester</button>

                       </div>
                     
                    </form>
                </div>
            </div>
      
        </div>
        </div>
    </div>
</div>



<?php
include('./include/footer.php');
?>


