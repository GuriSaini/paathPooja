<?php
require_once 'connection.php';
header('Contect-Type:application/json');

class user {

	private $db;
	private $connection;
	function __construct() {

		$this->db         = new db_connection();
		$this->connection = $this->db->getconnection();

	}

	public function insert($user_id, $user_name, $user_phone, $user_email, $password) {

		$data = array();

		$insert = "INSERT INTO `user`(`user_id`, `user_name`, `user_phone`, `user_email`, `password`, `status`, `date`) VALUES ('$user_id','$user_name','$user_phone','$user_email','$password','1','2019-09-08')";

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

		$select = "SELECT * FROM `user`";

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

	public function login($user_name, $password) {

		session_start();

		$data = array();

		//$message = "";

		$query  = "SELECT * FROM `user` WHERE `user_name`='$user_name' AND `password`='$password'";
		$result = mysqli_query($this->connection, $query);
		if (mysqli_num_rows($result) == 1) {
			$data['status'] = 'ok';
			while ($row = mysqli_fetch_array($result)) {

				$temp              = array();
				$temp["user_name"] = $row["user_name"];
				$temp["password"]  = $row["password"];
				array_push($data, $temp);
				$_SESSION["user_name"] = $row["user_name"];
				$_SESSION["check"]     = "user";
				print_r($_SESSION);

			}

		} else {
			$data['status'] = '0';
			$data['result'] = '';
		}
		return ($data);
	}

	public function logout() {
		session_start();
		unset($_SESSION);
		session_destroy();
		session_write_close();
		die;
	}

	public function update() {}

	public function delete() {}

}

?>