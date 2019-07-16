<?php
		
include 'config.php';
					
$uname = $_POST['firstname'];
					
$result= "SELECT * from users WHERE firstname = '$uname'";
$rs = $conn->query($result);
$num = $rs->num_rows;

if($num > 0){
	while ($rows = $rs->fetch_assoc()) {
					$id=$rows['feebalance'];
		}

		echo "$id";
									
}

				
?>