<?php 
$ma	= $_GET['ma'];

session_start();

$_SESSION['gio_hang'][$ma]++;

header("location:../gio_hang.php");