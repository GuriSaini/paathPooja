<?php
$connection=mysqli_connect("localhost",'root','','paathpooja');
if(isset($_POST['submit'])){
	$poojaCat=$_POST['poojaCat'];
	$count=mysqli_query($connection,"SELECT * FROM `poojaCategory`");
	$pid=mysqli_num_rows($count)+1;
	$query="INSERT INTO `poojaCategory`(`pcat_id`, `pcategory`) VALUES ('$pid','$poojaCat')";
	mysqli_set_charset($connection,'utf8');
	$result=mysqli_query($connection,$query);
	if($result)
      {
        echo("SUCCESS");

      }else{
        echo("failed");
      }
}
?>
<html>
<head>
<title>Admin | Insert Pooja</title>
</head>
<body>
	<form method="POST" action="" enctype="multipart/form-data">
		<input type="text" placeholder="Pooja Category" name="poojaCat">
		
		<input type="submit" value="submit" name="submit">

	</form>
</body>
</html>