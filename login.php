<?php
session_start();
if(isset($_SESSION['auth'])){
    
    if(!isset(  $_SESSION['message'])){
        $_SESSION['message'] = "You are already logged in";
    }
  
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
                    <h5 class="card-title text-center ">Login</h5>

                    <form action="logincode.php" method="POST">
                        <div class="form-group mb-3">
                            <label for="exampleInputEmail1">Email address</label>
                            <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                           
                        </div>
                        <div class="form-group mb-3">
                            <label for="exampleInputPassword1">Password</label>
                            <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                        </div>
                       <div class="form-group mb-3">
                            <button type="submit" name="submit"  class="btn btn-primary">Login</button>

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


