<?php
  
  include_once 'classes/Login.php';

  $login = new Login();

  if($_SERVER['REQUEST_METHOD']=='POST'){
    
    $email = $_POST['email'];

    $password = md5($_POST['password']);

    if (isset($email) && isset($password)) {
      
      $checkLogin = $login->check_Login($email, $password);
    }
    else{
      $meassage = "Wrong User Email Or Password. Please Try With Write User name Name Password.";
      return $meassage;
    }

  }
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Car Parking Management Systems</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="assets/css/adminlte.min.css">

  <link rel="icon" href="assets/img/car-parking.png" type="image/gif">

  <?php
    if (isset($checkLogin)) {
      ?>
      <script> alert('<?php echo $checkLogin;?>');</script>
      <?php
      
    }
  ?>
</head>
<body style="background: url('assets/img/car-parking-bg.jpg'); background-repeat: no-repeat; background-size: cover;" class="hold-transition login-page">
<div class="login-box">
  <!-- /.login-logo -->
  <div class="card card-outline card-primary">
    <div class="card-header text-center">
      <a href="index2.html" class="h1">
        <img class="animation__shake" src="assets/img/car-parking.png" alt="AdminLTELogo" height="60" width="60">
      </a>
    </div>
    <div class="card-body">
      <h5 class="login-box-msg">Car Parking Management System</h5>
      <p class="login-box-msg">Sign in to start your session</p>
      <form action="" method="post">
        <div class="input-group mb-3">
          <input type="email" name="email" class="form-control" placeholder="Email">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="password" name="password" class="form-control" placeholder="Password">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-8">
            <div class="icheck-primary">
              <input type="checkbox" id="remember">
              <label for="remember">
                Remember Me
              </label>
            </div>
          </div>
          <!-- /.col -->
          <div class="col-4">
            <button type="submit" class="btn btn-primary btn-block">Sign In</button>
          </div>
          <!-- /.col -->
        </div>
      </form>
    </div>
    <!-- /.card-body -->
  </div>
  <!-- /.card -->
</div>
<!-- /.login-box -->

<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="assets/js/adminlte.min.js"></script>
</body>
</html>
