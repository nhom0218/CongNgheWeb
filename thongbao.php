<?php 
	include 'connect.php';
	include 'top.php';
	include 'header.php';
	include 'menu.php';
	$sql = mysqli_query($con,'select *from thongbao');
 ?>

<div class="container">
	<!-- <h2>TIN TỨC</h2> -->
	<div class="row" >
		
		<?php 
			
			 while ($row = mysqli_fetch_assoc($sql)){
			 	
		 ?>
		<div class="col-md-3">
			<a href="chitiet_thongbao.php?id=<?=$row['id']?>">	<img src="img/thongbao.png" alt="" style="height: 200px;width: 200px"></a>
			
		</div>
		<div class="col-md-9">
			<a href="chitiet_thongbao.php?id=<?=$row['id']?>" style="color: black"><h4 style="line-height: 150px"><?php echo $row['tieude'] ?></h4></a>
		</div>
	<?php  }?>
	</div>
</div>

 <?php include 'footer.php' ?>