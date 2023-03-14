<!DOCTYPE html>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/Other/html.html to edit this template
-->

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
        <form action="process_contact.php" method="post">
            <div class="form-group">
                <label for="name">Name</label>
                <input class="form-control" type="text" name="name">
            </div>

            <div class="form-group">
                <label for="email">Email</label>
                <input class="form-control" type="email" name="email">
            </div>

            <div class="form-group">
                <label for="subject">Subject</label>
                <input class="form-control" type="text" name="subject">
            </div>

            <div class="form-group">
                <label for="message">Message</label>
                <textarea class="form-control" name="message" rows="10"></textarea>
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

