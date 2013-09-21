<?php

/*
INITIATOR FILE
*/
	
	$db_host = 'localhost';
	$db_user = 'root';
	$db_pass = '';
	$db_name = 'bin503db';
	
	$link = mysql_connect($db_host, $db_user, $db_pass);
	mysql_set_charset('utf8', $link);
	mysql_select_db($db_name);

?>