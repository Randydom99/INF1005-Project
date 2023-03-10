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

    <!--        hi-->

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


    <div 
        style="width: 1440px; height: 1573px; position: relative; overflow: hidden;"
        >

        <img id="background-image"
             src="images/workout.jpg"/>

        <div id="embedded-video">
            <iframe width="705" height="429" src="https://www.youtube.com/embed/RDWyqnGhmWY" title="The Best Workout Split for MAXIMUM Muscle Gains" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>    
        </div>

        <p style="position: absolute; left: 478px; top: 20px; font-size: 128px; font-weight: 700; text-align: center; color: #fff; line-height: 1">
            <span style="font-size: 50px; font-weight: 700; text-align: center; color: #fff;"> Workout Routines <br> and <br> Exercises </span>
        </p>

        <div style="width: 345px; height: 439px; position: absolute; left: 187px; top: 735px; border-radius: 50px; background: #000; border-width: 1px; border-color: #000; box-shadow: 0px 4px 4px 0 rgba(0,0,0,0.25);"
             ></div>

        <p id="text-beside-video">
            What are the best workout routines for muscle growth?
        </p>

        <p id="pdf-download">
            <button onclick="location.href = 'workoutPDFs/6 day workout routine.pdf';">Download PDF</button>
        </p>


        <div style="width: 1065px; height: 365px; position: absolute; left: 187px; top: 1207px; background: #d9d9d9;"></div>


        <div style="width: 1065px; height: 365px;">
            <div
                style="width: 1065px; height: 365px; position: absolute; left: 187.5px; top: 1207.5px; background: #000;"
                ></div>

            <img id="musclebuild-image"
                 src="images/muscle-flexing.png"
                 />

            <img id="squat-image"
                 src="images/squats.png"
                 />

            <img id="yoga-image"
                 src="images/yoga.png"
                 />

            <img id="cardio-image"
                 src="images/heart-with-pulse.png"
                 />

<!--    <svg id="rectangle-section1"
  width="2"
  height="194"
  viewBox="0 0 2 194"
  fill="none"
  xmlns="http://www.w3.org/2000/svg"
  style="position: absolute; left: 454.16px; top: 1419.09px;"
  preserveAspectRatio="none"
>
    <line x1="1.16284" y1="193.586" x2="1.16284" y2="0.902252" stroke="white"></line>
    
</svg
>

<svg id="rectangle-section2"
  width="1"
  height="194"
  viewBox="0 0 1 194"
  fill="none"
  xmlns="http://www.w3.org/2000/svg"
  style="position: absolute; left: 721.5px; top: 1419.09px;"
  preserveAspectRatio="none"
>
    <line x1="0.5" y1="193.586" x2="0.5" y2="0.902252" stroke="white"></line>
</svg>

<svg id="rectangle-section3"
  width="1"
  height="193"
  viewBox="0 0 1 193"
  fill="none"
  xmlns="http://www.w3.org/2000/svg"
  style="position: absolute; left: 988.5px; top: 1419.42px;"
  preserveAspectRatio="none"
>
  <line x1="0.5" y1="192.918" x2="0.5" y2="0.235077" stroke="white"></line>
</svg>-->

            <p id="cardio-header">
                CARDIO
            </p>

            <p id="yoga-header">
                YOGA
            </p>

            <p id="musclebuild-header">
                BUILD MUSCLE
            </p>

            <p id="weightloss-header">
                WEIGHT LOSS
            </p>

            <p id="cardio">
                <span id="cardio-description">
                    Reduce stress, Increase energy and feel Happy and Healthy
                </span
                ><br />
            </p>


            <p id="yoga">
                <span id="yoga-description">
                    Reduce stress, Increase energy and feel Happy and Healthy
                </span>
                <br />
            </p>


            <p id="musclebuild">
                <span id="musclebuild-description" >
                    Reduce stress, Increase energy  and feel Happy and Healthy
                </span>
                <br />
            </p>

            <p id="weightloss">
                <span id="weightloss-description">
                    Reduce stress, Increase energy and feel Happy and Healthy
                </span>            
            </p>

        </div>
    </div>


</body>

