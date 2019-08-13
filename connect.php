<?php

$hostname="localhost";
$username="root";
$password="";
$database="khoacntt";

$con = mysqli_connect($hostname,$username,$password,$database);

$data = mysqli_query($con,"SET NAMES UTF8");




// if ($con) {

// 	echo "Thanh cong";

// 	}else
// 	{

// 		echo "khkong thanh cong";

// 	};
// $sql = "DELETE FROM user  WHERE userid=1;";
// echo $sql;
// mysqli_query($con,$sql);
?>
<!-- // TỪ nãy làm quên không lưu nên nó không chạy đang quen csvode
//:)) -->