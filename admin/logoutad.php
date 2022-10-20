<?php
session_start();
unset($_SESSION['ma']);
unset($_SESSION['ho_ten']);
unset($_SESSION['cap_do']);
header('location:index.php');
