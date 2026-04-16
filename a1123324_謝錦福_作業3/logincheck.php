<?php
session_start();

$_SESSION['user'] = $_POST['user'];
$_SESSION['role'] = $_POST['role'];

setcookie("user_id", $_POST['user'], time()+3600);

$_SESSION['apply'] = [];
$_SESSION['cart'] = [];

header("Location: index.php");
exit();