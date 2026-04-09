<?php
session_start();

if (!isset($_SESSION['user'])) {
    header("Location: login.php");
    exit();
}

$message = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $level = $_POST['level'];
    $interest = isset($_POST['interest']) ? implode(",", $_POST['interest']) : "";
    $note = $_POST['note'];

    $message = "報名成功！";
}
?>
<!DOCTYPE html>
<html lang="zh-TW">
<head>
<meta charset="utf-8">
<title>程式設計夏令營</title>
<style>
body {
    background-color: white;
    font-family: "微軟正黑體";
    color: black;
    margin: 0;
    padding: 0;
}

.container {
    width: 700px;
    margin: 30px auto;
    background-color: #f9f9f9;
    padding: 30px;
    border-radius: 10px;
    border: 1px solid #ccc;
}

h1, h2, h3 {
    text-align: center;
}

input, select, textarea {
    width: 100%;
    padding: 8px;
    margin-top: 5px;
    border-radius: 5px;
    border: 1px solid #ccc;
    box-sizing: border-box;
}

textarea {
    resize: none;
}

button {
    padding: 10px;
    background: black;
    border: none;
    color: white;
    width: 100%;
    font-size: 16px;
    cursor: pointer;
}

.success {
    text-align:center;
    color: green;
    font-weight: bold;
    margin-bottom: 10px;
}

.form-group {
    margin-bottom: 15px;
    text-align: left;
}

.checkbox-group label {
    display: inline-block;
    margin-right: 15px;
    cursor: pointer;
}

table {
    width: 100%;
    border-collapse: collapse;
    margin-bottom: 20px;
}

th, td {
    border: 1px solid #ccc;
    padding: 8px;
    text-align: center;
}

th {
    background-color: #f0f0f0;
}
</style>
</head>
<body>

<div class="container">

<h1>程式設計夏令營</h1>
<h3>從零開始學會網站開發</h3>

<img src="https://images.unsplash.com/photo-1518770660439-4636190af475" width="100%" style="border-radius:10px;">

<p>五天課程帶你學會 HTML、CSS、PHP 與資料庫，完成完整網站專案。</p>

<h3>課程內容</h3>
<table>
<tr><th>天數</th><th>內容</th></tr>
<tr><td>Day1</td><td>HTML 基礎</td></tr>
<tr><td>Day2</td><td>CSS 排版與樣式</td></tr>
<tr><td>Day3</td><td>PHP 程式設計</td></tr>
<tr><td>Day4</td><td>MySQL 資料庫操作</td></tr>
<tr><td>Day5</td><td>專案整合與上線</td></tr>
</table>

<hr>

<?php if($message != "") echo "<div class='success'>$message</div>"; ?>

<h2>報名表</h2>

<form method="POST">

<div class="form-group">
姓名：
<input type="text" name="name" required>
</div>

<div class="form-group">
Email：
<input type="email" name="email" required>
</div>

<div class="form-group">
電話：
<input type="text" name="phone" required>
</div>

<div class="form-group">
程度：
<select name="level">
<option>新手</option>
<option>有基礎</option>
<option>進階</option>
</select>
</div>

<div class="form-group checkbox-group">
<p>想學的內容：</p>
<label><input type="checkbox" name="interest[]" value="前端"> 前端網頁設計</label>
<label><input type="checkbox" name="interest[]" value="後端"> 後端程式設計</label>
<label><input type="checkbox" name="interest[]" value="資料庫"> 資料庫操作</label>
</div>

<div class="form-group">
備註：
<textarea name="note" placeholder="有什麼需求或問題可以寫在這裡"></textarea>
</div>

<button type="submit">立即報名</button>

</form>

</div>
</body>
</html>