<!DOCTYPE html>
<html>
<head>
	<title>Đăng nhập</title>
	<meta charset="utf-8">
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
		.signup-heading {
			font-size: 40px;
			font-weight: bold;
			color: #373941;
			text-align: center;
			margin-bottom: 30px;
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
		.signup-already {
			text-align: center;
			font-size: 16px;
			color: #999;
		}
		.signup-login-link {
			color: #2979ff;
			text-decoration: none;
		}
		.mau{
			color: red;
		}
	</style>
</head>
<body>
<form method="post" action="process_login.php">
	<div class="signup">
		<form class="signup-form" autocomplete="off">
			<label class="mau">
				<?php if(isset($_GET['error'])) { ?>
					<?php echo $_GET['error']?>
				<?php } ?>
			</label>
			<h1 class="signup-heading">Đăng nhập</h1>
			<br><br>
			<label class="signup-label">
				Email
			</label>
			<input type="Email" class="signup-input" name="email">
			<label class="signup-label">
				Mật khẩu
			</label>
			<input type="password" class="signup-input" name="mat_khau">
			<button class="signup-submit">
				Đăng nhập
			</button>
		</form>
		<p class="signup-already">
			<span>Chưa có tài khoản?</span>
			<a href="formdangky.php" class="signup-login-link">Đăng ký</a>
		</p>
	</div>
</form>
</body>
</html>