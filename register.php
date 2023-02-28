<!DOCTYPE html>

<html>
    <head>
            <!-- Bootstrap CSS Codes -->
            <link rel="stylesheet"
            href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
            integrity=
                "sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh"
            crossorigin="anonymous">
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
                <h1>Member Registration</h1>
                <p>
                    For existing members, please go to the
                    <a href="login.php">Sign In page</a>.
                </p>
                <form action="process_register.php" method="post">
                    <div class="form-group">
                        <label for="fname">First Name:</label>
                        <input class="form-control" type="text" id="fname"
                               maxlength="45" name="fname" placeholder="Enter first name" required>
                    </div>
                    <div class="form-group">
                        <label for="lname">Last Name:</label>
                        <input class="form-control" type="text" id="lname"
                                maxlength="45" name="lname" placeholder="Enter last name" required>
                    </div>
                    <div class="form-group">
                        <label for="email">Email:</label>
                        <input class="form-control" type="email" id="email"
                                name="email" placeholder="Enter email" required>
                    </div>
                    <div class="form-group">
                        <label for="pwd">Password:</label>
                        <input class="form-control" type="password" id="pwd"
                                name="pwd" placeholder="Enter password" required>
                    </div>
                    <div class="form-group">
                        <label for="pwd_confirm">Confirm Password:</label>
                        <input class="form-control" type="password" id="pwd_confirm"
                                name="pwd_confirm" placeholder="Confirm password" required>
                    </div>
                    <div class="form-check">
                        <label>
                            <input type="checkbox" name="agree" required>
                            Agree to terms and conditions.
                        </label>
                    </div>
                    <div class="form-group">
                        <button class="btn btn-primary" type="submit">Submit</button>
                    </div>
                </form>
            </main>
            <?php
            include "footer.inc.php";
            ?>
        </body>
</html>