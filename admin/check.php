<?php 

session_start();
if (!isset($_SESSION['cap_do'])){
 	header("location:index.php?error=Đăng nhập đi rồi vào đây");
 }