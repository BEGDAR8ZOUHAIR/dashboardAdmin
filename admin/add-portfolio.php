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
                    <h3> Add Portfolio </h3>
                    <a href="view-portfolio.php" class="btn btn-danger float-end">Back</a>
                </div>
                <div class="card-body">


                    <form action="code.php" method="post" enctype="multipart/form-data">
                        <div class="col-md-6 mb-3">
                            <label>Title</label>
                            <input type="text" class="form-control" name="title">
                        </div>

                        <div class="col-md-6 mb-3">
                            <label>Url</label>
                            <input type="text" class="form-control" name="url">
                        </div>
                        <div class="col-md-6 mb-3">
                            <label>Owner</label>
                            <input type="text" class="form-control" name="owner">
                        </div>
                        <div class="col-md-6 mb-3">
                            <label>Active</label>
                            <select class="form-control" name="active">
                                <option value="1">Yes</option>
                                <option value="0">No</option>
                            </select>
                        </div>

                        <div class="col-md-6 mb-3">
                            <input type="file" name="image" id="fileToUpload">
                        </div>
                        <div class="col-md-6 mb-3 mt-3">
                            <input type="submit" class=" btn btn-success" value="Upload Image" name="submit_portfolio">
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