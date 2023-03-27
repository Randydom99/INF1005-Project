    <?php
session_start();
?>
<!DOCTYPE html>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/Other/html.html to edit this template
-->
<html>

    <head>
        <!-- Bootstrap CSS Codes -->
        <link rel="stylesheet"
              href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
              integrity=
              "sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh"
              crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css">

        <link rel="stylesheet" href="style.css" type="text/css"/>

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

        <title>Gym to Train Your Fitness and Mind</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>

    <!-- All content should be in body -->
    <body>
        
        <?php
        include "nav.inc.php";
        ?>
        
        <section class="home">
            <video autoplay muted loop id="myVideo">
             <source src="videos/homepage.mp4" type="video/mp4">
           </video>
            
            <div class="content">
                <h1>Inspiring.<br><span>Gym</span></h1>
                <p>Our website is designed to motivate and empower you on your fitness journey. As soon as you land on our homepage, you'll be greeted with stunning visuals of people working out, achieving their goals, and living their best lives.
Our website is user-friendly and easy to navigate, with clear sections for different aspects of our gym. You can learn about our gym's history, our trainers and staff, the equipment we offer, and the various classes and programs we provide.</p>
                <a href="register.php">Register Right Now!</a>
                
<!--                <button id="myBtn" onclick="myFunction()">Pause</button>-->

            </div>
            
            <div class="media-icons">
                <a href="#"><i class="fab fa-facebook-f"></i></a>
                <a href="#"><i class="fab fa-instagram"></i></a>
                <a href="#"><i class="fab fa-twitter"></i></a>
            </div>
            
        </section>
        
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