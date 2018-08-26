<?php 

require_once '../db.php';

if($_GET['id'] != null) {
	delPhone($_GET['id']);
	header("Location: ../index.php");
	exit();
}


?>