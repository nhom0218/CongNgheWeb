<?php 
	
	$i = $_POST['img'];
	$t = $_POST['tieude'];
	$a = $_POST['tomtat'];
	$n = $_POST['noidung'];
	$b = $_POST['ngaydang'];
	$v = $_POST['view'];
	include 'connect.php';
	$data = mysqli_query($con,"insert into tintuc(img,tieude,tomtat,noidung,ngaydang,view) values ('$i','$t','$a','$n','$b','$v')") ;  
	if ($data) {
		header("location:admin.php");
	}
 ?>