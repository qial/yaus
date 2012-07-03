<?php

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
}
else {
	header("Location: http://localhost/yaus/");
	exit;
}
?>
View <?php echo $id ?><br/>
URL: <?php echo $link['url']; ?><br/>
$res: <?php echo print_r($link); ?>