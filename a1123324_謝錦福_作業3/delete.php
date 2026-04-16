<?php
session_start();

if (isset($_GET['cart'])) {
    unset($_SESSION['cart'][$_GET['cart']]);
    $_SESSION['cart'] = array_values($_SESSION['cart']);
}

header("Location: shoppingcart.php");
exit();