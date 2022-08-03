<?php

include('authentication.php');
include('./includes/header.php');
?>

<div class="container-fluid px-4">
    <h1 class="mt-4"> welcome 👌 </h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item active">Portfolio</li>
    </ol>
    <div class="row">
        <div class="col-md-12">
            <?php include('message.php'); ?>

            <div class="card">
                <div class="card-header">
                    <h3> Add Candidature </h3>
                    <a href="view-candidature.php" class="btn btn-danger float-end">Back</a>
                </div>
                <div class="card-body">
                										


                    <form action="code.php" method="post" enctype="multipart/form-data">
                        <div class="col-md-6 mb-3">
                            <label>contrat</label>
                            <input type="text" class="form-control" name="contrat">
                        </div>
                        <div class="col-md-6 mb-3">
                            <label>job</label>
                            <input type="text" class="form-control" name="job">
                        </div>

                        <div class="col-md-6 mb-3">
                            <label>linkedin </label>
                            <input type="text" class="form-control" name="linkedin">
                        </div>




                        
                        <div class="col-md-6 mb-3">
                            <label>first_name</label>
                            <input type="text" class="form-control" name="first_name">
                        </div>
                       
                        <div class="col-md-6 mb-3">
                            <label>last_name</label>
                            <input type="text" class="form-control" name="last_name">
                        </div>
                        <div class="col-md-6 mb-3">
                            <label>email </label>
                            <input type="text" class="form-control" name="email">
                        </div>
                        <div class="col-md-6 mb-3">
                            <label>phone</label>
                            <input type="text" class="form-control" name="phone">
                        </div>
                        <div class="col-md-6 mb-3">
                            <label>message</label>
                            <input type="text" class="form-control" name="message">
                        </div>
                        <div class="col-md-6 mb-3">
                            <label>cv</label>
                            <input type="file" name="pdf" id="fileToUpload">
                        </div>
                        <div class="col-md-6 mb-3">
                            <label>portfolio</label>
                            <input type="text" class="form-control" name="portfolio">
                        </div>

                        <div class="col-md-6 mb-3">
                            <input type="submit" class=" btn btn-success" value="Submit" name="submit_candidature">
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