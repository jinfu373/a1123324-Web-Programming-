<?php
session_start();

if ($_SESSION['role'] != "admin") {
    exit("沒有權限");
}

$courses = [
    1=>"HTML 基礎",
    2=>"CSS 排版與樣式",
    3=>"PHP 程式設計",
    4=>"MySQL 資料庫操作",
    5=>"專案整合與上線"
];
?>

<h2>管理者 - 訂單系統</h2>

<?php
if (empty($_SESSION['orders'])) {
    echo "沒有訂單";
} else {

    foreach ($_SESSION['orders'] as $index => $order) {

        echo "<div style='border:1px solid #ccc;padding:10px;margin-bottom:10px;'>";

        echo "<b>訂單 #" . ($index+1) . "</b><br>";
        echo "使用者：" . $order['user'] . "<br>";

        echo "課程：<br>";

        foreach ($order['items'] as $item) {
            echo "- " . $item . "<br>";
        }

        echo "</div>";
    }
}
?>