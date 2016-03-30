<?php
	include 'conf.php';
	
		$email = $_POST['email'];
		$password = $_POST['password'];
		if (!empty($email) && !empty($password)) {
			# code...
			$login = "SELECT * FROM doctor WHERE email = '$email' && password='$password'";
			$query = mysql_query($login);
			if (mysql_num_rows($query)==1) {
				# code...
				echo "welcome to your profile ";
			}
			else {
				echo "can't be login";
			}
		}

?>

<html lang="en">
	<head>
		<meta charset="utf-8">
    	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    	<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" type="text/css" href="css/stylesheet.css">
		<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
		
		<title>hospital management</title>
	</head>
	<body>
		<button>logout</button>