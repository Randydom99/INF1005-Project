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
        
        <!-- Custom JS -->
        <script defer src="js/main.js"></script>

        <title>World of Pets</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>





<body style="text-align: center; background: #423f3f;">
    
    <?php
        include "nav.inc.php";
        ?>
    
    <main class="###" style="width: 1440px; height: 1573px; position: relative; overflow: auto;">
        
        <section>
        
            <img id="background-image" src="images/Back-Workout.jpg"/>
            
              <p style="position: absolute; left: 478px; top: 134px; font-size: 128px; font-weight: 700; text-align: center; color: #fff;">
                 <span style="font-size: 128px; font-weight: 700; text-align: center; color: #fff;">Back <br> Workout </span>
                </p>
            
        </section>
        
        
        <section>
  
            <div id="embedded-video">
                <iframe width="709" height="429" src="https://www.youtube.com/embed/spKGN0XzErU" title="The Ultimate PULL Workout For Muscle Growth [Back, Biceps, Rear Delts] (2023)" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
            </div>
            
        </section>
  
        <section>
  
            <div style="width: 345px; height: 439px; position: absolute; left: 187px; top: 735px; border-radius: 50px; background: #000; border-width: 1px; border-color: #000; box-shadow: 0px 4px 4px 0 rgba(0,0,0,0.25);">
                
            </div>
  
            <p id="text-beside-video">
                What are the best and worse Back exercises for muscle growth?
            </p>
  
        </section>
  
        <section style="width: 1065px; height: 365px;">
            
            <div
              style="width: 1065px; height: 365px; position: absolute; left: 187.5px; top: 1207.5px; background: #000;"
            ></div>
            
            
            <article>
                
                <figure>
                    <img id="musclebuild-image" src="images/muscle-flexing.png"/>
                    <figcaption style=" width: 92px; height: 51.63px; position: absolute; left: 801px; top: 1382.13px; font-size: 20px; font-weight: 600; text-align: left; color: #fff;">
                        BUILD MUSCLE
                    </figcaption>
                </figure>
                
                <p id="musclebuild">
                    <span id="musclebuild-description" >
                        Reduce stress, Increase energy  and feel Happy and Healthy
                    </span>
                </p>
                
            </article>
            
            
            <article>
               
                <figure>

                    <img id="squat-image" src="images/squats.png"/>
                    <figcaption style="    width: 88px; height: 51.63px; position: absolute; left: 1078px; top: 1385.16px; font-size: 20px; font-weight: 600; text-align: left; color: #fff;" >
                        WEIGHT LOSS
                    </figcaption>

                </figure>
                
                <p id="weightloss">
                    <span id="weightloss-description">
                      Reduce stress, Increase energy and feel Happy and Healthy
                    </span>            
                </p>
                
            </article>
            
            
            <article>
            
                <figure>

                    <img id="yoga-image" src="images/yoga.png"/>
                    <figcaption style="width: 64px; height: 20.25px; position: absolute; left: 556px; top: 1401.36px; font-size: 20px; font-weight: 600; text-align: left; color: #fff;">              
                        YOGA
                    </figcaption>

                </figure>
                
                 
                <p id="yoga">
                  <span id="yoga-description">
                      Reduce stress, Increase energy and feel Happy and Healthy
                  </span>
                </p>
                
            </article>
            
            
            <article>

                <figure>

                    <img id="cardio-image" src="images/heart-with-pulse.png"/>
                    <figcaption style="width: 84px; height: 24.3px; position: absolute; left: 270px; top: 1393.26px; font-size: 20px; font-weight: 600; text-align: left; color: #fff;">
                        CARDIO
                    </figcaption>

                </figure>
                
                <p id="cardio">
                    <span id="cardio-description">
                  Reduce stress, Increase energy and feel Happy and Healthy
                    </span>
                </p>
                
            </article>

    
        </section>
    </main>
    
    
</body>
