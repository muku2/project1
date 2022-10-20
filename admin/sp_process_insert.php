<?php
	$ten = $_POST['ten'];
	$gia = $_POST['gia'];
	$mo_ta = $_POST['mo_ta'];
	$anh = $_FILES['anh'];
	$ma_danh_muc = $_POST['ma_danh_muc'];
	
include '../connect.php';

$path_file = explode('.', $anh['name'])[1];
$name_file = time() . '.' . $path_file;

$thu_muc_anh = '../images/img_sp/';
move_uploaded_file($anh['tmp_name'], $thu_muc_anh . $name_file);

$sql = "insert into san_pham(ten,mo_ta,gia,anh,ma_danh_muc)
values('$ten','$mo_ta','$gia','$name_file','$ma_danh_muc')";

mysqli_query($connect,$sql);
mysqli_close($connect);
header('location:sanpham.php');
