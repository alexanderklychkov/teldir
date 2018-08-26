<?php 
require_once '../db.php';

if($_GET['do_add']) {
	if(addPhone($_GET['phone'], $_GET['address'], $_GET['fio']) == true) {
		exit();
	}
}

header("Location: ../index.php");

?>