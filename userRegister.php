<?php
include('config.php');
$name=$_POST['name'];
$email=$_POST['email'];
$password=$_POST['password'];
$contact=$_POST['contact'];
// $data=array();
// $addressLineOne=$_POST['addressLineOne'];
// $addressLineTwo=$_POST['addressLineTwo'];
// $pin=$_POST['pin'];
$id=rand(1,10000);
$insertQuery="INSERT INTO `user`(`user_id`, `user_name`, `user_phone`, `user_email`, `password`, `status`, `date`) VALUES ('$id','$name','$contact','$email','$password','0',NOW())";
$insResult=mysqli_query($connection,$insertQuery);
if($insResult){
	echo 'YES'.''.gettype($name).' '.$email.' '.$password.' '.$contact;
}else{
	echo 'NO'.''. gettype($name).' '.$email.' '.$password.' '.$contact;;
}

?>