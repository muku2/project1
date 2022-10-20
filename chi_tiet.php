<?php session_start(); ?>
<!DOCTYPE HTML>
<html>
<?php include 'rut_gon/head.php' ?>
<link rel="stylesheet" href="css/bootstrap.min.css">
<style type="text/css">
	.single-product-area {
		padding: 80px 0 130px;
	}
	.product-main-img {
		margin-bottom: 20px;
	}
	.product-inner-price {
		margin-bottom: 25px;
	}
	.product-inner-price > ins {
		color: #5a88ca;
		font-weight: 700;
		margin-right: 10px;
		text-decoration: none;
	}
	.add_to_cart_button {
		background: none repeat scroll 0 0 #5a88ca;
		border: medium none;
		color: #fff;
		padding: 6px 25px;display: inline-block
	}
	.add_to_cart_button:hover {background-color: #222;color: #fff;text-decoration: none}
	form.cart {
		margin-bottom: 25px;
	}
	.tab-content {
		margin-bottom: 30px;
	}
</style>
<body>
	<?php include 'rut_gon/header-top.php'?>
	<?php include 'rut_gon/header-menu.php'?>

<?php 
$thu_muc_anh = 'images/img_sp/';
include 'connect.php';
$ma = $_GET['ma'];
$sql = "select * from san_pham where ma = '$ma'";
$result = mysqli_query($connect,$sql);
?>
<?php foreach ($result as $each): ?>
	<div class="single-product-area">
		<div class="container">
			<div class="col-md-8">
				<div class="col-sm-6">
					<div class="product-main-img">
						<img height="300" src="<?php echo $thu_muc_anh . $each['anh'] ?>">
					</div>
				</div>
				<div class="col-sm-6">
					<div class="product-inner">
						<h2 class="product-name"><?php echo $each['ten'] ?></h2>
						<div class="product-inner-price">Giá: <ins><?php echo $each['gia'] ?></ins>Vnđ</div>
						<button class="add_to_cart_button" type="submit">Thêm vào giỏ hàng</button>
						<br><br>
						<div role="tabpanel">
							<div class="tab-content">
								<div role="tabpanel" class="tab-pane fade in active" id="home">
									<h2>Thông tin sản phẩm</h2>
									<?php echo $each['mo_ta'] ?>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
<?php endforeach ?>

<?php include 'rut_gon/footer.php' ?>
<?php include 'js/js-slide.php' ?>
</body>
</html>