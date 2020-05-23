<?php

//insert.php
include("../config.php");
$title= $_POST['title'];
$start_event=$_POST['start'];
$end_event=$_POST['end'];

$id=rand(1000,100000);
if(isset($_POST["title"]))
{
 $query = "INSERT INTO `subhdin`(`id`, `pooja`, `startdate`, `enddate`) VALUES ($id,$title,$start_event,$end_event) ";
 $fire=mysqli_query($connection,$query);
 if($fire){
 	echo "1";
 }else{
 	echo "0";
 }
}


?>