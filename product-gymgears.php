<?php 
    session_start();
?>
<!DOCTYPE html>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/Other/html.html to edit this template
-->
 
 <head>
        <!-- Bootstrap CSS Codes -->
        <link rel="stylesheet"
        href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity=
            "sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh"
        crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
        <link rel="stylesheet" href="style.css" type="text/css"/>
        
        <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" >
        
        
        
         <!--jQuery-->
        <script defer
            src="https://code.jquery.com/jquery-3.4.1.min.js"
            integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
            crossorigin="anonymous">
        </script>
        
        <!--Bootstrap JS-->
        <script defer
            src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"
            integrity="sha384-6khuMg9gaYr5AxOqhkVIODVIvm9ynTT5J4V1cfthmT+emCG6yVmEZsRHdxlotUnm"
            crossorigin="anonymous">
        </script>
        
        
        <!-- CSS Codes -->
        <link rel="stylesheet" href="css/main.css">
        <link rel="stylesheet" href="css/product_main.css">
        <link rel="stylesheet" href="css/navbar.css">

        <link rel="stylesheet" href="css/product_shirt.css">

        <!-- Custom JS -->
        <script defer src="js/main.js"></script>

        <title>Shirts</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
    <?php
    include "navbar.php";
    ?>
    
    <section class="container content-section">
            <h2 class="section-header">GYM GEARS</h2>
            <div class="shop-items">
                <div class="shop-item">
                    <img class="shop-item-image" src="images/gymgears_product1.png" alt="SBD Belt">
                    <?php 
                        $product_id = "2";
                        include "get_product.php";
                        echo '<h3>'.$product_name.'</h3>';
                        echo '<h3>$'.$product_price.'</h3>';
                        echo '<h3>'.$product_stock.' left</h3>';

                        if ($_SESSION["loggedIn"] == true)
                        {
                            if($product_stock =="0"){
                            echo '<div class="box-container">';
                            echo '<a class="fas fa-shopping-cart">No More Stocks!</a>';
                            echo '</div>';
                        }
                        else{
                            echo '<div class="box-container">';
                            echo '<a href="https://sbd.sg/collections/sbd-belt/products/sbd-belt?variant=8895827312683" >Link to product</a>';
                            echo '</div>';
                            }
                        }
                        else {
                            echo '<div class="box-container">';
                            echo '<button class="add-to-cart" onclick="window.location.href=\'login.php\'" >Add to Cart</button>';
                            echo '</div>';
                        } 
                    ?>
                </div>
                <div class="shop-item">
                    <img class="shop-item-image" src="images/gymgears_product2.png" alt="Inzer Belt">
                    <?php 
                        $product_id = "11";
                        include "get_product.php";
                        echo '<h3>'.$product_name.'</h3>';
                        echo '<h3>$'.$product_price.'</h3>';
                        echo '<h3>'.$product_stock.' left</h3>';

                        if ($_SESSION["loggedIn"] == true)
                        {
                            if($product_stock =="0"){
                            echo '<div class="box-container">';
                            echo '<a class="fas fa-shopping-cart">No More Stocks!</a>';
                            echo '</div>';
                        }
                        else{
                            echo '<div class="box-container">';
                            echo '<a href="https://inzernet.com/collections/power-belts/products/forever-lever-belt%E2%84%A2-13mm" >Link to product</a>';
                            echo '</div>';
                            }
                        }
                        else {
                            echo '<div class="box-container">';
                            echo '<button class="add-to-cart" onclick="window.location.href=\'login.php\'" >Add to Cart</button>';
                            echo '</div>';
                        } 
                    ?>
                </div>
                <div class="shop-item">
                    <img class="shop-item-image" src="images/gymgears_product3.png" alt="Gymreapers Belt">
                    <?php 
                        $product_id = "12";
                        include "get_product.php";
                        echo '<h3>'.$product_name.'</h3>';
                        echo '<h3>$'.$product_price.'</h3>';
                        echo '<h3>'.$product_stock.' left</h3>';

                        if ($_SESSION["loggedIn"] == true)
                        {
                            if($product_stock =="0"){
                            echo '<div class="box-container">';
                            echo '<a class="fas fa-shopping-cart">No More Stocks!</a>';
                            echo '</div>';
                        }
                        else{
                            echo '<div class="box-container">';
                            echo '<a href="https://www.gymreapers.com/products/10mm-lever-belt-black" >Link to product</a>';
                            echo '</div>';
                            }
                        }
                        else {
                            echo '<div class="box-container">';
                            echo '<button class="add-to-cart" onclick="window.location.href=\'login.php\'" >Add to Cart</button>';
                            echo '</div>';
                        } 
                    ?>
                </div>
                <div class="shop-item">
                    <img class="shop-item-image" src="images/gymgears_product4.png" alt="Rogue Belt" width="350">
                    <?php 
                        $product_id = "13";
                        include "get_product.php";
                        echo '<h3>'.$product_name.'</h3>';
                        echo '<h3>$'.$product_price.'</h3>';
                        echo '<h3>'.$product_stock.' left</h3>';

                        if ($_SESSION["loggedIn"] == true)
                        {
                            if($product_stock =="0"){
                            echo '<div class="box-container">';
                            echo '<a class="fas fa-shopping-cart">No More Stocks!</a>';
                            echo '</div>';
                        }
                        else{
                            echo '<div class="box-container">';
                            echo '<a href="https://www.roguefitness.com/rogue-ohio-lifting-belt" >Link to product</a>';
                            echo '</div>';
                            }
                        }
                        else {
                            echo '<div class="box-container">';
                            echo '<button class="add-to-cart" onclick="window.location.href=\'login.php\'" >Add to Cart</button>';
                            echo '</div>';
                        } 
                    ?>
            </div>
        </section>              
        <?php
    include 'footer.inc.php';
    ?>
    
</body>