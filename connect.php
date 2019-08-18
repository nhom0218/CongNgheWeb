<?php
$hostname="localhost";
$username="root";
$password="";
$database="login";
$con = mysqli_connect($hostname,$username,$password,$database);
$data = mysqli_query($con,"SET NAMES UTF8");
?>