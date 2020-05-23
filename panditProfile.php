<!DOCTYPE html>
<html lang="en">
<?php
include('config.php');
session_start();
//echo $_SESSION["pandit_id"];
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
      <li class="breadcrumb-item"><a href="panditDashboard.php">DashBoard</a></li>
      <li class="breadcrumb-item active" aria-current="page">Personal Details</li>
    </ol>
  </nav>
  <!-- breadcrumb -->
  <!-- content Section -->
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-4">
        <img class=" mx-auto d-block" src="images/pandit-avatar.png" alt="pandit profile" style="height: 200px;width: 200px; border-radius: 100%;">
      </div>
    </div>
     <div class="row justify-content-center">
      <div class="col-4">
        <ul class="list-group">
          <?php 

          $read = $_SESSION["pandit_id"];

    $select = "SELECT * FROM `pandit` WHERE `pandit_id`='$read'";

    $query = mysqli_query($connection,$select);

    if (mysqli_num_rows($query) ==1) {
      
      while ($row = mysqli_fetch_array($query)) { ?>
      
     
          <li class="list-group-item navbarCustom logo">Personal Details</li>
          <li class="list-group-item">Name:<?php echo $row['pandit_name']; ?></li>
          <li class="list-group-item">Email:<?php echo $row['pandit_mail']; ?></li>
          <li class="list-group-item">Phone No:<?php echo $row['pandit_phone']; ?></li>
          <li class="list-group-item">Address:<?php echo $row['address_line1']; ?></li>
          <li class="list-group-item navbarCustom logo">Portfolio</li>
          <li class="list-group-item">xxxxxx:</li>
          <li class="list-group-item">xxxxxx:</li>
          <li class="list-group-item">xxxxxx:</li>
          <li class="list-group-item">xxxxxx:</li>
         <?php }
         } ?>
        </ul>
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