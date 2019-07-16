<?php
						
include 'config.php';

$a = $_POST['firstname'];
$b = $_POST['lastname'];
$c = $_POST['phonenumber'];
$d = $_POST['emailadress'];
$e = $_POST['password'];
$f = $_POST['faculty'];
$g = $_POST['course'];
$regno = $_POST['regno'];

$qu = "SELECT * FROM users WHERE regno = '$regno' ";

$query = "SELECT * FROM users1 WHERE regno = '$regno' ";

$qry = "INSERT INTO users (`firstname`, `lastname`, `phone`, `regno`, `email`, `password`, `faculty`, `course`)
VALUES('$a','$b','$c','$regno','$d','$e','$f','$g')";


$rs = $conn->query($query);
$num = $rs->num_rows;
$rows = $rs->fetch_assoc();

if($num > 0){
	//echo updatealreadyfee();

	echo Tonnie($qu,$qry);								
 } else{
			echo "Please Register with the Admin First";
 
 
//$result = $conn->query($qry);
//if($result == TRUE){
	//echo updatefee();

//} else{
//echo "Account Creation Failed. Try Again";

 }
									
//}	
function Tonnie($qu,$qry){
	include 'config.php';
	
	$rs = $conn->query($qu);
	$num = $rs->num_rows;
	$rows = $rs->fetch_assoc();

if($num > 0){
	echo updatealreadyfee();
	 							
		} else{
			$result = $conn->query($qry);
if($result == TRUE){
	echo updatefee();

	} else{
		echo "Account Creation Failed. Try Again";
 }								
}
}

function updatefee(){
	include 'config.php';
	$c = $_POST['phonenumber'];
	mysqli_query($conn,"update users set feebalance='2500' where phone = '$c' ")or die(mysqli_error($conn));
	echo "Account Creation Successful";
}
function updatealreadyfee(){
	include 'config.php';
	$c = $_POST['phonenumber'];
	mysqli_query($conn,"update users set feebalance='2500' where phone = '$c' ")or die(mysqli_error($conn));
	echo "Registration Number already exists.....Try Again..!!";
}
					
?>