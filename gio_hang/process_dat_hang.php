<?php 

$ten_nguoi_nhan = $_POST['ten_nguoi_nhan'];
$sdt_nguoi_nhan = $_POST['sdt_nguoi_nhan'];
$dia_chi_nguoi_nhan = $_POST['dia_chi_nguoi_nhan'];

session_start();
include '../connect.php';

$ma_khach_hang = $_SESSION['ma'];
$thoi_gian_dat_hang = date("Y-m-d H:i:s");
$tinh_trang = 1;
$sql = "insert into hoa_don(ma_khach_hang,thoi_gian_dat_hang,ten_nguoi_nhan,sdt_nguoi_nhan,dia_chi_nguoi_nhan,tinh_trang)
values('$ma_khach_hang','$thoi_gian_dat_hang','$ten_nguoi_nhan','$sdt_nguoi_nhan','$dia_chi_nguoi_nhan','$tinh_trang')";
mysqli_query($connect,$sql);

$sql = "select max(ma) as ma_hoa_don from hoa_don";
$result = mysqli_query($connect,$sql);
$each = mysqli_fetch_array($result);

$ma_hoa_don = $each['ma_hoa_don'];

foreach ($_SESSION['gio_hang'] as $ma_san_pham => $so_luong) {
	$sql = "insert into hoa_don_chi_tiet(ma_hoa_don,ma_san_pham,so_luong)
	values('$ma_hoa_don','$ma_san_pham','$so_luong')";
	mysqli_query($connect,$sql);
}


unset($_SESSION['gio_hang']);
mysqli_close($connect);
header("location:done.php");