<?php 
include 'connect.php';
include 'top.php';
include 'header.php';
include 'menu.php';
$sql = 'SELECT * from thongbao WHERE id ="'.$_GET['id'].'"';
$result=mysqli_query($con,$sql);
if(mysqli_num_rows($result)>0){
	$i=0;
	while($row=mysqli_fetch_assoc($result)){
		$i++;

 ?>

 	<div class="row">
 		
 			
 			<div class="col-md-8"><p><?php echo $row['noidung']?></p>	</div>
 			<div class="col-md-4">
 				<h3>Thông Báo</h3>
        <p><a href="thongbao.php"> - Đào tạo</a></p>
        <p><a href="thongbao.php"> - Nghiên cứu khoa học</a></p>
        <p><a href="thongbao.php"> - Tuyển dụng</a></p>
        <p><a href="thongbao.php"> - Học bổng</a></p>
         <p><a href="thongbao.php"> - Thông báo khác</a></p>
 			</div>
    		
	</div>
 <?php 
     }
   }
   include 'footer.php';
  ?>