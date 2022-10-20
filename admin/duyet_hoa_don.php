<?php


$ma_hoa_don = $_GET['ma_hoa_don'];
$tinh_trang = $_GET['tinh_trang'];	

include '../connect.php';

$sql = "update hoa_don
set
tinh_trang = '$tinh_trang'
where
ma = '$ma_hoa_don'";

mysqli_query($connect,$sql);
mysqli_close($connect);
header('location:hoa_don.php');
?>