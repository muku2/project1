<!DOCTYPE html>
<html>
<head>
	<title>Thêm Admin</title>
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
	<form method="post" action="admin_process_insert.php ">
		<table colspan='2' align="center" >
				<div class="signup">
		<form class="signup-form" autocomplete="off" name="admin">
			<h1 align="center">
				Thêm Admin
			</h1>
			<label class="signup-label">
				Họ Tên
			</label>
			<input type="text" class="signup-input" name="ho_ten" id="ho_ten">
			<label class="signup-label">
				Ngày Sinh
			</label>
			<input type="date" name="ngay_sinh" class="signup-input">
			<br><br><br>
			<label class="signup-label">
				Giới Tính
			</label>
			<input type="radio" name="gioi_tinh" value="0" style="width: 15%"> Nam
			<input type="radio" name="gioi_tinh" value="1" style="width: 15%"> Nữ
			<br><br>
			<label class="signup-label">
				Số Điện Thoại
			</label>
			<input type="number" class="signup-input" name="sdt" id="sdt">
			<label class="signup-label">
				Email
			</label>
			<input type="email" class="signup-input" name="email" id="email">
			<label class="signup-label">
				Mật khẩu
			</label>
			<input type="password" class="signup-input" name="mat_khau" id="mat_khau">
			<label class="signup-label">
				CMND
			</label>
			<input type="text" class="signup-input" name="cmnn" id="cmnn">
			<label class="signup-label">
				Cấp Độ
			</label>
			<input type="radio" name="cap_do" value="1" style="width: 15%"> Admin
			<input type="radio" name="cap_do" value="0" style="width: 15%"> Nhân Viên
			<button class="signup-submit">
				Thêm
			</button>
			<button class="signup-submit">
				<a href="admin.php">Quay lại</a>
			</button>
			<br><br>
		</form>
	</div>
	  </form>
</body>
</html>