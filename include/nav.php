<nav class="navbar navbar-expand-lg bg-light">
  <div class="container">
    <a class="navbar-brand" href="#">Profond S</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">home</a>
        </li>


        <?php if(isset($_SESSION['auth_user'])) : ?>

        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            <?=$_SESSION['auth_user']['username']; ?>
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="">My Profile</a></li>
            <li>
              <form action="allcode.php" method="POST">
                <button type="submit" name="logout" class="dropdown-item">Logout</button>
              </form>
            </li>
           
          </ul>
        </li>
        <?php else : ?>

        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="login.php">login</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="regester.php">regester</a>
        </li>
      <?php endif; ?>
      
      </ul>
     
    </div>
  </div>
</nav>