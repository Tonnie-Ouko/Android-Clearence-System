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

$query = "SELECT * FROM security WHERE regno = '$reg' ";
$rs = $conn->query($query);
$num = $rs->num_rows;
$rows = $rs->fetch_assoc();

if($num > 0){
	echo "Request Already sent!!";
}else{
	$qry = "INSERT INTO security (`regno`, `name`)
VALUES('$reg','$a $g')";
$result = $conn->query($qry);
if($result == TRUE){
echo "No Issues recorded in Security!";
} else{
echo " Failed. Try Again";
}

}
									
}
?>