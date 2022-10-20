<!DOCTYPE html>
<html>
<head>
	<title>Đăng Ký</title>
	<meta charset="utf-8">
	<style type="text/css">
		#dt{text-indent: -500px;height:25px; width:200px;}
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
			background-color: rgb(130, 201, 30);
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
<form method="post" action="process_dangky.php">
	<div class="signup">
		<form class="signup-form" autocomplete="off" name="dangky">
			<h1 align="center">
				Đăng ký Thông Tin
			</h1><br><br>
			<label class="signup-label">
				Họ Tên
			</label>
			<input type="text" class="signup-input" name="ten" required>
			<label class="signup-label">
				Ngày Sinh
			</label><br><br>
			<input type="Date" name="ngay_sinh" class="signup-input" required="">
			<label class="signup-label">
				Giới Tính
			</label>
			<input type="radio" name="gioi_tinh" value="0" style="width: 15%" checked="" required> Nam
			<input type="radio" name="gioi_tinh" value="1" style="width: 15%" required> Nữ
			<br><br>
			<label class="signup-label">
				Số Điện Thoại
			</label>
			<input type="number" class="signup-input" name="sdt" required>
			<label class="signup-label">
				Email
			</label>
			<input type="Email" class="signup-input" name="email" required>
			<label class="signup-label">
				Mật khẩu
			</label>
			<input type="password" class="signup-input" name="mat_khau" required>
			<label class="signup-label">
				Địa Chỉ
			</label>
			<input type="text" class="signup-input" name="dia_chi" required>
			<button class="signup-submit">
				Đăng Ký
			</button>
			<br><br>
		</form>
	</div>
</form>
</body>
<script>
var string_month = '';
for(var i = 1; i<=12; i++){
	string_month += '<option>' + i + '</option>';
}
document.getElementById('select_month').innerHTML = string_month;

var string_day = '';
for(var i = 1; i<=31; i++){
	string_day += '<option>' + i + '</option>';
}
document.getElementById('select_day').innerHTML = string_day;

var current_year = new Date().getFullYear();
var string_year = '';
for(var i = current_year; i>=current_year - 100; i--){
	string_year += '<option>' + i + '</option>';
}
document.getElementById('select_year').innerHTML = string_year;
function change_day() {
	var month = parseInt(document.getElementById('select_month').value);
	var max_day = 31;
	switch(month){
		case 4:
		case 6:
		case 9:
		case 11:
			max_day = 30;
			break;
		case 2:
			var year = document.getElementById('select_year').value;
			if(year % 4 == 0){
				max_day = 29;
			}
			else{
				max_day = 28;
			}
			break;
	}
	var string_day = '';
	for(var i = 1; i<=max_day; i++){
		string_day += '<option>' + i + '</option>';
	}
	document.getElementById('select_day').innerHTML = string_day;
}document.from['dangky'].onsubmit=(e)=>{
	e.preventDefault();
	return dangky();
}
</script>
</html>