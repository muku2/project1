<?php
	$ma = $_POST['ma'];
	$ten = $_POST['ten'];
	$gia = $_POST['gia'];
	$mo_ta = $_POST['mo_ta'];
	$ma_danh_muc = $_POST['ma_danh_muc'];
	$anh = $_FILES['anh2'];

if ($anh['size']>0) {
	$thu_muc_anh = '../images/img_sp/';
	move_uploaded_file($anh['tmp_name'], $thu_muc_anh . $anh['name']);
	$ten_anh = $anh['name'];
}else{
	$ten_anh = $_POST['anh1'];
}

include '../connect.php';

$sql = "update san_pham
set
ten = '$ten',
gia= '$gia',
mo_ta = '$mo_ta',
ma_danh_muc = '$ma_danh_muc',
anh = '$ten_anh'
where
ma = '$ma'
";


mysqli_query($connect,$sql);
mysqli_close($connect);
header('location:sanpham.php');