<?php
	$databasehost='192.168.10.9';
	$databaseusername='root';
	$databasepassword='';
	$databasename='ubit';
	$db = mysql_connect($databasehost,$databaseusername,$databasepassword,$databasename) or die('Could not connect to databse, Please run <a href="../setup.php">SETUP</a>! ' . mysql_error());
	mysql_select_db('ubit',	$db);
?>