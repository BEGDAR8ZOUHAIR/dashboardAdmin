
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
                                        <h3>Edit Slide</h3>
                                        <a href="index.php" class="btn btn-danger float-end">Back</a>
                                    </div>
                                    <div class="card-body">


                                        <?php
                                        if(isset($_GET['id'])){
                                            $id = $_GET['id'];
                                            $query = "SELECT * FROM slide WHERE id = $id";
                                            $query_run = mysqli_query($conn, $query);
                                            if(mysqli_num_rows($query_run) > 0){
                                                foreach($query_run as $row){
                                                    ?>
                                                    <form action="code.php?id=<?php echo $row['id']; ?>" method="POST"  enctype="multipart/form-data">
                                                        <div class="col-md-6 mb-3">
                                                            <label>Title</label>
                                                            <input type="text" class="form-control" name="title" value="<?php echo $row['title']; ?>">
                                                        </div>
                                                        <div class="col-md-6 mb-3">
                                                            <label>Number Slide</label>
                                                            <input type="number" class="form-control" name="count" value="<?php echo $row['count']; ?>">
                                                        </div>
                                                        <div class="col-md-6 mb-3">
                                                            <label>Url</label>
                                                            <input type="text" class="form-control" name="url" value="<?php echo $row['url']; ?>">
                                                        </div>
                                                        <div class="col-md-6 mb-3">
                                                            <label>Active</label>
                                                            <select class="form-control" name="status">
                                                                <option value="1" <?php if($row['status'] == 1){ echo 'selected'; } ?>>Yes</option>
                                                                <option value="0" <?php if($row['status'] == 0){ echo 'selected'; } ?>>No</option>
                                                            </select>
                                                        </div>
                                                        <div class="col-md-6 mb-3">
                                                            <label>image</label>
                                                           
                                                            <input type="file" name="image"  class="form-control" value="<?= $row['image'] ?>">
                                                        </div>
                                                       
                                                        <div class="col-md-6 mb-3 mt-3">
                                                        <input type="submit" class=" btn btn-success" value="Update" name="edit_slide">
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





