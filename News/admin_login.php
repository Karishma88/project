<?php
session_start();


?>



<!DOCTYPE html>
<html>
    <head>
        <title>Admin Login</title>
        <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.slim.min.js"></script>

<!-- Popper JS -->
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>

<!-- custom css -->
  <link rel="stylesheet" href="style/style.css">
</head>
<body>
<div class="container">
    <div class="row a">
    <div class="col-4 text-center">
    
    
    <img  src="https://w7.pngwing.com/pngs/776/349/png-transparent-television-channel-captain-news-tamil-sun-tv-news-miscellaneous-television-trademark.png" alt="" width="82" height="92">
    

        <form action="admin_login.php" method="POST">
            <h3> Admin Login</h3>
  <div class="form-group">
    <label for="email">Username:</label>
    <input type="Username"  name="email" class="form-control"  id="email">
  </div>
  <div class="form-group">
    <label for="pwd">Password:</label>
    <input type="password" class="form-control" name="password" id="pwd">
  </div>
  
  <input type="submit"  name="submit" class="btn btn-primary" value="login">
  <div class="extra">
    <a href="#">Forgot Password ?</a>
</div>
</form>

    </div>
</div>
</div>
</body>
</html>

     <?php
      include('db/connection.php');

        if(isset($_POST['submit'])) {


      $email=$_POST['email'];
    $password=$_POST['password'];

    $query=mysqli_query($conn,"select * from admin_login where name='$email' AND password='$password' ");

    if($query) {

        if(mysqli_num_rows($query)>0) {


          $_SESSION['email']=$email;

            header('location:home.php');

        }else{
            echo "<script> alert('Incoreect Password') </script>";
    }

    }

}

?>