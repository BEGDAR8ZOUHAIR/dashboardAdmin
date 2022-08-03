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

            <!-- modal pop up fo display message -->


            <?php include('message.php'); ?>
            <div class="card">
                <div class="card-header">
                    <h3>devis</h3>
                    <a href="add-devis.php" class="btn btn-info float-end"><i class="fa-solid fa-user-plus"></i></a>

                </div>
                <div class="card-body">

                    <div class="table-responsive">
                        <table class="table ">
                            <thead>
                                <tr>
                                    <th>Prénom</th>
                                    <th>nom</th>
                                    <th> Email</th>
                                    <th>telephone</th>

                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $query = "SELECT * FROM devis";
                                $query_run = mysqli_query($conn, $query);
                                if (mysqli_num_rows($query_run) > 0) {
                                    foreach ($query_run as $row) {
                                ?>
                                        <tr>
                                            <td><?php echo $row['first_name']; ?></td>
                                            <td><?php echo $row['last_name']; ?></td>
                                            <td><?php echo $row['email']; ?></td>
                                            <td><?php echo $row['phone']; ?></td>


                                            <td>
                                                <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#<?php echo 'myModal' . $row['id'] ?>">details</button>

                                            </td>

                                            <!-- POP UP MODAL -->
                                            <div class="modal fade " id="<?php echo 'myModal' . $row['id'] ?>" role="dialog">
                                                <div class="modal-dialog ">
                                                    <div class="modal-content">



                                                        <!-- details -->

                                                        <div class="card-header"> Details</div>
                                                        <div class="card-body">



                                                            <div class="row gx-3 mb-3">
                                                                <!-- Form Group (first name)-->
                                                                <div class="col-md-6">
                                                                    <label class="small mb-1" for="inputFirstName"> Prénom</label>
                                                                    <input class="form-control" id="inputFirstName" name="first_name" type="text" value="<?php echo $row['first_name']; ?>" disabled>
                                                                </div>
                                                                <!-- Form Group (last name)-->
                                                                <div class="col-md-6">
                                                                    <label class="small mb-1" for="inputLastName">nom </label>
                                                                    <input class="form-control" id="inputLastName" name="last_name" type="text" value="<?php echo $row['last_name']; ?>" disabled>
                                                                </div>
                                                            </div>
                                                            <div class="row gx-3 mb-3">
                                                                <!-- Form Group (email)-->
                                                                <div class="col-md-12">
                                                                    <label class="small mb-1" for="inputEmail">Email</label>
                                                                    <input class="form-control" id="inputEmail" name="email" type="email" value="<?php echo $row['email']; ?>" disabled>
                                                                </div>
                                                            </div>
                                                            <div class="row gx-3 mb-3">
                                                                <!-- Form Group (phone number)-->
                                                                <div class="col-md-12">
                                                                    <label class="small mb-1" for="inputPhoneNumber">Phone Number</label>
                                                                    <input class="form-control" id="inputPhoneNumber" name="phone" type="text" value="<?php echo $row['phone']; ?>" disabled>
                                                                </div>
                                                            </div>
                                                            <div class="row gx-3 mb-3">
                                                                <!-- Form Group (company)-->
                                                                <div class="col-md-12">
                                                                    <label class="small mb-1" for="inputCompany">entreprise</label>
                                                                    <input class="form-control" id="inputCompany" name="company" type="text" value="<?php echo $row['company']; ?>" disabled>
                                                                </div>
                                                            </div>
                                                            <div class="row gx-3 mb-3">
                                                                <!-- Form Group (message)-->
                                                                <div class="col-md-12">
                                                                    <label class="small mb-1" for="inputMessage">Message</label>
                                                                    <textarea class="form-control" id="inputMessage" name="message" rows="3" disabled><?php echo $row['message']; ?></textarea>
                                                                </div>
                                                            </div>
                                                            <div class="row gx-3 mb-3">
                                                                <!-- Form Group (services)-->
                                                                <div class="col-md-12">
                                                                    <label class="small mb-1" for="inputServices">Services</label>
                                                                    <ul class="list-group">
                                                                    <?php
                                                                        foreach (explode(',', $row['services']) as $service) {
                                                                        ?>
                                                                        <li class="list-group-item "><?php echo $service; ?></li>
                                                                      

                                                                    <?php } ?>
                                            
                                                                    </ul>                    
                                                                </div>
                                                            </div>

                                                            <!-- Form Row        -->


                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <!-- END POP UP MODAL -->




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