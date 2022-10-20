<!DOCTYPE html>
<html>
<head>
	<title>Admin-Hóa đơn</title>
</head>
<body>
<?php
	include 'index1.php';
	include '../connect.php';
	$sql = "select hoa_don.*, khach_hang.ten, khach_hang.sdt, khach_hang.dia_chi
	from hoa_don join khach_hang on khach_hang.ma = hoa_don.ma_khach_hang order by tinh_trang";
	$result = mysqli_query($connect,$sql);
?>
<table border="3" width="80%">
	<tr>
		<th>Thời gian đặt</th>
		<th>Thông tin người nhận</th>	
		<th>Thông tin người đặt</th>
		<th>Xem chi tiết</th>
		<th>Tình Trạng Đơn</th>
		<th>Thay tình trạng đơn</th>
	</tr>
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
			<?php echo $each['ten'] ?><br>
			<?php echo $each['sdt'] ?><br>
			<?php echo $each['dia_chi'] ?>
		</th>
		<th>
			<a href="xem_chi_tiet.php?ma_hoa_don=<?php echo $each['ma']?>">
				Xem
			</a>
		</th>
		<th>
			<?php if($each['tinh_trang']==1){
                      echo"Đang Chờ Duyệt";
			}else if($each['tinh_trang']==2){
				echo "Đã Duyệt";
			}else{
			    echo "Đã Hủy"; 
			}
			?>
		</th>
		<th>
			<?php if($each['tinh_trang']==1){
             ?>
			<a  href="duyet_hoa_don.php?ma_hoa_don=<?php echo $each['ma']?>&tinh_trang=2">Duyệt Đơn</a><br><br>
			<a style="color:red;" href="duyet_hoa_don.php?ma_hoa_don=<?php echo $each['ma']?>&tinh_trang=3">Hủy Đơn</a>
            <?php } ?>
		</th>
	</tr>
	<?php endforeach ?>
</table>
</body>
</html>