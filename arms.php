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
        
        <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/allmin.css" >
        
        
        
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
        <link rel="stylesheet" href="css/workoutpages.css">


        <!-- Custom JS -->
        <script defer src="js/main.js"></script>

        <title>Arms</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>




<body>
    <?php
        include "navbar.php";
    ?>
    
    <section style=" background: url(../images/bicep.jpg) no-repeat;
" class="workout" id="workout">      
        
        <div class="content">
            <h3>Arms</h3>
        </div>
        
    </section>
    
    <section class="video-section" id="video-section">
        
        <div class="row">
            <div class="video-text">
                <h3>
                What are the best and worse arm exercises for muscle growth?
                </h3>      
            </div>
            
            <div class="video">
                <iframe src="https://www.youtube.com/embed/i1YgFZB6alI" title="How To Build Huge Biceps: Optimal Training Explained" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>    
            </div>

        </div>
        
    </section>
    
     <?php
    include 'footer.inc.php';
    ?>
</body>


