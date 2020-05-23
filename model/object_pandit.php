<?php

include ('panditmodel.php');

$action = $_POST['action'];
$pandit = new pandit;
if ($action == 'insert') {

	$data = array();

	$pandit_id       = $_POST['pandit_id'];
	$pandit_name     = $_POST['pandit_name'];
	$pandit_phone    = $_POST['pandit_phone'];
	$pandit_mail     = $_POST['pandit_mail'];
	$pandit_password = $_POST['pandit_password'];
	$address_line1   = $_POST['address_line1'];
	$address_line2   = $_POST['address_line2'];
	$pin             = $_POST['pin'];
	$pooja           = $_POST['pooja'];

	$data = $pandit->insert($pandit_id, $pandit_name, $pandit_phone, $pandit_mail, $pandit_password, $address_line1, $address_line2, $pin, $pooja);

	echo json_encode($data);
}
elseif ($action == 'login') {

	$data = array();

	$pandit_name = $_POST['pandit_name'];
	$pandit_password  = $_POST['pandit_password'];

	$data = $pandit->login($pandit_name, $pandit_password);

	echo json_encode($data);

} elseif ($action == 'logout') {

	$pandit->logout();

}

?>