<?php session_start(); ?>

<h2>登入系統</h2>

<form action="logincheck.php" method="POST">
帳號：<input type="text" name="user" required><br><br>

角色：
<select name="role">
    <option value="student">學生</option>
    <option value="teacher">教師</option>
    <option value="admin">管理者</option>
</select><br><br>

<button>登入</button>
</form>