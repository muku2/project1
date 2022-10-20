<?php
	$ho_ten = $_POST['ho_ten'];
	$ngay_sinh = $_POST['ngay_sinh'];
	$gioi_tinh = $_POST['gioi_tinh'];
	$sdt = $_POST['sdt'];
	$email = $_POST['email'];
	$mat_khau = $_POST['mat_khau'];
	$cmnn = $_POST['cmnn'];
	$cap_do = $_POST['cap_do'];
	
include '../connect.php';
$sql = "insert into admin(ho_ten,ngay_sinh,gioi_tinh,sdt,email,mat_khau,cmnn,cap_do)
	values('$ho_ten','$ngay_sinh','$gioi_tinh','$sdt','$email','$mat_khau','$cmnn','$cap_do')";

mysqli_query($connect,$sql);
mysqli_close($connect);
header('location:admin.php');
