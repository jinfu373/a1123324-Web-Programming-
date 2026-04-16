<?php
session_start();

$courses = [
    1=>"HTML 基礎",
    2=>"CSS 排版與樣式",
    3=>"PHP 程式設計",
    4=>"MySQL 資料庫操作",
    5=>"專案整合與上線"
];
?>

<h2>課程購買</h2>

<?php foreach($courses as $id=>$c): ?>
    <p>
        <?php echo $c; ?>
        <a href="savecart.php?id=<?php echo $id; ?>">加入購物車</a>
    </p>
<?php endforeach; ?>