<?php
session_start();

if (!isset($_SESSION['user'])) {
    header("Location: login.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="zh-TW">
<head>
<meta charset="utf-8">
<title>成功</title>
</head>

<body>

<h2>登入成功！</h2>

<p>歡迎：<?php echo $_SESSION['user']; ?></p>

<a href="a1123324_謝錦福_作業2.php">👉 前往報名頁</a>

</body>
</html>