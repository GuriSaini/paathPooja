<!DOCTYPE html>
<html lang="en">
<?php
include('config.php');
?>
<head>

  
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Paathpooja.com</title>

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="css/style.css" rel="stylesheet">
  
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@8"></script>
  <script src="//cdnjs.cloudflare.com/ajax/libs/moment.js/2.5.1/moment.min.js"></script>
<link href="css/calender.css" rel="stylesheet">
<script src="js/calender.js" type="text/javascript" charset="utf-8" async defer></script>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.5/jquery.min.js"></script>
  

</head>
<body>

  <!-- NavBAr-->
  <?php include('navbar.php'); ?>
  <!-- NavBAr-->
  <!-- breadcrumb -->
  <nav aria-label="breadcrumb">
    <ol class="breadcrumb breadcrumb-custom-ol">
      <li class="breadcrumb-item"><a href="userDashboard.php">DashBoard</a></li>
      <li class="breadcrumb-item active" aria-current="page">Booking</li>
    </ol>
  </nav>
  <!-- breadcrumb -->
  <!-- content Section -->
  <div class="row justify-content-center">
    <div class="md-col-12">
      <div class="list-group">
        <button type="button" class="list-group-item  list-head-booking">Bookings</button>
        <div class="list-group-item list-group-item-action list-group-item-success">
          <p>Upcoming Booking. <button type="" class="btn btn-info">View</button></p>
        </div>
        <div class="list-group-item list-group-item-action list-group-item-danger">
          <p>Previous Booking. <button type="" class="btn btn-info">View</button></p>
        </div>
      </div>
    </div>
  </div>
  
  <!-- content Section -->

  <footer class="py-5 bg-dark">
    <div class="container">
      <p class="m-0 text-center text-white">Copyright &copy; Your Website 2019</p>
    </div>
    <!-- /.container -->
  </footer>
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
</body>
</html>