<?php 
    session_start();
?>
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
    <link rel="stylesheet" href="css/product_main.css">

    <!-- Custom JS -->
    <script defer src="js/main.js"></script>

    <title>World of Pets</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        #form {
            width: 100%;
        }
        #map {
            width: 50%;
        }
    </style>
</head>

<body>
    <?php
    include "nav.inc.php";
    ?>
    <main class="container">
        <h1>Contact Us</h1>
        <div class="row">
            <div id="form" class="col-md-6">
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
            </div>
            <div id="map" class="col-md-6">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3988.66540302967!2d103.84659831475406!3d1.3774333989953969!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31da16e96db0a1ab%3A0x3d0be54fbbd6e1cd!2sSingapore%20Institute%20of%20Technology%20(SIT%40NYP)!5e0!3m2!1sen!2ssg!4v1679672448813!5m2!1sen!2ssg" 
                        width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
    </main>
    <?php
    include "footer.inc.php";
    ?>
</body>
</html>
