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