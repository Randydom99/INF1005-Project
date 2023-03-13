<!DOCTYPE html>


<html>
    <head>
        <title>World of Pets</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet"
              href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
              integrity=
              "sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh"
              crossorigin="anonymous">
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
        <script src="https://kit.fontawesome.com/51063bfe73.js" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="css/main.css">
        <link rel="stylesheet" href="css/process_register.css">
        <script defer src="js/main.js"></script>


    </head>
    <body>

        <?php
        include "nav.inc";
        ?>

        <?php
        $conn = mysqli_connect('http://35.233.140.170:3306/', 'sqldev', 'testing1', 'INF1005-LAMP');

        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $name = $_POST['name'];
            $email = $_POST['email'];
            $subject = $_POST['subject'];
            $message = $_POST['message'];
        }

        $sql = "INSERT INTO world_of_pets_contact (name, email, subject, message) VALUES ('$name', '$email', '$subject', '$message')";
        mysqli_query($conn, $sql);

        $to = 'mingyikoh01@gmail.com';
        $subject = 'New Contact Us Submission';
        $body = "Name: $name\nEmail: $email\nSubject: $subject\nMessage: $message";
        mail($to, $subject, $body);
        ?>

        <?php
        echo "<hr/>";
        echo "<h3>Thank you for contacting us!</h4>";
        echo "<h4>We will get back to you shortly, " . $name, ".<br><br>";
        echo "<hr/>";
        ?>
        <a href="index.php" type="button" class="btn btn-primary">Home</a>

        <?php
        include "footer.inc";
        ?>

    </body>
</html>