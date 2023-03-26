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
    <?php
    include "nav.inc2.php";
    ?>

    <?php
    authenticateUser();
    ?>
    <br>
    <main class="container">
        <?php
        $success = true;
        $fname = $lname = $email = $user_type = $pwd_hashed = $errorMsg = "";

        if (empty($_POST["email"])) {
            $errorMsg .= "Email is required.<br>";
            $success = false;
        } else {
            $email = sanitize_input($_POST["email"]);
            // Additional check to make sure e-mail address is well-formed.
            if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                $errorMsg .= "Invalid email format.<br>";
                $success = false;
            }
        }
        //pw check
        if (empty($_POST["pwd"])) {
            $errorMsg .= "Password is required.<br>";
            $success = false;
        } else {
            $pwd = sanitize_input($_POST["pwd"]);
            // Additional check to make sure e-mail address is well-formed.
            $hashed_password = password_hash($pwd, PASSWORD_DEFAULT);
        }


        authenticateUser();
        if ($success) {
            $_SESSION["loggedIn"] = true;
            $_SESSION["fname"] = $fname;
            $_SESSION["lname"] = $lname;
            $_SESSION["user_type"] = $user_type;
            echo "<h1>Login successful!</h1>";
            echo 'Welcome ' . $_SESSION['fname'] . '!';
            echo "<br>";
        } else {
            echo "<h4>Oops!<br>The following input errors were detected:</h4>";
            echo "<p>" . $errorMsg . "</p>";
            echo "<a href='login.php' class='btn btn-danger'>Return to Login</a>";
        }
        
        if ($user_type =="admin") {
            echo "<a href='adminpage.php' class='btn btn-success'>Go to Admin Page</a>";
        } else {
            echo "<a href='index.php' class='btn btn-success'>Return Home</a>";
        }
        //Helper function that checks input for malicious or unwanted content.
        function sanitize_input($data) {
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
        }
        ?>    
        <?php
        /*
         * Helper function to authenticate the login.
         */

        function authenticateUser() {
            global $fname, $lname, $email, $user_type, $pwd_hashed, $errorMsg, $success;

            // Create database connection.
            $config = parse_ini_file('../../private/db-config.ini');
            $conn = new mysqli($config['servername'], $config['username'],
                    $config['password'], $config['dbname']);
            // Check connection
            if ($conn->connect_error) {
                $errorMsg = "Connection failed: " . $conn->connect_error;
                $success = false;
            } else {
                // Prepare the statement:
                $stmt = $conn->prepare("SELECT * FROM world_of_pets_members WHERE
        email=?");

                // Bind & execute the query statement:
                $stmt->bind_param("s", $email);
                $stmt->execute();
                $result = $stmt->get_result();
                if ($result->num_rows > 0) {
                    // Note that email field is unique, so should only have
                    // one row in the result set.
                    $row = $result->fetch_assoc();
                    $fname = $row["fname"];
                    $lname = $row["lname"];
                    $pwd_hashed = $row["password"];
                    $user_type = $row["user_type"];
                    // Check if the password matches:
                    if (!password_verify($_POST["pwd"], $pwd_hashed)) {
                        // Don't be too specific with the error message - hackers don't
                        // need to know which one they got right or wrong. :)
                        $errorMsg = "Email not found or password doesn't match...";
                        $success = false;
                    }
                    }
                else {
                    $errorMsg = "Invalid email or password.";
                    $success = false;
                }
                // Close the prepared statement and the database connection
                $stmt->close();
                $conn->close();
            }
        }
        ?>


        <?php
        include "footer.inc.php";
        ?>
</html>
