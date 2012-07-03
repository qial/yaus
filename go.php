<?php

require_once('yaus.php');

if($_GET['id']) {
	$id = $_GET['id'];
	$conn = mysql_connect('localhost','root','root');
	if(!$conn) {
		die('Could not connect: '.mysql_error());
	}
	
	mysql_select_db("yaus", $conn);
	
	$res = mysql_query("select * from mappings where id='".
		mysql_real_escape_string($id)."'",$conn);
	$link = mysql_fetch_assoc($res);
	
	header("Location: http://".$link['url']);
} else {
	header("Location: http://localhost/yaus/");
}

?>