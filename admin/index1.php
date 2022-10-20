<?php include 'check.php' ?>
<?php 
	if (!isset($_SESSION)){
		session_start();
	}	
?>
<style type="text/css">
	*{
		margin: 0;
		padding: 0;
	}
	body{
		font-family: sans-serif;
		color: #333;
	}
	#menu ul{
		background: #303125;
		list-style-type: none;
		text-align: center;
	}
	#menu li{
		color: #f1f1f1;
		display: inline-block;
		width: 140px;
		height: 40px;
		line-height: 40px;
		margin-left: -5px;
	}
	#menu a{
		text-decoration: none;
		color: #fff;
		display: block;
	}
	#menu a:hover{
		background: #F1F1F1;
		color: #333;
	}
	.sub-menu li{
		display: none;
	}
	#menu li{
		position: relative;
	}
	.sub-menu{
		display: none;
		position: absolute;
	}
	#menu li:hover .sub-menu{
		display: block;
	}
	.sub-menu{
		margin-left: 0 !important;
	}
	.logo{
		width: 20px;
		height: 40px;
	}
	.login{
		width: 5%;
		height: 40px;
		align-items: right;
		float: right;
	}
	.mau_chu{
		color: #ffef00;
	}
</style>
<title>Trang quản lí của Admin</title>
<div id="menu">
	<ul>
		<div class="logo">
			<li><img src="../images/logo2.jpg" height="80px"></li>
		</div>
		<?php if ($_SESSION['cap_do']==1){ ?>
			<li>
				<a href="admin.php">Admin</a>
				<ul class="sub-menu">
					<li>
						<a href="admin_form_insert.php">Thêm admin</a>
					</li>
				</ul>
			</li>
		<?php } ?>
		<li>
			<a href="khachhang.php">Khách hàng</a>
			<ul class="sub-menu">
				<li>
					<a href="kh_form_insert.php">Thêm khách hàng</a>
				</li>
			</ul>
		</li>
		<li>
			<a href="sanpham.php">Sản phẩm</a>
			<ul class="sub-menu">
				<li>
					<a href="sp_form_insert.php">Thêm sản phẩm</a>
				</li>
			</ul>
		</li>
		<li>
			<a href="hoa_don.php">Hóa đơn</a>
		</li>
		<li>
			<a href="tin_tuc.php">Tin tức</a>
			<ul class="sub-menu">
				<li>
					<a href="tt_form_insert.php">Thêm tin tức</a>
				</li>
			</ul>
		</li>
		<div class="login">
			<?php if (!isset($_SESSION['ma'])){ ?>
			<?php }else{ ?>
				<span>
					<a href="logoutad.php">Đăng xuất</a>
				</span>
			<?php } ?>
		</div>
	</ul>
</div>