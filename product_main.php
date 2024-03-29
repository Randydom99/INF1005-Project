<?php 
    session_start();
?>
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
        <link rel="stylesheet" href="css/product_main.css">
        <link rel="stylesheet" href="css/navbar.css">
        
        <!-- Custom JS -->
        <script defer src="js/product_main.js"></script>

        <title>World of Pets</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
    <?php
    include "navbar.php";
    ?>

    <div class="slider">
        <div class="nav" id="nav">
            <h3 class="menuItem">SHIRTS</h3>
            <h3 class="menuItem">SHORTS</h3>
            <h3 class="menuItem">GYM GEARS</h3>
            <h3 class="menuItem">SUPPLEMENTS</h3>
        </div>
        <div class="sliderWrapper">
            <div class="sliderItem">
                <img src="images/shirt_product1.png" alt="shirt" class="sliderImg">
                <div class="sliderBg"></div>
                <h1 class="sliderTitle">Limited Edition</br> <span class="phantom">P H A N T O M</span></h1>
<!--                <h2 class="sliderPrice">$119</h2>-->
                <a href="product-shirt.php">
                    <button class="buyButton">BUY NOW!</button>
                </a>
            </div>
            <div class="sliderItem">
                <img src="images/shorts-product1.jpg" alt="shorts" class="sliderImg">
                <div class="sliderBg"></div>
                <h1 class="sliderTitle"><span style="color:#FDD20EFF">STEP UP</span></br> WITH</br> <span style="color:#FF0000"> APEX</span></h1>
<!--                <h2 class="sliderPrice">$149</h2>
-->                <a href="product-shorts.php">
                    <button class="buyButton">BUY NOW!</button>
                </a>
            </div>
            <div class="sliderItem">
                <img src="images/gymgears_product1.png" alt="gear" class="sliderImg">
                <div class="sliderBg"></div>
                <h1 class="sliderTitle">#MADE<span style="color:#FF0000">WITH</span>MORE</h1>
<!--                <h2 class="sliderPrice">$109</h2>
-->                <a href="product-gymgears.php">
                    <button class="buyButton">BUY NOW!</button>
                </a>
            </div>
            <div class="sliderItem">
                <img src="images/supplements-product1.png" alt="supplement"class="sliderImg">
                <div class="sliderBg"></div>
                <h1 class="sliderTitle"><span style="color:#06BB00">HULK</span></br> GROWTH</br> SEASON</h1>
<!--                <h2 class="sliderPrice">$129</h2>
-->                <a href="product-supplements.php">
                    <button class="buyButton">BUY NOW!</button>
                </a>
            </div>
        </div>
    </div>
   
    <div class="features">
        <div class="feature">
            <img src="images/freeshipping_icon.png" alt="free shipping" class="featureIcon">
            <span class="featureTitle">FREE SHIPPING</span>
            <span class="featureDesc">Free worldwide shipping on all orders.</span>
        </div>
        <div class="feature">
            <img class="featureIcon" src="images/returnbox_icon.png" alt="return box">
            <span class="featureTitle">30 DAYS RETURN</span>
            <span class="featureDesc">No question return and easy refund in 14 days.</span>
        </div>
        <div class="feature">
            <img class="featureIcon" src="images/giftcard_icon.png" alt="gift card">
            <span class="featureTitle">GIFT CARDS</span>
            <span class="featureDesc">Buy gift cards and use coupon codes easily.</span>
        </div>
        <div class="feature">
            <img class="featureIcon" src="images/contact_icon.png" alt="contact us">
            <span class="featureTitle">CONTACT US!</span>
            <span class="featureDesc">Keep in touch via email and support system.</span>
        </div>
    </div>
    <div class="gallery">
        <div class="galleryItem">
            <h1 class="galleryTitle">Be Yourself!</h1>
            <img src="images/galleryimg_1.jpg"
                alt="shirt showcase" class="galleryImg">
        </div>
        <div class="galleryItem">
            <img src="images/galleryimg_2.jpg"
                alt="belt showcase" class="galleryImg">
            <h1 class="galleryTitle">This is the First Day of Your New Life</h1>
        </div>
        <div class="galleryItem">
            <h1 class="galleryTitle">Just Do it!</h1>
            <img src="images/ns_item.png"
                alt="" class="galleryImg">
        </div>
    </div>
    <div class="newSeason">
        <div class="nsItem">
            <img src="images/ns_item2.png"
                alt="new shirt arrival" class="nsImg">
        </div>
        <div class="nsItem">
            <h3 class="nsTitleSm">WINTER NEW ARRIVALS</h3>
            <h1 class="nsTitle">New Season</h1>
            <h1 class="nsTitle">New Collection</h1>
            <a href="#nav">
                <button class="nsButton">CHOOSE YOUR STYLE</button>
            </a>
        </div>
        <div class="nsItem">
            <img src="images/ns_item3.png"
                alt="new wrist straps arrival" class="nsImg">
        </div>
    </div>
    <footer>
        <div class="footerLeft">
            <div class="footerMenu">
                <h1 class="fMenuTitle">About Us</h1>
                <ul class="fList">
                    <li class="fListItem">
                        <a href="about.php" style="text-decoration: none">Company</a></li>
                    <li class="fListItem">Contact</li>
                    <li class="fListItem">Careers</li>
                    <li class="fListItem">Affiliates</li>
                    <li class="fListItem">Stores</li>
                </ul>
            </div>
            <div class="footerMenu">
                <h1 class="fMenuTitle">Useful Links</h1>
                <ul class="fList">
                    <li class="fListItem">Support</li>
                    <li class="fListItem">Refund</li>
                    <li class="fListItem">FAQ</li>
                    <li class="fListItem">Feedback</li>
                    <li class="fListItem">Stories</li>
                </ul>
            </div>
            <div class="footerMenu">
                <h1 class="fMenuTitle">Products</h1>
                <ul class="fList">
                    <li class="fListItem">
                        <a href="product-shirt.php">Shirt</a></li>
                    <li class="fListItem">
                        <a href="product-shorts.php">Short</a></li>
                    <li class="fListItem">
                        <a href="product-gymgears.php">Gym Gears</a></li>
                    <li class="fListItem">
                        <a href="product-supplements.php">Supplements</a></li>
<!--                    <li class="fListItem">Hippie</li>-->
                </ul>
            </div>
        </div>
        <div class="footerRight">
            <div class="footerRightMenu">
                <h1 class="fMenuTitle">Subscribe to our newsletter</h1>
                <div class="fMail">
                    <input type="text" placeholder="your@email.com" class="fInput">
                    <button class="fButton">Join!</button>
                </div>
            </div>
            <div class="footerRightMenu">
                <h1 class="fMenuTitle">Follow Us</h1>
                <div class="fIcons">
                    <img src="images/facebook.png" alt="" class="fIcon">
                    <img src="images/twitter.png" alt="" class="fIcon">
                    <img src="images/instagram.png" alt="" class="fIcon">
                    <img src="images/whatsapp.png" alt="" class="fIcon">
                </div>
            </div>
            <div class="footerRightMenu">
                <span class="copyright">@BiggaToday. All rights reserved. 2023.</span>
            </div>
        </div>
    </footer>
    <script src="/js/product_main.js"></script>
</body>

</html>