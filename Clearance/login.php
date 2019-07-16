<?php
		
include 'config.php';
					
$uname = $_POST['user_name'];
$pass = $_POST['password'];
					
$query = "SELECT * FROM users WHERE regno = '$uname' AND password = '$pass'";
$rs = $conn->query($query);
$num = $rs->num_rows;
$rows = $rs->fetch_assoc();

if($num > 0){
echo "Login Successful";
									
} else{
echo "Login Failed. Try Again..";
									
} 
	
				
?>