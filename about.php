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
    <link rel="stylesheet" href="css/navbar.css">

    <!-- Custom JS -->
    <script defer src="js/main.js"></script>

    <title>About Us</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body style="background-image: url('images/aboutus2.jpg');
        background-repeat:no-repeat;
        background-attachment: fixed;
        background-size:cover;
        ">
    
    <?php
    include "navbar.php";
    ?>
    
    <div class="mask" style="background-color: rgba(0, 0, 0, 0.7);">
      <div class="d-flex justify-content-center align-items-center h-100">
        <div class="text-white" >
          <h1 class="mb-3">
              <span id="first-row">
                   About 
              </span>
              <span id="second-row">
                  Us
              </span>
          </h1>

        </div>
      </div>
    </div> 
    
    <div class="container">
        <br>
        <div class="row justify-content-center">           
            <article class="col-7">
                <p style="opacity: 1;">
                We are a group of students from Singapore Institute of Technology. The purpose of this website is to
                encourage students in school to live a healthier lifestyle through the idea of working out.
                </p>
            </article>
        </div>
    </div>
            
    <?php
    include 'footer.inc.php';
    ?>
    

    
</body>



