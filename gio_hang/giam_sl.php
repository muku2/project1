<?php 
$ma	= $_GET['ma'];

session_start();

if ($_SESSION['gio_hang'][$ma]>1) {
	$_SESSION['gio_hang'][$ma]--;
}
else{
	unset($_SESSION['gio_hang'][$ma]);
}
header("location:../gio_hang.php");