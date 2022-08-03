<?php

include('authentication.php');
include('./includes/header.php');
?>

<div class="container-fluid px-4">

    <h1 class="mt-4"> Welcome 😊 </h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item active">Dashboard</li>
    </ol>
    <div class="row">
        <div class="col-md-12">
            <?php include('message.php'); ?>
            <div class="card">
                <div class="card-header">
                    <h3>clients logo</h3>
                    <a href="add-logo.php" class="btn btn-info float-end"><i class="fa-solid fa-user-plus"></i></a>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table ">
                            <thead>
                                <tr>
                                    <th>Client</th>
                                    
                                   
                                    <th>Logo</th>
                                    <th>Active</th>
                                    <th>Update</th>
                                    <th>Delete</th>


                                </tr>
                            </thead>

                            <tbody>
                                <?php
                                $query = "SELECT * FROM client_logo";
                                $query_run = mysqli_query($conn, $query);
                                if (mysqli_num_rows($query_run) > 0) {
                                    foreach ($query_run as $row) {
                                ?>
                                        <tr>
                                            <td><?php echo $row['client']; ?></td>
                                      
                                           
                                            <td><img src="../uploads/<?php echo $row['logo']; ?>" width="60px" height="60px"></td>
                                            <td><?php echo $row['active']; ?></td>

                                            <td>
                                                <a href="edit-logo.php?id=<?php echo $row['id']; ?>" class="btn btn-info"><i class="fa-solid fa-edit"></i></a>

                                            </td>
                                            <td>
                                                <form action="code.php" method="POST">
                                                    <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
                                                    <button type="submit" name="delete_logo" class="btn btn-danger mt-2"><i class="fa-solid fa-trash-alt"></i></button>

                                                </form>
                                            </td>



                                        </tr>
                                <?php
                                    }
                                } else {
                                    echo "No Record Found";
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