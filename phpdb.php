<?php
$server = localhost;
$username = root;
$password =
$db = login;
	$conn = mysql_connect("$server","$username","$password","$db");
	if (!$conn) {
		die("connection failed".mysql_error());
	}
	else{
		print "connection establish";
	}
?>