<!DOCTYPE html>
<html>
<head>
	<title>Admin-Thêm sản phẩm</title>
	<style type="text/css">
	body{
			margin: 0;
			width: 100%;
			min-height: 100vh;
			background-color: #f2f3f5;
			display: flex;
			align-items: center;
			justify-content: center;
			padding: 0 0;
		}
		.signup{
			padding: 10px 75px;
			background-color: #fff;
			width: 100%;
			max-width: 600px;
			border-radius: 30px;
		}
		.signup-input{
			display: block;
			width: 550px;
			padding: 25px;
			border-radius: 14px;
			background-color: #f2f3f5;
			outline: none;
			border: 0;
			font-family: "Poppins", sans-serif;
			font-size: 18px;
			margin-bottom: 30px;
		}
		.signup-submit {
			padding: 25px;
			color: white;
			font-size: 18px;
			text-align: center
			border: 0;
			outline: none;
			display: inline-block;
			width: 100%;
			border-radius: 14px;
			background-color: #ffef00;
			font-family: "Poppins", sans-serif;
			cursor: pointer;
			font-weight: 600;
			box-shadow: 0 5px 10px 0 rgba(130, 201, 30, 0.5);
			margin-top: 25px;
			margin-bottom: 25px;
		}
		.mauchu{
			color: red;
		}
	</style>
</head>
<body>
<?php 
include '../connect.php';
$sql = "select * from danh_muc ";
$result = mysqli_query($connect,$sql);
?>
<form enctype='multipart/form-data' method="post" action="sp_process_insert.php ">
	<table colspan='2' align="center" >
				<div class="signup">
	<form class="signup-form" autocomplete="off" name="admin">
	<h1 align="center">
				Thêm Sản Phẩm
			</h1><br><br>
			<label class="signup-label">
				Tên Sản Phẩm
			</label>
			<input type="text" class="signup-input" name="ten">
			<label class="signup-label">
				Giá Sản Phẩm
			</label>
			<input type="number" class="signup-input" name="gia">
			<label class="signup-label">
				Mô Tả Sản Phẩm
			</label>
			<input type="text" class="signup-input" name="mo_ta">
		    <label class="signup-label">
				Thể loại của sản phẩm
			<label class="signup-label">
				<select name="ma_danh_muc">
					<?php foreach ($result as $each): ?>
						<option value="<?php echo $each['ma'] ?>">
							<?php echo $each['ten'] ?>
						</option>
					<?php endforeach ?>
				</select>
				<br><br>
		    <label class="signup-label">
				Ảnh Sản Phẩm
			</label>
			<input type="file" name="anh">
			  <button class="signup-submit">
					Thêm
				</button>
				<button class="signup-submit">
				<a href="sanpham.php">Quay lại</a>
			</button>
			</form>
		</div>
</form>
</body>
</html>