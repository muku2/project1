<!DOCTYPE html>
<html>
<head>
	<title>Admin</title>
</head>
<body>
<?php
include 'index1.php';
include '../connect.php';
$sql = "select * from admin";
$result = mysqli_query($connect,$sql);
?>
<table border="1" width="100%">
	<tr>
		<th>Họ Tên</th>
		<th>Số Điện Thoại</th>
		<th>Email</th>
		<th>Giới Tính</th>
		<th>Ngày Sinh</th>
		<th>CMND</th>
		<th>Cấp Độ</th>
		<th>Sửa Thông Tin</th>
		<th>Xóa Thông Tin</th>
	</tr>
	<?php foreach ($result as $each): ?>
	<tr>
		<td>
			<?php echo $each['ho_ten'] ?>
		</td>
		<td>
			<?php echo $each['sdt'] ?>
		</td>
		<td>
			<?php echo $each['email'] ?>
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
			<?php echo $each['ngay_sinh'] ?>
		</td>
		<td>
			<?php echo $each['cmnn'] ?>
		</td>
		<td>
			<?php 
			if ($each ['cap_do'] == 0){
				echo "Nhân Viên";
			}else{
				echo "Admin";
			}
			?>
		</td>
		<td>
			<a href="admin_form_update.php?ma=<?php echo $each['ma']?>">
				Edit
			</a>
		</td>
		<td>
			<a href="admin_delete.php?ma=<?php echo $each['ma']?>" onclick="return confirm('Bạn chắc chứ.')">
				Delete
			</a>
		</td>
	</tr>
	<?php endforeach ?>
</table>
</body>
</html>