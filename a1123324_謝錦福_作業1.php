<?php

$message = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $level = $_POST['level'];
    $interest = isset($_POST['interest']) ? implode(",", $_POST['interest']) : "";
    $note = $_POST['note'];

    $conn = new mysqli("localhost", "root", "", "camp");

    if ($conn->connect_error) {
        die("資料庫連線失敗");
    }

    $sql = "INSERT INTO registrations 
    (name, email, phone, level, interest, note)
    VALUES 
    ('$name','$email','$phone','$level','$interest','$note')";

    if ($conn->query($sql)) {
        $message = "🎉 報名成功！";
    } else {
        $message = "❌ 錯誤：" . $conn->error;
    }
}
?>

<!DOCTYPE html>
<html lang="zh-TW">
<head>
<meta charset="utf-8">
<title>程式設計夏令營</title>

<style>
body {
    background: linear-gradient(to right, #1e3c72, #2a5298);
    font-family: "微軟正黑體";
    color: white;
}

.container {
    width: 700px;
    margin: 30px auto;
    background: rgba(255,255,255,0.1);
    padding: 30px;
    border-radius: 15px;
}

h1, h2, h3 {
    text-align: center;
}

input, select, textarea {
    width: 100%;
    padding: 8px;
    margin-top: 5px;
    border-radius: 5px;
    border: none;
}

textarea {
    resize: none;
}

button {
    padding: 10px;
    background: #00c6ff;
    border: none;
    color: white;
    width: 100%;
    font-size: 16px;
    cursor: pointer;
}

.success {
    text-align:center;
    color: yellow;
    font-weight: bold;
    margin-bottom: 10px;
}

/* 表单排版 */
.form-group {
    margin-bottom: 15px;
    text-align: left;
}

/* checkbox 排版 */
.checkbox-group label {
    display: inline-block;
    margin-right: 15px;
    cursor: pointer;
}
</style>
</head>

<body>

<div class="container">

<h1>💻 程式設計夏令營</h1>
<h3>從0開始學會寫網站！</h3>

<img src="https://images.unsplash.com/photo-1518770660439-4636190af475" width="100%" style="border-radius:10px;">

<p>五天帶你學會 HTML、CSS、PHP 與資料庫，完成一個自己的網站專案！</p>

<h3>📅 課程內容</h3>
<table border="1" width="100%" style="text-align:center;">
<tr><th>天數</th><th>內容</th></tr>
<tr><td>Day1</td><td>HTML</td></tr>
<tr><td>Day2</td><td>CSS</td></tr>
<tr><td>Day3</td><td>PHP</td></tr>
<tr><td>Day4</td><td>MySQL</td></tr>
<tr><td>Day5</td><td>專案實作</td></tr>
</table>

<hr>

<?php if($message != "") echo "<div class='success'>$message</div>"; ?>

<h2>📝 報名表</h2>

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
<label><input type="checkbox" name="interest[]" value="前端"> 前端</label>
<label><input type="checkbox" name="interest[]" value="後端"> 後端</label>
<label><input type="checkbox" name="interest[]" value="AI"> AI</label>
</div>

<div class="form-group">
備註：
<textarea name="note"></textarea>
</div>

<button type="submit">立即報名</button>

</form>

</div>

</body>
</html>