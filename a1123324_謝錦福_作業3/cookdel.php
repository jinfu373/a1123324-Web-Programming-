<?php
setcookie("user_id", "", time()-3600);

echo "Cookie 已刪除<br>";
echo "<a href='index.php'>回首頁</a>";