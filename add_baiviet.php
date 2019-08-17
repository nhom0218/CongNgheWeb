<?php 
	
	$i = $_POST['img'];
	$t = $_POST['tieude'];
	$a = $_POST['tomtat'];
	$n = $_POST['noidung'];
	$b = $_POST['ngaydang'];
	
	include '../connect.php';
	$data = mysqli_query($con,"insert into tintuc(img,tieude,tomtat,noidung,ngaydang) values ('$i','$t','$a','$n','$b')") ;  
	if ($data) {
		header("location:admin.php");
	}
 ?>

 