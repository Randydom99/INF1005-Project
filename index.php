<!DOCTYPE html>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/Other/html.html to edit this template
-->
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

        <title>World of Petsssss</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>

    <!-- All content should be in body -->
    <body>
        <?php
        include "nav.inc.php";
        ?>

        <!-- Header -->
        <header class="jumbotron text-center">
            <h1 class="display-4">Welcome to Sleeper Builds</h1>
            <h2>Home of Gymrats</h2>
        </header>
        <main class="container">
            <section id="bodybuilding">
                <h2>All About Bodybuilding!</h2>
                <div class="row">
                    <article class="col-sm">
                        <h3>Arnold Schwarzenegger</h3>
                        <figure>

                            <img class="img-thumbnail" src="images/Arnold.jpg"
                                 title="View larger image..."/>

                            <figcaption>Arnold Schwarzenegger</figcaption>
                        </figure>
                        <p>
                            Arnold Schwarzenegger has been crowned 7x Mr Olympia, the most
                            prestigious bodybuilding competition in the world.
                        </p>
                    </article>
                    <article class="col-sm">
                        <h3>Chris Bumstead</h3>
                        <figure>

                            <img class="img-thumbnail" src="images/cbum.jpg" alt="CBum"
                                 title="View larger image..."/>

                            <figcaption>Chris Bumstead</figcaption>
                        </figure>
                        <p>
                            Christopher Adam Bumstead is a Canadian IFBB professional bodybuilder. 
                            Bumstead is the reigning Mr. Olympia Classic Physique winner, 
                            having won the competition in 2019, 2020, 2021 and 2022. 
                            He was also the runner-up in 2017 and 2018. 
                            He is often referred to by his nickname Cbum
                        </p>
                    </article>
                </div>
            </section>
            <section id="powerlifting">
                <h2>All About Powerlifting!</h2>
                <div class="row">
                    <article class="col-sm">
                        <h3>Tabby</h3>
                        <figure>

                            <img class="img-thumbnail" src="images/tabby_small.jpg" alt="Tabby"
                                 title="View larger image..."/>

                            <figcaption>Tabby Cat</figcaption>
                        </figure>
                        <p>
                            A Tabby is any domestic cat with an 'M' on its forehead,
                            stripes by its eyes and across its cheeks.
                        </p>
                    </article>
                    <article class="col-sm">
                        <h3>Calico</h3>
                        <figure>

                            <img class="img-thumbnail" src="images/calico_small.jpg" alt="Calico"
                                 title="View larger image..."/>

                            <figcaption>Calico Cat</figcaption>
                        </figure>
                        <p>
                            A Calico cat is a domestic cat with a coat that is typically
                            25% to 75% white and has large orange and black patches.
                        </p>
                    </article>
                </div>
            </section>
        </main>
        <!-- Can only have 1 main tag per page -->

    </body>
    <?php
    include "footer.inc.php";
    ?>
</html>