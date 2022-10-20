<!DOCTYPE html>
<html>
<head>
	<title>Admin</title>
</head>
<body>
<?php
	$ma_hoa_don = $_GET['ma_hoa_don'];
	include 'index1.php';
	include '../connect.php';
	$thu_muc_anh = '../images/img_sp/';
    $sql = "select * from hoa_don_chi_tiet 
    join san_pham on san_pham.ma = hoa_don_chi_tiet.ma_san_pham
    where ma_hoa_don = '$ma_hoa_don'";
	$result = mysqli_query($connect,$sql);
	$tong_tat_ca = 0;
?>
<table border="1" width="100%">
	<tr>
		<th>Tên sản phảm</th> 	
		<th>Ảnh sản phẩm</th>
		<th>Số lượng</th>
		<th>Giá</th>
		<th>Tổng tiền</th>
	</tr>
	<?php foreach ($result as $each): ?>
	 <tr>
	 	<td>
	 		<?php echo $each['ten']?>
	 	</td>
	 	<td>
	 		<img height="150" src="<?php echo $thu_muc_anh . $each['anh'] ?>">
	 	</td>
	 	<td>
	 		<?php echo $each['so_luong']?>
	 	</td>
	 	<td>
	 		<?php echo $each['gia']?>
	 	</td>
	 	<td>
	 		<?php echo $each['gia'] * $each['so_luong']?>
	 		<?php $tong_tat_ca += $each['gia'] * $each['so_luong']?>
	 	</td>
	 </tr>
	<?php endforeach ?>
</table>
<h1>
	Tổng Tát Cả  :<?php echo $tong_tat_ca?>
</h1>
</body>
</html>