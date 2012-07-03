<?php

require_once 'yaus_vars.php';

function id2code($id) {
	return $id;
}

function yaus_connect() {
	$conn = mysql_connect($DB_HOST, $DB_USER, $DB_PASSWORD);
	if(!$conn) {
		die('Could not connect: '.mysql_error());
	}
	
	mysql_select_db("yaus",$conn);
	
	return $conn;
}

function get_url($str) {
	return $BASE_URL . $str;
}

function get_loc($str) {
	return "Location: ".get_url($str);
}

?>