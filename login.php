<?php session_start(); ?>
<!DOCTYPE html>
<html lang="zh-TW">
<head>
<meta charset="utf-8">
<title>登入</title>
</head>

<body>

<h2>會員登入</h2>

<form action="logincheck.php" method="POST">
帳號：<input type="text" name="username" required><br><br>
密碼：<input type="password" name="password" required><br><br>
<button type="submit">登入</button>
</form>

<?php
if (isset($_GET['error'])) {
    echo "<p style='color:red;'>帳號或密碼錯誤</p>";
}
?>

</body>
</html>