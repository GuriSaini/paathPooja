<?php

require_once 'config.php';

class db_connection {

	private $connect;
	function __construct() {
		$this->connect = mysqli_connect(hostname, username, password, dbname) or die("ERROR CONNECTION");

	}
	public function getconnection() {
		return $this->connect;
	}
}

?>