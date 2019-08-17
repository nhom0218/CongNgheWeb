<?php 
	include '../connect.php';
	include 'top_admin.php';
	
	$sql = mysqli_query($con,'select *from tintuc');
 ?>
 
 <div class="row">
 	<?php include 'left_admin.php'; ?>
 <div class="col-md-9">
 <table border="1">
 	<tr>
 		<th>STT</th>
 		<th>id</th>
 		<th>Tiêu đề</th>
 		<th>img</th>
 		<th>Tóm tắt</th>
 		<th>Action</th>
 		
 	</tr>
 	<?php 
 		$i=	1;
 		while ($row = mysqli_fetch_assoc($sql)){
 			echo '<tr>';
 			echo '<td>' .$i.'</td>';
 			echo '<td>' .$row['id'].'</td>';
 			echo '<td>' .$row['tieude'].'</td>';
 			echo '<td>' .$row['img'].'</td>';
 			echo '<td>' .$row['tomtat'].'</td>';
 			echo '<td> <a href="update_tintuc.php?id='.$row['id'].'">Sửa</a> | <a href="delete.php?id='.$row['id'].'">Xóa</a></td>';
 			echo '</tr>';
 			$i++;
 		}
 	 ?>
 
 </table>
</div>
 </div>