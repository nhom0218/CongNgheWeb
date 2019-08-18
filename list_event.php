<?php 
	include 'connect.php';
	include 'top.php';
	include 'header.php';
	include 'menu.php';
	$sql = mysqli_query($con,'select *from sukien');
 ?>
<div class="container">
	<!-- <h2>TIN TỨC</h2> -->
	<div class="row" >
		
		<?php 
			
			 while ($row = mysqli_fetch_assoc($sql)){
			 	
		 ?>
		<div class="col-md-3">
			<a href="sukien.php">	<img src="img/<?php echo $row['img'] ?>" alt="" style="height: 150px;width: 150px"></a>
			
		</div>
		<div class="col-md-9">
			<a href="sukien.php"><h4 style="line-height: 150px"><?php echo $row['tieude'] ?></h4></a>
		</div>
	<?php  }?>
	</div>
</div>
 <?php include 'footer.php'; ?>