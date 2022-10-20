<?php
$ma = $_GET['ma'];
include '../connect.php';
$sql = "delete from tin_tuc
where
ma = '$ma'
";

mysqli_query($connect,$sql);
mysqli_close($connect);
header('location:tin_tuc.php');