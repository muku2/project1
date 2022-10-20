<!DOCTYPE html>
<html>
<head>
	<title>Admin-Khách hàng</title>
</head>
<body>
<?php
include 'index1.php';
include '../connect.php';
$sql = "select * from khach_hang ";
$result = mysqli_query($connect,$sql);
?>
<table border="1" width="100%">
	<tr>
		<th>Họ Tên</th>
		<th>Ngày Sinh</th>
		<th>Giới Tính</th>
		<th>Số Điện Thoại</th>
		<th>Email</th>
		<th>Mật khẩu</th>
		<th>Địa chỉ</th>
		<th>Sửa Thông Tin</th>
		<th>Xóa Thông Tin</th>
	</tr>
	<?php foreach ($result as $each): ?>
	<tr>
		<td>
			<?php echo $each['ten'] ?>
		</td>
		<td>
			<?php echo $each['ngay_sinh'] ?>
		</td>
		<td>
			<?php 
			if ($each ['gioi_tinh'] == 0){
				echo "Nam";
			}else{
				echo "Nữ";
			}
			?>
		</td>
		<td>
			<?php echo $each['sdt'] ?>
		</td>
		<td>
			<?php echo $each['email'] ?>
		</td>

		<td>
			<?php echo $each['mat_khau'] ?>
		</td>
		<td>
			<?php echo $each['dia_chi'] ?>
		</td>
		<td>
			<a href="kh_form_update.php?ma=<?php echo $each['ma']?>">
				Edit
			</a>
		</td>
		<td>
			<a href="kh_delete.php?ma=<?php echo $each['ma']?>" onclick="return confirm('Bạn chắc chứ.')">
				Delete
			</a>
		</td>
	</tr>
	<?php endforeach ?>
</table>
</body>
</html>