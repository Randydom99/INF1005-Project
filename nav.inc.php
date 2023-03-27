<nav class="navbar navbar-expand-sm navbar-dark bg-dark">
    <!-- Logo -->
    <img style="border:none; height: 50px; width: 50px"  src="images/logo.png" alt="Logo"/></a>
<!-- Hamburger icon -->
<button class="navbar-toggler" type="button" data-toggle="collapse" 
        data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" 
        aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
</button>

<div class="navbar-collapse collapse" id="navbarTogglerDemo02">
        <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
            <li class="nav-item active">
                <a class="nav-link" href="index.php">Home<span class="sr-only">(current)</span></a></li>


            <div class="dropdown">
                <li class="nav-item"> 
                    <!-- dropdown navbar? -->
                    <a class="nav-link dropbtn">Workout</a></li>
                <div class="dropdown-content">
                    <a href="chest.php">Chest</a>
                    <a href="arms.php">Arms</a>
                    <a href="abdominal.php">Abdominal</a>
                    <a href="back.php">Back</a>
                    <a href="leg.php">Legs</a>
                </div>
            </div> 

            <div class="dropdown">
                <li class="nav-item"> 
                    <!-- dropdown navbar? -->
                    <a class="nav-link dropbtn" href="product_main.php">Products</a></li>
                <div class="dropdown-content">
                    <a href="product-shirt.php">Shirt</a>
                    <a href="product-shorts.php">Shorts</a>
                    <a href="product-gymgears.php">Gym Gears</a>
                    <a href="product-supplements.php">Supplements</a>
                </div>
            </div>   


            <li class="nav-item"> 
                <a class="nav-link" href="about.php">About us</a></li>
            <li class="nav-item">
                <a class="nav-link" href="contact.php">Contact</a></li>
        </ul>
        <ul class="navbar-nav">
            <?php
            echo '<li class="nav-item">';
                echo '<h4 class="nav-link">'.$_SESSION['fname'].'</h4>';
                echo '</li>'
            ?>
            <?php 
            if ($_SESSION["loggedIn"] == true){
                echo '<li class="nav-item">';
                echo '<a class="nav-link" href="cart.php">';
                echo '<h2 class="bi bi-cart"></h2>';
                echo '</a>';
                echo '</li>';
            }
            ?>
            <li class="nav-item">
                <a class="nav-link" href="register.php">
                    <h2 class="bi bi-person-circle"></h2>
                </a>
            </li>
            <?php 
            if ($_SESSION["loggedIn"] == true){
                echo '<li class="nav-item">';
                echo '<a class="nav-link" href="logout.php">';
                echo '<h2 class="bi bi-box-arrow-in-right"></h2>';
                echo '</a>';
                echo '</li>';
            }
            ?>
        </ul>
</div>


</nav>