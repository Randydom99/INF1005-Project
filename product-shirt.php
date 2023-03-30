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
    $product_id ="4";
    include "navbar.php";
    include "get_product.php";
    ?>
    
    <section class="container content-section">
            <h2 class="section-header">SHIRTS</h2>
            <div class="shop-items">
                <div class="shop-item">
                    <span class="shop-item-title">Compression Shirt</span>
                    <img class="shop-item-image" src="images/shirt_product1.png" alt="blue shirt">
                    <?php 
                        echo '<h3>'.$product_name.'</h3>';
                        echo '<h3>$'.$product_price.'</h3>';
                        echo '<h3>'.$product_stock.' left</h3>';
                    ?>                     
                            <form method="post" action="add-to-cart.php">
                                <input type="hidden" name="product_id" value="<?php echo $product_id; ?>">
                                <input type="hidden" name="product_name" value="<?php echo $product_name; ?>">
                                <input type="hidden" name="product_price" value="<?php echo $product_price; ?>">
                                <input type="submit" name="add-to-cart" value="Add to Cart">
                            </form>
                    <?php
                        if ($_SESSION["loggedIn"] == true)
                        {
                            if($product_stock =="0"){
                            echo '<div class="box-container">';
                            echo '<a class="fas fa-shopping-cart">No More Stocks!</a>';
                            echo '</div>';
                        }
                        else{
                            echo "<form action='cart.php' method='POST'>";
                            echo "<input type='hidden' name='pid' value='$product_id'>";
                            echo "<input type='number' name='quantity' min='1' value='1' required class='qtyinput'>";
                            echo "<button type='submit' name='addToCart' class='btn btn-light bnav-link margin-left:auto'>Add to cart</button>";
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
                    <span class="shop-item-title">Muscle Fit Shirt</span>
                    <img class="shop-item-image" src="images/shirt_product2.png" alt="black shirt">
                    <?php 
                        echo '<h3>'.$product_name.'</h3>';
                    ?>
                    <div class="shop-item-details">                        
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half-alt"></i>
                            <div class="product-details">
                            <?php
                            echo '<div class="price">$'.$product_price.'</div>';
        //                    echo '<h4>'.$product_desc.'</h4>';
                            echo '<h4>'.$product_stock.' left</h4>';
                            echo '<input type="hidden" name="hidden_name" value="$row["product_name"];"/>';
                            echo '<input type="hidden" name="hidden_price" value="$row["product_price"];"/>';
                            echo '<input type="hidden" name="hidden_stock" value="$row["product_stock"];"/>';
                        ?>
                            </div>
                        </div>
                    </div>
                    <?php
                        if ($_SESSION["loggedIn"] == true)
                        {
                            if($product_stock =="0"){
                            echo '<div class="box-container">';
                            echo '<a class="fas fa-shopping-cart">No More Stocks!</a>';
                            echo '</div>';
                        }
                        else{
                            echo "<form action='cart.php' method='POST'>";
                            echo '<h4>'.$product_id.'</h4>'; 
                            echo "<input type='hidden' name='pid' value='$product_id'>";
                            echo "<input type='number' name='quantity' min='1' value='1' required class='qtyinput'>";
//                            echo "<button type='submit' name='addToCart' class='btn btn-light bnav-link margin-left:auto'>Add to cart</button>";
                            echo '<a href="add-to-cart.php?product_id=4">Add to Cart</a>';
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
                    <span class="shop-item-title">Phantom Series</span>
                    <img class="shop-item-image" src="images/shirt_product3.png" alt="black-red shirt">
                    <?php 
                        echo '<h3>'.$product_name.'</h3>';
                    ?>
                    <div class="shop-item-details">                        
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half-alt"></i>
                            <div class="product-details">
                            <?php
                            echo '<div class="price">$'.$product_price.'</div>';
        //                    echo '<h4>'.$product_desc.'</h4>';
                            echo '<h4>'.$product_stock.' left</h4>';
                            echo '<input type="hidden" name="hidden_name" value="$row["product_name"];"/>';
                            echo '<input type="hidden" name="hidden_price" value="$row["product_price"];"/>';
                            echo '<input type="hidden" name="hidden_stock" value="$row["product_stock"];"/>';
                        ?>
                            </div>
                        </div>
                    </div>
                    <?php
                        if ($_SESSION["loggedIn"] == true)
                        {
                            if($product_stock =="0"){
                            echo '<div class="box-container">';
                            echo '<a class="fas fa-shopping-cart">No More Stocks!</a>';
                            echo '</div>';
                        }
                        else{
                            echo "<form action='cart.php' method='POST'>";
                            echo "<input type='hidden' name='pid' value='$product_id'>";
                            echo "<input type='number' name='quantity' min='1' value='1' required class='qtyinput'>";
                            echo "<button type='submit' name='addToCart' class='btn btn-light bnav-link margin-left:auto'>Add to cart</button>";
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
                    <span class="shop-item-title">Tank Top</span>
                    <img class="shop-item-image" src="images/shirt_product4.png" alt="tank top">
                    <?php 
                        echo '<h3>'.$product_name.'</h3>';
                    ?>
                    <div class="shop-item-details">                        
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half-alt"></i>
                            <div class="product-details">
                            <?php
                            echo '<div class="price">$'.$product_price.'</div>';
        //                    echo '<h4>'.$product_desc.'</h4>';
                            echo '<h4>'.$product_stock.' left</h4>';
                            echo '<input type="hidden" name="hidden_name" value="$row["product_name"];"/>';
                            echo '<input type="hidden" name="hidden_price" value="$row["product_price"];"/>';
                            echo '<input type="hidden" name="hidden_stock" value="$row["product_stock"];"/>';
                        ?>
                            </div>
                        </div>
                    </div>
                    <?php
                        if ($_SESSION["loggedIn"] == true)
                        {
                            if($product_stock =="0"){
                            echo '<div class="box-container">';
                            echo '<a class="fas fa-shopping-cart">No More Stocks!</a>';
                            echo '</div>';
                        }
                        else{
                            echo "<form action='cart.php' method='POST'>";
                            echo "<input type='hidden' name='pid' value='$product_id'>";
                            echo "<input type='number' name='quantity' min='1' value='1' required class='qtyinput'>";
                            echo "<button type='submit' name='addToCart' class='btn btn-light bnav-link margin-left:auto'>Add to cart</button>";
                            }
                        }
                        else {
                            echo '<div class="box-container">';
                            echo '<button class="add-to-cart" onclick="window.location.href=\'login.php\'" >Add to Cart</button>';
                            echo '</div>';
                        } 
                    ?>
                </div>
            </div>
        </section>   
        
        
        <?php
    include 'footer.inc.php';
    ?>
    
</body>