<?php 
$id = $_GET['id'];
include '../connect.php';
$data = mysqli_query($con," select *from tintuc where id = '$id' ");  
$row = mysqli_fetch_assoc($data);
include 'top_admin.php';


 ?>
<div class="row">
	<?php include 'left_admin.php'; ?>
	<div class="col-md-9">
		<form action="xl_updatetintuc.php" method="post">
			<input type="hidden"  name="id" value=" <?php echo $row['id'] ?>" >
			<b>Ảnh:</b> <input type="text"  name="img" value=" <?php echo $row['img'] ?>" style="width: 100%"> <br>
			<b>Tiêu đề:</b> <input type="text" name="tieude" value=" <?php echo $row['tieude'] ?>" style="width: 100%"> <br>
			<b>Tóm Tắt:</b> <input type="text" name="tomtat"  value=" <?php echo $row['tomtat'] ?>"style=" width: 100%;height: 50px;"> <br>
			<b>Nội dung:</b> <input type="text" name="noidung" value=" <?php echo $row['noidung'] ?>" style="width: 100%; height: 100px;"> <br>
			<b>Ngày Đăng:</b> <input type="text" name="ngaydang" name="tieude" value=" <?php echo $row['ngaydang'] ?>" style="width: 100%"> <br>
			<input type="submit" value="Cập nhật">
	</form>

	</div>
</div>
