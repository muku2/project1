<!DOCTYPE html>
<html>
<head>
	<title>Đăng kí</title>
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
		.signup {
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
		.signup-social {
			padding: 10px;
			border-radius: 20px;
			display: block;
			width: 100%;
			color: white;
			font-size: 16px;
			font-weight: bold;
			font-family: "Poppins", sans-serif;
			border: 0;
			background-color: #4c6ff4;
			display: flex;
			align-items: center;
			cursor: pointer;
			outline: none;
			box-shadow: 0 5px 10px 0 rgba(76, 111, 244, 0.5);
		}
		.signup-social-icon {
			width: 60px;
			height: 60px;
			border-radius: 10px;
			background-color: white;
			display: flex;
			align-items: center;
			justify-content: center;
			color: #4c6ff4;
			font-size: 30px;
		}
		.signup-social-text {
			display: block;
			margin: 0 auto;
		}
		.signup-or {
			text-align: center;
			font-size: 16px;
			color: #999;
			margin: 30px auto;
			position: relative;
		}
		.signup-or span {
			display: inline-block;
			padding: 10px 30px;
			background-color: #fff;
			position: relative;
			z-index: 2;
		}
		.signup-or:after {
			content: "";
			width: 100%;
			height: 1px;
			background-color: #999;
			position: absolute;
			top: 50%;
			left: 0;
			transform: translateY(-50%);
		}
		.signup-label {
			font-size: 16px;
			color: #63676b;
			font-weight: 500;
			margin-bottom: 10px;
			display: inline-block;
			cursor: pointer;
		}
		.signup-input {
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
	</style>
</head>
<body>
<form method="post" action="process_login.php">
	<div class="signup">
		<h1 class="signup-heading">Đăng ký</h1>
		<button class="signup-social">
			<i class="fa fa-facebook signup-social-icon">
				<img src="../images/fb.png" width="60" style="border-radius: 100px">
			</i>
			<span class="signup-social-text">Đăng ký với Facebook</span>
		</button>
		<div class="signup-or"><span>Or</span></div>
		<form action="#" class="signup-form" autocomplete="off">
			<label for="fullname" class="signup-label">Email</label>
			<input type="text" id="fullname" class="signup-input">
			<label for="email" class="signup-label">Mật khẩu</label>
			<input type="password" id="email" class="signup-input">
			<button class="signup-submit">Đăng ký</button>
		</form>
		<p class="signup-already">
			<span>Có sẵn tài khoản?</span>
			<a href="#" class="signup-login-link">Đăng nhập</a>
		</p>
	</div>
</form>
</body>
</html>