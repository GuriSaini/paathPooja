<?php

include ('userModel.php');

$action = $_POST['action'];
$user   = new user;
if ($action == 'insert') {

	$data = array();

	$user_id       = $_POST['user_id'];
	$user_name     = $_POST['user_name'];
	$user_phone    = $_POST['user_phone'];
	$user_email    = $_POST['user_email'];
	$user_password = $_POST['password'];
	$data          = $user->insert($user_id, $user_name, $user_phone, $user_email, $user_password);

	echo json_encode($data);
} elseif ($action == 'login') {

	$data = array();

	$user_name = $_POST['user_name'];
	$password  = $_POST['password'];

	$data = $user->login($user_name, $password);

	echo json_encode($data);

} elseif ($action == 'logout') {

	$user->logout();

}

?>