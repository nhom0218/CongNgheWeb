<?php
include 'connect.php';

$sql = 'SELECT * from tintuc WHERE id = "'.$_GET['id'].'"';
$result = mysqli_query($con, $sql);
if(mysqli_num_rows($result)>0){
	$i =0;
																		
	while ($row = mysqli_fetch_assoc($result)){
										
		$i++;


?>
<?php 	include 'top.php' ;
		include 'header.php';
		include 'menu.php' ;
?>

		<div class="row">
			<div class="col-md-4">
				<h4 style="text-align: center;">CÁC TIN KHÁC </h4>
				<ul>
				<?php 
					$query_random ="SELECT * FROM tintuc ORDER BY rand() LIMIT 0,6 ";
					$result_rd= mysqli_query($con,$query_random);
					if(mysqli_num_rows($result_rd)>0){	
						$i=0;	
					while ($tinrd=mysqli_fetch_array($result_rd,MYSQLI_ASSOC)) {
						$i =0;
					?>
						<li><a href="chitet2.php?id=<?=$tinrd['id']?>" style="color: black;font-size: 20px;text-decoration: none;margin-top: 20px "><?php echo $tinrd['tieude']; ?> </a></li>

					<?php  
						} }	
				 ?>
				 </ul>
			</div>
			<div class="col-md-8">
				<h2  style="text-align: center;"><?php echo $row['tieude'] ?></h2>
				<img style=" width: 500px; height: 300px;float: left; margin-right: 10px "  src="img/<?php echo $row['img'] ?>" alt=""  >
				<p><?php echo $row['noidung'] ?></p>


			</div>
		</div>
		<div style="text-align: right; "><a style="font-size: 20px;" href="index.php">Trở về đầu trang</a></div>
		<footer class="footer_bot">
           <?php include 'footer.php'; ?>   
    </footer>
<?php  

	}
}
?>
