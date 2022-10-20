<?php
	$ten = $_POST['ten'];
	$ngay_sinh = $_POST['ngay_sinh'];
	$gioi_tinh = $_POST['gioi_tinh'];
	$sdt = $_POST['sdt'];
	$email = $_POST['email'];
	$mat_khau = $_POST['mat_khau'];
	$dia_chi = $_POST['dia_chi'];
	
include '../connect.php';
$sql = "insert into khach_hang(ten,ngay_sinh,gioi_tinh,sdt,Email,mat_khau,dia_chi) values('$ten','$ngay_sinh','$gioi_tinh','$sdt','$email','$mat_khau','$dia_chi')";

mysqli_query($connect,$sql);
mysqli_close($connect);
header('location:../index.php');