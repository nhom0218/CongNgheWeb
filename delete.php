<?php 
	
	$id = $_GET['id'];
	
	include '../connect.php';
	$data = mysqli_query($con," delete from  tintuc where id = '$id'") ;  
	if ($data) {
		header("location:admin.php");
	}
 ?>