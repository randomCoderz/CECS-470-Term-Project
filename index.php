<!--#!/usr/local/php5/bin/php-cgi-->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title>Home | Beach Launch Team</title>

    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/home-styles.css">
    <link rel="stylesheet" href="css/menu.css">
    <link rel="stylesheet" href="css/footer.css">



</head>

<body>

<div class="bg"></div>
<div class="splashTextContainer">
        <span class="splashFont">BEACH
            <br>LAUNCH</span>
    <br>
    <span class="subTitle">The best launch team ever.</span>
</div>
<a href="#features-list">
    <div id="banner-scroll-arrow"></div>
</a>

<header>
    <?php include("menu.php") ?>
</header>

<main>
    <div id="features-list">
        <h2>We are the Beach Launch Team</h2>
        <p>Beach Launch Team is a university student group at Cal State Long Beach dedicated to designing, building,
            testing,
            and launching liquid fuel rockets.</p>

        <div class="feature">
            <img alt="" src="image/rocket.svg" height="100" width="100"/>
            <p>Dignissimos ex quae quia. Hic vitae exercitationem consequatur sapiente odit sed ducimus eligendi.</p>
        </div>

        <div class="feature">
            <img alt="" src="image/settings.svg" height="100" width="100"/>
            <p>Inventore reprehenderit quidem sit illum molestiae consequatur voluptatum rerum.</p>
        </div>

        <div class="feature">
            <img alt="" src="image/flag.svg" height="100" width="100"/>
            <p>Error qui dolore earum facilis mollitia animi rerum minus. Distinctio et illo tenetur cumque enim ea
                est.</p>
        </div>


        <button onclick="window.location.href='team.php'" class="button">Learn More</button>


    </div>
</main>

<div class="full-span-feature feature-one"></div>

<main>

    <div class="clearfix">
        <br>
        <h2>History</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque non volutpat risus, vel posuere orci.
            Vivamus
            pharetra maximus justo. Morbi sodales purus a ligula iaculis ultricies. Nunc at sodales dui, sed sodales
            lacus.</p>

    <div class="time-line">
    <span class="bullet">&#149;</span>
        <div class="history-item">
            <span class="date">1999</span>
            <p>This is a paragraph of text describing the event. I will come back and put real information here, I
                promise.</p>
        </div>

        <span class="bullet">&#149;</span>
        <div class="history-item">
            <span class="date">1999</span>
            <p>This is a paragraph of text describing the event. I will come back and put real information here, I
                promise.</p>
        </div>

        <span class="bullet">&#149;</span>
        <div class="history-item">
            <span class="date">1999</span>
            <p>This is a paragraph of text describing the event. I will come back and put real information here, I
                promise.</p>
        </div>

        <span class="bullet">&#149;</span>
        <div class="history-item">
            <span class="date">1999</span>
            <p>This is a paragraph of text describing the event. I will come back and put real information here, I
                promise.</p>
        </div>

        <span class="bullet">&#149;</span>
        <div class="history-item">
            <span class="date">1999</span>
            <p>This is a paragraph of text describing the event. I will come back and put real information here, I
                promise.</p>
        </div>
    </div>
    </div>
</main>

<div class="full-span-feature feature-two"></div>

<main>

    <h2>Help us reach the next milestone!</h2>
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque non volutpat risus, vel posuere orci. Vivamus
        pharetra
        maximus justo. Morbi sodales purus a ligula iaculis ultricies. Nunc at sodales dui, sed sodales lacus.</p>
    <a href="#">
        <button class="button">Donate Today</button>
    </a>
</main>

<?php include("footer.php") ?>

<script src="js/logic.js" type="text/javascript"></script>
</body>

</html>