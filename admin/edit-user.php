
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
                                        <h3>Edit User</h3>
                                        <a href="view-register.php" class="btn btn-danger float-end">Back</a>
                                    </div>
                                    <div class="card-body">


                                        <?php
                                        if(isset($_GET['id'])){
                                            $id = $_GET['id'];
                                            $query = "SELECT * FROM users WHERE id = $id";
                                            $query_run = mysqli_query($conn, $query);
                                            if(mysqli_num_rows($query_run) > 0){
                                                foreach($query_run as $row){
                                                    ?>
                                                    <form action="code.php?id=<?php echo $row['id']; ?>" method="POST">
                                                        <div class="col-md-6 mb-3">
                                                            <label>Username</label>
                                                            <input type="text" class="form-control" name="username" value="<?php echo $row['username']; ?>">
                                                        </div>
                                                        <div class="col-md-6 mb-3">
                                                            <label>Email</label>
                                                            <input type="email" class="form-control" name="email" value="<?php echo $row['email']; ?>">
                                                        </div>
                                                        <div class="col-md-6 mb-3">
                                                            <label>Password</label>
                                                            <input type="password" class="form-control" name="password" value="<?php echo $row['password']; ?>">
                                                        </div>
                                                        <div class="col-md-6 mb-3">
                                                            <label>Role</label>
                                                            <select class="form-control" name="role_as">
                                                                <option value="1" <?php if($row['role_as'] == '1'){ echo 'selected'; } ?>>Admin</option>
                                                                <option value="0" <?php if($row['role_as'] == '0'){ echo 'selected'; } ?>>User</option>
                                                            </select>
                                                        </div>
                                                        <div class="col-md-6 mt-4">
                                                        <label for="password">Status</label>
                                                        <input type="checkbox" name="status" <?php if($row['role_as'] == '1'){ echo 'checked'; } ?> width="70px" height="70px">
                                                        </div>
                                                        <div class="col-md-6 mb-3 mt-3">
                                                            <input type="submit" class="btn btn-success" name="edit_user" value="Edit User">
                                                        </div>
                                                    </form>
                                                    <?php
                                                }
                                            }
                                        }
                                        ?>

                                   
                                 </div>
                            </div>
                     </div>



                  </div>

    </div>                  
                      
    <?php
include('./includes/footer.php');
include('./includes/script.php');
?>





