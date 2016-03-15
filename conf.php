<?php 

define('DB_HOST', 'localhost');
define('DB_NAME', 'project');
define('DB_USER', 'root');
define('DB_PASSWORD', '');

$con = mysql_connect(DB_HOST, DB_USER, DB_PASSWORD) or die(mysql_error());
$db = mysql_select_db(DB_NAME,$con) or die ("failt o connect to database".mysql_error());
if($con) {
	if ($db) {
		# code...
		
	}
	else {
		echo "error";
	}
}
else {
	echo "error";
}

?>