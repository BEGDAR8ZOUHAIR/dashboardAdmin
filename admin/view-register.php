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
                                <?php include('message.php'); ?>
                                <div class="card">
                                    <div class="card-header">
                                        <h3>Register User</h3>
                                        <a href="add-regester.php" class="btn btn-success float-end"><i class="fa-solid fa-user-plus"></i></a>
                                    </div>
                                    <div class="card-body">
                                        <div class="table-responsive">
                                            <table class="table">
                                                <thead>
                                                    <tr>
                                                        <th>username</th>
                                                        <th>Email</th>
                                                        <th>Role</th>
                                                       
                                                        <th>Update</th>
                                                        <th>Delete</th>
                                                    </tr>
                                                </thead>
                                              
                                                <tbody>
                                                    <?php
                                                    $query = "SELECT * FROM users";
                                                    $query_run = mysqli_query($conn, $query);
                                                    if(mysqli_num_rows($query_run) > 0){
                                                        foreach($query_run as $row){

                                                             ?>
                                                               <td>
                      


                                                            <tr>
                                                                <td><?php echo $row['username']; ?></td>
                                                                <td><?php echo $row['email']; ?></td>
                                                                <td>
                                                                    <?php
                                                                    if($row['role_as'] == '1'){

                                                                        echo 'Admin';
                                                                   
                                                                    }else{
                                                                        echo 'User';
                                                                    }
                                                                   
                                                                    ?>
                                                                    </td>
                                                                <td>
                                                                  <a href="edit-user.php?id=<?php echo $row['id']; ?>" class="btn btn-success"><i class="fa-solid fa-marker"></i></a>
                                                                </td>
                                                                <td>
                                                                  <form action="code.php" method="POST">
                                                                    <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
                                                                    <button type="submit" name="delete_user" class="btn btn-danger mt-2"><i class="fa-solid fa-trash-alt"></i></button>
                                                       
                                                                  </form>
                                                               
                                                                 </td>
                                                               
                                                            </tr>
                                                            <?php
                                                        } 

                                                            
                                                        } else {
                                                           ?>
                                                            <tr>
                                                                <td colspan="4" >No Data Found</td>
                                                            </tr>
                                                            <?php

                                                        }
                                                        ?>

                                                    
                                                       
                                                    
                                                </tbody>
                                            </table>
                                  
                                   
                                </div>
                            </div>


                        </div>

    </div>                  
                      
<?php include('./includes/footer.php'); ?>
<?php include('./includes/script.php'); ?>


