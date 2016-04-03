<?php
	include 'conf.php';
	
		$email = $_POST['email'];
		$password = $_POST['password'];
		if (!empty($email) && !empty($password)) {
			# code...
			$login = "SELECT * FROM doctor WHERE email = '$email' && password='$password'";
			$query = mysql_query($login);
			if (mysql_num_rows($query)==1) {	
			}
			else {
			}
		}

?>

<html lang="en">
	<head>
		<meta charset="utf-8">
    	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    	<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" type="text/css" href="css/stylesheet1.css">
		<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
		
		<title>hospital management</title>
	</head>
	<body>
		<div  id ="header"> 
			<h1>MNNIT HOSPITAL</h1>
		</div>
		<div id="header2">
			<div id="navbar">
				<nav>
					<ul>
						<li><a href ="index.php">Home</a></li>
						<li><a href ="reg.php">Profile</a></li>
						<li><a href ="index1.php">Logout</a></li>
					</ul>
				</nav>
			</div>
		</div>
		<div id ="content">
			
		</div>
		<div id="footer"></div>
	</body>
</html>
