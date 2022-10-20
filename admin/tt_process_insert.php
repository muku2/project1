<?php
	$tieu_de = $_POST['tieu_de'];
	$noi_dung = $_POST['noi_dung'];
	$tom_tat = $_POST['tom_tat'];
	$anh = $_FILES['anh'];

include '../connect.php';

$path_file = explode('.', $anh['name'])[1];
$name_file = time() . '.' . $path_file;

$thu_muc_anh = '../images/tin_tuc/';
move_uploaded_file($anh['tmp_name'], $thu_muc_anh . $name_file);

$sql = "insert into tin_tuc(tieu_de,tom_tat,noi_dung,anh)
values('$tieu_de','$tom_tat','$noi_dung','$name_file')";

mysqli_query($connect,$sql);
mysqli_close($connect);
header('location:tin_tuc.php');
