<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <link rel="icon" href="assets/images/Kabupaten_Sukabumi.png" type="image/png">

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>LOGIN - Aplikasi DPESDM Kabupaten Sukabumi</title>
    <!-- Custom fonts for this template-->
  <link href="<?php echo base_url().'assets/vendor/fontawesome-free/css/all.min.css'?>" rel="stylesheet" type="text/css">
  <!-- Custom styles for this template-->
  <link href="<?php echo base_url().'assets/css/sb-admin.css'?>" rel="stylesheet">
  </head>
  <body>
    <div class="container">
      <center>
        <h2>APLIKASI DPESDM</h2>
        <img src="assets/images/Kabupaten_Sukabumi.png" width="200">
        <h2>Kabupaten Sukabumi</h2>
      <div class="card card-login mx-auto mt-8">
        <div class="card-header">Login</div>
        <div class="card-body">
              <form method="post" action="<?php echo base_url().'welcome/login' ?>">
            <div class="form-group">
              <div class="form-label-group">
                <input type="text" name="admin_username" class="form-control" placeholder="username" required="required" autofocus="autofocus">
                <label for="admin_username">Username</label>
                  <?php echo form_error('username'); ?>
              </div>
            </div>
            <div class="form-group">
              <div class="form-label-group">
                <input type="password" name="admin_password" class="form-control" placeholder="Password" required="required">
                <label for="admin_password">Password</label>
                  <?php echo form_error('password'); ?>
              </div>
            </div>
            <div class="form-group">
              <div class="checkbox">
                <label>
                  <input type="checkbox" value="remember-me">
                  Remember Password
                </label>
              </div>
              <div class="form-group">
                    <input type="submit" value="Login"  class="btn btn-primary btn-block">
                  </div>
          </form>
          <div class="text-center">
            <a class="d-block small mt-3" href="#">Register an Account</a>
            <a class="d-block small" href="#">Forgot Password?</a>
          </div>
        </div>
      </div>
    </div>
   </center>
   <?php
   if(isset($_GET['pesan'])){
     if($_GET['pesan']=="gagal"){
       echo "<div class='alert alert-danger alert-danger'>";
       echo $this->session->flashdata('alert');
       echo "</div>";
     } else if($_GET['pesan']=='logout'){
         if($this->session->flashdata())
         {
           echo "<div class='alert alert-danger alert-success'>";
           echo $this->session->flashdata('Anda telah logout');
           echo "</div>";
         }
       }else if($_GET['pesan']=='Belum Login'){
         if($this->session->flashdata())
         {
           echo "<div class='alert alert-danger alert-primary'>";
           echo $this->session->flashdata('alert');
           echo "</div>";
         }
       }
       }else{
         if($this->session->flashdata())
         {
           echo "<div class='alert alert-danger alert-message'>";
           echo $this->session->flashdata('alert');
           echo "</div>";
         }
       }
       ?>

      <script type="text/javascript">
      $('.alert-message').alert().delay(3000).slideUp('slow');
      </script>

      <!-- Bootstrap core JavaScript-->
  <script src="<?php echo base_url().'assets/vendor/jquery/jquery.min.js'?>"></script>
  <script src="<?php echo base_url().'assets/vendor/bootstrap/js/bootstrap.bundle.min.js'?>"></script>

  <!-- Core plugin JavaScript-->
  <script src="<?php echo base_url().'assets/vendor/jquery-easing/jquery.easing.min.js'?>"></script>
  </body>
</html>
