<?php 
include '../connect.php';
include 'top_admin.php';
 ?>


<!-- <form action="add_baiviet.php" method="post">
	Ảnh: <input type="text" name="img" style="width: 100%"> <br>
	Tiêu đề: <input type="text" name="tieude" style="width: 100%"> <br>
	Tóm Tắt: <input type="text" name="tomtat" style="width: 100%; height: 50px;"> <br>
	Nội dung: <input type="text" name="noidung" style="width: 100%; height: 100px;"> <br>
	Ngày Đăng: <input type="text" name="ngaydang" name="tieude" style="width: 100%"> <br>	
	<input type="submit" value="Thêm">
</form> -->

<div class="row">
	<?php include 'left_admin.php'; ?>
	<div class="col-md-9">
		<form action="add_baiviet.php" method="post">
			<b>Ảnh:</b> <input type="text"  name="img"  style="width: 100%"> <br>
			<b>Tiêu đề:</b> <input type="text" name="tieude"  style="width: 100%"> <br>
			<b>Tóm Tắt:</b> <input type="text" name="tomtat"  style=" width: 100%;height: 50px;"> <br>
			<b>Nội dung:</b> <input type="text" name="noidung"  style="width: 100%; height: 100px;"> <br>
			<b>Ngày Đăng:</b> <input type="text" name="ngaydang" name="tieude"  style="width: 100%"> <br>
			<input type="submit" value="Cập nhật">
	</form>

	</div>
</div>


