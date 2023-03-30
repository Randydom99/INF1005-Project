<?php
session_start();

if (empty($_SESSION['cart'])){
    $_SESSION['cart'] = array();
}

array_push($_SESSION['cart'], $_GET['product_id']);

?>

<a href="cart2.php">View Shopping Cart</a>
