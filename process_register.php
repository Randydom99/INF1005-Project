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
        <link href="https://fonts.googleapis.com/css?family=Nunito+Sans:400,400i,700,900&display=swap" rel="stylesheet">

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
        <link rel="stylesheet" href="css/navbar.css">
        <link rel="stylesheet" href="css/process_register.css">

        <!-- Custom JS -->
        <script defer src="js/main.js"></script>

        <title>Gym Website</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

    </head>
    
    <?php
    include "navbar.php";
    ?>
    <?php
    $email = $errorMsg = "";
    $fname = $errorMsg = "";
    $lname = $errorMsg = "";
    $pwd = $errorMsg = "";
    $pwd_confirm = $errorMsg = "";
    $user_type = $errorMsg = "";
    $success = true;

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

//Helper function that checks input for malicious or unwanted content.
    function sanitize_input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

//fname validation
    if (empty($_POST["fname"])) {
        $errorMsg .= "First Name is required.<br>";
        $success = false;
    } else {
        $fname = sanitize_name($_POST["fname"]);
        // Additional check to make sure first name is well-formed.
        if (!preg_match("/^[A-Za-z]+$/", $fname)) {
            $errorMsg .= "Invalid first name format.<br>";
            $success = false;
        }
    }
//lname validation
    if (empty($_POST["lname"])) {
        $errorMsg .= "Last Name is required.<br>";
        $success = false;
    } else {
        $lname = sanitize_name($_POST["lname"]);
        // Additional check to make sure first name is well-formed.
        if (!preg_match("/^[A-Za-z]+$/", $lname)) {
            $errorMsg .= "Invalid last name format.<br>";
            $success = false;
        }
    }

//Helper function that checks input for malicious or unwanted content.
    function sanitize_name($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    if (empty($_POST["pwd"])) {
        $errorMsg .= "Passwords are required.<br>";
        $success = false;
    }
    if (empty($_POST["pwd_confirm"])) {
        $errorMsg .= "Passwords are required.<br>";
        $success = false;
    } else {
        $pwd_confirm = ($_POST["pwd_confirm"]);
        $pwd = ($_POST["pwd"]);
        // Additional check to make sure first name is well-formed.
        if ($pwd_confirm !== $pwd) {
            $errorMsg .= "Passwords do not match.<br>";
            $success = false;
        } else {
            $pwd_hashed = password_hash($_POST["pwd"], PASSWORD_DEFAULT);
        }
    }
    $_POST["user_type"] == "user";

    if ($success) {
        echo '<body>
                    <div class="card">
                    <div style="border-radius:200px; height:200px; width:200px; background: white; margin:0 auto;">
                      <i class="checkmark">✓</i>
                    </div>
                      <h1 class="result">Success</h1> 
                      <p class="message">Registration successful!<br> Email: ' . $email.'<br>Thank you for signing up, ' . $fname, $lname;
                    '</div>
              </body>';
        echo "<form action='login.php'>";
        echo "<button class='blue-btn'>Log-in</button>";
        echo "</form>";
        echo "<br>";
        echo "<br>";
        saveMemberToDB();
    } else {
        echo '<body>
                    <div class="card">
                    <div style="border-radius:200px; height:200px; width:200px; background: #F8FAF5; margin:0 auto;">
                      <i class="crossmark">✕</i>
                    </div>
                      <h1 class="result">Unsuccessful</h1> 
                      <p class="message">The following input errors were detected:<br>' . $errorMsg .
                    '</div>
              </body>';
//        echo "<h4>The following input errors were detected:</h4>";
//        echo "<p>" . $errorMsg . "</p>";
        echo "<form action='register.php'>";
        echo "<button class='return-btn'>Return to Sign Up</button>";
        echo "</form>";
        echo "<br>";
        echo "<br>";
    }
    ?>
    <?php
    /*
     * Helper function to write the member data to the DB
     */

    function saveMemberToDB() {
        global $fname, $lname, $email, $pwd_hashed, $errorMsg, $success;
        $user_type = "user";
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
            $stmt = $conn->prepare("INSERT INTO gym_website.users (fname, lname,
        email, password, user_type) VALUES (?, ?, ?, ?, ?)");

            // Bind & execute the query statement:
            $stmt->bind_param("sssss", $fname, $lname, $email, $pwd_hashed, $user_type);
            if (!$stmt->execute()) {
                $errorMsg = "Execute failed: (" . $stmt->errno . ") " . $stmt->error;
                $success = false;
            }
            $stmt->close();
        }

        $conn->close();
    }
    ?> 

    



    <?php
    include "footer.inc.php";
    ?>
</html>