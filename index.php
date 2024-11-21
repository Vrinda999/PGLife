<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Best PG's in <?php echo $city_name ?>| PG Life</title>

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
        <h1 class="heading">Major Cities</h1>
        <div class="row">
            <div class="city-card-container col-md">
                <div class="city-card rounded-circle">
                    <a href="property_list.php?city=Bangalore">
                        <img src="img/bangalore.png" class="city-img" />
                    </a>
                </div>
            </div>
            <div class="city-card-container col-md">
                <div class="city-card rounded-circle">
                    <a href="property_list.php?city=Chennai">
                        <img src="img/chennai.png" class="city-img" />
                    </a>
                </div>
            </div>
            <div class="city-card-container col-md">
                <div class="city-card rounded-circle">
                    <a href="property_list.php?city=Delhi">
                        <img src="img/delhi.png" class="city-img" />
                    </a>
                </div>
            </div>
            <div class="city-card-container col-md">
                <div class="city-card rounded-circle">
                    <a href="property_list.php?city=Mumbai">
                        <img src="img/mumbai.png" class="city-img" />
                    </a>
                </div>
            </div>
        </div>
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