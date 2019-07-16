<?php

	include 'config.php';
	$a = $_POST['emailadress'];
	$b = $_POST['password'];
	mysqli_query($conn,"update users set password='$b' where email = '$a' ")or die(mysqli_error($conn));
	echo "Password Successfully Updated";


?>