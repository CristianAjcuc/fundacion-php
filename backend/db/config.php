<?php


// Define database
define('dbhost', '66.165.234.218');
define('dbuser', 'systemsg_cryz');
define('dbpass', '-U0(Y=kRG26z');
define('dbname', 'systemsg_cryz');

// Connecting database
try {
	$connect = new PDO("mysql:host=".dbhost."; dbname=".dbname, dbuser, dbpass);
	$connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch(PDOException $e) {
	echo $e->getMessage();
}

?>
