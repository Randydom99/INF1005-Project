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
        
        <!-- Custom JS -->
        <script defer src="js/main.js"></script>

        <title>World of Pets</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
    <nav id="nav">
        <div class="navTop">
            <div class="navItem">
                <img src="images/website_logo.png" width="100" height="100" alt="logo">
            </div>
            <div class="navItem">
                <div class="search">
                    <input type="text" placeholder="Search..." class="searchInput">
                    <img src="images/search_icon.png" width="20" height="20" alt="searchIcon" class="searchIcon">
                </div>
            </div>
            <div class="navItem">
                <span class="limitedOffer">For a Bigga today!</span>
            </div>
        </div>
        <div class="navBottom">
            <h3 class="menuItem">SHIRTS</h3>
            <h3 class="menuItem">SHORTS</h3>
            <h3 class="menuItem">GYM GEARS</h3>
            <h3 class="menuItem">SUPPLEMENTS</h3>
        </div>
    </nav>
    <div class="slider">
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
<!--            <div class="sliderItem">
                <img src="./img/hippie.png" alt="" class="sliderImg">
                <div class="sliderBg"></div>
                <h1 class="sliderTitle">HIPPIE</br> NEW</br> SEASON</h1>
                <h2 class="sliderPrice">$99</h2>
                <a href="#product">
                    <button class="buyButton">BUY NOW!</button>
                </a>
            </div>-->
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

<!--    <div class="product" id="product">
        <img src="/images/shirt_product2.png" alt="black shirt" class="productImg">
        <div class="productDetails">
            <h1 class="productTitle">Phantom</h1>
            <h2 class="productPrice">$199</h2>
            <p class="productDesc">Limited Edition Phantom Range</p>
            <div class="colors">
                <div class="color"></div>
                <div class="color"></div>
            </div>
            <div class="sizes">
                <div class="size">42</div>
                <div class="size">43</div>
                <div class="size">44</div>
            </div>
            <a href="cart.php"class="productButton">Buy Now!</a>
        </div>-->
<!--        <div class="payment">
            <h1 class="payTitle">Personal Information</h1>
            <label>Name and Surname</label>
            <input type="text" placeholder="John Doe" class="payInput">
            <label>Phone Number</label>
            <input type="text" placeholder="+1 234 5678" class="payInput">
            <label>Address</label>
            <input type="text" placeholder="Elton St 21 22-145" class="payInput">
            <h1 class="payTitle">Card Information</h1>
            <div class="cardIcons">
                <img src="./img/visa.png" width="40" alt="" class="cardIcon">
                <img src="./img/master.png" alt="" width="40" class="cardIcon">
            </div>
            <input type="password" class="payInput" placeholder="Card Number">
            <div class="cardInfo">
                <input type="text" placeholder="mm" class="payInput sm">
                <input type="text" placeholder="yyyy" class="payInput sm">
                <input type="text" placeholder="cvv" class="payInput sm">
            </div>
            <button class="payButton">Checkout!</button>
            <span class="close">X</span>
        </div>-->
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
            <img src="images/galleryimg_3.jpg"
                alt="" class="galleryImg">
        </div>
    </div>
    <div class="newSeason">
        <div class="nsItem">
            <img src="https://cdn.shopify.com/s/files/1/2782/7592/files/SBDSG_PHANTOM_POSE_A_480x480.jpg?v=1677342120"
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
            <img src="https://cdn.shopify.com/s/files/1/2782/7592/files/SBDSG_PHANTOM_POSE_B_480x480.jpg?v=1677342134"
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
                        <a href="product-shirt.php" style="text-decoration: none">Shirt</a></li>
                    <li class="fListItem">
                        <a href="product-shorts.php" style="text-decoration: none">Short</a></li>
                    <li class="fListItem">
                        <a href="product-gymgears.php" style="text-decoration: none">Gym Gears</a></li>
                    <li class="fListItem">
                        <a href="product-supplements.php" style="text-decoration: none">Supplements</a></li>
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