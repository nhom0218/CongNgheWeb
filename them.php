<?php include 'connect.php'; ?>

<h2>THÊM TIN TỨC</h2>
<form action="add_baiviet.php" method="post">
	Tiêu đề: <input type="text" name="tieude"> <br>
	Ảnh: <input type="text" name="img"> <br>
	Tóm Tắt: <input type="text" name="tomtat"> <br>
	Nội dung: <input type="text" name="noidung"> <br>
	Ngày Đăng: <input type="text" name="ngaydang"> <br>
	View: <input type="text" name="view"> <br>
	
	<input type="submit" value="Thêm">
</form>