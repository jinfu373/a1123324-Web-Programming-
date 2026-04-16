<?php
session_start();

if ($_SESSION['role'] != "student") {
    exit("沒有權限");
}

if (!isset($_SESSION['apply'])) $_SESSION['apply'] = [];

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $_SESSION['apply'][] = [
        "user" => $_SESSION['user'],
        "name" => $_POST['name'],
        "email" => $_POST['email'],
        "phone" => $_POST['phone']
    ];
}
?>

<h2>學生報名</h2>

<form method="POST">
姓名：<input name="name"><br>
Email：<input name="email"><br>
電話：<input name="phone"><br>
<button>報名</button>
</form>

<hr>

<h3>我的資料</h3>

<?php
foreach ($_SESSION['apply'] as $a) {
    if ($a['user'] == $_SESSION['user']) {
        echo $a['name']." - ".$a['email']."<br>";
    }
}
?>