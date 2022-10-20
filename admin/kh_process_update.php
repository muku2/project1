<?php
	$ma = $_POST['ma'];
	$ten = $_POST['ten'];
	$ngay_sinh = $_POST['ngay_sinh'];
	$gioi_tinh = $_POST['gioi_tinh'];
	$sdt = $_POST['sdt'];
	$email = $_POST['email'];
	$mat_khau = $_POST['mat_khau'];
	$dia_chi = $_POST['dia_chi'];
	
include '../connect.php';
	
$sql = "update khach_hang
set
ten = '$ten',
ngay_sinh = '$ngay_sinh',
gioi_tinh= '$gioi_tinh',
sdt = '$sdt',
email = '$email',
mat_khau = '$mat_khau',
dia_chi = '$dia_chi'
where
ma = '$ma'
";

mysqli_query($connect,$sql);
mysqli_close($connect);
header('location:khachhang.php');