<?php 

$email = $_POST['email'];
$mat_khau = $_POST['mat_khau'];

include '../connect.php';

$sql = "select * from admin
where
email = '$email' and mat_khau ='$mat_khau'";
$result = mysqli_query($connect,$sql);

$kq = mysqli_num_rows($result);
if ($kq == 1){
	session_start();
	$each = mysqli_fetch_array($result);
	$_SESSION['ma'] = $each['ma'];
	$_SESSION['ten'] = $each['ten'];
	$_SESSION['cap_do'] = $each['cap_do'];

	header("location:index1.php");
}
else{
	header("location:index.php?error=Sai tài khoản hoặc mật khẩu");
}