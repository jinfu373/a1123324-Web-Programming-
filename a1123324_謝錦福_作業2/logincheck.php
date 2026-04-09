<?php
session_start();

$username = $_POST['username'];
$password = $_POST['password'];

// 固定帳密
if ($username === "admin" && $password === "1234") {

    $_SESSION['user'] = $username;
    header("Location: result.php");
    exit();

} else {

    header("Location: login.php?error=1");
    exit();
}