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
        
        <!-- Custom JS -->
        <script defer src="js/main.js"></script>

        <title>World of Pets</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
    <?php
    $product_id ="3";
    include "nav.inc.php";
    include "get_product.php";
    ?>
    
    <section class="products" id="products">
        <h1 class="heading"> Our <span>products</span> </h1>
        
                <div class="image">
                <img src="images/shorts-product1.jpg" alt="alt"/>
                </div>
                
                <div class="content">
                    <?php
                        echo '<h3>'.$product_name.'</h3>';
                    ?>
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half-alt"></i>
                        </div>
                <?php
                    echo '<div class="price">$'.$product_price.'</div>';
                    echo '<h4>'.$product_desc.'</h4>';
                    echo '<h4>'.$product_stock.' left</h4>';
                ?>
                </div>
            <?php
                if ($_SESSION["loggedIn"] == true)
                {
                    if($product_stock =="0"){
                    echo '<div class="box-container">';
                    echo '<a href="#" class="fas fa-shopping-cart">No More Stocks!</a>';
                    echo '</div>';
                }
                else{
                    echo '<div class="box-container">';
                    echo '<a href="cart.php" class="fas fa-shopping-cart">Add to Cart</a>';
                    echo '</div>';
                }
                }
                else {
                    echo '<div class="box-container">';
                    echo '<a href="login.php" class="fas fa-shopping-cart">Add to Cart</a>';
                    echo '</div>';
                } 
            ?>     
    
</body>