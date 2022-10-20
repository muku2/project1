<!DOCTYPE html>
<html>
<head>
	<title>Admin-Sản phẩm</title>
</head>
<body>
<?php 
$thu_muc_anh = '../images/img_sp/';
include 'index1.php';
include '../connect.php';
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

$sp_1_trang = 4;

$so_trang = ceil( $all_sp / $sp_1_trang );

$trang = 1;
if (isset($_GET['trang'])) {
$trang = $_GET['trang'];}

$skip_sp = ($trang - 1) * $sp_1_trang;

$sql = "$sql limit $sp_1_trang offset $skip_sp";
$result = mysqli_query($connect,$sql);
?>
<br><h1>Hiện tại đang có: <?php echo $all_sp ?> sản phẩm.</h1><br>
<p align="center">
	Trang:
	<?php for ($i=1; $i <= $so_trang ; $i++){ ?>
		<a href="?trang=<?php echo $i ?>&tim_kiem=<?php echo $tim_kiem ?>">
			<?php echo $i ?>
		</a>
	<?php } ?>
</p>
<form>
	tim kiem
	<input type="search" name="tim_kiem">
</form>
<table border="1" width="100%">
	<tr>
		<th>Tên sản phẩm</th>
		<th>Giá sản phẩm</th>
		<th>Thông tin sản phẩm</th>
		<th>Ảnh sản phẩm</th>
		<th>Danh mục sản phẩm</th>
		<th>Sửa</th>
		<th>Xóa</th>
	</tr>
	<?php foreach ($result as $each): ?>
	<tr>
		<td>
			<?php echo $each['ten'] ?>
		</td>
		<td>
			<?php $num = $each['gia'];
			$formattedNum = number_format($num);
			echo $formattedNum;
			?>
		</td>
		<td>
			<?php echo $each['mo_ta'] ?>
		</td>
		<td>
			<img height="150" src="<?php echo $thu_muc_anh . $each['anh'] ?>">
		</td>
		<td>
			<?php echo $each['ten_danh_muc'] ?>
		</td>
		<td>
			<a href="sp_form_update.php?ma=<?php echo $each['ma']?>">
				Sửa
			</a>
		</td>
		<td>
			<a href="sp_delete.php?ma=<?php echo $each['ma']?>">
				Xóa
			</a>
		</td>
	</tr>
	<?php endforeach ?>
</table>
</body>
</html>