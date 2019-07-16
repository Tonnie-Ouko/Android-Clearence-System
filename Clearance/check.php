<?php
	
include 'config.php';
 $a = $_POST['user_name'];


$query = "SELECT * FROM users WHERE firstname = '$a' ";
$rs = $conn->query($query);
$num = $rs->num_rows;
$rows = $rs->fetch_assoc();

if($num > 0){
$b=$rows['regno'];

$result = mysqli_query($conn,"SELECT * FROM allsub 	WHERE regno='$b'");

$json = array();

$total_records = mysqli_num_rows($result);

if($total_records > 0){

  while ($row = mysqli_fetch_assoc($result)){

    $json[] = $row;

  }

}

echo json_encode($json);
									
}



?>