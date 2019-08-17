<?php 
	include 'connect.php';
	include 'top.php';
	include 'header.php';



	if(isset($_REQUEST['submit']))
	{
		 $search=$_GET['ten'];
		 if (empty($search)) {
		 	echo "<p>Yêu cầu nhập dữ liệu vào ô</p> ";
		 }
		 else{
		 	$query="SELECT *FROM tintuc WHERE tieude like '%$search%'";
		 	$results=mysqli_query($con,$query);
		 	while ($row = mysqli_fetch_assoc($results)){
		 		?>
		 		<p> <?php echo $row['tieude'] ?></p>
		 	<?php
		 	}
		 }
	}

 ?>



 <?php include 'footer.php'; ?>