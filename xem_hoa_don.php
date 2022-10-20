<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
	<title>Giỏ hàng</title>
	<style type="text/css">
		.wrap{
			width:78%;
			margin:0 auto;
			padding:0 1%;
			background: white;
		}
		.header{
			background:#FFF;
		}
		.header_top{
			padding:20px 0;
		}
		.logo{
			float:left;
			width:33%;
		}
		.header_top_right{
			float:left;
			width:67%;
			margin-top:35px;
		}
		.search_box{
			float:left;
			border: 1px solid #DBDBDB;
			position:relative;
			width:47%;
		}
		.search_box input[type="text"]{
			width:74%;
			padding:10px 8px;
			outline:none;
			border:none;
			background:none;
			font-size:14px;
			color:#a5a5a5;
			font-family:Arial;
			outline:none;
			margin:0;
		}
		.search_box input[type="submit"]{
			border:none;
			cursor:pointer;
			color:#FFF;
			font-size:12px;
			padding:10px 15px;
			height: 36px;
			margin:0;
			background: -webkit-gradient(linear,left top,left bottom,from(#70389C),to(#602D8D));
			background: -moz-linear-gradient(top,#70389C,#602D8D);
			background: -o-linear-gradient(top,#70389C,#602D8D);
			background: -ms-linear-gradient(top,#70389C,#602D8D);
			-webkit-transition: all .9s;
			-moz-transition: all .9s;
			-o-transition: all .9s;
			-ms-transition: all .9s;
			transition: all .9s;
			position:absolute;
			right:0;
			top:0;
		}
		.search_box input[type="submit"]:hover{
			background:#444;
		}
		.shopping_cart{
			float:left;
			width: 202px;
			position:relative;
			margin-left:15px;
			padding: 0 0 0 46px;
			background: url(../images/header_cart.png) 0 0 no-repeat;
			z-index: 99;
			-webkit-box-sizing: border-box;
			-moz-box-sizing: border-box;
			box-sizing: border-box;
			cursor:pointer;
		}
		.cart{
			height: 38px;
			padding: 0 0 0 10px;
			background: #EDEDED;
			border: 1px solid #CECECE;
			border-left: none;
			line-height: 36px;
			-webkit-border-radius: 0 2px 2px 0;
			border-radius: 0 2px 2px 0;
			-webkit-box-sizing: border-box;
			-moz-box-sizing: border-box;
			box-sizing: border-box;
		}
		.shopping_cart .cart .opencart {
			width: 7px;
			height: 5px;
			display: block;
			background: url(../images/header_arrow.png) 0 0 no-repeat;
			position: absolute;
			right: 11px;
			top: 16px;
		}
		.shopping_cart span.cart_title{
			font-size:13px;
			font-weight:bold;
			color: #4F4F4F;
		}
		.shopping_cart span.no_product{
			font-size:13px;
			font-weight:bold;
			color: #DD0F0E;
		}
		.wrapper-dropdown.active .dropdown{
			border-bottom: 1px solid rgba(0, 0, 0, 0.2);
			max-height: 400px;
			width: 95px;
			z-index: 1;
			background: #70389C;
		}
		.login{
			float:left;
			margin-left:10px;
			width:60px;
			height: 38px;
			display: block;
			border: 1px solid #CECECE;
			text-align: center;
			-webkit-box-sizing: border-box;
			-moz-box-sizing: border-box;
			box-sizing: border-box;
			background: url(../images/gradient_light-1.png) 0 0 repeat-x;
		}
		.login span a img{
			padding-top:8px;
		}
		.wrapper{	
			width:78%;
			margin:0 auto;
			padding:0 1%;
		}
		.footer{
			position:relative;
			background: #414045; 
			background: -moz-linear-gradient(top,  #414045 55%, #2f2e33 100%); 
			background: -webkit-gradient(linear, left top, left bottom, color-stop(55%,#414045), color-stop(100%,#2f2e33));
			background: -webkit-linear-gradient(top,  #414045 55%,#2f2e33 100%); 
			background: -o-linear-gradient(top,  #414045 55%,#2f2e33 100%); 
			background: -ms-linear-gradient(top,  #414045 55%,#2f2e33 100%); 
			background: linear-gradient(to bottom,  #414045 55%,#2f2e33 100%); 
			filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#414045', endColorstr='#2f2e33',GradientType=0 );
			box-shadow: inset 0px 1px 8px #222;
		}
		.section {
			clear: both;
			padding: 0px;
			margin: 0px;
		}
		.group:before,
		.group:after {
		    content:"";
		    display:table;
		}
		.group:after {
		    clear:both;
		}
		.group {
		    zoom:1;
		}
		.col_1_of_4{
			display: block;
			float:left;
			margin: 0% 0 1% 1.6%;
			border-right: 2px groove #555;
		}
		.col_1_of_4:first-child { margin-left: 0; }
		.col_1_of_4:last-child {
			border:none;
		}
		.span_1_of_4 {
			width: 20.5%;
			padding:1.5%; 
		}
		.span_1_of_4  h4 {
			color:#ccc;
			margin-bottom: .5em;
			font-size:1.2em;
			line-height: 1.2;
			font-family:'Doppio One', sans-serif;
			font-weight : normal;
			margin-top: 0px;
			letter-spacing: -1px;
			text-transform:uppercase;
			border-bottom:1px solid #474747;
			padding-bottom:0.5em;
		}
		.span_1_of_4  li a{
			font-size:0.8125em;
			padding:0.4em 0;
			color:#979797;
			font-family :Arial, Helvetica, sans-serif;
			display:block;	 	 
		}
		.span_1_of_4  li a:hover,.span_1_of_4  li span:hover{
			color:#BBB7B7;
		}
		.span_1_of_4  li span{
			font-size:1.2em;
			padding:0.2em 0;
			color:#979797;
			display:block;
			cursor:pointer;
		}
		.copy_right{
			text-align:center;
			padding:15px 0;
		}
		.copy_right p{
			font-size:12px;
			color:#747474;
		}
		.copy_right p a{
		    color:#747474;
			font-size:12px;
			text-decoration:underline;
		}
		.copy_right p a:hover{
			color:#BBB7B7;
			text-decoration:none;
		}
		.loi{
			color: red;
		}
	</style>
</head>
<body>
	<div class="wrap">
		<div class="header">
			<div class="header_top">
				<div class="logo">
					<a href="index.php"><img src="images/logo2.jpg" width="230" height="100"></a>
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
								<a href="login/form_login.php"><img src="images/login.png" title="login"/></a>
							</span>
						<?php }else{ ?>
							<span>
								<a href="login/logout.php"><img src="images/logout.png" width="16" title="logout"></a>
							</span>
						<?php } ?>
					</div><a style="text-align: right;" href="xem_hoa_don.php"><h1>Xem hóa đơn</h1></a>
					<div class="clear"></div>
				</div>
				<div class="clear"></div>
			</div>
		</div>
	</div>
	<br><br><br><br><br>
	<a style="text-align: left;" href="index.php"><h1>Về mua tiếp</h1></a>
<table border="1" width="70%" align="center">
	<tr>
		<th>Thời gian đặt hàng</th>
		<th>Thông tin người nhận</th>
		<th>Xem chi tiết</th>
		<th>Tình Trạng Đơn</th>
	</tr>
	<?php
		$ma_khach_hang = $_SESSION['ma'];
		include 'connect.php';
		$sql = "select * from hoa_don
		where ma_khach_hang = '$ma_khach_hang' order by tinh_trang";
		$result = mysqli_query($connect,$sql);
	?>
	<?php foreach ($result as $each): ?>
	<tr>
		<th>
			<?php echo date_format(date_create($each['thoi_gian_dat_hang']),'H:i:s d-m-Y') ?>
		</th>
		<th>
			<?php echo $each['ten_nguoi_nhan'] ?><br>
			<?php echo $each['sdt_nguoi_nhan'] ?><br>
			<?php echo $each['dia_chi_nguoi_nhan'] ?>
		</th>
		<th>
			<a href="xem_chi_tiet.php?ma_hoa_don=<?php echo $each['ma']?>">
				Xem
			</a>
		</th>
		<th>
			<?php 
				if($each['tinh_trang']==1){
					echo"Đang Chờ Duyệt";
				}else if($each['tinh_trang']==2){
					echo "Đã Duyệt";
				}else{
					echo "Đã Hủy"; 
				}
			?>
		</th>
	</tr>
	<?php endforeach ?>
</table>
<?php include 'rut_gon/footer.php' ?>
</body>
</html>