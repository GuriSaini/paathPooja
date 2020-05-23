<?php
$connection=mysqli_connect("localhost",'root','','paathpooja');
if(isset($_POST['submit'])){
	$poojaName=$_POST['poojaName'];
	$pcat=$_POST['poojaCat'];
	$querycat="SELECT `pcat_id` FROM `poojaCategory` WHERE `pcategory`='$pcat'";
	mysqli_set_charset($connection,'utf8');
	$resultcat=mysqli_query($connection,$querycat);
	while($row=mysqli_fetch_array($resultcat)){
		$pcat=$row['pcat_id'];
	}
	$count=mysqli_query($connection,"SELECT * FROM `pooja`");
	$pid=mysqli_num_rows($count)+1;
	$query="INSERT INTO `pooja`(`p_id`, `p_name`, `pcat`) VALUES ('$pid','$poojaName','$pcat')";
	mysqli_set_charset($connection,'utf8');
	$result=mysqli_query($connection,$query);
	if($result)
      {
      	echo '<script type="text/javascript">';
 
		echo "setTimeout(function () { Swal.fire({
										  type: 'success',
										  title: 'Insertion',
										  text: 'Pooja Inserted',
										  
									})";
		 
		echo '}, 1000);</script>';
      }else{
        echo "failed";
	}
	
}
?>
<html>
<head>
<title>Admin | Insert Pooja</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="description" content="">
<meta name="author" content="">
<link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
<link href="../vendor/bootstrap/css/bootstrap-drawer.css" rel="stylesheet">
<script src="../vendor/jquery/jquery.min.js"  async defer></script>
<script src="../vendor/bootstrap/js/bootstrap.min.js"  async defer></script>
<script src="../vendor/bootstrap/js/drawer.js" type="text/javascript" charset="utf-8" async defer></script>


  <!-- Custom styles for this template -->
<link href="../css/style.css" rel="stylesheet">
  
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@8"></script>

</head>
<body>
	
	<!-- <div class="alert alert-success alert-dismissible" id="success" style="display:none;">
	  <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
	</div> -->
	 <div id="drawerExample" class="drawer dw-xs-10 dw-sm-6 dw-md-5 fold in" aria-labelledby="drawerExample">
        <div class="drawer-controls">
            <a href="#drawerExample" data-toggle="drawer" aria-foldedopen="false" aria-controls="drawerExample" class="btn btn-primary btn-sm">Menu</a>
        </div>
        <div class="drawer-contents">
            <div class="drawer-heading">
                <h2 class="drawer-title">Menu</h2>
            </div>
            <div class="drawer-body">
                <p>
                    This is a properly padded container for content in the
                    drawer that isn't a navigation.
                </p>
                <a href="#">A Regular Link</a>
            </div>
            <ul class="drawer-nav">
                <li role="presentation" class="active"><a href="#">Home</a></li>
                <li role="presentation"><a href="#">Profile</a></li>
                <li role="presentation"><a href="#">Messages</a></li>
            </ul>
            <div class="drawer-footer">
                <small>&copy; Caroline Amaba</small>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row justify-content-center">
	    <div class="col-6">
	      <form method="POST" action="" enctype="multipart/form-data">
			  <div class="">
			    <div class="form-group">
			      <input type="text" class="form-control" placeholder="Pooja Name" name="poojaName" id="poojaName">
			    </div>
			    <div class="form-group">
			      <?php
				      $query='SELECT * FROM `poojaCategory`';
				      mysqli_set_charset($connection,'utf8');
				      $hit=mysqli_query($connection,$query);
				      echo '<select name="poojaCat" id="poojaCat" class="form-control">';
				      while($row=mysqli_fetch_array($hit)){
				      	
				        echo '<option value="'.$row['pcategory'].'">'.$row['pcategory'].'</option>';
				        
				      }
				      echo '</select>';
				    ?>
			    </div>
			    <input type="submit" name="submit" class="btn btn-primary" value="submit" >
			    </div>
			</form>
		</div>
	</div>
    </div>
	



	
</body>

</html>
