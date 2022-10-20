<?php session_start(); ?>
<!DOCTYPE HTML>
<html>
<?php include '../rut_gon/head.php' ?>
<body>
	<div class="wrap">
		<div class="header">
			<div class="header_top">
				<div class="logo">
					<a href="index.php"><img src="../images/logo2.jpg" width="230" height="100"></a>
				</div>
				<div class="header_top_right">
					<div class="search_box">
						<form>
							<input type="text" name="tim_kiem">
							<input type="submit" value="SEARCH">
						</form>
					</div>
					<div class="login">
						<?php if (!isset($_SESSION['ma'])){ ?>
							<span>
								<a href="../login/form_login.php"><img src="../images/login.png" title="login"/></a>
							</span>
						<?php }else{ ?>
							<span>
								<a href="../login/logout.php"><img src="../images/logout.png" width="16" title="logout"></a>
							</span>
						<?php } ?>
					</div>
					<div class="clear"></div>
				</div>
				<div class="clear"></div>
			</div>
		</div>
	</div>
	<br>
	<div align="center">
		<p style="font-size: xx-large;">
			<br><br><br><br><br><br><br><br>
			ĐÃ ĐẶT HÀNG THÀNH CÔNG <br>
			<a href="../index.php">Về trang chủ</a>
			<br><br><br><br><br><br><br><br>
		</p>
	</div>
	<?php include '../rut_gon/footer.php' ?>

<?php include '../js/js-slide.php' ?>
</body>
</html>