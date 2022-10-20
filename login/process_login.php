<?php 

$email = $_POST['email'];
$mat_khau = $_POST['mat_khau'];

include '../connect.php';

$sql = "select * from khach_hang
where
email = '$email' and mat_khau ='$mat_khau'";
$result = mysqli_query($connect,$sql);

$kq = mysqli_num_rows($result);
if ($kq == 1){
	session_start();
	$each = mysqli_fetch_array($result);
	$_SESSION['ma'] = $each['ma'];
	$_SESSION['ten'] = $each['ten'];

	header("location:../index.php");
}
else{
	header("location:form_login.php?error=Sai tài khoản hoặc mật khẩu");
}