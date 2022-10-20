<?php
	$ma = $_POST['ma'];
	$ho_ten = $_POST['ho_ten'];
	$ngay_sinh = $_POST['ngay_sinh'];
	$gioi_tinh = $_POST['gioi_tinh'];
	$sdt = $_POST['sdt'];
	$email = $_POST['email'];
	$mat_khau = $_POST['mat_khau'];
	$cmnn = $_POST['cmnn'];
	$cap_do = $_POST['cap_do'];
	
include '../connect.php';
$sql = "update admin
set
ho_ten = '$ho_ten',
ngay_sinh = '$ngay_sinh',
gioi_tinh= '$gioi_tinh',
sdt = '$sdt',
email = '$email',
mat_khau = '$mat_khau',
cmnn = '$cmnn',
cap_do = '$cap_do'
where
ma = '$ma'
";

mysqli_query($connect,$sql);
mysqli_close($connect);
header('location:admin.php');