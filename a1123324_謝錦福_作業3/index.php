<?php
session_start();

if (!isset($_SESSION['user'])) {
    header("Location: login.php");
    exit();
}
?>

<h2>程式設計夏令營</h2>

<p>歡迎 <?php echo $_SESSION['user']; ?> (<?php echo $_SESSION['role']; ?>)</p>

<a href="student.php">學生功能</a><br>
<a href="teacher.php">教師功能</a><br>
<a href="admin.php">管理者功能</a><br>
<a href="catalog.php">購買課程</a><br>
<a href="shoppingcart.php">購物車</a><br>

<a href="logout.php">登出</a>
