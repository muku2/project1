<!DOCTYPE html>
<html>
<head>
	<style type="text/css">
		@import url(navi.css);
		@import url(forms.css);
		@import url(tables.css);
		@import url(slider.css);
		@import url(homepage.css);
		@import url(gallery.css);
		@import url(portfolio.css);

		html{overflow-y:scroll;}

		body{margin:0; padding:0; font-size:13px; font-family:Georgia, "Times New Roman", Times, serif;}

		.justify{text-align:justify;}
		.bold{font-weight:bold;}
		.center{text-align:center;}
		.right{text-align:right;}
		.nostart{margin:0; padding:0; list-style:none;}
		.hidden{display:none;}

		.clear:after{content:"."; display:block; height:0; clear:both; visibility:hidden; line-height:0;}
		.clear{display:block; clear:both;}
		html[xmlns] .clear{display:block;}
		* html .clear{height:1%;}

		a{outline:none; text-decoration:none;}

		.fl_left{float:left;}
		.fl_right{float:right;}

		img{margin:0; padding:0; border:none; line-height:normal; vertical-align:middle;}
		.imgholder, .imgl, .imgr{padding:4px; border:1px solid #D6D6D6; text-align:center;}
		.imgl{float:left; margin:0 15px 15px 0; clear:left;}
		.imgr{float:right; margin:0 0 15px 15px; clear:right;}

		/*----------------------------------------------Generalise-------------------------------------*/

		#header, #container, #footer, #copyright{display:block; width:960px; margin:0 auto;}

		h1, h2, h3, h4, h5, h6{margin:0; padding:0; font-size:20px; font-weight:normal; line-height:normal;}

		address{font-style:normal;}

		blockquote, q{display:block; padding:8px 10px; color:#979797; background-color:#ECECEC; font-style:italic; line-height:normal;}
		blockquote:before, q:before{content:'“ '; font-size:26px;}
		blockquote:after, q:after{content:' „'; font-size:26px; line-height:0;}

		.one_quarter{width:225px;}
		.two_quarter{width:470px;}
		.three_quarter{width:715px;}
		.four_quarter{width:960px; float:none; margin-right:0; clear:both;}

		.one_third, .two_third, .three_third{display:block; float:left; margin:20px 5px 50px 5px;} /* trên phải dưới trái */
		.one_third{width:300px; height: 300px;}
		.two_third{width:630px;}
		.three_third{width:960px; float:none; margin-right:10; clear:both;}

		.one_fifth, .two_fifth, .three_fifth, .four_fifth, .five_fifth{display:block; float:left; margin:0 20px 0 0; text-align:justify;}
		.one_fifth{width:176px;}
		.two_fifth{width:372px;}
		.three_fifth{width:568px;}
		.four_fifth{width:764px;}
		.five_fifth{width:960px; float:none; margin-right:0; clear:both;}

		.lastbox{margin-right:0;}

		.more{text-align:right; clear:both;}

		/*----------------------------------------------Content Area-------------------------------------*/

		#container{padding:30px 0;}
		#container h1, #container h2, #container h3, #container h4, #container h5, #container h6{margin-bottom:20px;}
		#container section{display:block; width:100%; margin:0 10px 30px 0; padding:0;}
		#container .last{margin:0;}

		/* ------Content-----*/

		#container #content{float:left; width:630px; margin-bottom:0;}

		/* ------Comments-----*/

		#comments ul{margin:0 0 40px 0; padding:0; list-style:none;}
		#comments li.comment_odd, #comments li.comment_even{margin:0 0 10px 0; padding:15px; list-style:none;}
		#comments li.comment_odd{color:#666666; background-color:#F7F7F7;}
		#comments li.comment_odd a{color:#FF9900; background-color:#F7F7F7;}
		#comments li.comment_even{color:#666666; background-color:#E8E8E8;}
		#comments li.comment_even a{color:#FF9900; background-color:#E8E8E8;}
		#comments article, #comments header{display:block; width:100%;}
		#comments figure{float:right; margin:0 0 10px 10px; padding:3px; border:1px solid #DEDACB; text-align:center;}
		#comments figure img{float:inherit;}
		#comments header address{font-weight:bold;}
		#comments header time{font-size:smaller;}
		#comments article section{margin:0; padding:0;}
		#comments article section p{margin:10px 5px 10px 0; padding:0;}
	</style>
<title>Tin tức</title>
<meta charset="utf-8">
<!-- <link rel="stylesheet" href="tin_tuc/layout.css" type="text/css"> -->
</head>
<body>
<div class="wrapper row2">
	<div id="container" class="clear">
		<div id="homepage">
			<section id="services" class="last clear">
				<?php 
				$thu_muc_anh = 'images/tin_tuc/';
				include 'connect.php';
				$tim_kiem = '';
				if (isset($_GET['tim_kiem'])){
					$tim_kiem = $_GET['tim_kiem'];
				}
				$sql = "select * from tin_tuc
				where tieu_de like '%$tim_kiem%'";

				$result = mysqli_query($connect,$sql);

				$all_sp = mysqli_num_rows($result);

				$sp_1_trang = 6;

				$so_trang = ceil( $all_sp / $sp_1_trang );

				$trang = 1;
				if (isset($_GET['trang'])) {
				$trang = $_GET['trang'];}

				$skip_sp = ($trang - 1) * $sp_1_trang;

				$sql = "$sql limit $sp_1_trang offset $skip_sp";
				$result = mysqli_query($connect,$sql);
				?>
				<?php foreach ($result as $each): ?>

				<article class="one_third">
					<img height="150" src="<?php echo $thu_muc_anh . $each['anh'] ?>">
					<figcaption>
						<a href="xem_them.php?ma=<?php echo $each['ma']?>"><h2><?php echo $each['tieu_de'] ?></h2></a>
						<p><?php echo $each['tom_tat'] ?></p>
						<footer class="more"><a href="xem_them.php?ma=<?php echo $each['ma']?>">Đọc thêm</a></footer>
					</figcaption>
				</article>

				<?php endforeach ?>
			</section>
		</div>
	</div>
</div>
</body>
</html>
