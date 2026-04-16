<?php
session_start();

$courses = [
    1=>"HTML 基礎",
    2=>"CSS 排版與樣式",
    3=>"PHP 程式設計",
    4=>"MySQL 資料庫操作",
    5=>"專案整合與上線"
];

if (!isset($_SESSION['orders'])) {
    $_SESSION['orders'] = [];
}

if (!isset($_SESSION['cart'])) {
    $_SESSION['cart'] = [];
}


$order = [];

foreach ($_SESSION['cart'] as $id) {
    $order[] = $courses[$id];
}


$_SESSION['orders'][] = [
    "user" => $_SESSION['user'],
    "items" => $order
];


$_SESSION['cart'] = [];

echo "購買成功！<br>";
echo "<a href='index.php'>回首頁</a>";