<?php
ob_start();
session_start();
error_reporting(E_ALL);

//conneciton Variables//
define('DBHost', 'localhost');
define('DBUser', 'crakjjxm_red2');
define('DBPassword', 'Henrya1234$');
define('DBName', 'crakjjxm_red2');

$con = new MySQLi(DBHost,DBUser,DBPassword,DBName);

	 if ($con->connect_errno) {
			 die("ERROR : -> ".$con->connect_error);

 }


?>
