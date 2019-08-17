<?php 
	$id = $_POST['id'];
	$i = $_POST['img'];
	$t = $_POST['tieude'];
	$a = $_POST['tomtat'];
	$n = $_POST['noidung'];
	$b = $_POST['ngaydang'];
	
	include '../connect.php';
	$data = mysqli_query($con,"update tintuc set img='$i', tieude='$t',tomtat='$a', noidung='$n', ngaydang='$b' where id='$id' ") ;  
	if ($data) {
		header("location:list_tintuc.php");
	}
 ?>