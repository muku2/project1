<?php
session_start();
unset($_SESSION['ma']);
unset($_SESSION['ho_ten']);
header('location:../index.php');
