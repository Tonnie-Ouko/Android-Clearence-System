<?php
include 'config.php';
	$a ='tonnie';
	
 //$a = "felix";$a ="firstname";     $_POST[]firstname''	$a = "";	$a = $_POST['firstname'];
 //$a ='firstname';	$a ="";		$firstname ="";		$a = $_POST['firstname']; $a = "felix"; $a = $_POST['user_name'];

$query = "SELECT * FROM users WHERE firstname = '$a' ";
$rs = $conn->query($query);
$num = $rs->num_rows;
$rows = $rs->fetch_assoc();

if($num > 0){
$reg= $rows['regno'];
$g= $rows['lastname'];

$query = "SELECT * FROM `finance` WHERE regno = '$reg' ";
$rs = $conn->query($query);
$num = $rs->num_rows;
$rows = $rs->fetch_assoc();

if($num > 0){
	$w= $rows['status'];
	$b= $rows['comment'];
	echo finance($reg,$w,$b);
}else{
echo "you must clear with finance";
									
}
									
}

function finance($reg,$w,$b){
	include 'config.php';

	$query = "SELECT * FROM `halls` WHERE regno = '$reg' ";
	$rs = $conn->query($query);
	$num = $rs->num_rows;
	$rows = $rs->fetch_assoc();

if($num > 0){
	$c= $rows['status'];
	$d= $rows['comment'];
	echo halls($reg,$w,$b,$c,$d);
}else{
	echo "you must clear with halls";
									
}
									
}

function halls($reg,$w,$b,$c,$d){
	include 'config.php';

	$query = "SELECT * FROM `security` WHERE regno = '$reg' ";
	$rs = $conn->query($query);
	$num = $rs->num_rows;
	$rows = $rs->fetch_assoc();

if($num > 0){
	$e= $rows['status'];
	$f= $rows['comment'];
	echo security($reg,$w,$b,$c,$d,$e,$f);
}else{
	echo "you must clear with security";
									
}
									
}

function security($reg,$w,$b,$c,$d,$e,$f){
	include 'config.php';

	$query = "SELECT * FROM `faculty` WHERE regno = '$reg' ";
	$rs = $conn->query($query);
	$num = $rs->num_rows;
	$rows = $rs->fetch_assoc();

if($num > 0){
	$g= $rows['status'];
	$h= $rows['comment'];
	echo faculty($reg,$w,$b,$c,$d,$e,$f,$g,$h);
}else{
	echo "you must clear with faculty";
									
}
									
}

function faculty($reg,$w,$b,$c,$d,$e,$f,$g,$h){
	include 'config.php';

	$query = "SELECT * FROM `library` WHERE regno = '$reg' ";
	$rs = $conn->query($query);
	$num = $rs->num_rows;
	$rows = $rs->fetch_assoc();

if($num > 0){
	$i= $rows['status'];
	$j= $rows['comment'];
	echo library($reg,$w,$b,$c,$d,$e,$f,$g,$h,$i,$j);
}else{
	echo "you must clear with library";
									
}
									
}

function library($reg,$w,$b,$c,$d,$e,$f,$g,$h,$i,$j){
	include 'config.php';

	$query = "SELECT * FROM `sports` WHERE regno = '$reg' ";
	$rs = $conn->query($query);
	$num = $rs->num_rows;
	$rows = $rs->fetch_assoc();

if($num > 0){
	$k= $rows['status'];
	$l= $rows['comment'];
	echo all($reg,$w,$b,$c,$d,$e,$f,$g,$h,$i,$j,$k,$l);
}else{
	echo "clear all departments";
									
}
									
}


function all($reg,$w,$b,$c,$d,$e,$f,$g,$h,$i,$j,$k,$l){
	include 'config.php';
	
	$query = "SELECT * FROM allsub WHERE regno = '$reg' ";
	$rs = $conn->query($query);
	$num = $rs->num_rows;
	$rows = $rs->fetch_assoc();

if($num > 0){
	echo "Request Already Submited!!";
}else{
	$qry = "INSERT INTO allsub (regno, `finance`, `financecomment`, `sports`, `sportscomment`, `faculty`, `facultycomment`, `halls`, `hallscomment`, `security`, `securitycomment`, `library`, `librarycomment`)
VALUES('$reg','$w','$b','$k','$l','$g','$h','$c','$d','$e','$f','$i','$j')";
$result = $conn->query($qry);


if($result == TRUE){
echo "You are Cleared!";
} else{
echo " Failed. Try Again".mysqli_error($conn);
//
}

}
}
?>