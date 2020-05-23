<?php
include ('config.php');
session_start();
?>
<!DOCTYPE html>
<html lang="en">

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
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<style>

  #alert_popover{
    display: block;
    position: absolute;
    bottom: 50px;
    left: 50px;
  }
  .alert_w{
    display: table-cell;
    vertical-align: bottom;
    height: auto;
    width: 200px;
  }
  .alert_d{
    color: #333333;
    background-color: #f2f2f2;
    border-color: #cccccc;
  }

</style>

</head>

<body>

<!-- Navigation -->
<?php include ('navbar.php');?>
<header>

    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
      <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner" role="listbox">
        <!-- Slide One - Set the background image for this slide in the line below -->
        <div class="carousel-item active" style="background-image: url('images/banner1.jpg')">
          <div class="carousel-caption d-none d-md-block">
            <h3>First Slide</h3>
            <p>This is a description for the first slide.</p>
          </div>
        </div>
        <!-- Slide Two - Set the background image for this slide in the line below -->
        <div class="carousel-item" style="background-image: url('images/banner2.jpg')">
          <div class="carousel-caption d-none d-md-block">
            <h3>Second Slide</h3>
            <p>This is a description for the second slide.</p>
          </div>
        </div>
        <!-- Slide Three - Set the background image for this slide in the line below -->
        <div class="carousel-item" style="background-image: url('images/banner3.jpeg')">
          <div class="carousel-caption d-none d-md-block">
            <h3>Third Slide</h3>
            <p>This is a description for the third slide.</p>
          </div>
        </div>
      </div>
      <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
  </header>

  <!-- Page Content -->
  <div class="container">

    <h1 class="my-4"><center>Welcome to PathPooja.com</center></h1>
<!-- LIST OF path and Puja -->
    <h2>Path Pooja</h2>
<?php

$querycat = "SELECT * FROM `poojaCategory`";
mysqli_set_charset($connection, 'utf8');
$resultcat = mysqli_query($connection, $querycat);
echo '<div class="container">
           <div class="row">';
while ($rowcat = mysqli_fetch_array($resultcat)) {
	echo '

            <div class="col">
            <ol class="list-group">
            <li class="list-group-item navbarCustom logo"><img src="images/kalash.png" width="25px" height="30px"> '.$rowcat['pcategory'].'</li>';
	$pcat  = $rowcat['pcat_id'];
	$query = "SELECT * FROM `pooja` where `pcat`='$pcat'";
	mysqli_set_charset($connection, 'utf8');
	$hit = mysqli_query($connection, $query);
	while ($row = mysqli_fetch_array($hit)) {
		echo '
                <li class="list-group-item "><img src="images/swastik.png" width="25px" height="25px"><a class="pujalist" href="poojadetails.php?id='.$row['p_id'].'"> '.$row['p_name'].'</a></li>
              </ol>'
		;
	}
	echo "</div>
            ";
}
echo "</div>
            </div>";

// if($hit)
// {
//   echo("SUCESS");

// }else{
//   echo("failed");
// }
?>
<!-- check date -->
    <!-- <div class="row">
      <div class="col-lg-4 col-sm-6 portfolio-item">
        <div class="card h-100">

          <div class="card-body">
            <h4 class="card-title">
              <a href="#">Paath Two</a>
            </h4>
            <p class="card-text">Lorem ipsum dolor sit amet, </p>
           <button type="button" class="btn btn-custom" onclick="myFunction()">Check Date</button>
          </div>
        </div>
      </div>
    </div> -->
    <!-- check Date -->

    <!-- Features Section -->
   <!--  <div class="row">
      <div class="col-lg-6">
        <h2>Modern Business Features</h2>
        <p>The Modern Business template by Start Bootstrap includes:</p>
        <ul>
          <li>
            <strong>Bootstrap v4</strong>
          </li>
          <li>jQuery</li>
          <li>Font Awesome</li>
          <li>Working contact form with validation</li>
          <li>Unstyled page elements for easy customization</li>
        </ul>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corporis, omnis doloremque non cum id reprehenderit, quisquam totam aspernatur tempora minima unde aliquid ea culpa sunt. Reiciendis quia dolorum ducimus unde.</p>
      </div>
      <div class="col-lg-6">
        <img class="img-fluid rounded" src="http://placehold.it/700x450" alt="">
      </div>
    </div> -->
    <!-- /.row -->

    <hr>

    <!-- Call to Action Section -->
    <!-- <div class="row mb-4">
      <div class="col-md-8">
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestias, expedita, saepe, vero rerum deleniti beatae veniam harum neque nemo praesentium cum alias asperiores commodi.</p>
      </div>
      <div class="col-md-4">
        <a class="btn btn-lg btn-secondary btn-block" href="#">Call to Action</a>
      </div>
    </div> -->

    <div id="alert_popover">
      <div class="alert_w">
        <div class="content">

        </div>
      </div>
    </div>

  </div>
  <!-- /.container -->

  <!-- Footer -->
  <footer class="py-5 bg-dark">
    <div class="container">
      <p class="m-0 text-center text-white">Copyright &copy; Your Website 2019</p>
    </div>
    <!-- /.container -->
  </footer>

  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>


<!-- LOGIN/REGISTER JS SECTION -->


<!-- LOGIN/REGISTER JS SECTION -->
<!-- CheckDATE JS SECTION -->


<!-- PANDIT INSERT SCRIPT -->
<!-- <script>

  $(document).ready(function($) {

    $('#check').on('click',function(event){
        alert(1);
    });

  });

</script> -->
<script>

  $(document).ready(function($) {

    $('#insert').on('click',function(event) {

      var min = 1;
      var max = 1000;
      var id =(Math.floor(Math.random() * (max - min + 1) + min));
      // var id = $('#name').val();
      var name = $('#name').val();
      var phone = $('#phone').val();
      var mail = $('#mail').val();
      var password = $('#password').val();
      var address_line1 = $('#address_line1').val();
      var address_line2 = $('#address_line2').val();
      var pin = $('#pin').val();
      var pooja = $('#pooja').val();

      //alert($id+$name+$phone+$mail+$password+$address_line1+$address_line2+$pin+$pooja);

      $.ajax({

                    url:'model/object_pandit.php',
                    method:'POST',
                    dataType:'json',
                    data:{
                      action:'insert',
                      pandit_id:id,
                      pandit_name:name,
                      pandit_phone:phone,
                      pandit_mail:mail,
                      pandit_password:password,
                      address_line1:address_line1,
                      address_line2:address_line2,
                      pin:pin,
                      pooja:pooja
                    },

                    success:function(data){

                          if(data.status=='ok'){

                             swal(data.status);


                          }

                          else{
                            alert(data.error);
                          }

                    }


                });


        });

  });




</script>


  <!-- USER INSERT SCRIPT -->
<script>

  $(document).ready(function($) {
    $('#user_resgister').on('click',function(event) {

      var min = 1;
      var max = 1000;
      var id =(Math.floor(Math.random() * (max - min + 1) + min));
      var id = $('#name').val();
      var name = $('#uname').val();
      var contact = $('#contact').val();
      var email = $('#email').val();
      var password = $('#upassword').val();
      //alert(name+''+password);

      $.ajax({

                    url:'model/object.php',
                    method:'POST',
                    dataType:'json',
                    data:{
                      action:'insert',
                      user_id:id,
                      user_name:name,
                      user_phone:contact,
                      user_email:email,
                      password:password
                    },

                    success:function(data){

                          if(data.status=='ok'){

                             alert(data.status);

                          }

                          else{
                            alert(data.error);
                          }

                    }


                });


        });

  });

</script>

<script>
  $(document).ready(function($) {

    $('#login').on('click',find('#userform'),function(event) {
       var name= $('#user_name').val();
       var password=$('#user_password').val();

       //alert(name+" "+password);

        $.ajax({

              url:'model/object.php',
              method:'POST',
              dataType:'json',
              data:{
                action:'login',
                user_name:name,
                password:password,
              },
              success:function(data){


                  if(data.status=='ok'){
                    alert(data.status);
                    
                  }

                  else{
                    alert(data.error);
                  }

              }

        });
    });

  });


</script>

<script>
  $(document).ready(function($) {

    $('#check').on('click',find('.logout'),function(event) {
     // alert(1);
        $.ajax({

              url:'model/object.php',
              method:'POST',
              dataType:'json',
              data:{
                action:'logout'
              },
              success:function(data){

              }

        });
    });

  });


</script>

<script>
  $(document).ready(function($) {

    $('#plogout').on('click',find('.plogout'),function(event) {
     // alert(1);
        $.ajax({

              url:'model/object_pandit.php',
              method:'POST',
              dataType:'json',
              data:{
                action:'logout'
              },
              success:function(data){

              }

        });
    });

  });


</script>
<script>
  $(document).ready(function($) {

    $('#plogin').on('click',find('#pandit'),function(event) {
    //  alert(1);
       var name= $('#p_name').val();
       var password=$('#p_password').val();

        $.ajax({

              url:'model/object_pandit.php',
              method:'POST',
              dataType:'json',
              data:{
                action:'login',
                pandit_name:name,
                pandit_password:password
              },
              success:function(data){
                if(data.status=='ok'){
                    alert(data.status);
                    
                  }

                  else{
                    alert(data.error);
                  }
              }

        });
    });

  });


</script>


<script>
function myFunction() {
 Swal.fire({
  html:'<div id="calendar"></div>',

});
 test();
}

</script>


<!-- CheckDATE JS SECTION -->

</body>

</html>
