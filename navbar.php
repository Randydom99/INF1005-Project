<header>
    <a href="#" class="logo"><img src="images/updatedlogo3.png" alt="logo"/>BIGGA</a>
    
    <input type="checkbox" id="menu-bar">
    <label for="menu-bar">Menu</label>
    
    <nav class="navbar" style="background-color: #fff; padding-top: 0px; padding-top: 0px">
        <ul>
            <li>
                <a href="index.php" class="active">Home</a>
            </li>
            <li>
                <a href="#" class="active">Workout +</a>
                <ul>
                    <li><a href="chest.php">Chest</a></li>
                    <li><a href="arms.php">Arms</a></li>
                    <li><a href="abdominal.php">Abdominal</a></li>
                    <li><a href="back.php">Back</a></li>
                    <li><a href="leg.php">Legs</a></li>
                </ul>
            </li>
            <li>
                <a href="product_main.php" class="active">Products +</a>
                <ul>
                    <li><a href="product-shirt.php">Shirt</a></li>
                    <li><a href="product-shorts.php">Short</a></li>
                    <li><a href="product-gymgears.php">Gym Gears</a></li>
                    <li><a href="product-supplements.php">Supplement</a></li>
                </ul>
            </li>
            <li>
                <a href="about.php" class="active">About Us</a>
            </li>
            <li>
                <a href="contact.php" class="active">Contact</a>
            </li>
            
                    
            <li>
                <?php
            if ($_SESSION["loggedIn"] == true) {
                echo '<li>';
                echo '<a href="profile.php">';
                echo '<h2 class="bi bi-person-circle"></h2>';
                echo '</a>';
                echo '</li>';
            } else {
                echo '<li>';
                echo '<a href="register.php">';
                echo '<h2 class="bi bi-person-circle"></h2>';
                echo '</a>';
                echo '</li>';
            }
            ?>
                <?php 
            if ($_SESSION["loggedIn"] == true){
                echo '<li>';
                echo '<a href="cart.php">';
                echo '<h2 class="bi bi-cart"></h2>';
                echo '</a>';
                echo '</li>';
            }
            ?>
                <?php 
            if ($_SESSION["loggedIn"] == true){
                echo '<li>';
                echo '<a href="logout.php">';
                echo '<h2 class="bi bi-box-arrow-in-right"></h2>';
                echo '</a>';
                echo '</li>';
            }
            ?>
            </li> 
            
        </ul>

        
        
    </nav>
</header>