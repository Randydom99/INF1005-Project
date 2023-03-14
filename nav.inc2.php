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
            <li class="nav-item">
                <a class="nav-link" href="index.php#dogs">Dogs</a></li>
            <li class="nav-item">
                <a class="nav-link" href="index.php#cats">Cats</a></li>


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
                    <a class="nav-link dropbtn">Products</a></li>
                <div class="dropdown-content">
                    <a href="#">Shirt</a>
                    <a href="#">Shorts</a>
                    <a href="#">Gym Gears</a>
                    <a href="#">Supplements</a>
                </div>
            </div>   


            <li class="nav-item"> 
                <a class="nav-link" href="about.php">About us</a></li>
            <li class="nav-item">
                <a class="nav-link" href="contact.php">Contact</a></li>
        </ul>
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" href="profile.php">
                    <h2 class="bi bi-person-circle"></h2>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="login.php">
                    <h2 class="bi bi-box-arrow-in-right"></h2>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">
                    <h2 class="bi bi-cart"></h2>
                </a>
            </li>
        </ul>
</div>


</nav>