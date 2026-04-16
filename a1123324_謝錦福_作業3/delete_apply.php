<?php
session_start();

if ($_SESSION['role'] != "admin") {
    echo "沒有權限";
    exit();
}

$id = $_GET['id'];


unset($_SESSION['apply'][$id]);


$_SESSION['apply'] = array_values($_SESSION['apply']);

header("Location: admin.php");
exit();