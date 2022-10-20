<?php 

session_start();
unset($_SESSION['gio_hang']);
header("location:../gio_hang.php");