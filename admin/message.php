<?php
if(isset($_SESSION['message'])){
  
    ?>
    
    <div class="alert alert-success" role="alert">
        <strong> Hi !</strong>    <h5> <?=$_SESSION['message']; ?>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
   </h5>
<?php
         unset($_SESSION['message']);
         
         
  }
  ?>


<?php

  if(isset($_SESSION['danger'])){
  
    ?>
    
    <div class="alert alert-danger d-flex align-items-center" role="alert">
        <strong> </strong>    <h5> <?=$_SESSION['danger']; ?>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
   </h5>
<?php
         unset($_SESSION['danger']);
         
         
  }
    ?>
  
























