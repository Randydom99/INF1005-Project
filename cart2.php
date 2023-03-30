<?php

session_start();

var_dump($_SESSION['cart']);

$whereIn = implode(',', $_SESSION['cart']);

$sql = " SELECT * FROM gym_website.products WHERE product_id = ($whereIn)";
        
echo $sql;