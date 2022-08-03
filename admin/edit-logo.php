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
                    <h3>Edit logo client</h3>
                    <a href="view-logo.php" class="btn btn-danger float-end">Back</a>
                </div>
                <div class="card-body">


                    <?php
                    if (isset($_GET['id'])) {
                        $id = $_GET['id'];

                        $query = "SELECT * FROM client_logo WHERE id = $id";
                        $query_run = mysqli_query($conn, $query);
                        if (mysqli_num_rows($query_run) > 0) {
                            foreach ($query_run as $row) {
                    ?>
                                <form action="code.php?id=<?php echo $row['id']; ?>" method="POST" enctype="multipart/form-data">
                                    <div class="col-md-6 mb-3">
                                        <label>client</label>
                                        <input type="text" class="form-control" name="client" value="<?php echo $row['client']; ?>">
                                    </div>

                                        <div class="col-md-6 mb-3">
                                            <label>Active</label>
                                            <select class="form-control" name="active">
                                                <option value="1" <?php if ($row['active'] == 1) {
                                                                        echo 'selected';
                                                                    } ?>>Yes</option>
                                                <option value="0" <?php if ($row['active'] == 0) {
                                                                        echo 'selected';
                                                                    } ?>>No</option>
                                            </select>
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <label>logo</label>

                                            <input type="file" name="logo" class="form-control" value="<?= $row['logo'] ?>">
                                        </div>

                                        <div class="col-md-6 mb-3 mt-3">
                                            <input type="submit" class=" btn btn-success" value="Update" name="edit_logo">
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