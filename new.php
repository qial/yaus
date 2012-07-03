<?php

require_once('yaus.php');

if($_POST['url']) {
	$url = $_POST['url'];
	$conn = mysql_connect('localhost','root','root');
	if(!$conn) {
		die('Could not connect: '.mysql_error());
	}
	
	mysql_select_db("yaus", $conn);
	
	mysql_query("INSERT INTO mappings (url,short,nice) values ('".
			mysql_real_escape_string($url)."','','')",$conn);
		
	$id = mysql_insert_id();
	
	// update short
	mysql_query("update mappings set short='".
			mysql_real_escape_string(id2code($id))."' where id='".
			mysql_real_escape_string($id)."'");
			
	header( 'Location: http://localhost/yaus/view.php?id='.$id ) ;
}