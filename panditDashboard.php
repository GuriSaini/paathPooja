<!DOCTYPE html>
<html lang="en">
<?php
include('config.php');
session_start();
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
      <!-- <li class="breadcrumb-item"><a href="#">DashBoard</a></li>
      <li class="breadcrumb-item"><a href="#">Library</a></li> -->
      <li class="breadcrumb-item active" aria-current="page">DashBoard</li>
    </ol>
  </nav>
  <!-- breadcrumb -->
  <!-- content Section -->
  <div class="row justify-content-md-center">
    <div class="col-sm-6" style="display: contents;">
      <div class="card" style="width: 18rem; margin: 2%;">
        <img class="card-img-top" src="images/pandit-avatar.png" alt="pandit profile">
        <div class="card-body">
          <a href="panditProfile.php"><button type="button" class="btn btn-custom"">Edit Personal Details</button></a>
        </div>
      </div>
    </div>
    <div class="col-sm-6" style="display: contents;">
      <div class="card" style="width: 18rem; margin: 2%;">
        <img class="card-img-top" src="images/number.jpg" alt="Card image cap">
        <div class="card-body">
          <a href="panditPoojaUpload.php"><button type="button" class="btn btn-custom"">Upload Pooja Details</button></a>
        </div>
      </div>
    </div>
    <div class="col-sm-6" style="display: contents;">
      <div class="card" style="width: 18rem; margin: 2%;">
        <img class="card-img-top" src="images/booking.png" alt="Card image cap">
        <div class="card-body">
          <a href="panditBooking.php"><button type="button" class="btn btn-custom"">Bookings</button></a>
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