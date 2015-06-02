<?php
	$host='localhost';
	$user='';
	$password='';

	$database="";
	$conn=mysql_connect($host,$user,$password);

	if(!$conn){
		die(mysql_error("Credential error"));
	}

	$db_sel=mysql_select_db($database);
	if(!$db_sel){
		die(mysql_error("Database error"));
	}

?>

