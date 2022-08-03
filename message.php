<?php
if(isset($_SESSION['message'])){
  
    ?>
    
    <div class="alert alert-warning alert-dismissible fade show" role="alert">
        <strong>hi !</strong>    <h4> <?=$_SESSION['message']; ?>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
</h4>
<?php
         unset($_SESSION['message']);
         
         
  }
?>
















