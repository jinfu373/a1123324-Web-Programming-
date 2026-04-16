<?php
session_start();

if ($_SESSION['role'] != "teacher") {
    exit("沒有權限");
}
?>

<h2>教師查看報名</h2>

<?php
foreach ($_SESSION['apply'] as $a) {
    echo "學生：" . $a['user'] . "<br>";
    echo "姓名：" . $a['name'] . "<br>";
    echo "Email：" . $a['email'] . "<br><hr>";
}
?>