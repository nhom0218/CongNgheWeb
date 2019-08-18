<?php 
	include 'connect.php';
	include 'top.php';
	include 'header.php';
	include 'menu.php';
	$data = mysqli_query($con,'select *from tintuc');
	

 ?>
<div class="container">
	<h2>TIN TỨC</h2>
	<div class="row" >
		<?php 
			
			
			 while ($row = mysqli_fetch_assoc($data)){
			 	
		 ?>
		<div class="col-md-3">
			<a href="chitet2.php?id=<?=$row['id']?>"><img src="img/<?php echo $row['img'] ?>" alt="" style="height: 150px;width: 150px"></a>
		</div>
		<div class="col-md-9">
			<a href="chitiet.php?id=<?=$row['id']?>"><h4 style="line-height: 150px"><?php echo $row['tieude'] ?></h4></a>
		</div>
	<?php  }?>
	</div>
</div>
 <?php include 'footer.php'; ?>