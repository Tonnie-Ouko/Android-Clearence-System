<?php
include 'config.php';
$a = $_POST['firstname'];

$query = "SELECT * FROM users WHERE firstname = '$a' ";
$rs = $conn->query($query);
$num = $rs->num_rows;
$rows = $rs->fetch_assoc();

if($num > 0){
$reg= $rows['regno'];
$g= $rows['lastname'];

$query = "SELECT * FROM finance WHERE regno = '$reg' ";
$rs = $conn->query($query);
$num = $rs->num_rows;
$rows = $rs->fetch_assoc();

if($num > 0){
	echo all($reg,$g);
}else{
echo "you must clear with finance";
									
}
									
}

function all($reg,$g){
	include 'config.php';
	$query = "SELECT * FROM allsub WHERE regno = '$reg' ";
	$rs = $conn->query($query);
	$num = $rs->num_rows;
	$rows = $rs->fetch_assoc();

if($num > 0){
	echo "Request Already Submited!!";
}else{
	$qry = "INSERT INTO allsub (`regno`)
VALUES('$reg')";
$result = $conn->query($qry);
if($result == TRUE){
echo "Request sent Successful!";
} else{
echo "See your Life, Clear with ALL the Departments First";
}

}
}
?>