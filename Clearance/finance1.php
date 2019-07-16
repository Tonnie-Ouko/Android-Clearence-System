<?php
include 'config.php';
$a = $_POST['firstname'];
//$p = $_POST['phone'];

$query = "SELECT * FROM users WHERE firstname = '$a' ";
$rs = $conn->query($query);
$num = $rs->num_rows;
$rows = $rs->fetch_assoc();

if($num > 0){
$reg= $rows['regno'];
$g= $rows['lastname'];
$p= $rows['feebalance'];

if ($p < 1) { 

$query = "SELECT * FROM finance WHERE regno = '$reg' ";
$rs = $conn->query($query);
$num = $rs->num_rows;
$rows = $rs->fetch_assoc();

if($num > 0){
	echo "Request Already sent!!";
}else{
	$qry = "INSERT INTO finance (`regno`, `name`)
VALUES('$reg','$a $g')";
$result = $conn->query($qry);
if($result == TRUE){
echo "Finance is Cleared!";
} else{
echo " Failed. Try Again";
}
}
}
}
?>