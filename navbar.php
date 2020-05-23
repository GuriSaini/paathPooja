<nav class="navbar fixed-top navbar-expand-lg navbar navbarCustom fixed-top">
    <div class="container">
      <a class="navbar-brand logo" href="index.html">PathPooja.com</a>
      <button class="navbar-toggler navbar-toggler-right custom-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a class="nav-link" href="index.php">Home</a>
          </li>
<li class="nav-item">
            <a class="nav-link" href="">About</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownBlog" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Blog
            </a>
            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownBlog">
              <a class="dropdown-item" href="blog-home-1.html">Blog Home 1</a>
              <a class="dropdown-item" href="blog-home-2.html">Blog Home 2</a>
              <a class="dropdown-item" href="blog-post.html">Blog Post</a>
            </div>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownPortfolio" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Portfolio
            </a>
            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownPortfolio">
              <a class="dropdown-item" href="portfolio-1-col.html">1 Column Portfolio</a>
              <a class="dropdown-item" href="portfolio-2-col.html">2 Column Portfolio</a>
              <a class="dropdown-item" href="portfolio-3-col.html">3 Column Portfolio</a>
              <a class="dropdown-item" href="portfolio-4-col.html">4 Column Portfolio</a>
              <a class="dropdown-item" href="portfolio-item.html">Single Portfolio Item</a>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="">Contact</a>
          </li>
<?php if (empty($_SESSION["user_name"])){
	// <!-- Sign Up & Login Section -->
	echo '<li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownBlog" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Signin/Signup
            </a>
            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownBlog">
              <a class="dropdown-item" href="" data-toggle="modal" data-target="#Modaluserlogin" data-whatever="@getbootstrap">User</a>
              <a class="dropdown-item" href="" data-toggle="modal" data-target="#Modalpanditlogin" data-whatever="@getbootstrap">Panditji</a>
            </div>
          </li>';
} elseif ($_SESSION["user_name"] != '' && $_SESSION["check"] == "user") {

	// <!-- Pandit JI -->
	echo '<li class="nav-item dropdown logout">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownBlog" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Welcome User'.' '.$_SESSION["user_name"].'
            </a>
            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownBlog">
              <a class="dropdown-item" href="" >DashBoard</a>
              <a class="dropdown-item" id="check" href="" >Logout</a>
              
            </div>
          </li>';
}

elseif ($_SESSION["user_name"] != '' && $_SESSION["check"] == "pandit") {

  // <!-- Pandit JI -->
  echo '<li class="nav-item dropdown plogout">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownBlog" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Welcome pandit'.' '.$_SESSION["pandit_name"].'
            </a>
            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownBlog">
              <a class="dropdown-item" href="panditDashboard.php" >DashBoard</a>
              <a class="dropdown-item" id="plogout" href="" >Logout</a>
              
            </div>
          </li>';
}
   
// <!-- Sign Up & Login Section -->

?>
</ul>
      </div>
    </div>
  </nav>

<!-- MODAL login USER -->

<div class="modal fade" id="Modaluserlogin" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header  navbarCustom">
        <h5 class="modal-title logo" id="exampleModalLabel">User Login</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>

        <!-- User Login -->
        <form id="userform">
        <div class="modal-body">
          <div class="form-group">
            <label for="recipient-name" class="col-form-label logo1 ">Email or Phone No:</label>
            <input type="text" class="form-control inputdesign"  name="name" id="user_name">
          </div>
          <div class="form-group">
            <label for="recipient-name" class="col-form-label logo1 ">Password</label>
            <input type="text" class="form-control inputdesign" name="user_password" id="user_password">
          </div>
          <label for="recipient-name" class="col-form-label">Don't have account? <a href="" data-toggle="modal" data-target="#modaluserregister" data-whatever="@getbootstrap">Register</a></label>
        </div>
        <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-custom" id="login" data-dismiss="modal" onclick="">Login</button>

      </div>
        </form>
    </div>
  </div>
</div>
<!-- MODAL login USER -->
<!-- MODAL REGISTRATION USER -->

<div class="modal fade" id="Modalpanditlogin" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header navbarCustom">
        <h5 class="modal-title logo" id="exampleModalLabel">Panditji Login</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form id="pandit">
          <div class="form-group">
            <label for="recipient-name" class="col-form-label logo1">Email or Phone No:</label>
            <input type="text" class="form-control inputdesign" id="p_name">
          </div>
          <div class="form-group">
            <label for="recipient-name" class="col-form-label logo1">Password</label>
            <input type="text" class="form-control inputdesign" id="p_password">
          </div>
          <label for="recipient-name" class="col-form-label">Don't have account? <a href="" data-toggle="modal" data-target="#exampleModalregister" data-whatever="@getbootstrap">Register</a></label>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-custom" id="plogin" data-dismiss="modal" onclick="">Login</button>
      </div>
    </div>
  </div>
</div>
<!-- MODAL REGISTRATION USER -->
<div class="modal fade" id="exampleModalregister" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header navbarCustom">
        <h5 class="modal-title logo" id="exampleModalLabel">Panditji Register</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form id="pandit_form">
          <div class="form-group">
            <input type="text" class="form-control inputdesign" id="name" placeholder="Name">
          </div>
          <div class="form-group">
            <input type="text" class="form-control inputdesign" id="phone" placeholder="Phone No">
          </div>
          <div class="form-group">
            <input type="text" class="form-control inputdesign" id="mail" placeholder="Email">
          </div>
          <div class="form-group">
            <input type="text" class="form-control inputdesign" id="password" placeholder="Password">
          </div>
          <div class="form-group">
            <input type="text" class="form-control inputdesign" id="confirm_password" placeholder="Confirm Password">
          </div>
          <div class="form-group">
            <input type="text" class="form-control inputdesign" id="address_line1" placeholder="Address Line 1">
          </div>
          <div class="form-group">
            <input type="text" class="form-control inputdesign" id="address_line2" placeholder="Address Line 2">
          </div>
          <div class="form-group">
            <input type="text" class="form-control inputdesign" id="pin" placeholder="PIN Code">
          </div>
          <div class="form-group">
            <input type="date" class="form-control inputdesign" id="pooja" placeholder="date">
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-custom" id="insert" data-dismiss="modal" onclick="">Register</button>
      </div>
    </div>
  </div>
</div>
<!-- MODAL REGISTRATION USER -->
<div class="modal fade" id="modaluserregister" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header navbarCustom">
        <h5 class="modal-title logo" id="exampleModalLabel">User Register</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form id="user_form">
          <div class="form-group">
            <input type="text" class="form-control inputdesign" id="uname" placeholder="Name">
          </div>
          <div class="form-group">
            <input type="text" class="form-control inputdesign" id="contact" placeholder="Phone No">
          </div>
          <div class="form-group">
            <input type="text" class="form-control inputdesign" id="email" placeholder="Email">
          </div>
          <div class="form-group">
            <input type="text" class="form-control inputdesign" id="upassword" placeholder="Password" onkeyup=''>
          </div>
          <div class="form-group">
            <input type="text" class="form-control inputdesign" id="confirm_password" placeholder="Confirm Password" onkeyup=''>
             <span id='message'></span>
          </div>
          <!-- <div class="form-group">
            <input type="text" class="form-control inputdesign" id="recipient-name" placeholder="Address Line 1">
          </div>
          <div class="form-group">
            <input type="text" class="form-control inputdesign" id="recipient-name" placeholder="Address Line 2">
          </div>
          <div class="form-group">
            <input type="text" class="form-control inputdesign" id="recipient-name" placeholder="PIN Code">
          </div> -->
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-custom" id="user_resgister">Register</button>
      </div>
    </div>
  </div>
</div>
<!-- LOGIN/REGISTER JS SECTION -->


<!-- LOGIN/REGISTER JS SECTION -->
<!-- CheckDATE JS SECTION -->
<script>


function userLogin(){
  alert("User Login");
}
function panditRegister(){
 alert("Pressed pandit Reg");
}
function panditLogin(){
  alert("pandit Login");
}
var check = function() {
  if (document.getElementById('password').value ==
    document.getElementById('confirm_password').value) {
    document.getElementById('message').style.color = 'green';
    document.getElementById('message').innerHTML = 'matching';
  } else {
    document.getElementById('message').style.color = 'red';
    document.getElementById('message').innerHTML = 'not matching';
  }
}
</script>
<script>
 $(document).ready(function(){
      $('#register_button').click(function(){
           var name = $('#name').val();
           var email = $('#email').val();
           var contact = $('#contact').val();
           var password = $('#password').val();
           if(name != '' && password != '')
           {
                $.ajax({
                     url:"userRegister.php",
                     method:"POST",


                     data: {name:name,email:email,contact:contact,password:password},
                     success:function(data)
                     {
                         console.log(data);
                          alert(data);
                          if(data == 'YES')
                          {
                               console.log(data);
                          }
                          else
                          {
                            console.log(data);
                               // $('#loginModal').hide();
                               // location.reload();
                          }
                     }
                });
           }
           else
           {
                alert("all Fields are required");
           }
      });

 });
 </script>
