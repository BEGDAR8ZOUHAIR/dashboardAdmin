
<?php

include('authentication.php');
include('./includes/header.php');
?>

     <div class="container-fluid px-4">
                            <h1 class="mt-4"> Admin Panel </h1>
                            <ol class="breadcrumb mb-4">
                                <li class="breadcrumb-item active">Dashboard</li>
                            </ol>
                 <div class="row">
                    <div class="col-md-12">
                    
                                <div class="card">
                                    <div class="card-header">
                                        <h3>Add User</h3>
                                        <a href="view-register.php" class="btn btn-danger float-end">Back</a>
                                    </div>
                                    <div class="card-body">

                                                    <form action="code.php" method="POST">
                                                        <div class="col-md-6 mb-3">
                                                            <label>Username</label>
                                                            <input type="text" class="form-control" name="username" >
                                                        </div>
                                                        <div class="col-md-6 mb-3">
                                                            <label>Email</label>
                                                            <input type="email" class="form-control" name="email" >
                                                        </div>
                                                        <div class="col-md-6 mb-3">
                                                            <label>Password</label>
                                                            <input type="password" class="form-control" name="password" >
                                                        </div>
                                                        <div class="col-md-6 mb-3">
                                                            <label>Role</label>
                                                            <select class="form-control" name="role_as">
                                                                <option>Admin</option>
                                                                <option>User</option>
                                                            </select>
                                                        </div>
                                                        <div class="col-md-6 mt-4">
                                                        <label for="password">Status</label>
                                                        <input type="checkbox" name="status" width="70px" height="70px">
                                                        </div>
                                                        <div class="col-md-6 mb-3 mt-3">
                                                            <button type="submit" name="add_user" class=" btn btn-success" >Add User/ Admin</button>
                                                        </div>
                                                    </form>
                                     
                                   
                                 </div>
                            </div>
                     </div>



                  </div>

    </div>                  
                      
    <?php
include('./includes/footer.php');
include('./includes/script.php');
?>





