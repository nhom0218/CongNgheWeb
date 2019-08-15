<?php 
	include 'top.php';
	include 'connect.php';

 ?>
 <body>
	<header>
		<?php include 'header.php'; ?>

	</header>
	<?php include 'menu.php'; ?>

	<div class="container">	
		<div class="row" >
			<div class="col-md-9 right" >
				<?php include 'banner.php'; ?>
				
				<div class="tintuc">
					<h3 style="text-align: center; color: #003478; padding-top: 30px"><b>TIN TỨC</b></h3>
					<div class="row">
						<?php
									require 'laytin.php' ;
									if(mysqli_num_rows($data)>0){
										$i =0;
																		
									while ($row = mysqli_fetch_assoc($data)){
										
											$i++;
										?>	
										<div class="col-md-4">
											<div class="news">
												<div class="imgBox">
													<a href="chitiet.php?id=<?=$row['id']?>"><img class="img-fluid" src="img/<?php echo  $row['img'] ?>" alt=""></a>
												</div>												
												<div class="detail">
													<div class="content">
														<h2><a href="chitiet.php?id=<?=$row['id']?>" > <?php echo  $row['tieude'] ?></a></h2>
													</div>													
												</div>																									
											</div>
										</div>													
								<?php 
									} }
								?>			
					</div>
				</div>
				<div class="sukien">
						<h2 style="text-align: center; color: #003478; padding-top: 30px"><b>SỰ KIỆN NỔI BẬT</b></h2>
					 <div class="event" >
					    <div class="row" > 
					    	<?php
									require 'tinsukien.php' ;
									if(mysqli_num_rows($data)>0){
										$i =0;
																		
									while ($row = mysqli_fetch_assoc($data)){
										
											$i++;
										?>
					        <div class="col-md-3" >					             
					             <div  class="box"> <a href=""><img   src="img/<?php echo $row ['img'] ?>" alt=""></a></div>
					              <h4><a href="sukien.php?id=<?=$row['id']?>"><?php echo $row['tieude'] ?></a></h4>
					        </div>
					        <?php }} ?>
					    </div> 
					
					</div>
				</div>


				
				 <div class="giangvien">
				 	<h3 style="text-align: center; padding-top: 20px; color: #003478"><b>	ĐỘI NGŨ GIẢNG VIÊN</b> </h3> 
		  				<div class="swiper-container">
			    			<div class="swiper-wrapper">
								<?php 
										$sql= "SELECT * FROM giangvien
										ORDER BY id DESC 
										LIMIT 0,3";
       									$data = mysqli_query($con,$sql);
       									while ($row = mysqli_fetch_assoc($data)){
	
								 ?>

			      				<div class="swiper-slide" >
			        				<div class="imgBx">
			         					<img src="img/<?php echo $row['img'] 	 ?>" alt="">
			        				</div>
			        				<div class="details">
			         					 <h5><?php 	echo $row['ten'] ?></h5>
			        				</div>
			      				</div>
								<?php 	} ?>

   								<div class="swiper-pagination"></div>
  							</div>
  							<script src="library/js/swiper.min.js"></script>  
     							<script>
   									 var swiper = new Swiper('.swiper-container', {
      										effect: 'coverflow',
      										grabCursor: true,
      										centeredSlides: true,
      										slidesPerView: 'auto',
      										coverflowEffect: {
       												 rotate: 30,
       												 stretch: 0,
        											 depth: 100,
        											 modifier: 1,
        											slideShadows : true,
      										},
      										pagination: {
       												 el: '.swiper-pagination',
     										 },
    									});
  								</script>
  						</div>
				</div>
			</div>
			<div class="col-md-3">	
				<iframe style="position: -webkit-sticky;position: sticky;top:  0;left: 0px;z-index: -1;" src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2Fcse.tlu.edu.vn%2F&tabs=timeline&width=340&height=500&small_header=false&adapt_container_width=true&hide_cover=false&show_facepile=true&appId" width="340" height="500" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true" allow="encrypted-media"></iframe>				
			</div>

				
		</div>
				
	</div>	


	<footer class="footer_bot">
           
                  <?php include 'footer.php'; ?>     
    </footer>	






  

</body>
</html>  