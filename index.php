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
					        <div class="col-md-6" >					             
					             <div  class="box"> <img  src="img/lich.PNG" alt=""></div>
					              <h3><a href="">Thông báo tuyển sinh <br>đại học chính quy 2019</a></h3>
					        </div>
					        <div class="col-md-6">					            
					             <div class="box"> <img  src="img/lich1.PNG" alt=""></div>
					             <h3><a href="">Sinh viên toàn trường <br>vào năm học mới 2019</a></h3>
					        </div>
					    </div>
					    <div class="row"> 
					        <div class="col-md-6"  >					            
					              <div  class="box"> <img ư src="img/lich.PNG" alt=""></div>
					               <h3><a href="">"Chào Tân Sinh Viên <br>	 Khoa CNTT khóa 61"</a></h3>

					        </div>
					        <div class="col-md-6">					             
					             <div class="box"> <img  src="img/lich1.PNG" alt=""></div>
					               <h3><a href="">Lễ khai giảng trường <br>Đại học Thủy Lợi</a></h3>
					        </div>
					    </div>
					     
					 </div>
				</div>


				<div class="giangvien">
					<h3>ĐỘI NGŨ GIẢNG VIÊN </h3>
					<div class="row">
						<div class="col-md-3">
							<div class="">
								<a href=""><img class="img-fluid" src="img/cothao.jpg" alt=""></a>
								<h6><a href="">Nguyễn Thị Phương Thảo(ThS)</a></h6>
								
							</div>
						</div>
						<div class="col-md-3">
							<div class="">
								<a href=""><img class="img-fluid" src="img/cohien.jpg" alt=""></a>
								<h6><a href="">Đặng Thị Thu Hiền(TS)</a></h6>
								
							</div>
						</div>
						<div class="col-md-3">
							<div class="">
								<a href=""><img class="img-fluid" src="img/congan.jpg" alt=""></a>
								<h6><a href="">Trần Thị Ngân(TS)</a></h6>
								
							</div>
						</div>
						<div class="col-md-3">
							<div class="">
								<a href=""><img class="img-fluid" src="img/thaytunng.JPG" alt=""></a>
								<h6><a href="">Nguyền Thanh Tùng(TS)</a></h6>
								
							</div>
						</div>
					</div>
				
				</div>
				
			</div>
			<div class="col-md-3">
				<iframe   src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2Fcse.tlu.edu.vn%2F&tabs=timeline&width=300&height=400&small_header=false&adapt_container_width=true&hide_cover=false&show_facepile=true&appId" width="300" height="400" style="border:none;overflow:hidden " scrolling="no" frameborder="0" allowTransparency="true" allow="encrypted-media"></iframe>


				<div class="">
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
			</div>

				
		</div>
				
	</div>	


	<footer class="footer_bot">
           
                  <?php include 'footer.php'; ?>
               
        
    </footer>	



			
		



  

</body>
</html>  