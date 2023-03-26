<?php 
    session_start();
?>
<!DOCTYPE html>

<html>
    <head>
        <!-- Bootstrap CSS Codes -->
        <link rel="stylesheet"
              href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
              integrity=
              "sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh"
              crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
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

        <!-- Custom JS -->
        <script defer src="js/main.js"></script>

        <title>World of Pets</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <?php
        include "nav.inc.php";
        ?>

        <main class="container">
            <h1>Member Log In</h1>
            <form action="process_login.php" method="post">
                <div class="form-group">
                    <label for="fname">Email</label>
                    <input class="form-control" type="text" id="email"
                           maxlength="45" name="email" placeholder="Enter Email" required>
                </div>
                <div class="form-group">
                    <label for="lname">Password</label>
                    <input class="form-control" type="text" id="pwd"
                           maxlength="45" name="pwd" placeholder="Enter Password" required>
                </div>
                <div class="form-group">
                    <button class="btn btn-primary" type="submit">Log In</button>
                </div>
            </form>
        </main>
        <?php
        include "footer.inc.php";
        ?>
    </body>
</html>