<?php

define('DB_HOST', 'localhost');
define('DB_NAME', 'project');
define('DB_USER', 'root');
define('DB_PASSWORD', '');

$con = mysql_connect(DB_HOST,DB_USER,DB_PASSWORD) or die("fail to connect to the database!" .mysql_error());
$db = mysql_select_db(DB_NAME,$con) or die ("failt o connect to database".mysql_error());

//echo "connection successful";

	$f_name = $_POST['f_name'];
	$l_name = $_POST['l_name'];
	$email = $_POST['email'];
	$phone_no = $_POST['phone_no'];
	$password = $_POST['password'];
	$c_password = $_POST['c_password'];
	$query = "INSERT INTO patient (f_name,l_name,email,phone_no,password,c_password) VALUES ($f_name','$l_name','$email','$phone_no','$password','$c_password')";
	$data = mysql_query($query) or die(mysql_error());
	if($data) {
		echo "your registation is completed";
	}

mysql_close();

?>