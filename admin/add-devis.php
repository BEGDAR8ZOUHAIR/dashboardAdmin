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
                            <label>Nom</label>
                            <input type="text" class="form-control" name="first_name">
                        </div>
                        <div class="col-md-6 mb-3">
                            <label>Prénom</label>
                            <input type="text" class="form-control" name="last_name">
                        </div>

                        <div class="col-md-6 mb-3">
                            <label>Votre Email</label>
                            <input type="text" class="form-control" name="email">
                        </div>
                        <div class="col-md-6 mb-3">
                            <label>phone</label>
                            <input type="text" class="form-control" name="phone">
                        </div>
                        <div class="col-md-6 mb-3">
                            <label>Entreprise</label>
                            <input type="text" class="form-control" name="company">
                        </div>
                        <div class="col-md-6 mb-3">
                            <label>message</label>
                            <input type="text" class="form-control" name="message">
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="">Services</label>
                            <input type="checkbox" name="services[]" value="Branding">Branding
                            <input type="checkbox" name="services[]" value=" e-commerce">e-commerce
                            <input type="checkbox" name="services[]" value="Développement">Développement d'application
                            <input type="checkbox" name="services[]" value="Digital">Digital Marketing
                            <input type="checkbox" name="services[]" value="Production">Production vidéo
                            <input type="checkbox" name="services[]" value="graphique">création graphique
                            <input type="checkbox" name="services[]" value="Communication ">Communication print
                            <input type="checkbox" name="services[]" value="Autre">Autre
                            <input type="checkbox" name="services[]" value="site">site web
                        </div>
                        <div class="col-md-6 mb-3">
                            <input type="submit" class=" btn btn-success" value="Submit" name="submit_contact">
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