<?php 
if($_GET['id'] != ""){ 
	$id = $_GET['id']; 
	$sql = "DELETE FROM users WHERE id='".$id."'"; 
	//$query  = mysql_query($sql); 
} 
?>