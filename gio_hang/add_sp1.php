<?php 

$ma = $_GET['ma'];

session_start();

if (isset($_SESSION['gio_hang'][$ma])) {
	$_SESSION['gio_hang'][$ma]++;
}
else{
	$_SESSION['gio_hang'][$ma] = 1;
}
header("location:../all_sp.php");