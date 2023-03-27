<?php 
    session_start();
?>
<!doctype html>
<html lang="en">
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
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/allmin.css" >
        
        
        
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
        <link rel="stylesheet" href="css/cart.css">
        
        <!-- Custom JS -->
        <script defer src="js/main.js"></script>

        <title>World of Pets</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
  <body>
    <section>
        <div class="cover">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 d-flex align-items-center">
                        <p class="mb-0 phone pl-md-2">
                            <a href="#"class="mr-2">
                                <i class="fas fa-phone mr-1"></i>
                                +65 9912 6290
                            </a>
                        <a href="#"><i class="fas fa-paper-plane mr-1"></i>
                        biggatoday@email.com
                        </a>
                        </p>
                    </div>
                    <div class="col-md-6 d-flex justify-content-md-end">
                        <div class="reg">
                            <a href="register.php" class="mr-2 mb-0">Sign-Up</a>
                            <a href="login.php" class="mr-2 mb-0">Log In</a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <!--Nav-->
        <nav class="navbar navbar-expand-lg main-navbar bg-color main-navbar-color"
        id="main-navbar">
        <div class="container">
            <a class="navbar-brand" href="#">Checkout</a>
<!--            <div class="order-lg-last btn-group">
                <i class="fas fa-shopping-bag fa-2x"></i>
            </div>-->
            <button class="navbar-toggler" type="button" data-toggle="collapse"
            data-target="#myNav" aria-controls="nav" aria-expanded="false"
            aria-label="Toggle navigation">
        <i class="fas fa-bars"></i></button>
        </div>
        </nav>
        <!--End of Nav-->
    </section>
    <!---Hero Section-->
    <section id="hero">
        <div class="hero-container">
            <div class="hero-logo">
                <h1 class="font-weight-bold">Cart Products</h1>
            </div>
            </div>
    </section>
    <!---End of Hero Section-->
    <!--Cart Section-->
    <section id="cart-container" class="container my-5">
        <div class="container">
            <div class="cart-container">
            <div class="table-responsive">
                <table class="table">
                    <thead class="thead-dark">
                        <tr>
                            <th scope="col"class="text-white">Remove</th>
                            <th scope="col"class="text-white">Product</th>
                            <th scope="col"class="text-white">Product Name</th>
                            <th scope="col"class="text-white">Price</th>
                            <th scope="col"class="text-white">Quantity</th>
                            <th scope="col"class="text-white">Total</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>
                                <a href="#"><i class="fas fa-trash-alt"></i></a>
                            </td>
                            <td>
                                 <img src="images/shirt_product1.png"alt="blue shirt">
                            </td>
                            <td>
                                <h5>tankerJJ</h5>
                            </td>
                            <td>
                                <h6>$20.00</h6>
                            </td>
                            <td>                                 
                                    <input class="w-25 lp-1"type="number"
                                    value="1"min="0"max="10">
                            </td>
                            <td>
                                <h6>$20.00</h6>
                            </td>
                        </tr>
                        
                        
                        <tr>
                            <td>
                                <a href="#"><i class="fas fa-trash-alt"></i></a>
                            </td>
                            <td>
                                 <img src="images/shorts-product1.jpg"alt="black shorts">
                            </td>
                            <td>
                                <h5>SBD's shorts</h5>
                            </td>
                            <td>
                                <h6>$20.00</h6>
                            </td>
                            <td>                                 
                                    <input class="w-25 lp-1"type="number"
                                    value="1"min="0"max="10">
                            </td>
                            <td>
                                <h6>$20.00</h6>
                            </td>
                        </tr>
                        
                        <tr>
                            <td>
                                <a href="#"><i class="fas fa-trash-alt"></i></a>
                            </td>
                            <td>
                                 <img src="images/gymgears-product1.jpg"alt="Weight Lifting Belt">
                            </td>
                            <td>
                                <h5>SBD's belt</h5>
                            </td>
                            <td>
                                <h6>$20.00</h6>
                            </td>
                            <td>                                 
                                    <input class="w-25 lp-1"type="number"
                                    value="1"min="0"max="10">
                            </td>
                            <td>
                                <h6>$20.00</h6>
                            </td>
                        </tr>
                        
                        <tr>
                            <td>
                                <a href="#"><i class="fas fa-trash-alt"></i></a>
                            </td>
                            <td>
                                 <img src="images/supplements-product1.png"alt="blue shirt">
                            </td>
                            <td>
                                <h5 style='text-align: center;'>Gold's Standard Protein Whey</h5>
                            </td>
                            <td>
                                <h6>$20.00</h6>
                            </td>
                            <td>                                 
                                    <input class="w-25 lp-1"type="number"
                                    value="1"min="0"max="10">
                            </td>
                            <td>
                                <h6>$20.00</h6>
                            </td>
                        </tr>
                        
                        <!----->
<!--                        <tr>
                            <td>
                                <div class="main">
                                    <div class="d-flex">
                     W=145 H=98 <img src="images/cart-1.jpg"alt="">
                                    </div>
                                    <div class="des">
                                        <p>lorem ipsum</p>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <h6>$20.00</h6>
                            </td>
                            <td>
                                <div class="counter">
                                    <i class="fas fa-angle-down"></i>
                                    <input class="input-number"type="text"
                                    value="1"min="0"max="10">
                                    <i class="fas fa-angle-up"></i>
                                </div>
                            </td>
                            <td>
                                <h6>$20.00</h6>
                            </td>
                        </tr>
                        -
                        <tr>
                            <td>
                                <div class="main">
                                    <div class="d-flex">
                     W=145 H=98 <img src="images/cart-1.jpg"alt="">
                                    </div>
                                    <div class="des">
                                        <p>lorem ipsum</p>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <h6>$20.00</h6>
                            </td>
                            <td>
                                <div class="counter">
                                    <i class="fas fa-angle-down"></i>
                                    <input class="input-number"type="text"
                                    value="1"min="0"max="10">
                                    <i class="fas fa-angle-up"></i>
                                </div>
                            </td>
                            <td>
                                <h6>$20.00</h6>
                            </td>
                        </tr>-->
                        <!----->
                    </tbody>
                </table>
            </div>
            </div>
        </div>
    </section>
    <section id="cart-bottom" class="container">
        <div class="row">
            <div class="coupon col-lg-6 col-md-6 col-12 mb-4">
                <div>
                    <h5>COUPON</h5>
                    <p>Enter your coupon code here</p>
                    <input type="text" placeholder="Coupon Code">
                    <button>Apply Coupon</button>
                </div>
            </div>
            <div class="checkout col-lg-6 col-md-6 col-12 mb-4">
                <div>
                    <h5>Cart Total</h5>
                    <div class="d-flex justify-content-between">
                        <h6>Subtotal</h6>
                        <p>$20.00</p>
                    </div>
                    <div class="d-flex justify-content-between">
                        <h6>Shipping</h6>
                        <p>$5.00</p>
                    </div>
                    <hr class="second-hr">
                    <div class="d-flex justify-content-between">
                        <h6>Total</h6>
                        <p>$25.00</p>
                    </div>
                

                </div>
        
            <a href="payment.php"class="proceed-btn">Proceed to Checkout</a>
        </div>
    </section>

















      
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>