<?php 
	function dbConnect() {
		$host = 'localhost';
		$user = 'root';
		$password = '';
		$db_name = 'teldir';

		$link = @new mysqli($host, $user, $password, $db_name);
		return $link;
	}

	function closeConnection($link) {
		$link->close();
	}

	function getPhonesList() {
		$db_connection = dbConnect();
		$result = $db_connection->query("SELECT * FROM `contacts` ORDER BY `fio`");
		$listPhones = array();
		while ($row = $result->fetch_row()) {
			$listPhones[] = $row;
		}
		closeConnection($db_connection);
		return $listPhones;
	}

	function addPhone($phone, $address, $fio) {
		$db_connection = dbConnect();
		$db_connection->query("INSERT INTO `contacts` (`phone`, `address`, `fio`) VALUES ('{$phone}', '{$address}', '{$fio}');");
	}

	function delPhone($id) {
		$db_connection = dbConnect();
		$db_connection->query("DELETE FROM `contacts` WHERE `id` = '{$id}'");
		closeConnection($db_connection);
	}
?>