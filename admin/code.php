
<?php


include('authentication.php');

// delete user
if(isset($_POST['delete_user'])){
    $id = $_POST['id'];
    $query = "DELETE FROM users WHERE id = $id";
    $query_run = mysqli_query($conn, $query);
    if($query_run){
        $_SESSION['danger'] = 'User deleted successfully';
        header('location: view-register.php');
    }
    else
    {
        echo 'Error';
    }
}

 // add user

if(isset($_POST['add_user'])){
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $role_as = $_POST['role_as'];
    $status = $_POST['status'] == 'true' ? '1' : '0';
    
    $query = "INSERT INTO users (username, email, password, role_as, status) VALUES ('$username', '$email', '$password', '$role_as', '$status')";
    $result = mysqli_query($conn, $query);
    if($result)
    {
        $_SESSION['message'] = 'User Added Successfully';
        header('location: view-register.php');
    }
    else
    {
        echo 'Error';
    }
}


 // edite user


if(isset($_POST['edit_user']))
{
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $role_as = $_POST['role_as'];
    $status = $_POST['status'] == 'true' ? '1' : '0';
    $id = $_GET['id'];
    $query = "UPDATE users SET username = '$username', email = '$email', password = '$password', role_as = '$role_as', status = '$status' WHERE id = '$id'";
    $result = mysqli_query($conn, $query);
    if($result)
    {
        $_SESSION['message'] = 'User Updated Successfully';
        header('location: view-register.php');
    }
    else
    {
        echo 'Error';
    }
}


// logout

if(isset($_POST['logout'])){
    unset($_SESSION['auth']);
    unset($_SESSION['auth_role']);
    unset($_SESSION['auth_user']);

    $_SESSION['message'] = "Logged out successfully";
    header('location: ../login.php');
}


// add slide

if(isset($_POST['submit'])){
    $title = $_POST['title'];
    $count = $_POST['count'];
    $url = $_POST['url'];
    $status = $_POST['status'];
    $image = $_FILES['image']['name'];
    $image_extension = pathinfo($image, PATHINFO_EXTENSION);
    $filename= time().".".$image_extension;
    $query = "INSERT INTO slide (title, count, url, status, image) VALUES ('$title', '$count', '$url', '$status', '$filename')";
    $result = mysqli_query($conn, $query);
    if($result)
    {
        move_uploaded_file($_FILES['image']['tmp_name'], '../uploads/'.$filename);
        $_SESSION['message'] = 'Slide Added Successfully';
        header('location: index.php');
        exit(0);
    }
    else
    {
        echo 'Error';
    }



}

     
// edit slide

if(isset($_POST['edit_slide'])){

    $id = $_GET['id'];
    $title = $_POST['title'];
    $count = $_POST['count'];
    $url = $_POST['url'];
    $status = $_POST['status'];
    $image = $_FILES['image']['name'];
    $query = "UPDATE slide SET title = '$title', count = '$count', url = '$url', status = '$status', image = '$image' WHERE id = '$id'";
    $result = mysqli_query($conn, $query);
    if($result)
    {
        move_uploaded_file($_FILES['image']['tmp_name'], '../uploads/'.$image);
        $_SESSION['message'] = 'Slide Updated Successfully';
        header('location: index.php');
        exit(0);
    }
    else
    {
        echo 'Error';
    }

   
    

   

}


// delete slide
if(isset($_POST['delete_slide'])){
    $id = $_POST['id'];
    $query = "DELETE FROM slide WHERE id = $id";
    $query_run = mysqli_query($conn, $query);
    if($query_run){
        $_SESSION['danger'] = 'Slide deleted successfully';
        header('location: index.php');
    }
    else
    {
        echo 'Error';
    }
}

// add portfolio
  if(isset($_POST['submit_portfolio'])){
    $title = $_POST['title'];
    $url = $_POST['url'];
    $owner = $_POST['owner'];
    $active = $_POST['active'];
    $image = $_FILES['image']['name'];
    $image_extension = pathinfo($image, PATHINFO_EXTENSION);
    $filename= time().".".$image_extension;
    $query = "INSERT INTO portfolio (title, url, owner, active, image) VALUES ('$title', '$url', '$owner', '$active', '$filename')";
   
    $result = mysqli_query($conn, $query);
    if($result)
    {
        move_uploaded_file($_FILES['image']['tmp_name'], '../uploads/'.$filename);
        $_SESSION['message'] = 'Portfolio Added Successfully';
        header('location: view-portfolio.php');
        exit(0);
    }
    else
    {
        echo 'Error';
    }


    

  }
//   edit portfolio
  if(isset($_POST['edit_portfolio'])){
    $id = $_GET['id'];
    $title = $_POST['title'];
    $url = $_POST['url'];
    $owner = $_POST['owner'];
    $active = $_POST['active'];
    $image = $_FILES['image']['name'];
    $query = "UPDATE portfolio SET title = '$title', url = '$url', owner = '$owner', active = '$active', image = '$image' WHERE id = '$id'";
    $result = mysqli_query($conn, $query);
    if($result)
    {
        move_uploaded_file($_FILES['image']['tmp_name'], '../uploads/'.$image);
        $_SESSION['message'] = 'Portfolio Updated Successfully';
        header('location: view-portfolio.php');
        exit(0);
    }
    else
    {
        echo 'Error';
    }

   
    

   

}




//   delete portfolio
  if(isset($_POST['delete_portfolio'])){
    $id = $_POST['id'];
    $query = "DELETE FROM portfolio WHERE id = $id";
    $query_run = mysqli_query($conn, $query);
    if($query_run){
        $_SESSION['danger'] = 'Portfolio deleted successfully';
        header('location: view-portfolio.php');
    }
    else
    {
        echo 'Error';
    }
  }

//   add logo client
if(isset($_POST['submit_logo'])){
    $client = $_POST['client'];
    $active = $_POST['active'];
    $image = $_FILES['logo']['name'];
    $image_extension = pathinfo($image, PATHINFO_EXTENSION);
    $filename= time().".".$image_extension;
    $query = "INSERT INTO client_logo (client, active, logo) VALUES ('$client', '$active', '$filename')";
    
    $result = mysqli_query($conn, $query);
    if($result)
    {
        move_uploaded_file($_FILES['logo']['tmp_name'], '../uploads/'.$filename);
        $_SESSION['message'] = 'Logo Client Added Successfully';
        header('location: view-logo.php');
        exit(0);
    }
    else
    {
        echo 'Error';
    }
}
//   edit logo client
if(isset($_POST['edit_logo'])){
    $id = $_GET['id'];
    $client = $_POST['client'];
    $active = $_POST['active'];
    $image = $_FILES['logo']['name'];
    $query = "UPDATE client_logo SET client = '$client', active = '$active', logo = '$image' WHERE id = '$id'";
    $result = mysqli_query($conn, $query);
    if($result)
    {
        move_uploaded_file($_FILES['logo']['tmp_name'], '../uploads/'.$image);
        $_SESSION['message'] = 'Logo Client Updated Successfully';
        header('location: view-logo.php');
        exit(0);
    }
    else
    {
        echo 'Error';
    }
}
//   delete logo client
if(isset($_POST['delete_logo'])){
    $id = $_POST['id'];
    $query = "DELETE FROM client_logo WHERE id = $id";
    $query_run = mysqli_query($conn, $query);
    if($query_run){
        $_SESSION['danger'] = 'Logo Client deleted successfully';
        header('location: view-logo.php');
    }
    else
    {
        echo 'Error';
    }
}


// add contact
if(isset($_POST['submit_contact'])){
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $company = $_POST['company'];
    $message = htmlspecialchars($_POST['message']);
    $services = $_POST['services'];
    $service="";
    foreach($services as $key => $value){
        if($key ==  count($services) - 1){
            $service .= $value;
        }else{
            $service .= $value.",";
        }
    }

    $query = "INSERT INTO devis (first_name, last_name, email, phone, company, message, services) VALUES ('$first_name', '$last_name', '$email', '$phone', '$company', '$message', '$service')";
    $result = mysqli_query($conn, $query);
    if($result)
    {
        $_SESSION['message'] = 'Devis Added Successfully';
        header('location: view-devis.php');
        exit(0);
    }
    else
    {
        echo 'Error';
    }



}
// add candidature
if(isset($_POST['submit_candidature'])){

    $contrat = $_POST['contrat'];
    $job = $_POST['job'];
    $linkedin = $_POST['linkedin'];
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $message = htmlspecialchars($_POST['message']);
    $cv = $_FILES['pdf']['name'];
    $cv_extension = pathinfo($cv, PATHINFO_EXTENSION);
    $filename= time().".".$cv_extension;

    $portfolio = $_POST['portfolio'];

    $query = "INSERT INTO candidature (contrat, job, linkedin, first_name, last_name, email, phone, message, cv, portfolio) VALUES ('$contrat', '$job', '$linkedin', '$first_name', '$last_name', '$email', '$phone', '$message', '$filename', '$portfolio')";
    $result = mysqli_query($conn, $query);
    if($result)
    {
        move_uploaded_file($_FILES['pdf']['tmp_name'], '../uploads/'.$filename);
        $_SESSION['message'] = 'Candidature Added Successfully';
        header('location: view-candidature.php');
        exit(0);
    }
    else
    {
        echo 'Error';
    }


  
   
    








}

?>