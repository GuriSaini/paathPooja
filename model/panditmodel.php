<?php
require_once 'connection.php';
header('Contect-Type:application/json');

class pandit {

	private $db;
	private $connection;
	function __construct() {

		$this->db         = new db_connection();
		$this->connection = $this->db->getconnection();

	}

	public function insert($pandit_id, $pandit_name, $pandit_phone, $pandit_mail, $pandit_password, $address_line1, $address_line2, $pin, $pooja) {

		$data = array();

		$insert = "INSERT INTO `pandit`(`pandit_id`, `pandit_name`, `pandit_phone`, `pandit_mail`, `pandit_password`, `address_line1`, `address_line2`, `pin`, `pooja`, `status`, `date`) VALUES ('$pandit_id','$pandit_name','$pandit_phone','$pandit_mail','$pandit_password','$address_line1','$address_line2','$pin','$pooja','0','$pooja')";

		$query = mysqli_query($this->connection, $insert);

		if ($query == 1) {

			$data['status'] = 'ok';

		} else {
			$data['error'] = '0';
		}

		return ($data);
		mysqli_close($this->connection);

	}
	public function read() {

		$data = array();

		$read = $_SESSION["panditid"];

		$select = "SELECT * FROM `pandit` WHERE `pandit_id`='$read'";

		$query = mysqli_query($this->connection, $select);

		if (mysqli_num_rows($query) > 1) {
			$data['status'] = 'ok';
			while ($row = mysqli_fetch_array($result)) {

				$temp = array();

				$temp["user_id"]    = $row["user_id"];
				$temp["user_name"]  = $row["user_name"];
				$temp["user_phone"] = $row["user_phone"];

				array_push($data, $temp);
			}

		} else {
			$data['status'] = '0';
			$data['result'] = '';
		}

		return ($data);

	}

	public function update() {}

	public function delete() {}

	public function login($pandit_name, $pandit_password) {

		session_start();

		$data = array();


		$query  = "SELECT * FROM `pandit` WHERE `pandit_name` ='$pandit_name' AND `pandit_password`='$pandit_password'";
		$result = mysqli_query($this->connection, $query);
		if (mysqli_num_rows($result) == 1) {
			$data['status'] = 'ok';
			while ($row = mysqli_fetch_array($result)) {

				$temp              = array();
				$temp["pandit_name"] = $row["pandit_name"];
				$temp["pandit_password"]  = $row["pandit_password"];
				array_push($data, $temp);
				 $_SESSION["user_name"] = $row["pandit_name"];
				 $_SESSION["pandit_name"] = $row["pandit_name"];
				 $_SESSION["check"]     = "pandit";
				 $_SESSION["pandit_id"]     = $row["pandit_id"];
				 print_r($_SESSION);

			}

		} else {
			$data['status'] = '0';
			$data['result'] = '';
		}
		return ($data);
		mysqli_close($this->connection);
     
	}

	public function logout() {
		session_start();
		unset($_SESSION);
		session_destroy();
		session_write_close();
		die;
	}

}

// $user_action = $_POST['user_action'];

// switch ($user_action) {
// $pandit = new pandit;
// // case 'insert':

// $pandit_id       = $_POST['pandit_id'];
// $pandit_name     = $_POST['pandit_name'];
// $pandit_phone    = $_POST['pandit_phone'];
// $pandit_mail     = $_POST['pandit_mail'];
// $pandit_password = $_POST['pandit_password'];
// $address_line1   = $_POST['address_line1'];
// $address_line2   = $_POST['address_line2'];
// $pin             = $_POST['pin'];
// $pooja           = $_POST['pooja'];

// $pandit->insert($pandit_id, $pandit_name, $pandit_phone, $pandit_mail, $pandit_password, $address_line1, $address_line2, $pin, $pooja);

// 	break;

// default:
// 	{
// 		echo json_encode('case error');
// 	}
// 	break;
// }

?>