<style type="text/css">
	.content1 {
		width: 33%;
		float: left;
		background-color: white;
	}
	.a1{
		display: block;
		float:left;
		margin: 0% 0 0% 0%;
		box-shadow: 0px 0px 0px rgb(150, 150, 150);
		width: 33%
	}
	.a2 {
		width: 100%;
		padding: 0px;
		text-align:center;
		position:relative; 
	}
	.a2 img{
		max-width:90%;
	}
	.discount{
		background:url(../images/discount-img.png) no-repeat 0 0;
		position: absolute;
		top: 30px;
		width: 40px;
		height: 40px;
	}
	.discount span.percentage{
		color: #FFF;
		font-size: 1em;
		font-weight: bold;
		line-height: 40px;
	}
	.a2 h2 {
		color: #CC3636;
		font-family: 'Monda', sans-serif;
		font-size:0.9em;
		font-weight : normal;
	}
	.a2 p{
		font-size:0.8125em;
		padding:0.4em 0;
		color: #333;	
	}
	.a2 p span.strike{
		font-size:18px;
		font-family: 'Monda', sans-serif;
		color:#444;
		text-decoration:line-through;
	}
	.a2 p span.price{
		font-size:18px;
		font-family: 'Monda', sans-serif;
		color: #CC3636;
		margin-left:15px;
	}
	.a2 .button{
		margin-top:.3em;
		line-height:1.9em;
	}
	.a2 .button a{
		padding:7px 20px;
		font-size:0.8em;
	}
	.a2 .button a{
		font-family: "Trebuchet MS",Arial,Helvetica,sans-serif;
		font-size: 14px;
		line-height: 15px;
		text-transform: none;
		color: #737370;
		text-decoration: none!important;
		background: url(../images/button-bg.png) repeat-x 0 0 #E8E8E8;
		display: inline-block;
		border-left: 1px solid #D4D4D4!important;
		border-right: 1px solid #ADADAD!important;
		border-top: 1px solid #E0E0E0!important;
		border-bottom: 1px solid #9C9C9C!important;
		cursor: pointer!important;
		margin: 0 2px;
		border-radius: 2px;
		-moz-border-radius: 2px;
		-webkit-border-radius: 2px;
		-webkit-transition: all 0.5s ease;
		-moz-transition: all 0.5s ease;
		-o-transition: all 0.5s ease;
		transition: all 0.5s ease;
	}
	.a2 .button a:hover{
		color:#70389C;
		background: #E8E8E8;
	}
	.a2 .button span img{
		position:absolute;
	}
	.a2 .button a.cart-button{
		padding:7px 5px 7px 38px; 
	}
</style>

<?php 
$thu_muc_anh = 'images/img_sp/';
include 'connect.php';
$tim_kiem = '';
if (isset($_GET['tim_kiem'])){
	$tim_kiem = $_GET['tim_kiem'];
}
$sql = "select san_pham.*,
danh_muc.ten as 'ten_danh_muc' from san_pham
join danh_muc on danh_muc.ma = san_pham.ma_danh_muc
where san_pham.ten like '%$tim_kiem%'";

$result = mysqli_query($connect,$sql);

$all_sp = mysqli_num_rows($result);

$sp_1_trang = 9;

$so_trang = ceil( $all_sp / $sp_1_trang );

$trang = 1;
if (isset($_GET['trang'])) {
$trang = $_GET['trang'];}

$skip_sp = ($trang - 1) * $sp_1_trang;

$sql = "$sql limit $sp_1_trang offset $skip_sp";
$result = mysqli_query($connect,$sql);
?><br><br><hr width="70%">

<br>
<?php foreach ($result as $each): ?>

	<div class="content1" border="1" style="margin-bottom: 15px">
		<div class="a1 a2" border="1">
			<a href=""><img height="150" src="<?php echo $thu_muc_anh . $each['anh'] ?>"></a>
			<h2 title="<?php echo $each['mo_ta'] ?>">
				<?php echo $each['ten'] ?>
			</h2> 
			<p>
				<span class="price">
					<?php 
					$num = $each['gia'];
					$formattedNum = number_format($num);
					echo $formattedNum;
					?> VNĐ
				</span>
			</p>
			<?php if (isset($_SESSION['ma'])){ ?>
				<div class="button">
					<span>
						<img src="images/cart.jpg">
						<a href="gio_hang/add_sp1.php?ma=<?php echo $each['ma'] ?>" onclick="alert('Đã thêm vào giỏ hàng.')" class="cart-button">
							Thêm vào giỏ
						</a>
					</span>
				</div>
			<?php } ?>
			<div class="button">
				<span>
					<a href="chi_tiet.php?ma=<?php echo $each['ma'] ?>" class="details">Chi tiết</a>
				</span>
			</div>
			<br><hr width="65%">
		</div>
	</div>

<?php endforeach ?>
<p align="center">
	Trang:
	<?php for ($i=1; $i <= $so_trang ; $i++){ ?>
		<a href="?trang=<?php echo $i ?>&tim_kiem=<?php echo $tim_kiem ?>">
			<?php echo $i ?>
		</a>
	<?php } ?>
</p>
<hr width="70%">