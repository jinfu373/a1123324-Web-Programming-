<?php
session_start();

$courses = [
    1=>"HTML 基礎",
    2=>"CSS 排版與樣式",
    3=>"PHP 程式設計",
    4=>"MySQL 資料庫操作",
    5=>"專案整合與上線"
];

if (!isset($_SESSION['cart'])) {
    $_SESSION['cart'] = [];
}
?>

<h2>購物車</h2>

<?php
if (empty($_SESSION['cart'])) {
    echo "購物車是空的";
} else {

    foreach ($_SESSION['cart'] as $i => $id) {
        echo $courses[$id];
        echo " <a href='delete.php?cart=$i'>刪除</a><br>";
    }

    echo "<br><a href='checkout.php'>👉 結帳</a>";
}
?>