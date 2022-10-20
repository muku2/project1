<?php
	$ma = $_POST['ma'];
	$tieu_de = $_POST['tieu_de'];
	$noi_dung = $_POST['noi_dung'];
	$tom_tat = $_POST['tom_tat'];
	$anh = $_FILES['anh2'];

if ($anh['size']>0) {
	$thu_muc_anh = '../images/tin_tuc/';
	move_uploaded_file($anh['tmp_name'], $thu_muc_anh . $anh['name']);
	$tieu_de_anh = $anh['name'];
}else{
	$tieu_de_anh = $_POST['anh1'];
}

include '../connect.php';

$sql = "update tin_tuc
set
tieu_de = '$tieu_de',
noi_dung= '$noi_dung',
tom_tat = '$tom_tat',
anh = '$tieu_de_anh'
where
ma = '$ma'
";

mysqli_query($connect,$sql);
mysqli_close($connect);
header('location:tin_tuc.php');