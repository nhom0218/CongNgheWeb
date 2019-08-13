<?php
include 'connect.php';

$query_random = 'SELECT * from tintuc WHERE id = "'.$_GET['id'].'"';
$result_rd= mysqli_query($con,$query_random);
if(mysqli_num_rows($result_rd)>0){
	$i =0;
																		
	while ($row = mysqli_fetch_assoc($result_rd)){
										
		$i++;
		

?>
<?php include 'top.php' ;
include 'header.php' ;
include 'menu.php' ?>
		<div class="row">
			<div class="col-md-8">
				
				<h2  style="text-align: center;"><?php echo $row['tieude'] ?></h2>
				<img style=" width: 500px; height: 300px;float: left; margin-right: 10px "  src="img/<?php echo $row['img'] ?>" alt=""  >
				<p><?php echo $row['noidung'] ?></p>
				<div style="text-align: right; "><a style="font-size: 20px;" href="index.php">Trở về đầu trang</a></div>
				

			</div>
			<div class="col-md-4">
				<h4 style="text-align: center;">CÁC TIN KHÁC </h4>
				<ul>
				<?php 
					require 'laytin.php' ;
									if(mysqli_num_rows($data)>0){
										$i =0;
																		
									while ($row = mysqli_fetch_assoc($data)){
										
											$i++;
										?>	
					
						<li><a href="chitiet.php?id=<?=$row['id']?>" style="color: black;font-size: 20px;text-decoration: none;margin-top: 20px "><?php echo $row['tieude']; ?> </a></li>

					<?php  
						} }	
				 ?>
				 </ul>

			</div>
			
		</div>

		<footer class="footer_bot">
           <?php include 'footer.php'; ?>   
    	</footer>
<?php
			
	}
}

?>