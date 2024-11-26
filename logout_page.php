<p?php session_start(); require "includes/database_connect.php" ; ?>

    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>PG Life</title>

        <?php
        include "includes/head_links.php"
            ?>

        <link href="css/index.css" rel="stylesheet" />
    </head>

    <body>
        <?php
        include "includes/header.php";
        ?>

        <div id="loading">
        </div>

        <div class="banner-container">
            <h2 class="white pb-3">Happiness per Square Foot</h2>

            <form id="search-form" method="GET" action="property_list.php">
                <div class=" input-group city-search">
                    <input type="text" class="form-control input-city" id='city' name='city'
                        placeholder="Enter your city to search for PGs" />
                    <div class="input-group-append">
                        <button type="submit" class="btn btn-secondary">
                            <i class="fa fa-search"></i>
                        </button>
                    </div>
                </div>
            </form>
        </div>

        <div class="page-container">
            <center>
                <h1 class="heading">Session Expired. Pls Log in Again!</h1>
                <h3>
                    <a class="heading" href="index.php">Home</a>
                </h3>
                <h3>
                    <a href="#" data-dismiss="modal" data-toggle="modal" data-target="#login-modal">Login</a>
                </h3>
                <h3>
                    <a href="#" data-dismiss="modal" data-toggle="modal" data-target="#signup-modal">Sign Up</a>
                </h3>
            </center>
        </div>

        <?php
        include "includes/signup_modal.php";
        include "includes/login_modal.php";
        include "includes/footer.php";
        ?>
        <script type="text/javascript" src="js/jquery.js"></script>
        <script type="text/javascript" src="js/bootstrap.min.js"></script>
    </body>

    </html>